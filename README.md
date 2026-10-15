# 📘 Laporan Praktikum Pertemuan Ke - 5

🧑‍🎓 Ketut Sumantre - 4524210048

# 🏫 Website SMP Mentari Ceria

Aplikasi website sekolah berbasis Laravel yang menampilkan informasi kegiatan sekolah dan fitur buku tamu digital untuk SMP Mentari Ceria.

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.2">
  <img src="https://img.shields.io/badge/Tailwind_CSS-4.0-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/SQLite-07405E?style=for-the-badge&logo=sqlite&logoColor=white" alt="SQLite">
</p>

## Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/kttsumantre/prak-pbw-KetutSumantre-4524210048.git
cd pertemuan04
cd SMP-Mentari
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### 3. Setup Environment

```bash
# Copy file .env
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Setup Database

```bash
# Jalankan migrasi
php artisan migrate
```

### 5. Build Assets

```bash
# Development
npm run dev

# Production
npm run build
```

### 6. Jalankan Aplikasi

```bash
# Menggunakan built-in server
php artisan serve

# Atau menggunakan composer script (recommended)
composer dev
```

Aplikasi akan berjalan di: `http://localhost:8000`

## 📋 Daftar Isi

- [Tentang Aplikasi](#-tentang-aplikasi)
- [Fitur Utama](#-fitur-utama)
- [Tech Stack](#-tech-stack)
- [Persyaratan Sistem](#-persyaratan-sistem)
- [Instalasi](#-instalasi)
- [Penggunaan](#-penggunaan)
- [Struktur Database](#-struktur-database)
- [Struktur Project](#-struktur-project)
- [Pengembangan](#-pengembangan)
- [Testing](#-testing)
- [Lisensi](#-lisensi)

## 🎯 Tentang Aplikasi

Website SMP Mentari Ceria adalah aplikasi web sederhana yang dibangun dengan Laravel 12 untuk menampilkan informasi dan kegiatan sekolah. Aplikasi ini dilengkapi dengan fitur buku tamu digital yang memungkinkan pengunjung meninggalkan pesan dan kesan mereka.

### Fitur Halaman:

1. **Halaman Home** - Menampilkan kegiatan-kegiatan terbaru sekolah
2. **Buku Tamu** - Formulir interaktif untuk pengunjung meninggalkan pesan

## ✨ Fitur Utama

- ✅ **Tampilan Kegiatan Sekolah** - Showcase kegiatan terbaru dengan card design
- ✅ **Buku Tamu Digital** - Pengunjung dapat meninggalkan pesan
- ✅ **Form Validasi** - Validasi input untuk nama, email, dan pesan
- ✅ **Real-time Feedback** - Notifikasi sukses/error setelah submit
- ✅ **Responsive Design** - Tampilan optimal di semua device
- ✅ **Timestamp Relatif** - Menampilkan waktu pesan (e.g., "2 jam yang lalu")
- ✅ **Modern UI/UX** - Desain clean dengan Tailwind CSS

## 🛠️ Tech Stack

### Backend
- **Laravel** 12.x - PHP Framework
- **PHP** ^8.2 - Programming Language
- **SQLite** - Database (Development)
- **Eloquent ORM** - Database Management

### Frontend
- **Blade Templates** - Template Engine
- **Tailwind CSS** 4.0 - CSS Framework
- **Vite** 7.0 - Asset Bundler & HMR
- **Axios** - HTTP Client

### Development Tools
- **Laravel Sail** - Docker Development Environment
- **Pest PHP** - Testing Framework
- **Laravel Pint** - Code Style Fixer
- **Concurrently** - Multi-command Runner

## 📸 Hasil Screenshot Tampilan Website SMP Mentari

### Halaman Home
<img width="1920" height="1080" alt="Screenshot 2026-10-13 150802" src="https://github.com/user-attachments/assets/eb9bada8-17ba-4542-9de1-9566f3ec7c42" />


### Halaman Buku Tamu
<img width="1920" height="1080" alt="Screenshot 2026-10-13 150850" src="https://github.com/user-attachments/assets/f022b859-7c33-45f2-aed2-4d96f75d95c8" />


### Halaman Register
<img width="1920" height="1080" alt="Screenshot 2026-10-15 230928" src="https://github.com/user-attachments/assets/311c6703-3712-4379-9139-3532dce7d5a4" />


### Halaman Login
<img width="1920" height="1080" alt="Screenshot 2026-10-15 230846" src="https://github.com/user-attachments/assets/6e2bdf39-57eb-46de-8dfc-41f8837ca945" />


### Halaman Dashboard

Dashboard di akses ketika sudah login dan bisa mengatur atau pusat kendali dari website SMP Mentari
<img width="1920" height="1080" alt="Screenshot 2026-10-15 231942" src="https://github.com/user-attachments/assets/5337e5b3-384e-4c17-911d-1b32709253b0" />

<p align="center">
Made with ❤️ for SMP Mentari Ceria
</p>
