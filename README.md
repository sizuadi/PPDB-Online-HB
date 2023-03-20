## Projek Bebas Pakai dan Modifikasi

Projek ini dibuat awalnya untuk mengajar adik kelas saya dan untuk menambah portfolio juga hehe. Ini projeknya bertema PPDB sederhana, dengan ada nya landing page dan bagian admin panel. Project ini dibuat menggunakan Framework Laravel, Bootstrap dan panel admin menggunakan SB ADMIN 2. Silahkan diinstall dengan mengikuti langkah-langkah yang ada di bawah ini....

## Cara Install Projek Ini
- Jalankan `git clone https://github.com/sizuwanoadi/PPDB-Online-HB`
- Jalankan composer install.
- Jalankan cp .env.example .env or copy .env.example .env.
- Sesuaikan konfigurasi database anda di .env
- Jalankan php artisan key:generate
- Jalankan php artisan migrate --seed
- Jalankan php artisan serve
- Buka website sesuai dengan localhost dan portnya di web browser anda contoh `http://localhost:8000`
```
user url : localhost:8000
admin url : localhost:8000/admin
```

## User dan Password Admin

```
email: admin@admin.com
password: 123456
```
