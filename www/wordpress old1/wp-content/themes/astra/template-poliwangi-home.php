<?php
/**
 * Template Name: Poliwangi Homepage Design
 * Description: Custom Template for Poliwangi Homepage matching official design.
 *
 * @package Astra
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header('poliwangi');
?>

<style>
/* Aggressive Full-Width Overrides for Astra Theme Wrappers */
#content, 
.site-content, 
#content .ast-container, 
#primary, 
#main, 
article, 
.entry-content,
.ast-separate-container #primary,
.ast-separate-container #content .ast-container {
    max-width: 100% !important;
    width: 100% !important;
    padding: 0 !important;
    margin: 0 !important;
    box-shadow: none !important;
    border: none !important;
    background: transparent !important;
}

#content .ast-container {
    display: block !important;
}

/* Hide Astra default sidebar, post headers, and default Astra theme footer */
#secondary, 
.widget-area, 
.entry-header, 
.ast-single-post-title, 
.entry-title,
#colophon,
.site-footer,
.ast-small-footer,
.ast-footer-copyright-section {
    display: none !important;
}

.poliwangi-page-wrapper {
    font-family: 'Poppins', sans-serif;
    color: #333333;
    line-height: 1.6;
    background-color: #f8fafc;
    overflow-x: hidden;
}

.poliwangi-page-wrapper h1,
.poliwangi-page-wrapper h2,
.poliwangi-page-wrapper h3,
.poliwangi-page-wrapper h4,
.poliwangi-page-wrapper h5,
.poliwangi-page-wrapper h6,
.poliwangi-page-wrapper p,
.poliwangi-page-wrapper span,
.poliwangi-page-wrapper a,
.poliwangi-page-wrapper div,
.poliwangi-page-wrapper button,
.poliwangi-page-wrapper input,
.poliwangi-page-wrapper textarea,
.poliwangi-page-wrapper select,
.poliwangi-page-wrapper label {
    font-family: 'Poppins', sans-serif !important;
}

.poliwangi-page-wrapper *, .poliwangi-page-wrapper *::before, .poliwangi-page-wrapper *::after {
    box-sizing: border-box;
}

.poliwangi-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* ==========================================================================
   1. HERO SECTION
   ========================================================================== */
.poliwangi-hero {
    position: relative;
    background: linear-gradient(135deg, rgba(13, 37, 96, 0.92) 0%, rgba(20, 60, 140, 0.88) 100%),
                url('/wp-content/themes/astra/assets/images/gkt.png') center/cover no-repeat;
    color: #ffffff;
    padding: 120px 0 180px;
    text-align: left;
}

.poliwangi-hero-content {
    max-width: 750px;
}

.poliwangi-hero-title {
    font-size: 4.5rem;
    font-weight: 800;
    margin: 0 0 16px;
    line-height: 1.15;
    color: #ffffff;
}

.poliwangi-hero-title span {
    color: #ffc107; /* Bright Yellow Accent */
}

.poliwangi-hero-subtitle {
    font-size: 1.25rem;
    color: #e2e8f0;
    margin-bottom: 40px;
    max-width: 620px;
}

.poliwangi-hero-stats {
    display: flex;
    gap: 48px;
    margin-top: 30px;
}

.poliwangi-stat-item .stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: #ffc107;
    line-height: 1;
    margin-bottom: 6px;
}

.poliwangi-stat-item .stat-label {
    font-size: 0.95rem;
    color: #cbd5e1;
    font-weight: 500;
}

/* Quick Nav Cards Overlapping Hero */
.poliwangi-quick-cards {
    margin-top: -70px;
    position: relative;
    z-index: 10;
    margin-bottom: 70px;
}

.poliwangi-quick-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 24px;
}

.poliwangi-quick-card {
    background: #ffffff;
    border-radius: 12px;
    padding: 28px 24px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    display: flex;
    align-items: flex-start;
    gap: 18px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid #edf2f7;
}

.poliwangi-quick-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(13, 37, 96, 0.12);
}

