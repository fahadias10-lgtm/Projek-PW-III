<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'SPADA - Sistem Pembelajaran Daring' ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; 
            margin: 0; 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-attachment: fixed;
        }
        
        /* Navbar Modern with Glassmorphism */
        .navbar-spada { 
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            border-bottom: 1px solid rgba(255,255,255,0.3);
        }
        .navbar-brand { font-weight: 700; font-size: 20px; color: #2c3e50; }
        .navbar-brand img { max-height: 45px; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1)); }
        .nav-link { 
            color: #2c3e50 !important; 
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 8px 16px !important;
            border-radius: 8px;
        }
        .nav-link:hover { 
            background: rgba(102,126,234,0.1);
            color: #667eea !important;
            transform: translateY(-2px);
        }
        
        .btn-logout { 
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white; 
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(245,87,108,0.3);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .btn-logout:hover { 
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(245,87,108,0.4);
            color: white;
        }
        
        .btn-warning { 
            background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%);
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(255,107,53,0.3);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .btn-warning:hover { 
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255,107,53,0.4);
        }
        
        /* Hero Section Modern */
        .hero-section { 
            background: linear-gradient(135deg, rgba(102,126,234,0.95), rgba(118,75,162,0.95)), 
                        url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=1200'); 
            background-size: cover; 
            background-position: center;
            background-attachment: fixed;
            color: white; 
            padding: 120px 0; 
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 50%, rgba(255,255,255,0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        .hero-section .container {
            position: relative;
            z-index: 1;
        }
        .hero-section h1 { 
            font-size: 48px; 
            font-weight: 800; 
            margin-bottom: 24px;
            letter-spacing: -1px;
            text-shadow: 0 4px 12px rgba(0,0,0,0.2);
            animation: fadeInUp 0.8s ease;
        }
        .hero-section p { 
            font-size: 18px; 
            margin-bottom: 16px;
            opacity: 0.95;
            font-weight: 400;
            animation: fadeInUp 1s ease;
        }
        .hero-section .btn { 
            margin-top: 20px;
            padding: 14px 40px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 12px;
            animation: fadeInUp 1.2s ease;
        }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Card Mata Kuliah Modern */
        .card-matkul { 
            border: none;
            border-radius: 16px; 
            padding: 24px; 
            margin-bottom: 24px; 
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            box-shadow: 0 8px 32px rgba(0,0,0,0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        .card-matkul::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, #667eea 0%, #764ba2 100%);
        }
        .card-matkul:hover { 
            transform: translateY(-8px);
            box-shadow: 0 16px 48px rgba(0,0,0,0.15);
        }
        .card-matkul h5 { 
            color: #2c3e50; 
            font-size: 18px; 
            font-weight: 700; 
            margin-bottom: 16px;
            letter-spacing: -0.3px;
        }
        .card-matkul p { 
            font-size: 14px; 
            color: #6b7280; 
            margin: 8px 0;
            font-weight: 500;
        }
        .card-matkul p strong { color: #374151; }
        
        .btn-masuk { 
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white; 
            font-size: 14px; 
            padding: 10px 24px;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(16,185,129,0.3);
            transition: all 0.3s ease;
        }
        .btn-masuk:hover { 
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(16,185,129,0.4);
            color: white;
        }
        
        /* Content Box Modern */
        .content-box { 
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(20px);
            padding: 40px; 
            border-radius: 20px; 
            margin-top: 40px; 
            box-shadow: 0 12px 40px rgba(0,0,0,0.12);
            border: 1px solid rgba(255,255,255,0.5);
        }
        
        .alert-info-spada { 
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            color: white; 
            padding: 20px; 
            border-radius: 12px; 
            margin-bottom: 24px;
            box-shadow: 0 4px 16px rgba(59,130,246,0.3);
            border: none;
        }
        .alert-info-spada a { color: #fbbf24; font-weight: 600; }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-section h1 { font-size: 32px; }
            .hero-section p { font-size: 16px; }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-spada">
        <div class="container">
            <a class="navbar-brand" href="/spada">
                <img src="https://via.placeholder.com/40?text=LOGO" alt="Logo"> 
                <strong>SPADA</strong> - Sistem Pembelajaran Daring
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/spada/panduan">Panduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/spada/perkuliahan">Perkuliahan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/spada/arsip">Arsip Perkuliahan</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-warning ms-2" href="/dashboard" title="Kembali ke Dashboard Akademik">
                            <i class="bi bi-house-door"></i> Dashboard Akademik
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-logout ms-2" href="/profile">Dwiyas Ainur Fahad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login"><i class="bi bi-box-arrow-right"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten utama -->
    <?= $this->renderSection('content') ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
