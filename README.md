<p align="center"><img src="https://cdn.discordapp.com/attachments/811038806194651176/1192950213191663726/small_logo.png?ex=65aaf076&is=65987b76&hm=d93f83df4e3a8dc655f9fd9e588c68802dacf96631705695c6431a53c13cf22a&" height="200" alt="TelQ! Logo"></p>
<p align="center">
    <img alt="GitHub contributors" src="https://img.shields.io/github/contributors/elyasa9833/telQ-app">
    <img alt="top languages" src="https://img.shields.io/github/languages/top/elyasa9833/telQ-app">
</p>

## About TelQ!

<p align=justify>Aplikasi TelQ! adalah sebuah platform yang dirancang untuk menyediakan berita dan 
informasi terbaru tentang kegiatan yang terjadi di dalam dan sekitar kampus kepada mahasiswa, dosen, dan karyawan universitas. Aplikasi ini dapat diakses melalui website atau aplikasi mobile yang dapat diunduh melalui smartphone.</p>
<p align=justify>Aplikasi TelQ! akan memudahkan mahasiswa, dosen, dan staf universitas untuk menemukan 
informasi terbaru tentang kegiatan kampus. Selain itu, aplikasi ini juga dapat menjadi sarana untuk mempererat hubungan antar sesama di lingkungan universitas dan meningkatkan 
keterlibatan mahasiswa dalam kegiatan kampus.</p>
<p align=justify>Target pengguna dari aplikasi portal berita kampus adalah seluruh anggota 
universitas yang ingin mendapatkan akses mudah dan cepat terhadap informasi terbaru 
mengenai kegiatan dan event yang terjadi di kampus.</p>

## Panduan Deployment Aplikasi

### 1. Siapkan aplikasi web server terlebih dahulu, ada beberapa tools yang bisa digunakan:
- [XAMPP](https://www.apachefriends.org/)
- [Laragon](https://laragon.org/)
- [MAMP](https://www.mamp.info/en/mamp/windows/)
- [EasyPHP](https://www.easyphp.org/)
- [Winginx](https://winginx.com/en/)
- [WAMPServer](https://sourceforge.net/projects/wampserver/files/)

### 2. Tools lainnya
- [Composer](https://getcomposer.org/download/)
- [NodeJS](https://nodejs.org/en/download/current) (opsional)

> PHP version: 8.1.10, MySQL: 8.0.30

### 3. Install Composer
```bash
composer update
```
```bash
composer install
```
> **Note:** The most important thing to do when cloning a laravel project is to first run `composer update` then `composer install`. The composer install command installs any required dependencies for that laravel app.

### 4. Generate App Key
```bash
php artisan key:generate
```
> **Note:** If you need to generate a key manually, you can do so from any Laravel/artisan-enabled php cli using `php artisan key:generate --show` (supposedly this will not modify any of your existing settings). Then you can use that key string in your config (however you have your secrets saved). I.e. you don't need to run `php artisan key:generate` on the server you are setting up (this can be useful if you're deploying a docker image to a container host like Heroku or AWS App Runner).

### 5. Konfigurasi aplikasi 
Konfigurasikan aplikasi seperti: nama database, dll. Terletak di file `.env`. 
Contoh: `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`

### 6. Create Symbolic link
Digunakan untuk membuat tautan simbolis antara direktori publik dengan penyimpanan file pribadi.
```bash
php artisan link:storage
```

### 7. Run App
```bash
php artisan serve
```

## API Reference

#### Get all users

```bash
GET /api/getAllUsers
```

| Parameter      | Type     | Description                |
| :------------- | :------- | :------------------------- |
| `bearer_token` | `string` | **Required**. Your API key |

#### Get all questions

```bash
GET /api/getAllQuestions
```

| Parameter      | Type     | Description                |
| :------------- | :------- | :------------------------- |
| `bearer_token` | `string` | **Required**. Your API key |

#### Get all answers

```bash
GET /api/getAllAnswers
```

| Parameter      | Type     | Description                |
| :------------- | :------- | :------------------------- |
| `bearer_token` | `string` | **Required**. Your API key |

## Project On-goin' members

| NIM        | Nama                                                   |
| :----------| :----------------------------------------------------- |
| 6706223068 | [Muhammad Dhafa Ramadhani](https://github.com/MDhafaR) |
| 6706220037 | [Adrian Maulana](https://github.com/mega105)           |
| 6706220043 | [Amri Elyasa](https://github.com/elyasa9833)           |

