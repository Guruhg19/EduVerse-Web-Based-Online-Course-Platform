# EduVerse – Web-Based Online Course Platform

![Laravel](https://img.shields.io/badge/Laravel-11-red?style=flat&logo=laravel)
![MySQL](https://img.shields.io/badge/MySQL-Database-informational?style=flat&logo=mysql)
![Spatie](https://img.shields.io/badge/Spatie-Roles%20%26%20Permissions-blue?style=flat&logo=laravel)
![Breeze](https://img.shields.io/badge/Breeze-Starter%20Kit-lightgrey?style=flat&logo=laravel)

## Deskripsi
**EduVerse – Web-Based Online Course Platform** adalah platform pembelajaran online yang dirancang untuk memberikan kemudahan bagi siswa dalam mengakses dan mengikuti kelas secara digital. Aplikasi ini dibangun menggunakan Laravel 11, Laravel Breeze sebagai starter kit autentikasi, serta Spatie untuk manajemen peran dan izin pengguna.


## Fitur Utama
- Role manajemen: Super Admin, Teacher, dan Student.
- CMS (Content Management System) untuk Super Admin dan Teacher.
- Fitur berlangganan kelas oleh siswa.
- Halaman pembelajaran untuk siswa berdasarkan kelas yang diikuti.
- Sistem autentikasi dengan Laravel Breeze.

## Cara Menjalankan Proyek

1. **Clone Repository**
```bash
git clone https://github.com/Guruhg19/EduVerse-Web-Based-Online-Course-Platform.git
cd EduVerse-Web-Based-Online-Course-Platform
```

2. **Install Dependencies**
```bash
composer install
npm install && npm run dev
```

3. **Copy File .env dan Generate Key**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Atur Konfigurasi Database**
Edit file `.env` dan sesuaikan:
```
DB_DATABASE=eduverse
DB_USERNAME=root
DB_PASSWORD=
```

5. **Migrasi & Seeder Database**
```bash
php artisan migrate --seed
```

6. **Jalankan Server Laravel**
```bash
php artisan serve
```

Akses aplikasi melalui [http://localhost:8000](http://localhost:8000)

---

Project ini merupakan bagian dari portofolio web developer untuk menunjukkan kemampuan dalam membangun platform pembelajaran online yang modern dan efisien.

---

**🌟 Dibuat dengan semangat belajar dan eksplorasi teknologi web!**

