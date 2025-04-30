# 🎓 EduVerse – Web-Based Online Course Platform

![Laravel](https://img.shields.io/badge/Laravel-12-red?style=flat&logo=laravel)
![MySQL](https://img.shields.io/badge/MySQL-Database-informational?style=flat&logo=mysql)
![Spatie](https://img.shields.io/badge/Spatie-Roles%20%26%20Permissions-blue?style=flat&logo=laravel)
![Breeze](https://img.shields.io/badge/Breeze-Starter%20Kit-lightgrey?style=flat&logo=laravel)

## 📘 Deskripsi
**EduVerse** adalah platform kursus online berbasis web yang dirancang untuk memberikan pengalaman belajar yang interaktif dan terstruktur. Aplikasi ini dibangun menggunakan Laravel 12, Laravel Breeze, Spatie untuk manajemen peran pengguna, dan MySQL sebagai basis data.

Tujuan dari project ini adalah memberikan kemudahan bagi siswa dan pengajar dalam mengakses materi pembelajaran secara daring dan sistematis.

## ✨ Fitur Utama
- 👩‍🏫 **Role manajemen**: Super Admin, Teacher, dan Student.
- 📚 **Berlangganan kelas**: Siswa dapat memilih dan mengikuti kelas tertentu.
- 🧑‍🎓 **Halaman belajar khusus**: Untuk siswa yang telah terdaftar pada kelas.
- ⚙️ **CMS untuk Teacher & Admin**: Mengelola kelas, materi, dan peserta.
- 🔐 **Autentikasi dan manajemen peran**: Menggunakan Laravel Breeze dan Spatie.

## 📂 Repository
[EduVerse Web App - GitHub](https://github.com/Guruhg19/EduVerse-Web-Based-Online-Course-Platform.git)

## 🚀 Cara Menjalankan Proyek

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

🔗 Akses aplikasi melalui [http://localhost:8000](http://localhost:8000)

---

📌 **Project ini merupakan bagian dari kelas BWA:**
Laravel 11, Breeze, Spatie: Bikin Web Platform Online Course

---


**🌟 Dibuat dengan semangat belajar & dedikasi! 💡**
