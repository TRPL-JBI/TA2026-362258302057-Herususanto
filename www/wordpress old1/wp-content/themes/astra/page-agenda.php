<?php
/**
 * Template Name: Agenda Kampus Poliwangi
 * Description: Halaman Agenda Kampus Poliwangi
 *
 * @package Astra
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header('poliwangi');
?>

<style>
.poliwangi-page-wrapper {
    font-family: 'Poppins', sans-serif;
    color: #333333;
    line-height: 1.6;
    background-color: #f8fafc;
    overflow-x: hidden;
    min-height: 100vh;
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
.poliwangi-page-wrapper div {
    font-family: 'Poppins', sans-serif !important;
}

.poliwangi-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.poliwangi-hero {
    position: relative;
    background: linear-gradient(135deg, rgba(13, 37, 96, 0.92) 0%, rgba(20, 60, 140, 0.88) 100%),
                url('/wp-content/themes/astra/assets/images/gedung.png') center/cover no-repeat;
    color: #ffffff;
    padding: 120px 0 180px;
    text-align: left;
}

.poliwangi-hero-title {
    font-size: 3.2rem;
    font-weight: 800;
    margin: 0 0 16px;
    line-height: 1.15;
    color: #ffffff;
}

.poliwangi-hero-subtitle {
    font-size: 1.25rem;
    color: #e2e8f0;
    margin-bottom: 40px;
    max-width: 620px;
}

.poliwangi-content-section {
    padding: 60px 0;
}

.poliwangi-empty-state {
    text-align: center;
    padding: 80px 20px;
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
}

.poliwangi-empty-icon {
    font-size: 4rem;
    margin-bottom: 20px;
}

.poliwangi-empty-title {
    font-size: 1.8rem;
    font-weight: 700;
    color: #0c2b64;
    margin-bottom: 16px;
}

.poliwangi-empty-text {
    color: #64748b;
    font-size: 1rem;
    max-width: 500px;
    margin: 0 auto;
}
</style>

<div class="poliwangi-page-wrapper">

    <!-- HERO SECTION -->
    <section class="poliwangi-hero">
        <div class="poliwangi-container">
            <h1 class="poliwangi-hero-title">Agenda Kampus</h1>
            <p class="poliwangi-hero-subtitle">
                Jadwal kegiatan penting akademik dan non-akademik
            </p>
        </div>
    </section>

    <!-- CONTENT SECTION -->
    <main class="poliwangi-content-section">
        <div class="poliwangi-container">
            <div class="poliwangi-empty-state">
                <div class="poliwangi-empty-icon">📅</div>
                <h2 class="poliwangi-empty-title">Akan Datang</h2>
                <p class="poliwangi-empty-text">
                    Halaman ini sedang dalam pengembangan. Agenda kampus terbaru akan segera ditampilkan di sini.
                </p>
            </div>
        </div>
    </main>

</div>

<?php
get_footer('poliwangi');
