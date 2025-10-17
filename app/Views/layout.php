<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Sistem Akademik' ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; 
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ec 100%);
            margin: 0;
        }
        
        /* Sidebar Modern */
        .sidebar { 
            width: 280px; 
            height: 100vh; 
            background: linear-gradient(180deg, #1e3a5f 0%, #2c5282 100%);
            box-shadow: 4px 0 24px rgba(0,0,0,0.15);
            position: fixed; 
            overflow-y: auto; 
            z-index: 1000;
        }
        .sidebar::-webkit-scrollbar { width: 6px; }
        .sidebar::-webkit-scrollbar-track { background: rgba(255,255,255,0.1); }
        .sidebar::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.3); border-radius: 3px; }
        
        .sidebar .user-info { 
            background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%);
            padding: 20px; 
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        .sidebar .user-info h6 { margin: 0; font-size: 12px; color: rgba(255,255,255,0.9); font-weight: 500; letter-spacing: 0.5px; }
        .sidebar .user-info p { margin: 8px 0 0 0; font-weight: 600; color: #fff; font-size: 15px; }
        
        .sidebar .menu-item { border-bottom: 1px solid rgba(255,255,255,0.1); transition: all 0.3s ease; }
        .sidebar .menu-link { 
            display: block; 
            padding: 14px 20px; 
            color: rgba(255,255,255,0.85); 
            text-decoration: none; 
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }
        .sidebar .menu-link:hover { 
            background: rgba(255,255,255,0.15); 
            color: #fff;
            padding-left: 25px;
        }
        .sidebar .menu-link.active { background: linear-gradient(90deg, #ff6b35 0%, #f7931e 100%); color: white; box-shadow: 0 4px 12px rgba(255,107,53,0.4); }
        .sidebar .submenu { background: rgba(0,0,0,0.2); }
        .sidebar .submenu a { padding-left: 45px; font-size: 13px; color: rgba(255,255,255,0.75); }
        .sidebar .submenu a:hover { background: rgba(255,255,255,0.1); color: #fff; }
        
        /* Header Modern */
        .header { 
            background: linear-gradient(135deg, #ff6b35 0%, #f7931e 50%, #fbbf24 100%);
            padding: 20px 30px; 
            color: white; 
            margin-left: 280px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
        }
        .header .logo { max-height: 70px; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2)); }
        .header h4 { margin: 0; font-size: 24px; font-weight: 700; letter-spacing: -0.5px; }
        .header p { margin: 5px 0 0 0; font-size: 13px; opacity: 0.95; font-weight: 400; }
        
        /* Content Modern */
        .content { 
            margin-left: 280px; 
            padding: 30px; 
            min-height: calc(100vh - 200px);
        }
        .content-box { 
            background: #ffffff; 
            padding: 30px; 
            border-radius: 16px; 
            box-shadow: 0 8px 32px rgba(0,0,0,0.08);
            border: 1px solid rgba(255,255,255,0.8);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .content-box:hover { 
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(0,0,0,0.12);
        }
        .content-header { 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 16px 20px; 
            font-weight: 600; 
            border-radius: 12px; 
            margin-bottom: 24px;
            box-shadow: 0 4px 16px rgba(102,126,234,0.3);
            font-size: 18px;
            letter-spacing: -0.3px;
        }
        
        /* Footer Modern */
        .footer { 
            background: linear-gradient(135deg, #1e3a5f 0%, #2c5282 100%);
            color: white; 
            text-align: center; 
            padding: 20px; 
            margin-left: 280px;
            box-shadow: 0 -4px 20px rgba(0,0,0,0.1);
        }
        .footer p { margin: 5px 0; font-size: 13px; opacity: 0.9; }
        
        /* Table Modern */
        .table { border-radius: 12px; overflow: hidden; box-shadow: 0 4px 16px rgba(0,0,0,0.06); }
        .table thead { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; }
        .table tbody tr { transition: all 0.3s ease; }
        .table tbody tr:hover { background-color: #f8f9fa; transform: scale(1.01); }
        
        /* Buttons Modern */
        .btn { 
            border-radius: 8px; 
            font-weight: 500; 
            padding: 10px 20px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .btn:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(0,0,0,0.15); }
        .btn-primary { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; }
        .btn-warning { background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%); border: none; color: white; }
        .btn-danger { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border: none; }
        
        @media (max-width: 768px) { 
            .content, .header, .footer { margin-left: 0; }
            .sidebar { display: none; }
        }
    </style>
</head>
<body>
    <?php if (isset($sidebar) && $sidebar): ?>
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="user-info">
                <h6>Demo User :</h6>
                <p>Akademik SPADA</p>
                <small style="opacity: 0.8;">Demo Mode - Full Access</small>
            </div>
            <!-- Dashboard -->
            <div class="menu-item">
                <a href="/dashboard" class="menu-link">
                    <i class="bi bi-house-door"></i> Dashboard
                </a>
            </div>
            
            <div class="accordion accordion-flush" id="sidebarMenu">
                <!-- Akademik -->
                <div class="menu-item">
                    <a class="menu-link" data-bs-toggle="collapse" href="#akademikMenu" role="button">
                        <i class="bi bi-chevron-down"></i> Akademik
                    </a>
                    <div class="collapse submenu" id="akademikMenu" data-bs-parent="#sidebarMenu">
                        <a href="/krs" class="menu-link"><i class="bi bi-journal-text"></i> KRS</a>
                        <a href="/khs" class="menu-link"><i class="bi bi-award"></i> KHS</a>
                        <a href="/jadwal" class="menu-link"><i class="bi bi-calendar-week"></i> Jadwal Kuliah</a>
                        <a href="/transkrip" class="menu-link"><i class="bi bi-file-earmark-text"></i> Transkrip Nilai</a>
                        <a href="/materi" class="menu-link"><i class="bi bi-cloud-download"></i> Unduhan Materi</a>
                    </div>
                </div>
                
                <!-- Perkuliahan -->
                <div class="menu-item">
                    <a class="menu-link" data-bs-toggle="collapse" href="#perkuliahanMenu" role="button">
                        <i class="bi bi-chevron-down"></i> Profil & Data
                    </a>
                    <div class="collapse submenu" id="perkuliahanMenu" data-bs-parent="#sidebarMenu">
                        <a href="/profile" class="menu-link"><i class="bi bi-person-circle"></i> Profile</a>
                        <a href="/ktm" class="menu-link"><i class="bi bi-credit-card-2-front"></i> KTM Digital</a>
                        <a href="/berkas" class="menu-link"><i class="bi bi-folder-fill"></i> Berkas</a>
                        <a href="/prosedur" class="menu-link"><i class="bi bi-file-earmark-text"></i> Prosedur</a>
                        <a href="/ubah-password" class="menu-link"><i class="bi bi-shield-lock"></i> Ubah Password</a>
                    </div>
                </div>
                
                <!-- Keuangan -->
                <div class="menu-item">
                    <a class="menu-link" data-bs-toggle="collapse" href="#keuanganMenu" role="button">
                        <i class="bi bi-chevron-down"></i> Keuangan
                    </a>
                    <div class="collapse submenu" id="keuanganMenu" data-bs-parent="#sidebarMenu">
                        <a href="/pembayaran" class="menu-link"><i class="bi bi-credit-card"></i> Pembayaran</a>
                    </div>
                </div>
                
                <!-- Data Mahasiswa (Admin) -->
                <div class="menu-item">
                    <a class="menu-link" data-bs-toggle="collapse" href="#adminMenu" role="button">
                        <i class="bi bi-chevron-down"></i> Data Mahasiswa
                    </a>
                    <div class="collapse submenu" id="adminMenu" data-bs-parent="#sidebarMenu">
                        <a href="/students" class="menu-link"><i class="bi bi-people"></i> Daftar Mahasiswa</a>
                    </div>
                </div>
            </div>
            <div class="menu-item" style="border-top: 2px solid #ff6600; margin-top: 10px; padding-top: 10px;">
                <a href="/spada" class="menu-link text-primary"><i class="bi bi-laptop"></i> SPADA (E-Learning)</a>
            </div>
            <div class="menu-item">
                <a href="/tentang" class="menu-link"><i class="bi bi-info-circle"></i> Tentang Akademik SPADA</a>
            </div>
            <div class="menu-item">
                <a href="/logout" class="menu-link text-danger"><i class="bi bi-box-arrow-right"></i> Logout</a>
            </div>
        </div>

        <!-- Header -->
        <div class="header d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img src="https://via.placeholder.com/80x60?text=LOGO" alt="Logo UNSERA" class="logo me-3">
                <div>
                    <h4>AKADEMIK <span style="color: #ff6600;">SPADA</span> CENTER</h4>
                    <p>SISTEM PEMBELAJARAN DIGITAL TERPADU</p>
                    <small>www.akademikspada.ac.id</small>
                </div>
            </div>
            <img src="https://via.placeholder.com/60?text=UNSERA" alt="Logo" class="logo">
        </div>
    <?php endif; ?>

    <div class="content">
        <?php if (isset($navbar)): ?>
            <!-- Navbar untuk halaman umum -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
                <div class="container">
                    <a class="navbar-brand" href="/">Sistem Akademik</a>
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link" href="/login">Login</a>
                    </div>
                </div>
            </nav>
        <?php endif; ?>

        <!-- Konten utama -->
        <?= $this->renderSection('content') ?>
    </div>

    <?php if (isset($sidebar) && $sidebar): ?>
        <!-- Footer -->
        <div class="footer">
            <p><strong>AKADEMIK SPADA - SISTEM PEMBELAJARAN DIGITAL TERPADU</strong></p>
            <p>Platform Terpadu: Jl. Pendidikan No. 123, Jakarta. Telp. +62 21 1234 5678</p>
            <p>www.akademikspada.ac.id | info@akademikspada.ac.id</p>
        </div>
    <?php endif; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script>
        // Tambahkan interaktivitas sederhana jika perlu
    </script>
</body>
</html>
