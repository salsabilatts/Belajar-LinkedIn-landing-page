@extends('layouts.app')

@section('title', 'Terima Kasih - Belajar LinkedIn')

@section('content')
<section class="thank-you-section">
    <div class="container">
        <div class="thank-you-content">
            <div class="check-icon">
                <svg viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                </svg>
            </div>
            
            <h1>Terima Kasih!</h1>
            <p>Pendaftaran Anda telah berhasil dikirim. Tim kami akan menghubungi Anda melalui WhatsApp dalam waktu 1x24 jam untuk konfirmasi dan informasi pembayaran.</p>
            
            <div style="background: rgba(255,255,255,0.1); padding: 30px; border-radius: 15px; margin: 2rem 0;">
                <h3 style="margin-bottom: 1rem;">Langkah Selanjutnya:</h3>
                <ul style="text-align: left; line-height: 2;">
                    <li>✅ Tunggu konfirmasi dari tim kami</li>
                    <li>✅ Lakukan pembayaran sesuai instruksi</li>
                    <li>✅ Join grup WhatsApp kelas</li>
                    <li>✅ Mulai pembelajaran LinkedIn mastery!</li>
                </ul>
            </div>
            
            <a href="{{ route('home') }}" class="cta-button" style="background: rgba(255,255,255,0.2); color: white; border: 2px solid white;">
                Kembali ke Beranda
            </a>
            
            <div style="margin-top: 2rem; opacity: 0.8;">
                <p><strong>Butuh bantuan?</strong></p>
                <p>WhatsApp: +62 812-3456-7890</p>
                <p>Email: info@belajarlinkedin.com</p>
            </div>
        </div>
    </div>
</section>
@endsection