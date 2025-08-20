<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $benefits = [
            [
                'icon' => 'check-circle',
                'title' => 'Profil LinkedIn yang Optimal',
                'description' => 'Pelajari cara membuat profil LinkedIn yang menonjol dari kompetisi. Dari foto profil yang profesional hingga summary yang compelling.'
            ],
            [
                'icon' => 'trending-up',
                'title' => 'Strategi Content Marketing',
                'description' => 'Kuasai seni membuat konten LinkedIn yang viral dan membangun thought leadership di industri Anda.'
            ],
            [
                'icon' => 'users',
                'title' => 'Networking yang Efektif',
                'description' => 'Bangun jaringan profesional berkualitas tinggi dengan teknik networking yang terbukti efektif.'
            ],
            [
                'icon' => 'briefcase',
                'title' => 'Job Search Mastery',
                'description' => 'Manfaatkan LinkedIn sebagai mesin pencari kerja yang powerful untuk mendapatkan posisi impian.'
            ]
        ];

        $testimonials = [
            [
                'name' => 'Sarah Andini',
                'position' => 'Digital Marketing Manager',
                'avatar' => 'SA',
                'testimonial' => 'Setelah mengikuti kelas ini, followers LinkedIn saya meningkat 300% dan saya mendapat 5 tawaran kerja dalam 2 bulan!'
            ],
            [
                'name' => 'David Pranata',
                'position' => 'Business Consultant',
                'avatar' => 'DP',
                'testimonial' => 'Kelas yang sangat praktis dan applicable. Dalam waktu 1 bulan setelah kelas, saya berhasil closing 3 klien besar dari LinkedIn.'
            ],
            [
                'name' => 'Maya Rizki',
                'position' => 'Software Engineer',
                'avatar' => 'MR',
                'testimonial' => 'Sebagai fresh graduate, kelas ini membantu saya membangun personal brand yang kuat.'
            ]
        ];

        $faqs = [
            [
                'question' => 'Berapa lama durasi kelas ini?',
                'answer' => 'Kelas berlangsung selama 4 minggu dengan total 12 sesi pembelajaran. Setiap sesi berdurasi 90 menit dengan praktik langsung dan review hasil.'
            ],
            [
                'question' => 'Apakah cocok untuk pemula?',
                'answer' => 'Sangat cocok! Kelas dimulai dari dasar-dasar LinkedIn hingga strategi advanced. Tidak ada prerequisite khusus, yang penting Anda memiliki akun LinkedIn.'
            ],
            [
                'question' => 'Apakah ada sertifikat?',
                'answer' => 'Ya! Setelah menyelesaikan semua modul dan tugas praktik, Anda akan mendapat sertifikat yang bisa ditampilkan di profil LinkedIn Anda.'
            ]
        ];

        return view('welcome', compact('benefits', 'testimonials', 'faqs'));
    }

    public function thankYou()
    {
        return view('thank-you');
    }
}