.quick-icon {
    width: 52px;
    height: 52px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.quick-icon-blue { background: #eff6ff; color: #2563eb; }
.quick-icon-green { background: #ecfdf5; color: #10b981; }
.quick-icon-orange { background: #fff7ed; color: #f97316; }

.quick-content h4 {
    margin: 0 0 6px;
    font-size: 1.15rem;
    font-weight: 700;
    color: #1e293b;
}

.quick-content p {
    margin: 0 0 12px;
    font-size: 0.88rem;
    color: #64748b;
    line-height: 1.4;
}

.quick-link {
    color: #2563eb;
    font-size: 0.88rem;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 4px;
}

.quick-link:hover {
    text-decoration: underline;
}

/* ==========================================================================
   2. BERITA UTAMA SECTION
   ========================================================================== */
.poliwangi-news-section {
    padding: 40px 0 70px;
}

.section-heading-center {
    text-align: center;
    font-size: 2.2rem;
    font-weight: 800;
    color: #0c2b64;
    margin-bottom: 40px;
}

.poliwangi-news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 28px;
}

.news-card {
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
    border: 1px solid #e2e8f0;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
}

.news-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 30px rgba(0, 0, 0, 0.1);
}

.news-card-img {
    height: 220px;
    width: 100%;
    object-fit: cover;
    background-color: #cbd5e1;
}

.news-card-body {
    padding: 24px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.news-title {
    font-size: 1.05rem;
    font-weight: 700;
    color: #1e293b;
    line-height: 1.45;
    margin: 0 0 16px;
}

.news-link {
    margin-top: auto;
    color: #0c2b64;
    font-weight: 600;
    font-size: 0.9rem;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.poliwangi-news-more {
    text-align: center;
    margin-top: 40px;
}

.btn-poliwangi-outline {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 28px;
    border: 2px solid #0c2b64;
    color: #0c2b64;
    border-radius: 50px;
    font-weight: 700;
    font-size: 0.95rem;
    text-decoration: none;
    transition: all 0.3s ease;
    background: transparent;
}

.btn-poliwangi-outline:hover {
    background: #0c2b64;
    color: #ffffff;
}

/* ==========================================================================
   3. PROFIL VIDEO SECTION
   ========================================================================== */
.poliwangi-video-section {
    padding: 60px 0;
    background-color: #ffffff;
}

.poliwangi-video-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    align-items: center;
}

.video-box {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 12px 30px rgba(0,0,0,0.12);
}

.video-thumbnail {
    width: 100%;
    height: 340px;
    object-fit: cover;
    display: block;
}

.video-play-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 68px;
    height: 68px;
    background: #ff0000;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    box-shadow: 0 0 25px rgba(255, 0, 0, 0.6);
    cursor: pointer;
    transition: transform 0.3s ease;
}

.video-play-btn:hover {
    transform: translate(-50%, -50%) scale(1.1);
}

.video-overlay-text {
    position: absolute;
    top: 20px;
    left: 20px;
    background: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(4px);
    color: #ffffff;
    padding: 6px 16px;
    border-radius: 30px;
    font-weight: 700;
    font-size: 1.1rem;
}

.video-content h3 {
    font-size: 1.8rem;
    font-weight: 800;
    color: #0c2b64;
    margin: 0 0 16px;
    line-height: 1.3;
}

.video-content p {
    color: #475569;
    font-size: 0.98rem;
    line-height: 1.7;
    margin: 0;
}

/* ==========================================================================
   4. LAYANAN PUBLIK SECTION
   ========================================================================== */
.poliwangi-services-section {
    padding: 70px 0;
    background-color: #f8fafc;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.service-btn {
    background: linear-gradient(135deg, #1e40af 0%, #1e3a8a 100%);
    color: #ffffff;
    border-radius: 12px;
    padding: 24px 16px;
    text-align: center;
    text-decoration: none;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 12px;
    box-shadow: 0 6px 16px rgba(30, 64, 175, 0.2);
    transition: all 0.3s ease;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.service-btn:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(30, 64, 175, 0.35);
    background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    color: #ffffff !important;
}

.service-btn:hover .service-icon,
.service-btn:hover .service-title {
    color: #ffffff !important;
}

.service-icon {
    width: 44px;
    height: 44px;
}

.service-title {
    font-size: 0.92rem;
    font-weight: 800;
    letter-spacing: 0.5px;
}

/* ==========================================================================
   5. INTERNATIONAL PARTNERS SECTION
   ========================================================================== */
.poliwangi-partners-section {
    padding: 70px 0;
    background-color: #ffffff;
}

.section-heading-partners {
    text-align: center;
    font-size: 2.2rem;
    font-weight: 800;
    color: #0c2b64;
    margin-bottom: 40px;
}

.section-heading-partners span {
    color: #ffc107;
}

.partners-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

.partner-card {
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    padding: 30px 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #ffffff;
    height: 120px;
    transition: all 0.3s ease;
}

.partner-card:hover {
    border-color: #2563eb;
    box-shadow: 0 8px 20px rgba(37, 99, 235, 0.1);
}

.partner-logo-img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    display: block;
}

.partner-logo-text {
    font-weight: 700;
    color: #1e293b;
    font-size: 1.1rem;
    display: flex;
    align-items: center;
    gap: 10px;
}

/* ==========================================================================
   6. FAQ SECTION
   ========================================================================== */
.poliwangi-faq-section {
    background-color: #0c235b;
    color: #ffffff;
    padding: 80px 0;
}

.faq-title {
    text-align: center;
    font-size: 2.5rem;
    font-weight: 800;
    color: #ffc107;
    margin: 0 0 12px;
}

.faq-subtitle {
    text-align: center;
    color: #cbd5e1;
    max-width: 650px;
    margin: 0 auto 50px;
    font-size: 1rem;
}

.faq-accordion {
    max-width: 850px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.faq-item {
    background: #ffffff;
    border-radius: 10px;
    overflow: hidden;
    color: #1e293b;
}

.faq-question {
    padding: 20px 24px;
    font-weight: 700;
    font-size: 1.05rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    user-select: none;
}

.faq-question svg {
    transition: transform 0.3s ease;
    color: #0c235b;
}

.faq-item.active .faq-question svg {
    transform: rotate(180deg);
}

.faq-answer {
    padding: 0 24px 20px;
    color: #475569;
    font-size: 0.95rem;
    line-height: 1.6;
    display: none;
}

.faq-item.active .faq-answer {
    display: block;
}

/* ==========================================================================
   7. FOOTER SECTION
   ========================================================================== */
.poliwangi-footer {
    background-color: #061332;
    color: #94a3b8;
    padding: 70px 0 0;
    font-size: 0.9rem;
}

.footer-grid {
    display: grid;
    grid-template-columns: 1.4fr 1fr 1fr 1.2fr;
    gap: 40px;
    padding-bottom: 50px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.footer-brand-title {
    color: #ffffff;
    font-size: 1.2rem;
    font-weight: 800;
    margin: 0 0 16px;
}

.footer-brand-desc {
    line-height: 1.6;
    margin-bottom: 20px;
    color: #cbd5e1;
}

.footer-col h5 {
    color: #ffc107;
    font-size: 1.1rem;
    font-weight: 700;
    margin: 0 0 20px;
}

.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 10px;
}

.footer-links a {
    color: #cbd5e1;
    text-decoration: none;
    transition: color 0.2s ease;
}

.footer-links a:hover {
    color: #ffffff;
}

.footer-contact-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-bottom: 14px;
    color: #cbd5e1;
}

.footer-socials {
    display: flex;
    gap: 12px;
    margin-bottom: 20px;
}

.social-icon {
    width: 36px;
    height: 36px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    text-decoration: none;
    transition: background 0.3s ease;
}

.social-icon:hover {
    background: #2563eb;
}

.footer-bottom {
    padding: 24px 0;
    text-align: center;
    color: #64748b;
    font-size: 0.85rem;
}

/* Responsive adjustments */
@media (max-width: 992px) {
    .poliwangi-video-grid, .footer-grid {
        grid-template-columns: 1fr 1fr;
    }
    .services-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .partners-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 640px) {
    .poliwangi-hero-title { font-size: 2.2rem; }
    .poliwangi-hero-stats { flex-direction: column; gap: 20px; }
    .poliwangi-video-grid, .footer-grid, .services-grid, .partners-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<div class="poliwangi-page-wrapper">

    <!-- 1. HERO SECTION -->
    <section class="poliwangi-hero">
        <div class="poliwangi-container">
            <div class="poliwangi-hero-content">
                <h1 class="poliwangi-hero-title">
                    Selamat Datang di <span>Poliwangi</span>
                </h1>
                <p class="poliwangi-hero-subtitle">
                    Pendidikan Terbaik yang mempersiapkan Anda berguna atau bersaing di dunia kerja
                </p>
                
                <div class="poliwangi-hero-stats">
                    <div class="poliwangi-stat-item">
                        <div class="stat-number">19+</div>
                        <div class="stat-label">Program Studi</div>
                    </div>
                    <div class="poliwangi-stat-item">
                        <div class="stat-number">3000+</div>
                        <div class="stat-label">Mahasiswa Aktif</div>
                    </div>
                    <div class="poliwangi-stat-item">
                        <div class="stat-number">95%</div>
                        <div class="stat-label">Lulusan Terserap</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- QUICK NAV CARDS OVERLAPPING HERO -->
    <div class="poliwangi-container poliwangi-quick-cards">
        <div class="poliwangi-quick-grid">
            <div class="poliwangi-quick-card">
                <div class="quick-icon quick-icon-blue">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.684A1.761 1.761 0 013 12V8a1.761 1.761 0 012.436-1.684l.004.001 7.56 3.684a1.76 1.76 0 010 3.168l-7.56 3.684z"></path></svg>
                </div>
                <div class="quick-content">
                    <h4>Pengumuman</h4>
                    <p>Informasi terbaru seputar kegiatan dan perkuliahan</p>
                    <a href="/pengumuman" class="quick-link">Lihat Selengkapnya &rsaquo;</a>
                </div>
            </div>
            <div class="poliwangi-quick-card">
                <div class="quick-icon quick-icon-green">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <div class="quick-content">
                    <h4>Agenda Kampus</h4>
                    <p>Jadwal kegiatan penting akademik dan non-akademik</p>
                    <a href="/agenda" class="quick-link">Lihat Selengkapnya &rsaquo;</a>
                </div>
            </div>
            <div class="poliwangi-quick-card">
                <div class="quick-icon quick-icon-orange">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                </div>
                <div class="quick-content">
                    <h4>Kabar Kampus</h4>
                    <p>Berita dan prestasi mahasiswa serta dosen</p>
                    <a href="/kabar-kampus" class="quick-link">Lihat Selengkapnya &rsaquo;</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. BERITA UTAMA SECTION -->
    <section class="poliwangi-news-section">
        <div class="poliwangi-container">
            <h2 class="section-heading-center">Berita Utama</h2>
            
            <div class="poliwangi-news-grid">
                <?php
                $latest_news = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'post_status'    => 'publish'
                ));

                if ( $latest_news->have_posts() ) :
                    while ( $latest_news->have_posts() ) : $latest_news->the_post();
                        $post_id   = get_the_ID();
                        $permalink = get_permalink($post_id);
                        $title     = get_the_title($post_id);
                        $thumb     = get_the_post_thumbnail_url($post_id, 'full');
                        if ( ! $thumb ) {
                            $thumb = 'https://images.unsplash.com/photo-1595152772835-219674b2a8a6?auto=format&fit=crop&w=600&q=80';
                        }
                        ?>
                        <a href="<?php echo esc_url($permalink); ?>" class="news-card" style="text-decoration: none;">
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($title); ?>" class="news-card-img">
                            <div class="news-card-body">
                                <h3 class="news-title"><?php echo esc_html($title); ?></h3>
                                <span class="news-link">Baca Selengkapnya &rarr;</span>
                            </div>
                        </a>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <a href="/detail-berita" class="news-card" style="text-decoration: none;">
                        <img src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?auto=format&fit=crop&w=600&q=80" alt="Berita 1" class="news-card-img">
                        <div class="news-card-body">
                            <h3 class="news-title">Bantuan Beasiswa Ratusan Mahasiswa Jurusan Pertanian Poliwangi Dukung Program Ketahanan Pangan Nasional</h3>
                            <span class="news-link">Baca Selengkapnya &rarr;</span>
                        </div>
                    </a>

                    <a href="/detail-berita" class="news-card" style="text-decoration: none;">
                        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=600&q=80" alt="Berita 2" class="news-card-img">
                        <div class="news-card-body">
                            <h3 class="news-title">Poliwangi Angkat Isu Utama Inovasi dan Kewirausahaan dalam Diskusi Akademik Nasional</h3>
                            <span class="news-link">Baca Selengkapnya &rarr;</span>
                        </div>
                    </a>

                    <a href="/detail-berita" class="news-card" style="text-decoration: none;">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600&q=80" alt="Berita 3" class="news-card-img">
                        <div class="news-card-body">
                            <h3 class="news-title">Tim Poliwangi Raih Prestasi pada Kejuaraan Pendekar Dapur VIII Kabupaten Banyuwangi</h3>
                            <span class="news-link">Baca Selengkapnya &rarr;</span>
                        </div>
                    </a>
                <?php endif; ?>
            </div>

            <div class="poliwangi-news-more">
                <a href="/berita" class="btn-poliwangi-outline">Lihat Semua nya &rarr;</a>
            </div>
        </div>
    </section>

    <!-- 3. PROFIL VIDEO SECTION -->
    <section class="poliwangi-video-section">
        <div class="poliwangi-container">
            <div class="poliwangi-video-grid">
                <div class="video-box">
                    <iframe width="100%" height="340" src="https://www.youtube.com/embed/iDuOpMl9aUA" title="Profil Politeknik Negeri Banyuwangi" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="display: block; border-radius: 16px;"></iframe>
                </div>
                <div class="video-content">
                    <h3>Politeknik Negeri Banyuwangi Profil Video</h3>
                    <p>
                        Politeknik Negeri Banyuwangi (Poliwangi) merupakan perguruan tinggi negeri di Indonesia yang menyelenggarakan pendidikan vokasi jenjang Diploma Tiga (D3) dan Sarjana Terapan (D4). Proses pembelajaran di Poliwangi didukung oleh para dosen berpengalaman serta dengan berbagai laboratorium yang mumpuni guna kegiatan penelitian sehingga lulusan memiliki keahlian praktis yang siap diterapkan di dunia kerja. Sebagai institusi pendidikan vokasi, Poliwangi berkomitmen menghasilkan lulusan berkualitas yang memiliki kompetensi, daya saing tinggi, serta inovatif untuk mendukung kemajuan bangsa.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. LAYANAN PUBLIK SECTION -->
    <section class="poliwangi-services-section">
        <div class="poliwangi-container">
            <h2 class="section-heading-center">Layanan Publik</h2>
            
            <div class="services-grid">
                <a href="#" class="service-btn">
                    <svg class="service-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                    <span class="service-title">LMS POLIWANGI</span>
                </a>
                
                <a href="#" class="service-btn">
                    <svg class="service-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    <span class="service-title">E-LIBRARY POLIWANGI</span>
                </a>
                
                <a href="#" class="service-btn">
                    <svg class="service-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                    <span class="service-title">SIA POLIWANGI</span>
                </a>
                
                <a href="#" class="service-btn">
                    <svg class="service-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    <span class="service-title">LAPOR POLIWANGI</span>
                </a>
                
                <a href="#" class="service-btn">
                    <svg class="service-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                    <span class="service-title">MBKM POLIWANGI</span>
                </a>

                <a href="#" class="service-btn">
                    <svg class="service-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <span class="service-title">JPG POLIWANGI</span>
                </a>

                <a href="#" class="service-btn">
                    <svg class="service-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                    <span class="service-title">PMB POLIWANGI</span>
                </a>

                <a href="#" class="service-btn">
                    <svg class="service-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span class="service-title">PDM POLIWANGI</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 5. INTERNATIONAL PARTNERS SECTION -->
    <section class="poliwangi-partners-section">
        <div class="poliwangi-container">
            <h2 class="section-heading-partners">International <span>Partners</span></h2>
            
            <div class="partners-grid">
                <div class="partner-card">
                    <img src="/wp-content/themes/astra/assets/images/partners-1.png" alt="Guilin University" class="partner-logo-img">
                </div>

                <div class="partner-card">
                    <img src="/wp-content/themes/astra/assets/images/partners-2.png" alt="Southern Taiwan University" class="partner-logo-img">
                </div>

                <div class="partner-card">
                    <img src="/wp-content/themes/astra/assets/images/partners-3.png" alt="KOSEN JAPAN" class="partner-logo-img">
                </div>

                <div class="partner-card">
                    <img src="/wp-content/themes/astra/assets/images/partners-4.png" alt="PNI INDRAMAYU" class="partner-logo-img">
                </div>

                <div class="partner-card">
                    <img src="/wp-content/themes/astra/assets/images/partners-5.png" alt="ATILIM UNIVERSITY" class="partner-logo-img">
                </div>

                <div class="partner-card">
                    <img src="/wp-content/themes/astra/assets/images/partners-6.png" alt="China Partner University" class="partner-logo-img">
                </div>
            </div>
        </div>
    </section>

    <!-- 6. FAQ SECTION -->
    <section class="poliwangi-faq-section">
        <div class="poliwangi-container">
            <h2 class="faq-title">FAQ</h2>
            <p class="faq-subtitle">Temukan jawaban atas pertanyaan yang paling sering diajukan seputar pendaftaran, perkuliahan, hingga fasilitas yang ada di Poliwangi.</p>
            
            <div class="faq-accordion">
                <div class="faq-item active">
                    <div class="faq-question">
                        Apakah Poliwangi menerima jalur prestasi?
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
                    </div>
                    <div class="faq-answer">
                        Ya, Poliwangi menerima mahasiswa baru melalui jalur prestasi seperti SNBP (Seleksi Nasional Berdasarkan Prestasi) dan jalur mandiri prestasi yang mempertimbangkan nilai rapor dan prestasi akademik maupun non-akademik.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Bagaimana cara mendaftar di Poliwangi?
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
                    </div>
                    <div class="faq-answer">
                        Pendaftaran dapat dilakukan secara online melalui portal pendaftaran resmi PMB Poliwangi atau portal nasional SNPMB untuk jalur SNBP/SNBT.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Kapan jadwal pendaftaran Poliwangi?
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
                    </div>
                    <div class="faq-answer">
                        Jadwal pendaftaran disesuaikan dengan kalender penerimaan mahasiswa baru tiap tahunnya (biasanya dibuka bulan Januari hingga Juli).
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Berapa biaya kuliah di Poliwangi?
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
                    </div>
                    <div class="faq-answer">
                        Biaya kuliah menggunakan sistem Uang Kuliah Tunggal (UKT) berkeadilan yang dibagi menjadi beberapa kelompok sesuai dengan kemampuan ekonomi orang tua mahasiswa.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Bagaimana sistem perkuliahan di Poliwangi?
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
                    </div>
                    <div class="faq-answer">
                        Sistem perkuliahan berfokus pada pendidikan vokasi dengan porsi praktik laboratorium/bengkel dan magang industri yang dominan untuk menjamin kesiapan kerja lulusan.
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(q => {
        q.addEventListener('click', function() {
            const item = this.parentElement;
            item.classList.toggle('active');
        });
    });
});
</script>

<?php
get_footer('poliwangi');

