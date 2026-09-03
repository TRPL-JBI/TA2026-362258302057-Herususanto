<?php
/**
 * Plugin Name: Webhook to n8n (Poliwangi)
 * Description: Integrasi otomatis CMS WordPress ke alur kerja n8n untuk distribusi konten media sosial secara dinamis, aman dari XSS, dan mendukung scheduled post serta pengiriman ulang.
 * Version:     1.1
 * Author:      Admin
 */

if (!defined('ABSPATH')) {
    exit;
}

// 1. MENU PENGATURAN URL WEBHOOK (DINAMIS)
add_action('admin_menu', 'poliwangi_n8n_create_menu');
function poliwangi_n8n_create_menu() {
    add_options_page(
        __('Pengaturan n8n Webhook', 'poliwangi-n8n'),
        __('n8n Webhook', 'poliwangi-n8n'),
        'manage_options',
        'poliwangi-n8n-setting',
        'poliwangi_n8n_setting_page'
    );
}

add_action('admin_init', 'poliwangi_n8n_register_settings');
function poliwangi_n8n_register_settings() {
    register_setting('poliwangi_n8n_options_group', 'poliwangi_n8n_url', array(
        'type'              => 'string',
        'sanitize_callback' => 'esc_url_raw',
        'default'           => ''
    ));
}

function poliwangi_n8n_setting_page() {
    if (!current_user_can('manage_options')) {
        return;
    }
    $saved_url = get_option('poliwangi_n8n_url', '');
    ?>
    <div class="wrap">
        <h2><?php echo esc_html__('Pengaturan n8n Webhook (Poliwangi)', 'poliwangi-n8n'); ?></h2>
        <form method="post" action="options.php">
            <?php 
                settings_fields('poliwangi_n8n_options_group'); 
                do_settings_sections('poliwangi_n8n_options_group'); 
            ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><label for="poliwangi_n8n_url"><?php echo esc_html__('URL Webhook n8n:', 'poliwangi-n8n'); ?></label></th>
                    <td>
                        <input type="url" id="poliwangi_n8n_url" name="poliwangi_n8n_url" value="<?php echo esc_attr($saved_url); ?>" class="regular-text" required placeholder="https://n8n-xxxx.my.id/webhook/..." />
                        <p class="description"><?php echo esc_html__('Masukkan Webhook Production URL dari workflow n8n Anda di sini.', 'poliwangi-n8n'); ?></p>
                    </td>
                </tr>
            </table>
            <?php submit_button(__('Simpan Pengaturan', 'poliwangi-n8n')); ?>
        </form>
    </div>
    <?php
}

// Menampilkan tombol Settings di daftar plugin
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'poliwangi_n8n_add_action_links');
function poliwangi_n8n_add_action_links($links) {
    $settings_link = '<a href="' . esc_url(admin_url('options-general.php?page=poliwangi-n8n-setting')) . '">' . esc_html__('Settings', 'poliwangi-n8n') . '</a>';
    array_unshift($links, $settings_link);
    return $links;
}

