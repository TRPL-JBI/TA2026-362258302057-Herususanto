# 📖 Tentang Proyek

Sistem ini merupakan luaran dari penelitian Tugas Akhir yang berjudul **"Rancang Bangun Sistem Otomatisasi Pengelolaan Konten Berita Politeknik Negeri Banyuwangi Menggunakan N8N"**.

Proyek ini dirancang untuk mengotomatisasi alur distribusi, pemrosesan, dan publikasi konten berita ke situs web profil kampus Politeknik Negeri Banyuwangi. Sistem ini mengintegrasikan alur kerja otomatisasi pada platform n8n dengan CMS WordPress melalui *custom endpoint plugin* (`webhook-n8n.php`) guna menjaga efisiensi dan konsistensi publikasi informasi secara berkala.

---

## 📁 Struktur Berkas Repositori

Repositori ini terdiri dari tiga komponen utama:

* `Plugin/` : Berisi *source code* plugin custom WordPress (`webhook-n8n.php`) yang bertindak sebagai penerima *payload* data (*webhook receiver*) untuk diproses menjadi postingan berita di WordPress.
* `n8n/` : Berisi berkas konfigurasi *workflow automation* dalam format `.json` untuk diimpor ke aplikasi n8n.
* `www/` : Berisi arsip berkas *source code* website WordPress lengkap (`wordpress.zip`) yang digunakan pada lingkungan pengujian/pengembangan.

---

## 🛠️ Teknologi & Kebutuhan Sistem

* **Web Server & Database:** Laragon / XAMPP (Apache, MySQL/MariaDB)
* **Bahasa Pemrograman:** PHP 8.x
* **CMS:** WordPress
* **Workflow Automation Platform:** n8n (Self-hosted / Cloud)

---

## 🚀 Panduan Pemasangan & Penggunaan

### 1. Konfigurasi Website WordPress
1. Ekstrak atau pasang berkas WordPress dari folder `www/` ke web server lokal (contoh: `C:\laragon\www\` atau `htdocs`).
2. Buat database baru di phpMyAdmin dan impor basis data proyek terkait.
3. Pastikan konfigurasi berkas `wp-config.php` telah mengarah ke basis data yang benar.

### 2. Pemasangan Custom Plugin
1. Salin berkas `webhook-n8n.php` dari folder `Plugin/` ke direktori website lokal:  
   `wp-content/plugins/`
2. Masuk ke **Dashboard Admin WordPress** > menu **Plugins** > **Installed Plugins**.
3. Cari plugin webhook tersebut lalu klik **Activate**.

### 3. Import Workflow ke n8n
1. Buka dashboard aplikasi n8n.
2. Masuk ke menu **Workflows** di bilah sisi kiri.
3. Klik tombol **Add Workflow** lalu pilih opsi **Import from File**.
4. Pilih berkas `.json` yang terdapat pada folder `n8n/` di repositori ini.
5. Sesuaikan URL *Webhook* atau kredensial API WordPress tujuan.
6. Simpan (*Save*) dan aktifkan alur kerja (*Activate workflow*).

---

## 👨‍💻 Dikembangkan Oleh:

**Heru Susanto**  
NIM. 362258302057  
Program Studi Sarjana Terapan Teknologi Rekayasa Perangkat Lunak  
Jurusan Bisnis dan Informatika  
Politeknik Negeri Banyuwangi  
2026
