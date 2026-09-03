<?php
/**
 * Template Name: Berita Poliwangi Page
 * Description: Custom Template for Poliwangi News Archive Page.
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

/* Hide Astra sidebar, post headers, and default Astra footer */
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

/* Scoped Styles for Berita Page */
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
    color: #ffc107; /* Gold/Yellow text */
    letter-spacing: 2px;
    margin: 0;
    text-transform: uppercase;
}

/* Main Content Area */
.berita-main-content {
    padding: 50px 0 80px;
}

/* Top Featured Big Card */
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
    background-color: #0a2259; /* Deep Navy Blue */
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

/* Section Title: Berita Terbaru */
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

/* Horizontal Highlight News Card */
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

/* Grid of 6 News Cards */
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

/* Footer Section */
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

/* Responsive Styles */
@media (max-width: 992px) {
    .horizontal-news-card {
        grid-template-columns: 1fr;
    }
    .berita-cards-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .footer-grid {
        grid-template-columns: 1fr 1fr;
    }
}

@media (max-width: 640px) {
    .berita-hero-title { font-size: 2.5rem; }
    .berita-cards-grid, .footer-grid {
        grid-template-columns: 1fr;
    }
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
            
            <!-- FEATURED BIG NEWS CARD -->
            <div class="featured-news-card">
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1200&q=80" alt="Featured News" class="featured-news-img">
                <div class="featured-news-body">
                    <div class="badge-tag-yellow">Prestasi</div>
                    <h2 class="featured-news-title">
                        Tim Poliwangi Raih Prestasi pada Kejuaraan Panahan Stage VII Kabupaten Banyuwangi
                    </h2>
                    <a href="#" class="featured-news-link">Lihat Selengkapnya &rsaquo;</a>
                </div>
            </div>

            <!-- BERITA TERBARU SECTION -->
            <div class="section-title-wrapper">
                <h2 class="section-title-text">Berita Terbaru</h2>
                <div class="section-title-line"></div>
            </div>

            <!-- HORIZONTAL HIGHLIGHT CARD -->
            <div class="horizontal-news-card">
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
            </div>

            <!-- GRID OF 6 NEWS CARDS -->
            <div class="berita-cards-grid">
                
                <!-- Card 1 -->
                <div class="berita-card">
                    <img src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?auto=format&fit=crop&w=600&q=80" alt="Berita 1" class="berita-card-bg-img">
                    <div class="berita-card-overlay">
                        <span class="berita-badge-white">Informasi</span>
                        <h4 class="berita-card-title">
                            Siapkan Beasiswa Khusus Mahasiswa Jurusan Pertanian Poliwangi Dukung Program Ketahanan Pangan Nasional
                        </h4>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="berita-card">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=600&q=80" alt="Berita 2" class="berita-card-bg-img">
                    <div class="berita-card-overlay">
                        <span class="berita-badge-white">Informasi</span>
                        <h4 class="berita-card-title">
                            Poliwangi Jajaki Kolaborasi Internasional Bersama PNM dan UiTM Malaysia
                        </h4>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="berita-card">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600&q=80" alt="Berita 3" class="berita-card-bg-img">
                    <div class="berita-card-overlay">
                        <span class="berita-badge-blue">Prestasi</span>
                        <h4 class="berita-card-title">
                            Tim Poliwangi Raih Prestasi pada Kejuaraan Panahan Stage VII Kabupaten Banyuwangi
                        </h4>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="berita-card">
                    <img src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?auto=format&fit=crop&w=600&q=80" alt="Berita 4" class="berita-card-bg-img">
                    <div class="berita-card-overlay">
                        <span class="berita-badge-white">Informasi</span>
                        <h4 class="berita-card-title">
                            Siapkan Beasiswa Khusus Mahasiswa Jurusan Pertanian Poliwangi Dukung Program Ketahanan Pangan Nasional
                        </h4>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="berita-card">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=600&q=80" alt="Berita 5" class="berita-card-bg-img">
                    <div class="berita-card-overlay">
                        <span class="berita-badge-white">Informasi</span>
                        <h4 class="berita-card-title">
                            Poliwangi Jajaki Kolaborasi Internasional Bersama PNM dan UiTM Malaysia
                        </h4>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="berita-card">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600&q=80" alt="Berita 6" class="berita-card-bg-img">
                    <div class="berita-card-overlay">
                        <span class="berita-badge-blue">Prestasi</span>
                        <h4 class="berita-card-title">
                            Tim Poliwangi Raih Prestasi pada Kejuaraan Panahan Stage VII Kabupaten Banyuwangi
                        </h4>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <!-- FOOTER -->
    <footer class="poliwangi-footer">
        <div class="poliwangi-container">
            <div class="footer-grid">
                <div>
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="#ffffff"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                        <h4 class="footer-brand-title" style="margin: 0;">POLITEKNIK NEGERI BANYUWANGI</h4>
                    </div>
                    <p class="footer-brand-desc">
                        Poliwangi adalah Politeknik Negeri Banyuwangi, sebuah perguruan tinggi vokasi negeri di Banyuwangi, Jawa Timur, yang berfokus pada pengembangan pendidikan berbasis keterampilan dan keahlian terapan.
                    </p>
                    <div class="footer-socials">
                        <!-- Instagram -->
                        <a href="#" class="social-icon" aria-label="Instagram">
                            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <!-- Facebook -->
                        <a href="#" class="social-icon" aria-label="Facebook">
                            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.5 5H18V0h-3.808C10.592 0 9 1.583 9 4.615V8z"/></svg>
                        </a>
                        <!-- YouTube -->
                        <a href="#" class="social-icon" aria-label="YouTube">
                            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                        </a>
                        <!-- TikTok -->
                        <a href="#" class="social-icon" aria-label="TikTok">
                            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.82.56-1.31 1.54-1.34 2.53-.05 1.04.42 2.08 1.25 2.7.92.69 2.16.85 3.22.46 1.05-.38 1.83-1.35 1.97-2.46.05-1.74.01-3.49.02-5.24.01-4.8.01-9.6.01-14.4z"/></svg>
                        </a>
                    </div>
                </div>

                <div class="footer-col">
                    <h5>Tentang Poliwangi</h5>
                    <ul class="footer-links">
                        <li><a href="#">Sejarah singkat Poliwangi</a></li>
                        <li><a href="#">Visi dan Misi</a></li>
                        <li><a href="#">Senat</a></li>
                        <li><a href="#">Sistem Pendidikan</a></li>
                        <li><a href="#">Kehidupan Kampus</a></li>
                        <li><a href="#">Kerjasama Politeknik Negeri Banyuwangi</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h5>Layanan Publik</h5>
                    <ul class="footer-links">
                        <li><a href="#">Peraturan Akademik</a></li>
                        <li><a href="#">PPID Poliwangi</a></li>
                        <li><a href="#">Jalur Masuk</a></li>
                        <li><a href="#">Pengaduan Poliwangi</a></li>
                        <li><a href="#">Survey Kepuasan Masyarakat</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h5>Hubungi Kami</h5>
                    <div class="footer-contact-item">
                        <span>📞</span>
                        <span>+62 (0333) 636780</span>
                    </div>
                    <div class="footer-contact-item">
                        <span>✉️</span>
                        <span>poliwangi@poliwangi.ac.id<br>humas@poliwangi.ac.id</span>
                    </div>
                    <div class="footer-contact-item">
                        <span>📍</span>
                        <span>Jalan Raya Jember KM 13 Labanasem, Kabat, Banyuwangi 68461, Jawa Timur - Indonesia</span>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                Copyright &copy; 2026 Poliwangi.ac.id. All Rights Reserved.
            </div>
        </div>
    </footer>

</div>

<?php
get_footer('poliwangi');