// 2. FUNGSI PENGIRIM DATA KE N8N
function poliwangi_kirim_data_ke_n8n($post_id) {
    $post_id = absint($post_id);
    $webhook_url = esc_url_raw(get_option('poliwangi_n8n_url'));
    
    if (empty($webhook_url) || !filter_var($webhook_url, FILTER_VALIDATE_URL)) {
        update_post_meta($post_id, '_n8n_webhook_status', 'Gagal: URL Webhook Tidak Valid');
        return false;
    }

    $post = get_post($post_id);
    if (!$post || $post->post_type !== 'post') {
        return false;
    }

    // Ambil URL Featured Image
    $thumbnail_id = get_post_thumbnail_id($post_id);
    $image_url = $thumbnail_id ? wp_get_attachment_image_url($thumbnail_id, 'full') : '';
    
    // Penyesuaian localhost via tunneling (Ngrok) jika diperlukan
    if (!empty($image_url) && strpos($image_url, 'localhost') !== false) {
        $image_url = str_replace('http://localhost', 'https://truce-try-gruffly.ngrok-free.dev', $image_url);
    }

    // Sanitasi dan pembersihan teks
    $clean_content = strip_shortcodes($post->post_content);
    $clean_content = wp_strip_all_tags($clean_content);
    $clean_content = trim(preg_replace('/\s+/', ' ', $clean_content)); 

    $data_payload = array(
        'post_id'      => (int) $post_id,
        'post_title'   => sanitize_text_field($post->post_title),
        'post_content' => sanitize_textarea_field($clean_content),
        'image_url'    => esc_url_raw($image_url),
        'published_at' => get_the_date('Y-m-d H:i:s', $post_id)
    );

    // Request HTTP POST dengan batas waktu tunggu (timeout) 30 detik
    $response = wp_remote_post($webhook_url, array(
        'headers'     => array('Content-Type' => 'application/json; charset=utf-8'),
        'body'        => wp_json_encode($data_payload),
        'method'      => 'POST',
        'data_format' => 'body',
        'timeout'     => 30,
        'blocking'    => true
    ));

    if (is_wp_error($response)) {
        $error_message = sanitize_text_field($response->get_error_message());
        update_post_meta($post_id, '_n8n_webhook_status', 'Gagal Koneksi: ' . substr($error_message, 0, 30));
        return false;
    }

    $response_code = absint(wp_remote_retrieve_response_code($response));
    
    if ($response_code >= 200 && $response_code < 300) {
        update_post_meta($post_id, '_n8n_webhook_status', 'Terkirim (' . current_time('H:i') . ')');
        return true;
    } else {
        $body = wp_remote_retrieve_body($response);
        $body_lower = strtolower($body);
        
        if (strpos($body_lower, 'characters') !== false || strpos($body_lower, '2196') !== false) {
            $error_text = 'Gagal: Teks terlalu panjang untuk IG';
        } elseif ($response_code === 404) {
            $error_text = 'Gagal: Webhook n8n tidak ditemukan (404)';
        } elseif (empty($image_url)) {
            $error_text = 'Gagal: Foto sampul belum diunggah dan belum bisa ke post di IG';
        } else {
            $error_text = 'Gagal: Masalah Alur AI di n8n (Hubungi IT)';
        }

        update_post_meta($post_id, '_n8n_webhook_status', sanitize_text_field($error_text));
        return false;
    }
}

// 3. DETEKSI POSTING BARU & TERJADWAL (SCHEDULED POST)
add_action('wp_after_insert_post', 'poliwangi_deteksi_publish_lengkap', 10, 4);
function poliwangi_deteksi_publish_lengkap($post_id, $post, $update, $post_before) {
    if (!$post || $post->post_type !== 'post' || $post->post_status !== 'publish') {
        return;
    }
    
    // Mencegah trigger ganda jika postingan hanya diedit biasa setelah publish
    if ($post_before && $post_before->post_status === 'publish') {
        return;
    }

    poliwangi_kirim_data_ke_n8n($post_id);
}

// 4. TAMPILAN KOLOM STATUS & FITUR RESEND (ANTI-CSRF & XSS)
add_filter('manage_post_posts_columns', 'poliwangi_n8n_add_column');
function poliwangi_n8n_add_column($columns) {
    $columns['n8n_status'] = esc_html__('Status n8n', 'poliwangi-n8n');
    return $columns;
}

add_action('manage_post_posts_custom_column', 'poliwangi_n8n_display_column', 10, 2);
function poliwangi_n8n_display_column($column, $post_id) {
    if ($column === 'n8n_status') {
        $post_id = absint($post_id);
        $status  = get_post_meta($post_id, '_n8n_webhook_status', true);
        if (!$status) {
            $status = 'Belum Dikirim';
        }

        $status_text = sanitize_text_field($status);
        $color = (strpos($status_text, 'Terkirim') !== false) ? '#28a745' : '#dc3545';
        if ($status_text === 'Belum Dikirim') {
            $color = '#6c757d';
        }

        echo '<strong style="color: ' . esc_attr($color) . ';">' . esc_html($status_text) . '</strong><br>';

        $resend_url = wp_nonce_url(
            admin_url('admin-post.php?action=poliwangi_resend_n8n&post_id=' . $post_id),
            'poliwangi_resend_action_' . $post_id
        );
        echo '<a href="' . esc_url($resend_url) . '" class="button button-small" style="margin-top: 5px;">' . esc_html__('Kirim Ulang', 'poliwangi-n8n') . '</a>';
    }
}

// Handler aksi kirim ulang dengan proteksi hak akses
add_action('admin_post_poliwangi_resend_n8n', 'poliwangi_handle_resend_n8n');
function poliwangi_handle_resend_n8n() {
    if (!isset($_GET['post_id']) || !current_user_can('edit_posts')) {
        wp_die(esc_html__('Akses ditolak: Anda tidak memiliki izin.', 'poliwangi-n8n'));
    }

    $post_id = absint($_GET['post_id']);
    check_admin_referer('poliwangi_resend_action_' . $post_id);

    poliwangi_kirim_data_ke_n8n($post_id);

    wp_safe_redirect(admin_url('edit.php'));
    exit;
}