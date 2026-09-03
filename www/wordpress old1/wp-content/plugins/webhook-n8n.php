<?php
/**
 * Plugin Name: Webhook to n8n (Poliwangi)
 * Description: Mengirim data otomatis ke n8n saat artikel diterbitkan (Fixed for Gutenberg Timing).
 * Version: 1.1
 * Author: Admin
 */

// KUNCI SOLUSINYA DI SINI: Kita pakai rest_after_insert_post agar webhook menunggu gambar selesai disimpan.
add_action( 'rest_after_insert_post', 'tembak_data_ke_n8n_webhook', 10, 3 );

function tembak_data_ke_n8n_webhook( $post, $request, $creating ) {
    
    // Pastikan statusnya publish (Terbit)
    if ( $post->post_status !== 'publish' ) return;

    // URL Webhook n8n kamu
    $webhook_url = 'https://n8n-brbfdq2bkprp.jkt5.sumopod.my.id/webhook/767135fd-cefd-432a-9d2a-0a874d9de6bf';
    
    $post_id = $post->ID;
    $image_url = get_the_post_thumbnail_url( $post_id, 'full' );

    if ( ! $image_url ) {
        $image_url = '';
    } else {
        // Pastikan URL Ngrok ini adalah yang sedang AKTIF di terminalmu sekarang!
        $image_url = str_replace('http://localhost', 'https://truce-try-gruffly.ngrok-free.dev', $image_url);
    }

    // Membersihkan konten
    $clean_content = strip_shortcodes( $post->post_content );
    $clean_content = wp_strip_all_tags( $clean_content );
    $clean_content = trim( preg_replace( '/\s+/', ' ', $clean_content ) ); 

    // Siapkan data
    $data_payload = array(
        'post_id'      => $post_id,
        'post_title'   => $post->post_title,
        'post_content' => $clean_content,
        'image_url'    => $image_url
    );

    // Tembak ke n8n
    wp_remote_post( $webhook_url, array(
        'headers'     => array('Content-Type' => 'application/json; charset=utf-8'),
        'body'        => wp_json_encode( $data_payload ),
        'method'      => 'POST',
        'data_format' => 'body',
        'blocking'    => false // Mencegah website loading terlalu lama saat klik Publish
    ));
}