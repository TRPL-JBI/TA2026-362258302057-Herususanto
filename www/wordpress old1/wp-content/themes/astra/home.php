<?php
/**
 * Main Posts Archive / Berita Page Template for Poliwangi Theme
 *
 * @package Astra
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header('poliwangi');
?>

<!-- SCOPED BERITA CONTENT -->
<style>
.poliwangi-berita-wrapper {
    font-family: 'Poppins', sans-serif;
    color: #333333;
    line-height: 1.6;
    background-color: #ffffff;
    overflow-x: hidden;
}

.poliwangi-berita-wrapper h1,
.poliwangi-berita-wrapper h2,
.poliwangi-berita-wrapper h3,
.poliwangi-berita-wrapper h4,
.poliwangi-berita-wrapper h5,
.poliwangi-berita-wrapper h6,
.poliwangi-berita-wrapper p,
.poliwangi-berita-wrapper span,
.poliwangi-berita-wrapper a,
.poliwangi-berita-wrapper div {
    font-family: 'Poppins', sans-serif !important;
}

.poliwangi-berita-wrapper *, 
.poliwangi-berita-wrapper *::before, 
.poliwangi-berita-wrapper *::after {
    box-sizing: border-box;
}

.poliwangi-container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Hero Header Banner */
.berita-hero {
    background: linear-gradient(180deg, rgba(10, 34, 89, 0.92) 0%, rgba(13, 44, 110, 0.96) 100%),
                url('/wp-content/themes/astra/assets/images/gedung.png') center/cover no-repeat;
    padding: 70px 0;
    text-align: center;
    color: #ffffff;
}

.berita-hero-title {
    font-size: 3.5rem;
    font-weight: 900;
    color: #ffc107;
    letter-spacing: 2px;
    margin: 0;
    text-transform: uppercase;
}

.berita-main-content {
    padding: 50px 0 80px;
}

.featured-news-card {
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    margin-bottom: 60px;
    border: 1px solid #e2e8f0;
}

.featured-news-img {
    width: 100%;
    height: 420px;
    object-fit: cover;
    display: block;
}

.featured-news-body {
    background-color: #0a2259;
    color: #ffffff;
    padding: 32px 40px;
}

.badge-tag-yellow {
    display: inline-block;
    color: #ffc107;
    font-weight: 700;
    font-size: 1rem;
    margin-bottom: 10px;
}

.badge-tag-pill {
    display: inline-block;
    background: #ffc107;
    color: #0a2259;
    font-weight: 800;
    font-size: 0.75rem;
    padding: 3px 12px;
    border-radius: 20px;
    margin-bottom: 12px;
    text-transform: uppercase;
}

.featured-news-title {
    font-size: 1.8rem;
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 16px;
    line-height: 1.35;
}

.featured-news-link {
    color: #ffffff;
    font-weight: 600;
    text-decoration: none;
    font-size: 0.95rem;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.featured-news-link:hover {
    color: #ffc107;
}

.section-title-wrapper {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 30px;
}

.section-title-text {
    font-size: 2rem;
    font-weight: 800;
    color: #0c2b64;
    margin: 0;
}

.section-title-line {
    width: 90px;
    height: 4px;
    background-color: #ffc107;
    border-radius: 2px;
}

.horizontal-news-card {
    background: #ffffff;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid #e2e8f0;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
    display: grid;
    grid-template-columns: 360px 1fr;
    margin-bottom: 40px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.horizontal-news-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.1);
}

.horizontal-news-img {
    width: 100%;
    height: 100%;
    min-height: 220px;
    object-fit: cover;
}

.horizontal-news-body {
    padding: 28px 32px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.horizontal-news-title {
    font-size: 1.35rem;
    font-weight: 800;
    color: #1e293b;
    margin: 0 0 12px;
    line-height: 1.35;
}

.horizontal-news-excerpt {
    color: #64748b;
    font-size: 0.92rem;
    line-height: 1.6;
    margin: 0 0 16px;
}

.horizontal-news-date {
    color: #94a3b8;
    font-size: 0.85rem;
    font-weight: 500;
}

.berita-cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
}

.berita-card {
    position: relative;
    height: 420px;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-decoration: none;
}

.berita-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 32px rgba(10, 34, 89, 0.25);
}

.berita-card-bg-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
}

