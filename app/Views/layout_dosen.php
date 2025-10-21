<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Portal Dosen - Sistem Akademik' ?></title>
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
        
        /* Sidebar Modern - Dosen Theme */
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
        
        /* Header Modern - Dosen Theme */
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
        .btn-success { background: linear-gradient(135deg, #10b981 0%, #059669 100%); border: none; }
        .btn-warning { background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); border: none; color: white; }
        .btn-danger { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border: none; }
        
        @media (max-width: 768px) { 
            .content, .header, .footer { margin-left: 0; }
            .sidebar { display: none; }
        }
    </style>
</head>
<body>
    <?php if (isset($sidebar) && $sidebar): ?>
        <!-- Sidebar Dosen -->
        <div class="sidebar">
            <div class="user-info">
                <h6>Portal Dosen :</h6>
                <p>Dr. Ahmad Fauzi, M.Kom</p>
                <small style="opacity: 0.8;">NIDN: 0412048901</small>
            </div>
            
            <!-- Dashboard -->
            <div class="menu-item">
                <a href="/dosen/dashboard" class="menu-link">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
            </div>
            
            <!-- Perwalian -->
            <div class="menu-item">
                <a href="/dosen/mahasiswa-perwalian" class="menu-link">
                    <i class="bi bi-people"></i> Mahasiswa Perwalian
                </a>
            </div>
            
            <!-- Persetujuan KRS -->
            <div class="menu-item">
                <a href="/dosen/persetujuan-krs" class="menu-link">
                    <i class="bi bi-check-circle"></i> Persetujuan KRS
                </a>
            </div>
            
            <div class="accordion accordion-flush" id="sidebarMenu">
                <!-- Perkuliahan -->
                <div class="menu-item">
                    <a class="menu-link" data-bs-toggle="collapse" href="#perkuliahanMenu" role="button">
                        <i class="bi bi-chevron-down"></i> Perkuliahan
                    </a>
                    <div class="collapse submenu" id="perkuliahanMenu" data-bs-parent="#sidebarMenu">
                        <a href="/dosen/jadwal-mengajar" class="menu-link"><i class="bi bi-calendar-week"></i> Jadwal Mengajar</a>
                        <a href="/dosen/input-nilai" class="menu-link"><i class="bi bi-pencil-square"></i> Input Nilai</a>
                        <a href="/dosen/daftar-mata-kuliah" class="menu-link"><i class="bi bi-book"></i> Mata Kuliah</a>
                        <a href="/dosen/kehadiran" class="menu-link"><i class="bi bi-clipboard-check"></i> Absensi</a>
                    </div>
                </div>
                
                <!-- Akademik -->
                <div class="menu-item">
                    <a class="menu-link" data-bs-toggle="collapse" href="#akademikMenu" role="button">
                        <i class="bi bi-chevron-down"></i> Akademik
                    </a>
                    <div class="collapse submenu" id="akademikMenu" data-bs-parent="#sidebarMenu">
                        <a href="/dosen/bahan-ajar" class="menu-link"><i class="bi bi-file-earmark-text"></i> Bahan Ajar</a>
                        <a href="/dosen/tugas" class="menu-link"><i class="bi bi-clipboard2-check"></i> Tugas Mahasiswa</a>
                        <a href="/dosen/ujian" class="menu-link"><i class="bi bi-file-text"></i> Ujian</a>
                        <a href="/dosen/rps" class="menu-link"><i class="bi bi-journal-bookmark"></i> RPS</a>
                    </div>
                </div>
                
                <!-- Laporan -->
                <div class="menu-item">
                    <a class="menu-link" data-bs-toggle="collapse" href="#laporanMenu" role="button">
                        <i class="bi bi-chevron-down"></i> Laporan
                    </a>
                    <div class="collapse submenu" id="laporanMenu" data-bs-parent="#sidebarMenu">
                        <a href="/dosen/laporan-nilai" class="menu-link"><i class="bi bi-graph-up"></i> Laporan Nilai</a>
                        <a href="/dosen/laporan-kehadiran" class="menu-link"><i class="bi bi-bar-chart"></i> Laporan Kehadiran</a>
                        <a href="/dosen/rekap-perwalian" class="menu-link"><i class="bi bi-file-bar-graph"></i> Rekap Perwalian</a>
                    </div>
                </div>
                
                <!-- Profil & Pengaturan -->
                <div class="menu-item">
                    <a class="menu-link" data-bs-toggle="collapse" href="#profilMenu" role="button">
                        <i class="bi bi-chevron-down"></i> Profil & Pengaturan
                    </a>
                    <div class="collapse submenu" id="profilMenu" data-bs-parent="#sidebarMenu">
                        <a href="/dosen/profile" class="menu-link"><i class="bi bi-person-circle"></i> Profil Dosen</a>
                        <a href="/dosen/pengaturan" class="menu-link"><i class="bi bi-gear"></i> Pengaturan</a>
                        <a href="/dosen/ubah-password" class="menu-link"><i class="bi bi-shield-lock"></i> Ubah Password</a>
                    </div>
                </div>
            </div>
            
            <!-- SPADA E-Learning -->
            <div class="menu-item">
                <a href="/spada" class="menu-link">
                    <i class="bi bi-laptop"></i> SPADA E-Learning
                </a>
            </div>
            
            <!-- Logout -->
            <div class="menu-item">
                <a href="/logout" class="menu-link" style="color: #fca5a5;">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
            </div>
        </div>
    <?php endif; ?>

    <!-- Header -->
    <div class="header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h4><i class="bi bi-mortarboard-fill"></i> Portal Dosen</h4>
                <p>Sistem Informasi Akademik - Universitas</p>
            </div>
            <div class="text-end">
                <small style="opacity: 0.9;">Semester Ganjil 2025/2026</small>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <?= $this->renderSection('content') ?>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; <?= date('Y') ?> Universitas - Sistem Akademik | Portal Dosen</p>
        <p style="font-size: 12px; opacity: 0.8;">Dikembangkan dengan <i class="bi bi-heart-fill" style="color: #ef4444;"></i> untuk pendidikan yang lebih baik</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Auto-activate menu based on current URL
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            const menuLinks = document.querySelectorAll('.menu-link');
            
            menuLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                    
                    // Expand parent accordion if in submenu
                    const parentCollapse = link.closest('.collapse');
                    if (parentCollapse) {
                        parentCollapse.classList.add('show');
                    }
                }
            });
        });
    </script>
</body>
</html>
