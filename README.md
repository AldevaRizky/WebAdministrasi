# Web Administrasi dengan Sistem Autentikasi

## Deskripsi Proyek

Proyek ini adalah aplikasi web administrasi yang dilengkapi dengan sistem autentikasi untuk mengakses halaman web. Aplikasi ini memiliki dua role pengguna, yaitu **admin** dan **karyawan**. Setiap role memiliki hak akses yang berbeda:

- **Admin**: Dapat mengakses halaman **manage users**, yang mencakup sistem CRUD untuk mengelola data pengguna.
- **Karyawan**: Hanya dapat mengakses halaman **dashboard**.

Proyek ini dibangun dengan menggunakan **Laravel Breeze** untuk autentikasi pengguna, **Livewire** untuk interaktivitas yang dinamis di sisi klien, dan **Tailwind CSS** untuk desain antarmuka yang responsif dan modern. Struktur proyek mengikuti pola **MVC (Model-View-Controller)** untuk memisahkan logika bisnis, tampilan, dan data.

## Cara Instalasi dan Penggunaan

Berikut adalah langkah-langkah untuk menginstal dan menjalankan proyek ini di lingkungan lokal Anda:

1. **Kloning repositori:**
   ```bash
   git clone https://github.com/dimasprayogox/web-praktikum.git
   cd web-praktikum

2. **Instalasi dependensi:**
   Pastikan Anda memiliki Composer dan Node.js yang terinstal pada sistem Anda. Kemudian jalankan perintah berikut untuk        menginstal dependensi PHP dan frontend:**
   ```bash
   composer install
   npm install

3. **Salin file .env.example menjadi .env:**
   ```bash
   cp .env.example .env

4. **Konfigurasi database:**
   Edit file .env dan atur pengaturan database sesuai dengan konfigurasi lingkungan Anda (seperti nama database, username,         password, dsb).

5. **Generate kunci aplikasi:**
   Jalankan perintah untuk menghasilkan kunci aplikasi Laravel:
   ```bash
   php artisan key:generate

6. **Migrasi dan seeding database:**
   Jalankan migrasi untuk membuat tabel-tabel yang diperlukan oleh aplikasi:
   ```bash
   php artisan migrate

7. **Jalankan server lokal:**
   Setelah semua langkah di atas selesai, Anda dapat menjalankan server lokal untuk mengakses aplikasi:
   ```bash
   npm run dev
   php artisan serve


8. **Akses aplikasi:**
   Buka browser dan akses aplikasi di http://127.0.0.1:8000.

   
## Login sebagai Admin: 
**Anda dapat menggunakan data dummy untuk login sebagai Admin:**

Email: admin@example.com
Password: password

## Login sebagai Karyawan: 
**Anda dapat menggunakan data dummy untuk login sebagai Karyawan:**

Email: karyawan@example.com
Password: password

## Fitur Utama
Autentikasi Pengguna: Sistem login untuk admin dan karyawan dengan menggunakan Laravel Breeze.
Manajemen Pengguna (Admin): Admin dapat menambah, mengubah, menghapus, dan melihat daftar pengguna.
Dashboard (Karyawan): Karyawan dapat mengakses halaman dashboard.
Responsif dan Modern: Menggunakan Tailwind CSS untuk tampilan yang responsif dan desain modern.


## Struktur File Proyek
**Berikut adalah penjelasan tentang struktur file proyek yang digunakan dalam aplikasi ini:**
```bash
    ├── app/
    │   ├── Http/
    │   │   ├── Controllers/       # Kontroler aplikasi, menangani logika aplikasi
    │   │   ├── Livewire/          # Komponen Livewire untuk interaktivitas
    │   ├── Models/                # Model Eloquent untuk berinteraksi dengan database
    ├── bootstrap/                 # File bootstrap untuk aplikasi Laravel
    ├── config/                    # File konfigurasi untuk aplikasi
    ├── database/                  # Folder untuk file migrasi dan seeders
    │   ├── migrations/            # Migrasi untuk pembuatan tabel
    │   ├── seeders/               # Seeder untuk pengisian data awal
    ├── public/                    # Folder yang dapat diakses secara publik (assets, index.php)
    │   ├── css/                   # File CSS (termasuk Tailwind CSS)
    │   ├── js/                    # File JavaScript
    ├── resources/                 # Tampilan dan sumber daya frontend
    │   ├── views/                 # File Blade untuk tampilan halaman
    │   ├── lang/                  # File terjemahan aplikasi
    ├── routes/                    # File rute aplikasi (web.php, api.php)
    ├── storage/                   # File sementara dan log
    ├── tests/                     # Folder untuk file testing aplikasi
    ├── .env                       # File konfigurasi lingkungan (database, kunci aplikasi)
    ├── artisan                    # CLI Laravel untuk menjalankan perintah
    ├── composer.json              # File dependensi PHP (Composer)
    ├── package.json               # File dependensi frontend (npm)
    ├── tailwind.config.js         # Konfigurasi untuk Tailwind CSS
    └── webpack.mix.js             # Konfigurasi build frontend (Laravel Mix)
    

    
