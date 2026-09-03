<?php
/**
 * Custom Footer Template for Poliwangi Theme
 *
 * @package Astra
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<style>
/* Poliwangi Footer Component */
.poliwangi-footer {
    font-family: 'Poppins', sans-serif;
    background-color: #061332;
    color: #94a3b8;
    padding: 70px 0 0;
    font-size: 0.9rem;
    width: 100%;
}

.poliwangi-footer-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.poliwangi-footer-grid {
    display: grid;
    grid-template-columns: 1.4fr 1fr 1fr 1.2fr;
    gap: 40px;
    padding-bottom: 50px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.poliwangi-footer h1,
.poliwangi-footer h2,
.poliwangi-footer h3,
.poliwangi-footer h4,
.poliwangi-footer h5,
.poliwangi-footer h6,
.poliwangi-footer p,
.poliwangi-footer span,
.poliwangi-footer a,
.poliwangi-footer div {
    font-family: 'Poppins', sans-serif !important;
}

.poliwangi-footer-brand-title {
    color: #ffffff;
    font-size: 1.15rem;
    font-weight: 800;
    margin: 0;
}

.poliwangi-footer-brand-desc {
    line-height: 1.65;
    margin-bottom: 20px;
    color: #cbd5e1;
    font-size: 0.88rem;
}

.poliwangi-footer-col h5 {
    color: #ffc107;
    font-size: 1.1rem;
    font-weight: 700;
    margin: 0 0 20px;
}

.poliwangi-footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.poliwangi-footer-links li {
    margin-bottom: 10px;
}

.poliwangi-footer-links a {
    color: #cbd5e1;
    text-decoration: none;
    transition: color 0.2s ease;
}

.poliwangi-footer-links a:hover {
    color: #ffffff;
}

.poliwangi-footer-contact-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-bottom: 14px;
    color: #cbd5e1;
}

.poliwangi-footer-contact-item svg {
    width: 24px !important;
    height: 24px !important;
    flex-shrink: 0;
}

.poliwangi-footer-socials {
    display: flex;
    gap: 12px;
    margin-bottom: 20px;
}

.poliwangi-social-icon {
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

.poliwangi-social-icon:hover {
    background: #2563eb;
    color: #ffffff !important;
}

.poliwangi-social-icon svg,
.poliwangi-social-icon:hover svg {
    color: #ffffff !important;
    fill: #ffffff !important;
}

.poliwangi-footer-bottom {
    padding: 24px 0;
    text-align: center;
    color: #64748b;
    font-size: 0.85rem;
}

@media (max-width: 992px) {
    .poliwangi-footer-grid {
        grid-template-columns: 1fr 1fr;
    }
}

@media (max-width: 640px) {
    .poliwangi-footer-grid {
        grid-template-columns: 1fr;
    }
}
</style>

		</div><!-- .ast-container -->
	</div><!-- #content -->
</div><!-- #page -->

<!-- POLIWANGI FOOTER -->
<footer class="poliwangi-footer">
    <div class="poliwangi-footer-container">
        <div class="poliwangi-footer-grid">
            <div>
                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                    <img src="/wp-content/themes/astra/assets/images/logo-poliwangi.png" alt="Logo Poliwangi" style="width: 40px; height: auto;">
                    <h4 class="poliwangi-footer-brand-title">POLITEKNIK NEGERI BANYUWANGI</h4>
                </div>
                <p class="poliwangi-footer-brand-desc">
                    Poliwangi adalah Politeknik Negeri Banyuwangi, sebuah perguruan tinggi vokasi negeri di Banyuwangi, Jawa Timur, yang berfokus pada pengembangan pendidikan berbasis keterampilan dan keahlian terapan.
                </p>
                <div class="poliwangi-footer-socials">
                    <a href="#" class="poliwangi-social-icon" aria-label="Instagram">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="#" class="poliwangi-social-icon" aria-label="Facebook">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.5 5H18V0h-3.808C10.592 0 9 1.583 9 4.615V8z"/></svg>
                    </a>
                    <a href="#" class="poliwangi-social-icon" aria-label="YouTube">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                    </a>
                    <a href="#" class="poliwangi-social-icon" aria-label="TikTok">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.82.56-1.31 1.54-1.34 2.53-.05 1.04.42 2.08 1.25 2.7.92.69 2.16.85 3.22.46 1.05-.38 1.83-1.35 1.97-2.46.05-1.74.01-3.49.02-5.24.01-4.8.01-9.6.01-14.4z"/></svg>
                    </a>
                </div>
            </div>

            <div class="poliwangi-footer-col">
                <h5>Tentang Poliwangi</h5>
                <ul class="poliwangi-footer-links">
                    <li><a href="#">Sejarah singkat Poliwangi</a></li>
                    <li><a href="#">Visi dan Misi</a></li>
                    <li><a href="#">Senat</a></li>
                    <li><a href="#">Sistem Pendidikan</a></li>
                    <li><a href="#">Kehidupan Kampus</a></li>
                    <li><a href="#">Kerjasama Politeknik Negeri Banyuwangi</a></li>
                </ul>
            </div>

            <div class="poliwangi-footer-col">
                <h5>Layanan Publik</h5>
                <ul class="poliwangi-footer-links">
                    <li><a href="#">Peraturan Akademik</a></li>
                    <li><a href="#">PPID Poliwangi</a></li>
                    <li><a href="#">Jalur Masuk</a></li>
                    <li><a href="#">Pengaduan Poliwangi</a></li>
                    <li><a href="#">Survey Kepuasan Masyarakat</a></li>
                </ul>
            </div>

            <div class="poliwangi-footer-col">
                <h5>Hubungi Kami</h5>
                <div class="poliwangi-footer-contact-item">
                    <svg width="20" height="20" fill="none" stroke="#ffc107" stroke-width="2" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span>+62 (0333) 636780</span>
                </div>
                <div class="poliwangi-footer-contact-item">
                    <svg width="20" height="20" fill="none" stroke="#ffc107" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>poliwangi@poliwangi.ac.id<br>humas@poliwangi.ac.id</span>
                </div>
                <div class="poliwangi-footer-contact-item">
                    <svg width="20" height="20" fill="none" stroke="#ffc107" stroke-width="2" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span>Jalan Raya Jember KM 13 Labanasem, Kabat, Banyuwangi 68461, Jawa Timur - Indonesia</span>
                </div>
            </div>
        </div>

        <div class="poliwangi-footer-bottom">
            Copyright &copy; 2026 Poliwangi.ac.id. All Rights Reserved.
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
