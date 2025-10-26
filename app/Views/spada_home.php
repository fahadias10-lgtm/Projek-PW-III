<?php $this->extend('layout_spada'); ?>
<?php $this->section('content'); ?>

<!-- Hero Section -->
<div class="hero-section">
    <div class="container">
        <h1>SISTEM PEMBELAJARAN DALAM JARINGAN (SPADA)</h1>
        <div class="welcome-user mb-3" style="background: rgba(255,255,255,0.1); padding: 15px; border-radius: 10px; backdrop-filter: blur(10px);">
            <h5 style="margin: 0; color: white;">
                <i class="bi bi-person-circle"></i> Selamat datang di SPADA!
            </h5>
            <small style="opacity: 0.9;">
                Demo Mode - Akses penuh ke semua fitur pembelajaran daring
            </small>
        </div>
        <p>Spada merupakan sistem yang dibangun untuk membantu dalam proses pembelajaran secara daring.</p>
        <p>Proses belajar mengajar atau perkuliahan antara dosen dan mahasiswa dapat dilakukan secara Online</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="/spada/perkuliahan" class="btn btn-warning btn-lg">
                <i class="bi bi-play-circle"></i> Mulai Perkuliahan
            </a>
            <a href="/spada/panduan" class="btn btn-lg" style="background: rgba(255,255,255,0.2); color: white; border: 2px solid white;">
                <i class="bi bi-book"></i> Lihat Panduan
            </a>
        </div>
    </div>
</div>

<!-- Stats Cards -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 16px; padding: 24px; color: white; box-shadow: 0 8px 24px rgba(102,126,234,0.3);">
                <div style="font-size: 48px; font-weight: 800; margin-bottom: 8px;">8</div>
                <div style="font-size: 14px; opacity: 0.9;">Mata Kuliah Aktif</div>
                <div style="margin-top: 12px; font-size: 12px; opacity: 0.8;">
                    <i class="bi bi-calendar3"></i> Semester Ganjil 2025/2026
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 16px; padding: 24px; color: white; box-shadow: 0 8px 24px rgba(16,185,129,0.3);">
                <div style="font-size: 48px; font-weight: 800; margin-bottom: 8px;">24</div>
                <div style="font-size: 14px; opacity: 0.9;">SKS Terdaftar</div>
                <div style="margin-top: 12px; font-size: 12px; opacity: 0.8;">
                    <i class="bi bi-check-circle"></i> Sesuai KRS
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div style="background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%); border-radius: 16px; padding: 24px; color: white; box-shadow: 0 8px 24px rgba(247,147,30,0.3);">
                <div style="font-size: 48px; font-weight: 800; margin-bottom: 8px;">92%</div>
                <div style="font-size: 14px; opacity: 0.9;">Kehadiran</div>
                <div style="margin-top: 12px; font-size: 12px; opacity: 0.8;">
                    <i class="bi bi-graph-up"></i> Rata-rata
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 16px; padding: 24px; color: white; box-shadow: 0 8px 24px rgba(240,147,251,0.3);">
                <div style="font-size: 48px; font-weight: 800; margin-bottom: 8px;">12</div>
                <div style="font-size: 14px; opacity: 0.9;">Tugas Selesai</div>
                <div style="margin-top: 12px; font-size: 12px; opacity: 0.8;">
                    <i class="bi bi-check2-all"></i> Bulan ini
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fitur SPADA -->
<div class="container mb-5">
    <div style="background: rgba(255,255,255,0.95); backdrop-filter: blur(20px); border-radius: 20px; padding: 40px; box-shadow: 0 12px 40px rgba(0,0,0,0.12);">
        <h2 style="text-align: center; font-weight: 800; color: #2c3e50; margin-bottom: 40px;">
            Fitur SPADA UNSERA
        </h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div style="text-align: center; padding: 24px;">
                    <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 24px rgba(102,126,234,0.3);">
                        <i class="bi bi-camera-video" style="font-size: 36px; color: white;"></i>
                    </div>
                    <h5 style="font-weight: 700; color: #2c3e50; margin-bottom: 12px;">Kelas Virtual</h5>
                    <p style="color: #6b7280; font-size: 14px;">Pembelajaran tatap muka online dengan video conference real-time</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div style="text-align: center; padding: 24px;">
                    <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 24px rgba(16,185,129,0.3);">
                        <i class="bi bi-file-earmark-text" style="font-size: 36px; color: white;"></i>
                    </div>
                    <h5 style="font-weight: 700; color: #2c3e50; margin-bottom: 12px;">Materi Digital</h5>
                    <p style="color: #6b7280; font-size: 14px;">Akses materi kuliah berupa PDF, video, dan presentasi kapan saja</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div style="text-align: center; padding: 24px;">
                    <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 24px rgba(247,147,30,0.3);">
                        <i class="bi bi-clipboard-check" style="font-size: 36px; color: white;"></i>
                    </div>
                    <h5 style="font-weight: 700; color: #2c3e50; margin-bottom: 12px;">Tugas & Quiz</h5>
                    <p style="color: #6b7280; font-size: 14px;">Sistem pengumpulan tugas dan ujian online yang terintegrasi</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div style="text-align: center; padding: 24px;">
                    <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 24px rgba(240,147,251,0.3);">
                        <i class="bi bi-chat-dots" style="font-size: 36px; color: white;"></i>
                    </div>
                    <h5 style="font-weight: 700; color: #2c3e50; margin-bottom: 12px;">Forum Diskusi</h5>
                    <p style="color: #6b7280; font-size: 14px;">Berdiskusi dengan dosen dan mahasiswa lain secara asinkron</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div style="text-align: center; padding: 24px;">
                    <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 24px rgba(59,130,246,0.3);">
                        <i class="bi bi-graph-up-arrow" style="font-size: 36px; color: white;"></i>
                    </div>
                    <h5 style="font-weight: 700; color: #2c3e50; margin-bottom: 12px;">Monitoring Nilai</h5>
                    <p style="color: #6b7280; font-size: 14px;">Pantau perkembangan nilai dan capaian pembelajaran Anda</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div style="text-align: center; padding: 24px;">
                    <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 24px rgba(139,92,246,0.3);">
                        <i class="bi bi-calendar-check" style="font-size: 36px; color: white;"></i>
                    </div>
                    <h5 style="font-weight: 700; color: #2c3e50; margin-bottom: 12px;">Absensi Digital</h5>
                    <p style="color: #6b7280; font-size: 14px;">Sistem presensi otomatis untuk setiap sesi perkuliahan</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>
