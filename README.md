<div align="center">

# 📢 Sistem Pengaduan Masyarakat

**Aplikasi pengaduan masyarakat berbasis Laravel dan MySQL dengan alur pengguna, petugas, dan administrator.**

[![Laravel](https://img.shields.io/badge/Framework-Laravel-FF2D20?logo=laravel&logoColor=white)](https://laravel.com/)
[![MySQL](https://img.shields.io/badge/Database-MySQL-4479A1?logo=mysql&logoColor=white)](https://www.mysql.com/)
[![GitHub](https://img.shields.io/badge/Source-GitHub-181717?logo=github)](https://github.com/freyy4/pengaduan)

</div>

## 📖 Tentang Proyek

**Sistem Pengaduan Masyarakat** adalah proyek web untuk mempelajari digitalisasi proses penyampaian dan pengelolaan laporan warga. Repositori menggunakan Laravel dan MySQL, serta menyediakan referensi akun demo untuk tiga peran: **masyarakat**, **petugas**, dan **admin**.

Proyek ini menggambarkan salah satu studi kasus penerapan aplikasi informasi untuk pelayanan publik.

## 👥 Peran Pengguna

| Peran | Konteks penggunaan |
| --- | --- |
| Masyarakat | Mengakses layanan pengaduan dari sisi pelapor |
| Petugas | Mengelola proses penanganan dari sisi petugas |
| Admin | Mengelola sistem dari sisi administrator |

> Hak akses dan detail proses masing-masing peran perlu disesuaikan dengan implementasi yang ada pada controllers, routes, dan views.

## 🛠️ Teknologi

- PHP dan Laravel
- MySQL
- Tailwind CSS (terlihat pada konfigurasi frontend)
- Laravel Mix / Webpack
- Composer dan npm

## 📁 Struktur Proyek

```text
pengaduan/
├── app/                # Logic aplikasi
├── config/             # Konfigurasi
├── database/           # Migration dan seeder
├── public/             # Aset publik
├── resources/          # Views dan frontend
├── routes/             # Routing aplikasi
├── tests/              # Pengujian
├── pengaduan.sql       # Dump/skema SQL pada repo
├── docker-compose.yml  # Konfigurasi container
├── composer.json       # Dependensi backend
├── package.json        # Dependensi frontend
└── .env.example        # Template environment
```

## 🚀 Instalasi Lokal

### Prasyarat

- PHP dan ekstensi sesuai `composer.json`
- Composer
- MySQL
- Node.js dan npm

### 1. Clone proyek

```bash
git clone https://github.com/freyy4/pengaduan.git
cd pengaduan
composer install
cp .env.example .env
php artisan key:generate
```

### 2. Konfigurasi database

Buat database lokal, lalu atur `DB_DATABASE`, `DB_USERNAME`, dan `DB_PASSWORD` dalam file `.env`.

Repositori memuat file `pengaduan.sql`. Periksa isinya sebelum memilih salah satu pendekatan berikut:

- Import dump SQL tersebut **atau**
- Jalankan `php artisan migrate` jika migration yang tersedia merupakan sumber skema database yang lengkap.

**Hindari mengimpor dump dan menjalankan migration yang menduplikasi tabel yang sama.**

### 3. Instal aset dan jalankan server

```bash
npm install
npm run dev
php artisan serve
```

Buka `http://127.0.0.1:8000`.

## 🖼️ Screenshot

Tambahkan screenshot dengan data fiktif pada folder `docs/screenshots/`, misalnya:

- Tampilan pengaduan masyarakat
- Dashboard petugas
- Dashboard admin
- Detail dan status laporan

## 🔐 Keamanan dan Akun Demo

Repositori saat ini menyertakan `Informasi Login.txt` dengan contoh akun dan password. **Jangan gunakan kredensial tersebut pada server publik atau produksi.** Jika masih digunakan di mana pun, ganti password dan hapus informasi sensitif dari Git beserta riwayatnya sesuai kebutuhan.

Untuk demo, gunakan akun yang dibuat khusus di lingkungan lokal dengan data fiktif.

## 👨‍💻 Developer

**Farid Syifa Arrahim** — [@freyy4](https://github.com/freyy4)

---

*Studi kasus pengembangan sistem informasi pelayanan masyarakat.*
