<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Akademik SPADA</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%);
            --dark-blue: #1e3a5f;
            --light-gray: #f8fafc;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: #333;
        }
        
        /* Navigation */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
        }
        
        .navbar-brand {
            font-weight: 800;
            font-size: 1.5rem;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .nav-link {
            font-weight: 500;
            color: var(--dark-blue) !important;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: #667eea !important;
        }
        
        .btn-primary-custom {
            background: var(--primary-gradient);
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-2px);
            color: white;
        }
        
        /* Hero Section */
        .hero-section {
            background: var(--primary-gradient);
            padding: 120px 0 80px;
            color: white;
            text-align: center;
        }
        
        .hero-section h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
        }
        
        .hero-section p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto 2rem;
        }
        
        /* Services Section */
        .services {
            padding: 80px 0;
            background: var(--light-gray);
        }
        
        .service-card {
            background: white;
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            height: 100%;
            border: 1px solid rgba(255, 255, 255, 0.8);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }
        
        .service-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: var(--secondary-gradient);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }
        
        .service-card h4 {
            font-weight: 700;
            color: var(--dark-blue);
            margin-bottom: 15px;
        }
        
        .service-card p {
            color: #6b7280;
            margin-bottom: 20px;
        }
        
        .btn-service {
            background: var(--primary-gradient);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }
        
        .btn-service:hover {
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        }
        
        /* About Section */
        .about-section {
            padding: 80px 0;
            background: white;
        }
        
        .about-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
        }
        
        .about-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
        }
        
        .about-icon {
            width: 70px;
            height: 70px;
            background: var(--secondary-gradient);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: white;
            margin-bottom: 25px;
        }
        
        .about-card h4 {
            font-weight: 700;
            color: var(--dark-blue);
            margin-bottom: 20px;
            font-size: 1.4rem;
        }
        
        .about-card p {
            color: #6b7280;
            line-height: 1.7;
            margin-bottom: 15px;
        }
        
        /* Vision Mission Cards */
        .vm-card {
            background: white;
            padding: 35px 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.8);
        }
        
        .vm-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }
        
        .vm-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            background: var(--primary-gradient);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }
        
        .vm-card h5 {
            font-weight: 700;
            color: var(--dark-blue);
            margin-bottom: 20px;
            font-size: 1.3rem;
        }
        
        .vm-card p {
            color: #6b7280;
            line-height: 1.7;
        }
        
        /* News Section */
        .news {
            padding: 80px 0;
            background: var(--light-gray);
        }
        
        .news-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }
        
        .news-image {
            height: 200px;
            background: var(--primary-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
        }
        
        .news-content {
            padding: 25px;
        }
        
        .news-date {
            color: #6b7280;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }
        
        .news-title {
            font-weight: 700;
            color: var(--dark-blue);
            margin-bottom: 15px;
            font-size: 1.1rem;
        }
        
        .news-excerpt {
            color: #6b7280;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        
        /* Footer */
        .footer {
            background: var(--dark-blue);
            color: white;
            padding: 50px 0 30px;
        }
        
        .footer h5 {
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .footer a {
            color: #a0aec0;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer a:hover {
            color: white;
        }
        
        .footer-bottom {
            border-top: 1px solid #2d3748;
            margin-top: 30px;
            padding-top: 20px;
            text-align: center;
            color: #a0aec0;
        }
        
        .section-title {
            font-weight: 700;
            color: var(--dark-blue);
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .section-subtitle {
            color: #6b7280;
            font-size: 1.2rem;
            text-align: center;
            margin-bottom: 50px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.2rem;
            }
            
            .hero-section p {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="bi bi-mortarboard-fill me-2"></i>
                Akademik SPADA
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Landing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="/login" class="btn btn-primary-custom">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div data-aos="fade-up">
                <h1>Selamat Datang di Akademik SPADA</h1>
                <p>Portal utama untuk mengakses sistem akademik dan pembelajaran daring yang terintegrasi dengan teknologi modern</p>
                <a href="#layanan" class="btn btn-service btn-lg">
                    <i class="bi bi-arrow-down-circle me-2"></i>
                    Jelajahi Layanan
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="layanan" class="services">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h2 style="font-weight: 700; color: var(--dark-blue); font-size: 2.5rem; margin-bottom: 20px;">
                        Layanan Utama
                    </h2>
                    <p style="font-size: 1.2rem; color: #6b7280;">
                        Akses mudah ke semua layanan akademik dan pembelajaran daring
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <h4>Sistem Akademik</h4>
                        <p>Kelola seluruh kebutuhan akademik Anda mulai dari KRS, KHS, jadwal perkuliahan, hingga transkrip nilai dalam satu platform terintegrasi.</p>
                        <a href="/login?redirect=dashboard" class="btn-service">
                            <i class="bi bi-arrow-right me-2"></i>
                            Masuk ke Akademik
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-camera-video"></i>
                        </div>
                        <h4>SPADA (Pembelajaran Daring)</h4>
                        <p>Platform pembelajaran online dengan fitur perkuliahan virtual, arsip materi pembelajaran, dan panduan lengkap untuk mendukung proses belajar mengajar.</p>
                        <a href="/login?redirect=spada" class="btn-service">
                            <i class="bi bi-arrow-right me-2"></i>
                            Masuk ke SPADA
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="about-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h2 class="section-title">Tentang Akademik SPADA</h2>
                    <p class="section-subtitle">Mengenal lebih dekat platform pembelajaran digital terpadu</p>
                </div>
            </div>
            
            <!-- Platform Overview -->
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto">
                    <div class="about-card" data-aos="fade-up">
                        <div class="about-icon">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <h4>Platform Pembelajaran Digital Terpadu</h4>
                        <p>Akademik SPADA adalah solusi komprehensif yang menggabungkan sistem manajemen akademik tradisional dengan Sistem Pembelajaran Daring (SPADA). Platform ini dirancang khusus untuk memenuhi kebutuhan institusi pendidikan modern yang memerlukan fleksibilitas dalam pengelolaan akademik dan pembelajaran jarak jauh.</p>
                        <p>Dengan mengintegrasikan berbagai fitur seperti manajemen KRS, KHS, jadwal perkuliahan, pembayaran, dan sistem pembelajaran online, kami menyediakan ekosistem pendidikan digital yang efektif, efisien, dan mudah digunakan.</p>
                    </div>
                </div>
            </div>
            
            <!-- Vision Mission -->
            <div class="row mb-5">
                <div class="col-12">
                    <h3 style="font-weight: 700; color: var(--dark-blue); font-size: 2rem; margin-bottom: 40px; text-align: center;">
                        Visi & Misi Kami
                    </h3>
                </div>
            </div>
            
            <div class="row g-4 mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="vm-card">
                        <div class="vm-icon">
                            <i class="bi bi-eye"></i>
                        </div>
                        <h5>Visi</h5>
                        <p>Menjadi platform pembelajaran digital terdepan yang mengintegrasikan sistem akademik dan pembelajaran daring untuk menciptakan ekosistem pendidikan yang inovatif, aksesibel, dan berkelanjutan di Indonesia.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="vm-card">
                        <div class="vm-icon">
                            <i class="bi bi-target"></i>
                        </div>
                        <h5>Misi</h5>
                        <p>Menyediakan solusi teknologi pendidikan yang komprehensif, user-friendly, dan terintegrasi untuk mendukung transformasi digital institusi pendidikan serta meningkatkan kualitas pembelajaran di era digital.</p>
                    </div>
                </div>
            </div>
            
            <!-- Key Features -->
            <div class="row">
                <div class="col-12">
                    <h3 style="font-weight: 700; color: var(--dark-blue); font-size: 2rem; margin-bottom: 40px; text-align: center;">
                        Keunggulan Platform
                    </h3>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-card text-center">
                        <div class="about-icon mx-auto">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4>Keamanan Terjamin</h4>
                        <p>Sistem keamanan berlapis dengan enkripsi data dan kontrol akses yang ketat untuk melindungi informasi akademik dan pribadi pengguna.</p>
                    </div>
                </div>
                
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-card text-center">
                        <div class="about-icon mx-auto">
                            <i class="bi bi-people"></i>
                        </div>
                        <h4>User-Friendly</h4>
                        <p>Interface yang intuitif dan mudah digunakan oleh semua kalangan, dari mahasiswa hingga dosen dan administrator.</p>
                    </div>
                </div>
                
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-card text-center">
                        <div class="about-icon mx-auto">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h4>Responsive Design</h4>
                        <p>Akses optimal dari berbagai perangkat - desktop, tablet, dan smartphone dengan performa yang konsisten.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h2 style="font-weight: 700; color: var(--dark-blue); font-size: 2.5rem; margin-bottom: 20px;">
                        Berita & Pengumuman
                    </h2>
                    <p style="font-size: 1.2rem; color: #6b7280;">
                        Informasi terkini seputar kegiatan akademik dan pembelajaran
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="news-card">
                        <div class="news-image">
                            <i class="bi bi-megaphone"></i>
                        </div>
                        <div class="news-content">
                            <div class="news-date">15 Oktober 2024</div>
                            <h5 class="news-title">Pembukaan Pendaftaran KRS Semester Genap 2024/2025</h5>
                            <p class="news-excerpt">Pendaftaran Kartu Rencana Studi (KRS) untuk semester genap tahun akademik 2024/2025 telah dibuka. Mahasiswa dapat mengakses sistem mulai tanggal 20 Oktober 2024.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="news-card">
                        <div class="news-image">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <div class="news-content">
                            <div class="news-date">12 Oktober 2024</div>
                            <h5 class="news-title">Jadwal Ujian Tengah Semester (UTS) Telah Dirilis</h5>
                            <p class="news-excerpt">Jadwal UTS untuk semua program studi telah tersedia di sistem akademik. Mahasiswa dapat mengecek jadwal ujian masing-masing mata kuliah.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="news-card">
                        <div class="news-image">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <div class="news-content">
                            <div class="news-date">10 Oktober 2024</div>
                            <h5 class="news-title">Update Fitur Baru Platform SPADA</h5>
                            <p class="news-excerpt">Platform SPADA telah diperbarui dengan fitur-fitur baru termasuk video conference yang lebih stabil dan sistem upload tugas yang lebih mudah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5>
                        <i class="bi bi-mortarboard-fill me-2"></i>
                        Akademik SPADA
                    </h5>
                    <p class="text-muted">Platform pembelajaran digital terpadu untuk mendukung pendidikan modern dengan teknologi terdepan.</p>
                </div>
                
                <div class="col-lg-4 mb-4">
                    <h5>Layanan</h5>
                    <ul class="list-unstyled">
                        <li><a href="/login?redirect=dashboard">Sistem Akademik</a></li>
                        <li><a href="/login?redirect=spada">SPADA Online</a></li>
                        <li><a href="/">Landing Page</a></li>
                        <li><a href="/tentang-publik">Tentang Lengkap</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4 mb-4">
                    <h5>Kontak</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt me-2"></i>Jl. Pendidikan No. 123, Jakarta</li>
                        <li><i class="bi bi-telephone me-2"></i>+62 21 1234 5678</li>
                        <li><i class="bi bi-envelope me-2"></i>info@akademikspada.ac.id</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 Akademik SPADA. Semua hak cipta dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