.berita-card-overlay {
    position: relative;
    z-index: 2;
    background: linear-gradient(180deg, rgba(10, 34, 89, 0.78) 0%, rgba(10, 34, 89, 0.96) 100%);
    padding: 24px 20px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.berita-badge-white {
    background: #ffffff;
    color: #f59e0b;
    font-weight: 800;
    font-size: 0.88rem;
    padding: 6px 18px;
    border-radius: 20px;
    margin-bottom: 12px;
    display: inline-block;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
}

.berita-badge-blue {
    background: #ffffff;
    color: #2563eb;
    font-weight: 800;
    font-size: 0.88rem;
    padding: 6px 18px;
    border-radius: 20px;
    margin-bottom: 12px;
    display: inline-block;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
}

.berita-card-title {
    color: #ffffff;
    font-size: 1.15rem;
    font-weight: 800;
    line-height: 1.38;
    margin: 0;
}

@media (max-width: 992px) {
    .horizontal-news-card { grid-template-columns: 1fr; }
    .berita-cards-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 640px) {
    .berita-hero-title { font-size: 2.5rem; }
    .berita-cards-grid { grid-template-columns: 1fr; }
    .featured-news-body { padding: 20px; }
    .featured-news-title { font-size: 1.3rem; }
}
</style>

<div class="poliwangi-berita-wrapper">
    <!-- HERO BANNER BERITA -->
    <section class="berita-hero">
        <div class="poliwangi-container">
            <h1 class="berita-hero-title">BERITA</h1>
        </div>
    </section>

    <!-- MAIN BERITA CONTENT -->
    <main class="berita-main-content">
        <div class="poliwangi-container">
            
            <?php
            $all_news = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 8,
                'post_status'    => 'publish'
            ));

            if ( $all_news->have_posts() ) :
                $posts = $all_news->posts;
                
                // 1. Featured Big News Card (Top 1 Post)
                $feat_post  = $posts[0];
                $feat_link  = get_permalink($feat_post->ID);
                $feat_title = get_the_title($feat_post->ID);
                $feat_thumb = get_the_post_thumbnail_url($feat_post->ID, 'full');
                if ( ! $feat_thumb ) {
                    $feat_thumb = 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1200&q=80';
                }
                $feat_cats     = get_the_category($feat_post->ID);
                $feat_cat_name = ! empty($feat_cats) ? $feat_cats[0]->name : 'Prestasi';
                ?>

                <!-- FEATURED BIG NEWS CARD (FROM DATABASE) -->
                <a href="<?php echo esc_url($feat_link); ?>" class="featured-news-card" style="display: block; text-decoration: none;">
                    <img src="<?php echo esc_url($feat_thumb); ?>" alt="<?php echo esc_attr($feat_title); ?>" class="featured-news-img">
                    <div class="featured-news-body">
                        <div class="badge-tag-yellow"><?php echo esc_html($feat_cat_name); ?></div>
                        <h2 class="featured-news-title"><?php echo esc_html($feat_title); ?></h2>
                        <span class="featured-news-link">Lihat Selengkapnya &rsaquo;</span>
                    </div>
                </a>

                <!-- BERITA TERBARU SECTION TITLE -->
                <div class="section-title-wrapper">
                    <h2 class="section-title-text">Berita Terbaru</h2>
                    <div class="section-title-line"></div>
                </div>

                <?php
                // 2. Horizontal Highlight News Card (Post #2)
                if ( isset($posts[1]) ) :
                    $high_post   = $posts[1];
                    $high_link   = get_permalink($high_post->ID);
                    $high_title  = get_the_title($high_post->ID);
                    $high_thumb  = get_the_post_thumbnail_url($high_post->ID, 'full');
                    if ( ! $high_thumb ) {
                        $high_thumb = 'https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=800&q=80';
                    }
                    $high_excerpt = get_the_excerpt($high_post->ID);
                    if ( ! $high_excerpt ) {
                        $high_excerpt = wp_trim_words(strip_tags($high_post->post_content), 28);
                    }
                    ?>
                    <!-- HORIZONTAL HIGHLIGHT CARD (FROM DATABASE) -->
                    <a href="<?php echo esc_url($high_link); ?>" class="horizontal-news-card" style="text-decoration: none;">
                        <img src="<?php echo esc_url($high_thumb); ?>" alt="<?php echo esc_attr($high_title); ?>" class="horizontal-news-img">
                        <div class="horizontal-news-body">
                            <h3 class="horizontal-news-title"><?php echo esc_html($high_title); ?></h3>
                            <p class="horizontal-news-excerpt"><?php echo esc_html($high_excerpt); ?></p>
                            <div class="horizontal-news-date"><?php echo get_the_date('d F Y, H.i', $high_post->ID); ?></div>
                        </div>
                    </a>
                <?php endif; ?>

                <!-- GRID OF NEWS CARDS FROM DATABASE (Post #3 onwards) -->
                <div class="berita-cards-grid">
                    <?php
                    $grid_start = isset($posts[1]) ? 2 : 1;
                    for ( $i = $grid_start; $i < count($posts); $i++ ) :
                        $g_post    = $posts[$i];
                        $g_link    = get_permalink($g_post->ID);
                        $g_title   = get_the_title($g_post->ID);
                        $g_thumb   = get_the_post_thumbnail_url($g_post->ID, 'full');
                        if ( ! $g_thumb ) {
                            $g_thumb = 'https://images.unsplash.com/photo-1595152772835-219674b2a8a6?auto=format&fit=crop&w=600&q=80';
                        }
                        $g_cats      = get_the_category($g_post->ID);
                        $g_cat_name  = ! empty($g_cats) ? $g_cats[0]->name : 'Informasi';
                        $g_badge_cls = ( strtolower($g_cat_name) === 'prestasi' ) ? 'berita-badge-blue' : 'berita-badge-white';
                        ?>
                        <a href="<?php echo esc_url($g_link); ?>" class="berita-card">
                            <img src="<?php echo esc_url($g_thumb); ?>" alt="<?php echo esc_attr($g_title); ?>" class="berita-card-bg-img">
                            <div class="berita-card-overlay">
                                <span class="<?php echo $g_badge_cls; ?>"><?php echo esc_html($g_cat_name); ?></span>
                                <h4 class="berita-card-title"><?php echo esc_html($g_title); ?></h4>
                            </div>
                        </a>
                    <?php endfor; ?>
                </div>

            <?php wp_reset_postdata(); else : ?>

                <!-- FALLBACK DEMO CARDS (If database has 0 published posts) -->
                <a href="/detail-berita" class="featured-news-card" style="display: block; text-decoration: none;">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1200&q=80" alt="Featured News" class="featured-news-img">
                    <div class="featured-news-body">
                        <div class="badge-tag-yellow">Prestasi</div>
                        <h2 class="featured-news-title">
                            Tim Poliwangi Raih Prestasi pada Kejuaraan Panahan Stage VII Kabupaten Banyuwangi
                        </h2>
                        <span class="featured-news-link">Lihat Selengkapnya &rsaquo;</span>
                    </div>
                </a>

                <div class="section-title-wrapper">
                    <h2 class="section-title-text">Berita Terbaru</h2>
                    <div class="section-title-line"></div>
                </div>

                <a href="/detail-berita" class="horizontal-news-card" style="text-decoration: none;">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=800&q=80" alt="Highlight News" class="horizontal-news-img">
                    <div class="horizontal-news-body">
                        <h3 class="horizontal-news-title">
                            Poliwangi Jajaki Kolaborasi Internasional Bersama PNM dan UiTM Malaysia
                        </h3>
                        <p class="horizontal-news-excerpt">
                            Politeknik Negeri Banyuwangi (Poliwangi) menerima kunjungan dari Politeknik Negeri Madiun (PNM) dan Universiti Teknologi MARA (UiTM) Malaysia dalam rangka penjajakan kerja sama di bidang pendidikan, penelitian, dan pengabdian kepada masyarakat.
                        </p>
                        <div class="horizontal-news-date">19 Februari 2026, 15.05</div>
                    </div>
                </a>

                <div class="berita-cards-grid">
                    <a href="/detail-berita" class="berita-card">
                        <img src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?auto=format&fit=crop&w=600&q=80" alt="Berita 1" class="berita-card-bg-img">
                        <div class="berita-card-overlay">
                            <span class="berita-badge-white">Informasi</span>
                            <h4 class="berita-card-title">
                                Siapkan Beasiswa Khusus Mahasiswa Jurusan Pertanian Poliwangi Dukung Program Ketahanan Pangan Nasional
                            </h4>
                        </div>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </main>
</div>

<?php
get_footer('poliwangi');
