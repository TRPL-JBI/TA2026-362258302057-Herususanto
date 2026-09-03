<?php
/**
 * Single Post / News Detail Template for Poliwangi Theme
 *
 * @package Astra
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header('poliwangi');
?>

<style>
.poliwangi-single-news-wrapper {
    font-family: 'Poppins', sans-serif;
    color: #333333;
    line-height: 1.7;
    background-color: #f8fafc;
    overflow-x: hidden;
    padding-bottom: 80px;
}

.poliwangi-single-news-wrapper h1,
.poliwangi-single-news-wrapper h2,
.poliwangi-single-news-wrapper h3,
.poliwangi-single-news-wrapper h4,
.poliwangi-single-news-wrapper h5,
.poliwangi-single-news-wrapper h6,
.poliwangi-single-news-wrapper p,
.poliwangi-single-news-wrapper span,
.poliwangi-single-news-wrapper a,
.poliwangi-single-news-wrapper div {
    font-family: 'Poppins', sans-serif !important;
}

.poliwangi-single-news-wrapper *, 
.poliwangi-single-news-wrapper *::before, 
.poliwangi-single-news-wrapper *::after {
    box-sizing: border-box;
}

.poliwangi-container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Hero Header Banner */
.single-news-hero {
    background: linear-gradient(180deg, rgba(10, 34, 89, 0.92) 0%, rgba(13, 44, 110, 0.96) 100%),
                url('/wp-content/themes/astra/assets/images/gedung.png') center/cover no-repeat;
    padding: 60px 0;
    text-align: center;
    color: #ffffff;
}

.single-news-hero-title {
    font-size: 3.2rem;
    font-weight: 900;
    color: #ffc107; /* Gold text */
    letter-spacing: 2px;
    margin: 0;
    text-transform: uppercase;
}

/* Detail News Card Container */
.single-news-card {
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 10px 35px rgba(0, 0, 0, 0.06);
    border: 1px solid #e2e8f0;
    margin-top: 65px !important;
    padding: 48px;
    max-width: 960px;
    margin-left: auto;
    margin-right: auto;
}

.single-news-title {
    font-size: 2.2rem;
    font-weight: 800;
    color: #0c2b64;
    line-height: 1.3;
    margin: 0 0 12px;
}

.single-news-meta {
    color: #64748b;
    font-size: 0.95rem;
    font-weight: 500;
    margin-bottom: 28px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.single-news-featured-img {
    width: 100%;
    max-height: 580px;
    object-fit: cover;
    border-radius: 12px;
    margin-bottom: 36px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
}

.single-news-content {
    font-size: 1.05rem;
    color: #334155;
    line-height: 1.8;
}

.single-news-content p {
    margin-bottom: 20px;
}

.single-news-content ul {
    list-style-type: none;
    padding-left: 0;
    margin-bottom: 28px;
}

.single-news-content ul > li {
    margin-bottom: 16px;
    position: relative;
    padding-left: 24px;
}

.single-news-content ul > li::before {
    content: "•";
    position: absolute;
    left: 4px;
    top: 0;
    color: #0c2b64;
    font-size: 1.4rem;
    line-height: 1;
}

.single-news-content ul li ul {
    margin-top: 8px;
    margin-bottom: 8px;
    padding-left: 20px;
}

.single-news-content ul li ul li::before {
    content: "-";
    font-size: 1.1rem;
    top: -2px;
}

.winner-name {
    font-weight: 800;
    color: #1e293b;
}

@media (max-width: 768px) {
    .single-news-card {
        padding: 24px 20px;
        margin-top: 30px;
    }
    .single-news-title {
        font-size: 1.6rem;
    }
    .single-news-hero-title {
        font-size: 2.2rem;
    }
}
</style>

<div class="poliwangi-single-news-wrapper">
    <!-- HERO BANNER -->
    <section class="single-news-hero">
        <div class="poliwangi-container">
            <h1 class="single-news-hero-title">BERITA</h1>
        </div>
    </section>

    <!-- ARTICLE CONTENT -->
    <div class="poliwangi-container">
        <article class="single-news-card">
            
            <?php if ( have_posts() && get_the_content() ) : while ( have_posts() ) : the_post(); ?>
                
                <h1 class="single-news-title"><?php the_title(); ?></h1>
                
                <div class="single-news-meta">
                    <span>By <?php echo get_the_author() ? get_the_author() : 'Humas Poliwangi'; ?></span>
                    <span>/</span>
                    <span><?php echo get_the_date('d F Y'); ?></span>
                </div>

                <?php if ( has_post_thumbnail() ) : ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" class="single-news-featured-img">
                <?php else : ?>
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1200&q=80" alt="Detail Berita" class="single-news-featured-img">
                <?php endif; ?>

                <div class="single-news-content">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; else : ?>

                <!-- DEFAULT / DEMO CONTENT MATCHING SCREENSHOT -->
                <h1 class="single-news-title">
                    Tim Poliwangi Raih Prestasi pada Kejuaraan Panahan Stage VII Kabupaten Banyuwangi
                </h1>

                <div class="single-news-meta">
                    <span>By Humas Poliwangi</span>
                    <span>/</span>
                    <span>12 February 2026</span>
                </div>

                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1200&q=80" alt="Panahan Stage VII" class="single-news-featured-img">

                <div class="single-news-content">
                    <p>
                        Tim mahasiswa Politeknik Negeri Banyuwangi (Poliwangi) kembali menorehkan prestasi pada ajang Kejuaraan Panahan Stage VII Kabupaten Banyuwangi tahun 2026.
                    </p>

                    <p>Adapun capaian yang diraih antara lain:</p>

                    <ul>
                        <li>
                            <span class="winner-name">Gudfan Abd Rafi (Teknik Sipil)</span>
                            <ul>
                                <li>Juara 2 Mix Team Divisi Barebow Umum 20 m</li>
                                <li>Juara 3 Beregu Putra Divisi Barebow Umum 20 m</li>
                            </ul>
                        </li>
                        <li>
                            <span class="winner-name">Karella Vilananda (Bisnis Digital)</span>
                            <ul>
                                <li>Juara 3 Beregu Putra Divisi Barebow Umum 20 m</li>
                            </ul>
                        </li>
                        <li>
                            <span class="winner-name">Ilzham Nadhira Azizi (TRKJJ)</span>
                            <ul>
                                <li>Juara 3 Beregu Putra Divisi Barebow Umum 20 m</li>
                            </ul>
                        </li>
                        <li>
                            <span class="winner-name">Keysya Amelia (TRPL)</span>
                            <ul>
                                <li>Juara 2 Kualifikasi Total Score Divisi Tradisional</li>
                            </ul>
                        </li>
                        <li>
                            <span class="winner-name">Ira Agustin (TRPL)</span>
                            <ul>
                                <li>Juara 3 Aduan Perorangan Divisi Tradisional</li>
                            </ul>
                        </li>
                    </ul>

                    <p>
                        Prestasi ini menjadi bukti semangat dan konsistensi mahasiswa Poliwangi dalam mengembangkan potensi, baik di bidang akademik maupun nonakademik.
                    </p>

                    <p>
                        Poliwangi mengucapkan selamat dan sukses atas pencapaian yang diraih. Semoga terus menginspirasi dan mengharumkan nama kampus.
                    </p>
                </div>

            <?php endif; ?>

        </article>
    </div>
</div>

<?php
get_footer('poliwangi');
