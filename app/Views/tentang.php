<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Akademik SPADA</title>
    
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
            margin: 0 auto;
        }
        
        /* About Section */
        .about-section {
            padding: 80px 0;
        }
        
        .about-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.8);
        }
        
        .about-icon {
            width: 60px;
            height: 60px;
            background: var(--secondary-gradient);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            margin-bottom: 20px;
        }
        
        .about-card h4 {
            font-weight: 700;
            color: var(--dark-blue);
            margin-bottom: 15px;
        }
        
        .about-card p {
            color: #6b7280;
            line-height: 1.7;
        }
        
        /* Vision Mission */
        .vision-mission {
            background: var(--light-gray);
            padding: 80px 0;
        }
        
        .vm-card {
            background: white;
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            height: 100%;
            transition: all 0.3s ease;
        }
        
        .vm-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
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
        
        .vm-card h4 {
            font-weight: 700;
            color: var(--dark-blue);
            margin-bottom: 20px;
        }
        
        .vm-card p {
            color: #6b7280;
            line-height: 1.7;
        }
        
        /* Team Section */
        .team-section {
            padding: 80px 0;
        }
        
        .team-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            text-align: center;
        }
        
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }
        
        .team-avatar {
            width: 120px;
            height: 120px;
            background: var(--primary-gradient);
            border-radius: 50%;
            margin: 30px auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
        }
        
        .team-info {
            padding: 0 30px 30px;
        }
        
        .team-name {
            font-weight: 700;
            color: var(--dark-blue);
            margin-bottom: 5px;
        }
        
        .team-role {
            color: #667eea;
            font-weight: 500;
            margin-bottom: 15px;
        }
        
        .team-desc {
            color: #6b7280;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        
        /* Values Section */
        .values-section {
            background: var(--dark-blue);
            padding: 80px 0;
            color: white;
        }
        
        .value-item {
            text-align: center;
            padding: 30px 20px;
        }
        
        .value-icon {
            width: 70px;
            height: 70px;
            background: var(--secondary-gradient);
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
        }
        
        .value-item h5 {
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        .value-item p {
            opacity: 0.9;
            line-height: 1.6;
        }
        
        /* Footer */
        .footer {
            background: #1a202c;
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
                        <a class="nav-link" href="/beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/tentang">Tentang</a>
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
                <h1>Tentang Akademik SPADA</h1>
                <p>Mengenal lebih dekat platform pembelajaran digital terpadu yang menghubungkan sistem akademik tradisional dengan teknologi pembelajaran daring modern</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="about-card" data-aos="fade-up">
                        <div class="about-icon">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <h4>Tentang Platform Kami</h4>
                        <p>Akademik SPADA adalah platform pembelajaran digital terpadu yang menggabungkan sistem manajemen akademik tradisional dengan Sistem Pembelajaran Daring (SPADA). Platform ini dirancang untuk memenuhi kebutuhan institusi pendidikan modern yang memerlukan fleksibilitas dalam pengelolaan akademik dan pembelajaran jarak jauh.</p>
                        <p>Dengan mengintegrasikan berbagai fitur seperti manajemen KRS, KHS, jadwal perkuliahan, pembayaran, dan sistem pembelajaran online, kami menyediakan solusi komprehensif untuk mendukung ekosistem pendidikan digital yang efektif dan efisien.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Mission -->
    <section class="vision-mission">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h2 style="font-weight: 700; color: var(--dark-blue); font-size: 2.5rem; margin-bottom: 20px;">
                        Visi & Misi
                    </h2>
                    <p style="font-size: 1.2rem; color: #6b7280;">
                        Komitmen kami dalam memajukan pendidikan digital Indonesia
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="vm-card">
                        <div class="vm-icon">
                            <i class="bi bi-eye"></i>
                        </div>
                        <h4>Visi</h4>
                        <p>Menjadi platform pembelajaran digital terdepan yang mengintegrasikan sistem akademik dan pembelajaran daring untuk menciptakan ekosistem pendidikan yang inovatif, aksesibel, dan berkelanjutan di Indonesia.</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="vm-card">
                        <div class="vm-icon">
                            <i class="bi bi-target"></i>
                        </div>
                        <h4>Misi</h4>
                        <p>Menyediakan solusi teknologi pendidikan yang komprehensif, user-friendly, dan terintegrasi untuk mendukung transformasi digital institusi pendidikan serta meningkatkan kualitas pembelajaran di era digital.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h2 style="font-weight: 700; color: var(--dark-blue); font-size: 2.5rem; margin-bottom: 20px;">
                        Tim Pengembang
                    </h2>
                    <p style="font-size: 1.2rem; color: #6b7280;">
                        Profesional berpengalaman yang berdedikasi untuk pendidikan digital
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card">
                        <div class="team-avatar">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-info">
                            <h5 class="team-name">Dr. Ahmad Wijaya</h5>
                            <div class="team-role">Project Manager</div>
                            <p class="team-desc">Memimpin pengembangan platform dengan pengalaman 10+ tahun dalam teknologi pendidikan dan manajemen proyek IT.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-card">
                        <div class="team-avatar">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-info">
                            <h5 class="team-name">Sari Indrawati, M.Kom</h5>
                            <div class="team-role">Lead Developer</div>
                            <p class="team-desc">Ahli dalam pengembangan aplikasi web dengan spesialisasi dalam sistem informasi akademik dan e-learning.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-card">
                        <div class="team-avatar">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="team-info">
                            <h5 class="team-name">Budi Santoso</h5>
                            <div class="team-role">UI/UX Designer</div>
                            <p class="team-desc">Desainer berpengalaman yang fokus pada user experience dan interface design untuk aplikasi pendidikan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h2 style="font-weight: 700; margin-bottom: 20px; font-size: 2.5rem;">
                        Nilai-Nilai Kami
                    </h2>
                    <p style="font-size: 1.2rem; opacity: 0.9;">
                        Prinsip-prinsip yang memandu setiap langkah pengembangan platform
                    </p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h5>Keamanan</h5>
                        <p>Melindungi data dan privasi pengguna dengan standar keamanan tertinggi dalam setiap fitur yang kami kembangkan.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <h5>User-Centric</h5>
                        <p>Mengutamakan pengalaman pengguna dengan desain intuitif dan fitur yang mudah digunakan oleh semua kalangan.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="bi bi-arrow-up-right"></i>
                        </div>
                        <h5>Inovasi</h5>
                        <p>Terus berinovasi dengan teknologi terdepan untuk memberikan solusi terbaik dalam dunia pendidikan digital.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="bi bi-heart"></i>
                        </div>
                        <h5>Dedikasi</h5>
                        <p>Berkomitmen penuh untuk mendukung kemajuan pendidikan Indonesia melalui teknologi yang berkelanjutan.</p>
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
                        <li><a href="/beranda">Beranda</a></li>
                        <li><a href="/tentang">Tentang Kami</a></li>
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
