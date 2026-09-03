<div align="center">

# Rancang Bangun Sistem Otomatisasi Pengelolaan Konten Berita Politeknik Negeri Banyuwangi Menggunakan N8N

Sistem Otomatisasi Publikasi Artikel dan Manajemen Konten Berita Berbasis Web  
Dikembangkan untuk Efisiensi Distribusi Konten Informasi di Lingkungan Kampus  
**Program Studi Teknologi Rekayasa Perangkat Lunak**  
**Politeknik Negeri Banyuwangi**

---

![System - WordPress](https://img.shields.io/badge/System-WordPress-blue?style=for-the-badge&logo=wordpress)
![Automation - n8n](https://img.shields.io/badge/Automation-n8n-EA4B71?style=for-the-badge&logo=n8n)
![Language - PHP](https://img.shields.io/badge/Language-PHP_8.x-777BB4?style=for-the-badge&logo=php)
![Database - MySQL](https://img.shields.io/badge/Database-MySQL-4479A1?style=for-the-badge&logo=mysql)
![Server - Laragon](https://img.shields.io/badge/Environment-Laragon-0E83CD?style=for-the-badge)

</div>

---

## 📖 Tentang Proyek

Proyek Tugas Akhir ini merancang dan membangun sistem alur kerja otomatisasi pengunggahan serta pengelolaan artikel berita pada situs resmi Politeknik Negeri Banyuwangi. Sistem ini menghubungkan alur kerja otomatisasi berbasis **n8n** dengan **CMS WordPress** melalui *custom plugin webhook* (`webhook-n8n.php`), sehingga artikel dapat diproses, dijadwalkan, dan diterbitkan tanpa intervensi manual berulang.

---

## 📁 Struktur Repositori

* `Plugin/` : Berisi *source code* *custom plugin* WordPress (`webhook-n8n.php`) yang berfungsi menerima kiriman data (*payload webhook*) dari n8n.
* `n8n/` : Berisi berkas alur kerja n8n dalam format `.json` yang siap diimpor.
* `www/` : Berisi cadangan arsip instalasi website WordPress (`wordpress.zip`).

---

## 🛠️ Panduan Instalasi & Penggunaan

### 1. Website WordPress
1. Ekstrak berkas `wordpress.zip` di dalam folder `www/` ke direktori web server lokal (misalnya `C:\laragon\www\`).
2. Buat database baru di phpMyAdmin, sesuaikan kredensial pada berkas `wp-config.php`.

### 2. Pemasangan Plugin
1. Salin file `webhook-n8n.php` dari folder `Plugin/` ke direktori `wp-content/plugins/` di website lokal.
2. Buka panel admin WordPress (`/wp-admin`), masuk ke menu **Plugins**, lalu klik **Activate** pada plugin tersebut.

### 3. Import Workflow n8n
1. Buka dashboard n8n.
2. Buat alur kerja baru > klik menu titik tiga (⋮) di pojok kanan atas > pilih **Import from File**.
3. Pilih berkas `.json` dari folder `n8n/`.
4. Sesuaikan kredensial dan URL webhook, lalu simpan dan aktifkan alur kerja (*Active*).

---

<div align="center">

**Dikembangkan Oleh:**  
**Heru Susanto**  
NIM. 362258302057  
Program Studi Sarjana Terapan Teknologi Rekayasa Perangkat Lunak  
Jurusan Bisnis dan Informatika  
Politeknik Negeri Banyuwangi  
2026

</div>
