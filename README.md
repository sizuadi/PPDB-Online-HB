## Projek Bebas Pakai dan Modifikasi

_Projek ini dibuat awalnya untuk mengajar adik kelas saya dan untuk menambah portfolio juga hehe. Ini projeknya bertema PPDB sederhana, dengan ada nya landing page dan bagian admin panel. Project ini dibuat menggunakan Framework Laravel, Bootstrap dan panel admin menggunakan SB ADMIN 2. Silahkan diinstall dengan mengikuti langkah-langkah yang ada di bawah ini...._

## Cara Installasi
#### Laravel 9 membutuhkan versi php minimal php8.0.2 atau yang lebih tinggi
- Clone proyek di `git clone https://github.com/sizuwanoadi/PPDB-Online-HB`
- Masuk ke branch develop `git chekout develop`
- Install devendensi `composer install` pada terminal atau CMD pada windows
- Salin .env.example ke .env, kumudian sesuaikan konfigurasi applikasi dengan database yang Anda gunakan.
- Jalankan migrate database `php artisan migrate:fresh --seed` pada terminal atau CMD pada windows. jika sukses
- Untuk pertama kalinya sebelum menjalankan aplikasi, silahkan generate key `php artisan key:generate` atau lewati jika sudah melakukannya
- Jalankan `php artisan serve --port=8000`
- Host anda sudah siap `http://localhost:8000` untuk admin di `http://localhost:8000/admin`

## Demo User dan Password Admin

```
Email/Username: admin@admin.com
Password: 123456
```
