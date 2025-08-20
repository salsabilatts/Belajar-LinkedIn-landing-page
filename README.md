Mastering LinkedIn for Career Growth - Laravel Application 🚀

Modern Laravel web application dengan landing page responsive untuk promosi kelas online "Mastering LinkedIn for Career Growth"

📋 Deskripsi Project

Aplikasi web Laravel yang menampilkan landing page modern, responsive, dan profesional untuk mempromosikan kelas online LinkedIn.
Dilengkapi dengan sistem registrasi, database integration (SQLite/MySQL), dan form validation.

🛠️ Tools & Teknologi

Laravel 10 – PHP Framework

Blade Templates – Template Engine

SQLite/MySQL – Database

Vite – Asset Bundling

Tailwind CSS – Utility-first CSS

Vanilla JavaScript – Frontend Interactions

Eloquent ORM – Database Operations

✨ Fitur Utama
Frontend Features

📱 Fully Responsive – optimal di semua perangkat

🎨 Modern Design – clean dan profesional

⚡ Interactive Elements – FAQ accordion, scroll animations

🎭 Smooth Animations – CSS transitions & effects

📊 Progress Tracking – visual scroll progress

Backend Features

🔐 CSRF Protection – keamanan form

✅ Server-side Validation – validasi data robust

💾 Database Integration – penyimpanan data registrasi

📧 Contact Form – sistem kontak terstruktur

🔄 MVC Architecture – struktur kode yang bersih

🚀 Installation & Setup
Prerequisites

PHP 8.1+

Composer

Node.js & NPM

MySQL/SQLite

Step 1: Clone & Install
# Clone repository
git clone [YOUR_REPOSITORY_URL]
cd linkedin-landing-page

# Install PHP dependencies
composer install

# Install Node dependencies
npm install

Step 2: Environment Setup
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate


Konfigurasi database di .env:

DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database.sqlite


atau kalau pakai MySQL:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=linkedin_landing
DB_USERNAME=your_username
DB_PASSWORD=your_password

Step 3: Database Setup
# SQLite
touch database/database.sqlite

# Migration
php artisan migrate

Step 4: Build Assets
# Development
npm run dev

# Production
npm run build

Step 5: Start Development Server
php artisan serve


Akses aplikasi di: http://localhost:8000

📁 Struktur Project
linkedin-landing-page/
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php
│   │   └── ContactController.php
│   └── Models/
│       └── ContactForm.php
├── database/
│   └── migrations/
│       └── create_contact_forms_table.php
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   ├── welcome.blade.php
│   │   └── thank-you.blade.php
│   ├── css/
│   │   └── app.css
│   └── js/
│       └── app.js
├── routes/
│   └── web.php
└── README.md

🌐 Deployment

Bisa di-deploy ke Railway, Vercel (frontend only), atau Heroku

Untuk assignment ini, gunakan Railway (Laravel + SQLite) untuk demo live

Live demo: [YOUR_LIVE_DEMO_URL]

📊 Database Schema (Contact Forms)
CREATE TABLE contact_forms (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    message TEXT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);