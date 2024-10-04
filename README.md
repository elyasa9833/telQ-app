<p align="center"><img src="https://github.com/elyasa9833/telQ-app/assets/91476344/589a1867-452a-40be-96f5-43c0ad9b9191" height="200" alt="TelQ! Logo"></p>
<p align="center">
    <img alt="GitHub contributors" src="https://img.shields.io/github/contributors/elyasa9833/telQ-app">
    <img alt="top languages" src="https://img.shields.io/github/languages/top/elyasa9833/telQ-app">
</p>

## About TelQ!

<p align=justify>TelQ adalah platform tanya jawab daring yang memungkinkan pengguna untuk berpartisipasi dalam pertukaran pengetahuan dan informasi. Target Pengguna dari TelQ ini sendiri adalah mahasiswa di Telkom University. Berikut adalah beberapa komponen utama sistemnya: </p>
<ul>
    <li><b>Pertanyaan dan Jawaban:</b> Pengguna dapat mengajukan pertanyaan tentang berbagai topik atau menjawab pertanyaan yang diajukan oleh orang lain. Setiap pertanyaan memiliki sejumlah jawaban yang dapat diberikan oleh pengguna.</li>
    <li><b>Profil Pengguna:</b> Setiap pengguna memiliki profil pribadi yang mencakup informasi mereka di TelQ. Ini membantu dalam membangun reputasi dan kredibilitas pengguna. </li>
    <li><b>Sistem Voting:</b> Pengguna dapat memberikan suara atas pertanyaan dan jawaban yang mereka anggap bermanfaat atau berkualitas. Voting ini memengaruhi peringkat pertanyaan dan jawaban, sehingga konten yang berkualitas lebih mudah</li>
</ul>


## Panduan Deployment Aplikasi

### 1. Web Server

Siapkan aplikasi web server terlebih dahulu, ada beberapa tools yang bisa digunakan:

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
composer install
```
> **Note:** The most important thing to do when cloning a laravel project is to first run `composer update` then `composer install`. The composer install command installs any required dependencies for that laravel app.

### 4. Konfigurasi aplikasi 
Coba periksa, apakah ada file `.env`. Jika tidak ada, copy file `.env.example` dan paste dengan nama `.env`.

Konfigurasikan aplikasi seperti: nama database, dll. Terletak di file `.env`. 
Contoh: `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`.

### 5. Generate App Key

Tunggu proses penginstalan package pada composer selesai, setelah itu jalankan:
```bash
php artisan key:generate
```
> **Note:** If you need to generate a key manually, you can do so from any Laravel/artisan-enabled php cli using `php artisan key:generate --show` (supposedly this will not modify any of your existing settings). Then you can use that key string in your config (however you have your secrets saved). I.e. you don't need to run `php artisan key:generate` on the server you are setting up (this can be useful if you're deploying a docker image to a container host like Heroku or AWS App Runner).

### 6. Database: Migrations & Seeders

```bash
php artisan migrate --seed
```

Perintah ini akan membantu proses migrate database. Jadi, tidak perlu membuat database secara manual, `artisan migrate` secara otomatis akan membuat database sesuai konfigurasi di `.env` dan mengisinya dengan data di _seeder_

> **Note:** You can call `migrate:refresh` with the `--seed` option to automatically seed after the migrations are complete.

### 7. Create Symbolic link
```bash
php artisan storage:link
```

Digunakan untuk membuat tautan simbolis antara direktori publik dengan penyimpanan file pribadi.

### 8. Run App
```bash
php artisan serve
```

## API Reference

### # Get all users

```bash
GET /api/getAllUsers
```

| Parameter      | Type     | Description                |
| :------------- | :------- | :------------------------- |
| `bearer_token` | `string` | **Required**. Your API key |

### # Get all questions

```bash
GET /api/getAllQuestions
```

| Parameter      | Type     | Description                |
| :------------- | :------- | :------------------------- |
| `bearer_token` | `string` | **Required**. Your API key |

### # Get all answers

```bash
GET /api/getAllAnswers
```

| Parameter      | Type     | Description                |
| :------------- | :------- | :------------------------- |
| `bearer_token` | `string` | **Required**. Your API key |

### # How to get api token
```bash
POST /api/login
```

| Parameter  | Type     | Description                                   |
| :--------- | :------- | :-------------------------------------------- |
| `email`    | `string` | **Required**. (email with registered account) |
| `password` | `string` | **Required**.                                 |

## Project On-goin' members

| NIM        | Nama                                                   |
| :----------| :----------------------------------------------------- |
| 6706223068 | [Muhammad Dhafa Ramadhani](https://github.com/MDhafaR) |
| 6706220037 | [Adrian Maulana](https://github.com/mega105)           |
| 6706220043 | [Amri Elyasa](https://github.com/elyasa9833)           |

