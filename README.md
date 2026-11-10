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


# 📚 Laporan Praktikum Pertemuan Ke - 6-8

**Nama:** Ketut Sumantre  
**NPM:** 4524210048  
**Repository:** [prak-pbw-KetutSumantre-4524210048](https://github.com/kttsumantre/prak-pbw-KetutSumantre-4524210048.git)

---

## 📌 Daftar Isi Tugas Praktikum

1. [Tugas 1: Aplikasi Manajemen Buku (Authbook) - Pertemuan 6-8](#-tugas-1-aplikasi-manajemen-buku-authbook---pertemuan-6-8)
2. [Tugas 2: Kustomisasi dan Pengembangan](#-tugas-2-kustomisasi-dan-pengembangan)
3. [Tugas 3: Analisis dan Dokumentasi](#-tugas-3-analisis-dan-dokumentasi)

---

## 🏫 Tugas 1: Aplikasi Manajemen Buku (Authbook) - Pertemuan 6-8

Aplikasi Sistem Manajemen Buku berbasis **Laravel 12** dan **Filament 3.x** yang menyediakan fitur lengkap CRUD (Create, Read, Update, Delete) untuk mengelola data buku dan penulis, dilengkapi dengan fitur pencarian, filtering, upload gambar cover, dan sistem relasi database.

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.2">
  <img src="https://img.shields.io/badge/Laravel-12.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 12">
  <img src="https://img.shields.io/badge/Filament-3.x-FDAE4B?style=for-the-badge&logo=filament&logoColor=black" alt="Filament 3.x">
  <img src="https://img.shields.io/badge/SQLite-07405E?style=for-the-badge&logo=sqlite&logoColor=white" alt="SQLite">
</p>

### ✨ Fitur Utama
- **Dashboard Analytics:** Menampilkan ringkasan total penulis, koleksi buku, dan status sistem secara real-time.
- **CRUD Management:** Operasi penuh untuk Tambah, Lihat, Edit, dan Hapus data Penulis dan Buku.
- **Relasi Database (One-to-Many):** Menghubungkan data buku ke penulis secara terstruktur dengan dropdown interaktif.
- **Live Search & Filtering:** Fitur pencarian instan dan penyaringan data berdasarkan status (*Available* / *Borrowed*) serta Tahun Terbit.
- **Cover Image Upload:** Mendukung unggah gambar sampul buku dengan validasi tipe berkas dan batas ukuran maksimal 2MB.
- **Database Factory & Seeder:** Mengisi data dummy 10 Penulis dan 50 Buku secara otomatis untuk keperluan pengujian.
- **Authorization Policy:** Pengaturan hak akses resource berbasis Laravel Policy.

### 🛠️ Tech Stack
#### Backend & Framework
- **Laravel 12.x** - PHP Framework
- **Filament 3.x** - Rapid Admin Panel Framework
- **PHP 8.2** - Programming Language
- **SQLite** - Database Storage
- **Eloquent ORM** - Database Relational Management

#### Frontend & UI
- **Livewire 3** - Dynamic Full-stack Component
- **Alpine.js** - Lightweight JavaScript Framework
- **Tailwind CSS** - Utility-first CSS Framework
- **Heroicons** - Modern SVG Icons

### 🗄️ Struktur Database
1. **`authors`**
   - `id` (Primary Key)
   - `name` (string)
   - `created_at`, `updated_at`
2. **`books`**
   - `id` (Primary Key)
   - `isbn` (string, unique)
   - `title` (string)
   - `author_id` (Foreign Key -> `authors.id`)
   - `publisher` (string, nullable)
   - `year` (year, nullable)
   - `cover` (string, nullable)
   - `status` (enum: `'available'`, `'borrowed'`)
   - `created_at`, `updated_at`

### ⚙️ Panduan Instalasi & Penggunaan

#### 1. Clone Repository
```bash
git clone https://github.com/kttsumantre/prak-pbw-KetutSumantre-4524210048.git
cd pertemuan06/authbook
```

#### 2. Install Dependencies
```bash
composer install
```

#### 3. Setup Environment & Database
```bash
# Copy file .env
cp .env.example .env

# Generate application key
php artisan key:generate

# Buat file database SQLite
touch database/database.sqlite
```

#### 4. Storage Link & Database Seeding
```bash
# Jalankan migrasi dan seeder data dummy
php artisan migrate:fresh --seed

# Buat symbolic link untuk storage upload gambar
php artisan storage:link

# Buat user admin Filament (opsional/jika belum ada)
php artisan make:filament-user
```

#### 5. Jalankan Aplikasi
```bash
php artisan serve
```
Aplikasi admin panel akan berjalan di: **`http://localhost:8000/admin`**

### 📸 Tangkapan Layar Tampilan Aplikasi (Tugas 1)

| Fitur | Deskripsi | Gambar |
| ----- | ----- | ----- |
| **Dashboard** | Menampilkan widget ringkasan statistik total penulis dan jumlah koleksi buku. | <img width="1920" height="1080" alt="Screenshot 2026-11-10 154753" src="https://github.com/user-attachments/assets/04782f3d-a65c-4ef2-9151-f1535cb4dfdf" />
 |
| **List Books** | Daftar tabel data buku (hasil seeder) dengan badge status *available* / *borrowed*. | <img width="1920" height="1080" alt="Screenshot 2026-11-10 155407" src="https://github.com/user-attachments/assets/33ceb9db-dd55-46cc-9ecd-5258221ee52f" />
 |
| **Form Create Book** | Form tambah buku baru dengan dukungan ISBN, Judul, Author Dropdown, dan Upload Sampul. | <img width="1920" height="1080" alt="Screenshot 2026-11-10 155415" src="https://github.com/user-attachments/assets/b592742a-73ff-4c28-83aa-2768008985f7" />
|
| **Search & Filter** | Pengujian filter pencarian otomatis dan kriteria Status / Tahun Terbit. | <img width="1920" height="1080" alt="Screenshot 2026-11-10 155450" src="https://github.com/user-attachments/assets/30926d46-04cd-4bfe-894b-7c41d2abecb4" />
 |

---

## 🚀 Tugas 2: Kustomisasi dan Pengembangan

### 1. Deskripsi Fitur Tambahan
- **Field Description pada Book:** Menambahkan input deskripsi buku bertipe `Textarea` pada form buku.
- **Role-Based Access Control (RBAC):** Pembatasan hak akses berbasis 3 role (`admin`, `staff`, `viewer`) menggunakan Laravel Policy.
- **Widget Dashboard Custom:** Widget statistik interaktif di dashboard untuk pemantauan total buku, total penulis, serta ketersediaan buku.
- **Fitur Kategori Buku:** Relasi Many-to-Many antara Buku dan Kategori dengan pilihan Multiple Select pada form.

### 📸 Hasil Screenshot Tugas 2

#### Widget Dashboard Baru
Statistik total buku, total penulis, serta perbandingan status ketersediaan buku.
<br>
<img width="1917" height="876" alt="Screenshot 2026-11-10 162016" src="https://github.com/user-attachments/assets/e6b74411-1874-43d6-8e11-16f8dea461d8" />


#### Form Input Deskripsi & Kategori Buku
Tampilan form buku baru dengan field deskripsi dan pilihan kategori buku.
<br>
<img width="1911" height="876" alt="Screenshot 2026-11-10 161955" src="https://github.com/user-attachments/assets/0cf26438-0daa-44ee-a7c4-839b62a35280" />


#### Role-Based Access: Admin User
Akses penuh untuk Admin (Create, Read, Update, Delete).
<br>
<img width="1917" height="876" alt="Screenshot 2026-11-10 162056" src="https://github.com/user-attachments/assets/93996fc4-a809-4240-9f5d-6059a7f13228" />


#### Role-Based Access: Staff User
Akses Staff hanya bisa Create, Read, dan Update (Fitur Delete dinonaktifkan).
<br>
<img width="1896" height="866" alt="Screenshot 2026-11-10 162125" src="https://github.com/user-attachments/assets/9697f2dc-567e-42b3-9a87-96c9310d6b4c" />


#### Role-Based Access: Viewer User
Akses Viewer hanya bisa Read/View data (Fitur Create, Edit, dan Delete dinonaktifkan).
<br>
<img width="1912" height="867" alt="Screenshot 2026-11-10 162156" src="https://github.com/user-attachments/assets/c5419447-6d13-41b5-8f7e-cb8b46fcbc39" />


---

## 📝 Tugas 3: Analisis dan Dokumentasi

### 1. Penjelasan Arsitektur

#### A. Diagram ERD (Entity Relationship Diagram)
<img width="1112" height="522" alt="Untitled (2)" src="https://github.com/user-attachments/assets/acc5bce5-f8e3-41df-80c4-63430e7be418" />


#### B. Penjelasan Relasi Antar Tabel
1. **Author ke Book (One-to-Many):** 1 Penulis (`Author`) dapat menulis banyak Buku (`Book`). Kolom `author_id` pada tabel `books` bertindak sebagai *Foreign Key* yang terhubung ke `id` tabel `authors` dengan opsi `onDelete('cascade')`.
2. **Book ke Category (Many-to-Many):** 1 Buku dapat memiliki beberapa Kategori, dan 1 Kategori dapat mencakup banyak Buku. Relasi ini dihubungkan secara fleksibel melalui *pivot table* `book_category`.
3. **User ke Authorization Policy:** Tabel `users` memiliki kolom `role` (`admin`, `staff`, `viewer`). Hak akses terhadap operasi data diatur secara terpusat melalui `BookPolicy`.

#### C. Flow Aplikasi (Request hingga Response)
1. **HTTP Request:** Pengguna mengakses route admin panel Filament (contoh: `/admin/books`).
2. **Middleware & Authentication:** Framework mengautentikasi pengguna dan mengecek hak akses berdasarkan role di `BookPolicy`.
3. **Filament Resource & Livewire Component:** Request ditangani oleh `BookResource` yang menyusun komponen UI interaktif menggunakan Livewire tanpa reload halaman penuh.
4. **Eloquent ORM Query:** Resource berkomunikasi dengan Model (`Book`, `Author`, `Category`) untuk mengambil atau meng-update data pada database SQLite.
5. **UI Rendering:** Filament merender Blade Component & Tailwind CSS ke tampilan browser pengguna.

---

### 2. Perbandingan Filament vs Pendekatan Tradisional

| Kriteria Perbandingan | Filament 3.x (Declarative) | Custom Build / Manual (Controller + Blade) |
| :--- | :--- | :--- |
| **Kecepatan Development** | **Sangat Cepat**: UI tabel, form, filter, dan pagination dibuat secara otomatis dari kode deklaratif. | **Lambat**: Harus membuat Controller, Form Request, Blade View, dan CSS manual per halaman. |
| **Learning Curve** | **Sedang**: Membutuhkan pemahaman arsitektur Laravel, Livewire, dan konvensi Filament API. | **Rendah - Sedang**: Menggunakan konsep dasar MVC Laravel standar. |
| **Kustomisasi UI** | **Tinggi (Terstruktur)**: Kustomisasi mengikuti komponen UI siap pakai yang disediakan Filament. | **Tak Terbatas**: Bebas mendesain tampilan HTML/CSS dari nol sesuai keinginan. |
| **Fitur Built-in** | **Sangat Lengkap**: Meng-include upload file, image editor, searching, filtering, export, dan badge otomatis. | **Manual**: Harus di-code satu per satu menggunakan library tambahan. |

#### Kelebihan & Kekurangan Filament:
- **Kelebihan:** Menghemat waktu pembuatan Admin Panel hingga 80%, mengadopsi standar UI/UX modern out-of-the-box, type-safe, serta integrasi Livewire yang sangat dinamis.
- **Kekurangan:** Kurang cocok untuk *public-facing website* yang membutuhkan desain visual bebas dari konvensi layout dashboard admin.

#### Kapan Menggunakan Filament?
- **Gunakan Filament jika:** Membangun aplikasi berbasis admin panel, backoffice perusahaan, CMS internal, atau dashboard CRUD yang membutuhkan kecepatan rilis (RAD/MVP).
- **Hindari Filament jika:** Membangun landing page publik, aplikasi e-commerce customer-facing, atau aplikasi backend API saja.

---

### 3. Refleksi Pembelajaran

- **Apa yang Dipelajari:**
  1. Memahami prinsip *Rapid Application Development* (RAD) memanfaatkan Filament 3.x pada Laravel.
  2. Implementasi relasi database kompleks (*One-to-Many* dan *Many-to-Many*) dalam bentuk form deklaratif.
  3. Menerapkan *Role-Based Access Control* (RBAC) menggunakan Laravel Policy untuk mengamankan data berdasarkan hak akses role user (`admin`, `staff`, `viewer`).
  4. Pengelolaan media penyimpanan (*Storage Management*) untuk upload cover buku.

- **Kesulitan yang Dihadapi & Solusi:**
  - *Kendala 1:* Terjadi error *NOT NULL constraint failed* saat submit form buku.  
    *Solusi:* Memperbaiki struktur schema `form()` pada `BookResource` agar field input terikat (*bound*) secara benar dengan kolom database.
  - *Kendala 2:* Konflik migrasi penambahan kolom ganda (*duplicate column description*).  
    *Solusi:* Merapikan berkas migrasi database dan mengeksekusi ulang `php artisan migrate:fresh --seed`.

- **Rencana Pengembangan Selanjutnya:**
  1. Menambahkan fitur peminjaman buku (*Transaction System*) untuk mencatat riwayat peminjaman siswa/anggota.
  2. Menambahkan fitur ekspor data laporan buku ke dalam format PDF dan Excel.
  3. Mengimplementasikan notifikasi email otomatis saat batas waktu pengembalian buku hampir habis.
