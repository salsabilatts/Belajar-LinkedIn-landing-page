@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Mastering LinkedIn for Career Growth</h1>
                <p class="subtitle">Tingkatkan karir Anda dengan strategi LinkedIn yang terbukti efektif. Pelajari cara membangun personal brand yang kuat dan memperluas jaringan profesional.</p>
                <a href="#daftar" class="cta-button">Daftar Sekarang</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Tentang Kelas</h2>
                    <p>LinkedIn telah menjadi platform profesional terpenting di dunia dengan lebih dari 900 juta pengguna aktif. Namun, kebanyakan orang belum memanfaatkan potensi penuh LinkedIn untuk mengembangkan karir mereka.</p>
                    <p>Dalam kelas ini, Anda akan mempelajari strategi komprehensif untuk membangun profil LinkedIn yang menarik, menciptakan konten yang engaging, membangun jaringan berkualitas, dan menggunakan LinkedIn sebagai alat pencarian kerja yang powerful. Materi dirancang khusus berdasarkan tren terkini dan best practices dari para profesional sukses.</p>
                </div>
                <div class="about-image">
                    <div class="linkedin-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits" id="benefits">
        <div class="container">
            <h2>Manfaat Utama</h2>
            <div class="benefits-grid">
                @foreach($benefits as $benefit)
                <div class="benefit-card">
                    <div class="benefit-icon">
                        @if($benefit['icon'] == 'check-circle')
                            <svg width="40" height="40" fill="white" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        @elseif($benefit['icon'] == 'trending-up')
                            <svg width="40" height="40" fill="white" viewBox="0 0 24 24">
                                <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z"/>
                            </svg>
                        @elseif($benefit['icon'] == 'users')
                            <svg width="40" height="40" fill="white" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        @else
                            <svg width="40" height="40" fill="white" viewBox="0 0 24 24">
                                <path d="M20 6h-2.18c.11-.31.18-.65.18-1a2.996 2.996 0 0 0-5.5-1.65l-.5.67-.5-.68C10.96 2.54 10.05 2 9 2 7.34 2 6 3.34 6 5c0 .35.07.69.18 1H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-5-2c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM9 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1z"/>
                            </svg>
                        @endif
                    </div>
                    <h3>{{ $benefit['title'] }}</h3>
                    <p>{{ $benefit['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <h2>Testimoni Alumni</h2>
            <div class="testimonial-grid">
                @foreach($testimonials as $testimonial)
                <div class="testimonial-card">
                    <p class="testimonial-text">{{ $testimonial['testimonial'] }}</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">{{ $testimonial['avatar'] }}</div>
                        <div class="author-info">
                            <h4>{{ $testimonial['name'] }}</h4>
                            <p>{{ $testimonial['position'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-container">
                @foreach($faqs as $index => $faq)
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <span>{{ $faq['question'] }}</span>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>{{ $faq['answer'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Registration Form -->
    <section class="final-cta" id="daftar">
        <div class="container">
            <h2>Siap Mengubah Karir Anda?</h2>
            <p>Bergabunglah dengan ribuan profesional yang telah merasakan dampak positif LinkedIn untuk karir mereka.</p>
            
            <div class="registration-form-container">
                <form action="{{ route('contact.store') }}" method="POST" class="registration-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Nama Lengkap" required value="{{ old('name') }}">
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}">
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <input type="tel" name="phone" placeholder="Nomor WhatsApp" required value="{{ old('phone') }}">
                        @error('phone')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <textarea name="message" placeholder="Pesan (Opsional)" rows="3">{{ old('message') }}</textarea>
                        @error('message')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <button type="submit" class="cta-button">Daftar Sekarang - Rp 499.000</button>
                </form>
            </div>
        </div>
    </section>
@endsection