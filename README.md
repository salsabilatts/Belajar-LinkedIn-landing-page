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
Frontend Features:
📱 Fully Responsive – optimal di semua perangkat
🎨 Modern Design – clean dan profesional
⚡ Interactive Elements – FAQ accordion, scroll animations
🎭 Smooth Animations – CSS transitions & effects
📊 Progress Tracking – visual scroll progress

Backend Features:
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
git clone [https://github.com/salsabilatts/Belajar-LinkedIn-landing-page]
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

🌐 Deployment
Untuk assignment ini, saya menggunakan gunakan Vercel untuk demo live
Live demo: [YOUR_LIVE_DEMO_URL]

);
