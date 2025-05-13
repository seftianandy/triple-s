<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Digital Silat | Seni Penilaian</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background: linear-gradient(135deg, #1a202c 0%, #4a5568 100%); /* Dark gradient background */
            color: #f7fafc; /* Light text color */
        }
        .hero {
            padding: 8rem 2rem;
            text-align: center;
        }
        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #e53e3e; /* Accent color */
        }
        .hero-subtitle {
            font-size: 1.5rem;
            color: #d2d6dc;
            margin-bottom: 2rem;
        }
        .cta-button {
            display: inline-block;
            padding: 1rem 2rem;
            background-color: #e53e3e; /* Accent color */
            color: #fff;
            text-decoration: none;
            border-radius: 0.5rem;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        .cta-button:hover {
            background-color: #c53030;
        }
        .feature-section {
            padding: 4rem 2rem;
            background-color: #2d3748; /* Darker section background */
        }
        .feature-title {
            font-size: 2rem;
            font-weight: 600;
            color: #fff;
            text-align: center;
            margin-bottom: 2rem;
        }
        .feature-list {
            list-style: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        .feature-item {
            background-color: #4a5568;
            padding: 1.5rem;
            border-radius: 0.5rem;
        }
        .feature-icon {
            font-size: 2rem;
            color: #e53e3e; /* Accent color */
            margin-bottom: 0.5rem;
        }
        .feature-item-title {
            font-weight: 600;
            color: #fff;
            margin-bottom: 0.5rem;
        }
        .feature-item-description {
            color: #d2d6dc;
        }
        .navigation {
            position: absolute;
            top: 2rem;
            right: 2rem;
        }
        .nav-button {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            text-decoration: none;
            border-radius: 0.375rem;
            margin-left: 1rem;
            transition: background-color 0.3s ease;
        }
        .nav-button:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        .logo {
            position: absolute;
            top: 2rem;
            left: 2rem;
            font-size: 1.5rem;
            font-weight: 700;
            color: #fff;
        }
        .app-links {
            text-align: center;
            padding: 2rem;
        }
        .app-link-button {
            display: inline-block;
            padding: 1rem 2rem;
            background-color: #6b7280; /* Secondary color */
            color: #fff;
            text-decoration: none;
            border-radius: 0.5rem;
            font-weight: 600;
            margin: 0 1rem;
            transition: background-color 0.3s ease;
        }
        .app-link-button:hover {
            background-color: #4a5568;
        }

        .hero-actions {
            display: flex;
            justify-content: center; /* Agar elemen berada di tengah secara horizontal */
            align-items: center; /* Agar elemen berada di tengah secara vertikal (jika perlu) */
            gap: 2rem; /* Jarak antara tombol dan bagian aplikasi lain */
            flex-direction: column; /* Atur menjadi kolom secara default untuk responsif */
        }

        .app-links-inline {
            display: flex;
            align-items: center;
            gap: 1rem; /* Jarak antara teks "Aplikasi Lainnya:" dan tombol */
        }

        .app-links-inline h2 {
            margin-right: 0; /* Hilangkan margin kanan default pada h2 */
            font-size: 1rem; /* Sesuaikan ukuran font h2 */
            font-weight: normal; /* Sesuaikan ketebalan font h2 */
        }

        /* Media query untuk layar yang lebih lebar agar menjadi sejajar horizontal */
        @media (min-width: 768px) {
            .hero-actions {
                flex-direction: row; /* Atur menjadi baris untuk tampilan sejajar */
            }
        }
    </style>
</head>
<body class="antialiased font-sans">
    <div class="min-h-screen bg-gray-900">
        <div class="relative">
            <div class="logo">Digital Silat</div>
            <div class="navigation">
                <a href="#" class="nav-button">Tentang</a>
                <a href="#" class="nav-button">Fitur</a>
                <a href="#" class="nav-button">Kontak</a>
            </div>

            <section class="hero">
                <h1 class="hero-title">Aplikasi Penilaian Seni Pencak Silat Digital</h1>
                <p class="hero-subtitle">Nilai setiap gerakan dengan presisi dan kemudahan.</p>
                <div class="hero-actions">
                    <div class="app-links-inline">
                        <a href="/tanding" class="app-link-button">Tanding Silat App</a>
                    </div>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="cta-button">Masuk Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="cta-button">Mulai Sekarang</a>
                        @endauth
                    @endif
                </div>
            </section>

            <section class="feature-section">
                <h2 class="feature-title">Fitur Utama</h2>
                <ul class="feature-list">
                    <li class="feature-item">
                        <div class="feature-icon">🥋</div>
                        <h3 class="feature-item-title">Penilaian Detail Gerakan</h3>
                        <p class="feature-item-description">Memberikan penilaian mendalam untuk setiap aspek gerakan seni.</p>
                    </li>
                    <li class="feature-item">
                        <div class="feature-icon">📊</div>
                        <h3 class="feature-item-title">Rekapitulasi Nilai Otomatis</h3>
                        <p class="feature-item-description">Menghitung total nilai secara otomatis untuk efisiensi penilaian.</p>
                    </li>
                    <li class="feature-item">
                        <div class="feature-icon">💾</div>
                        <h3 class="feature-item-title">Penyimpanan Data Terpusat</h3>
                        <p class="feature-item-description">Semua data penilaian tersimpan aman dan mudah diakses.</p>
                    </li>
                    <li class="feature-item">
                        <div class="feature-icon">📱</div>
                        <h3 class="feature-item-title">Akses Multi-Perangkat</h3>
                        <p class="feature-item-description">Dapat diakses melalui berbagai perangkat seperti komputer dan tablet.</p>
                    </li>
                </ul>
            </section>

            <footer class="py-8 text-center text-sm text-gray-400">
                &copy; {{ date('Y') }} Digital Silat. All rights reserved.
            </footer>
        </div>
    </div>
</body>
</html>
