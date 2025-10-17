<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<!-- Welcome Header -->
<div class="mb-4">
    <h1 style="font-weight: 700; color: #1e3a5f; font-size: 32px; margin-bottom: 8px;">
        Selamat Datang di Dashboard Akademik SPADA! 👋
    </h1>
    <p style="color: #6b7280; font-size: 16px; margin-bottom: 0;">
        Sistem Pembelajaran Digital Terpadu - Akses semua fitur akademik dan SPADA
    </p>
</div>

<!-- Stats Cards -->
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="content-box" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; padding: 24px;">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <p style="opacity: 0.9; font-size: 13px; margin-bottom: 12px; font-weight: 500; letter-spacing: 0.5px;">TOTAL SISWA</p>
                    <h2 style="font-weight: 800; font-size: 40px; margin-bottom: 4px;">150</h2>
                    <p style="opacity: 0.8; font-size: 12px; margin: 0;"><i class="bi bi-arrow-up"></i> +12% dari bulan lalu</p>
                </div>
                <div style="width: 56px; height: 56px; background: rgba(255,255,255,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-people" style="font-size: 28px;"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="content-box" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; border: none; padding: 24px;">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <p style="opacity: 0.9; font-size: 13px; margin-bottom: 12px; font-weight: 500; letter-spacing: 0.5px;">MATA KULIAH</p>
                    <h2 style="font-weight: 800; font-size: 40px; margin-bottom: 4px;">25</h2>
                    <p style="opacity: 0.8; font-size: 12px; margin: 0;"><i class="bi bi-arrow-up"></i> +3 semester ini</p>
                </div>
                <div style="width: 56px; height: 56px; background: rgba(255,255,255,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-book" style="font-size: 28px;"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="content-box" style="background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%); color: white; border: none; padding: 24px;">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <p style="opacity: 0.9; font-size: 13px; margin-bottom: 12px; font-weight: 500; letter-spacing: 0.5px;">DOSEN AKTIF</p>
                    <h2 style="font-weight: 800; font-size: 40px; margin-bottom: 4px;">18</h2>
                    <p style="opacity: 0.8; font-size: 12px; margin: 0;"><i class="bi bi-person-check"></i> Online sekarang</p>
                </div>
                <div style="width: 56px; height: 56px; background: rgba(255,255,255,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-person-badge" style="font-size: 28px;"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="content-box" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; border: none; padding: 24px;">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <p style="opacity: 0.9; font-size: 13px; margin-bottom: 12px; font-weight: 500; letter-spacing: 0.5px;">NOTIFIKASI</p>
                    <h2 style="font-weight: 800; font-size: 40px; margin-bottom: 4px;">5</h2>
                    <p style="opacity: 0.8; font-size: 12px; margin: 0;"><i class="bi bi-bell"></i> Pesan baru</p>
                </div>
                <div style="width: 56px; height: 56px; background: rgba(255,255,255,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-bell-fill" style="font-size: 28px;"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Activity Timeline -->
    <div class="col-lg-8 mb-4">
        <div class="content-box">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 style="font-weight: 700; color: #1e3a5f; margin: 0;">
                    <i class="bi bi-clock-history"></i> Aktivitas Terbaru
                </h5>
                <a href="#" style="font-size: 14px; color: #667eea; text-decoration: none; font-weight: 600;">Lihat Semua <i class="bi bi-arrow-right"></i></a>
            </div>
            
            <div class="timeline">
                <div style="padding: 16px; border-left: 3px solid #667eea; margin-left: 8px; margin-bottom: 16px; background: linear-gradient(90deg, rgba(102,126,234,0.05) 0%, transparent 100%); border-radius: 0 8px 8px 0;">
                    <div class="d-flex align-items-start">
                        <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; margin-right: 12px; flex-shrink: 0;">
                            <i class="bi bi-person-plus"></i>
                        </div>
                        <div style="flex: 1;">
                            <div class="d-flex justify-content-between align-items-start">
                                <strong style="color: #1e3a5f;">Siswa baru mendaftar</strong>
                                <small style="color: #9ca3af;">2 jam lalu</small>
                            </div>
                            <p style="color: #6b7280; font-size: 14px; margin: 4px 0 0 0;">John Doe berhasil terdaftar di program Teknik Informatika</p>
                        </div>
                    </div>
                </div>
                
                <div style="padding: 16px; border-left: 3px solid #10b981; margin-left: 8px; margin-bottom: 16px; background: linear-gradient(90deg, rgba(16,185,129,0.05) 0%, transparent 100%); border-radius: 0 8px 8px 0;">
                    <div class="d-flex align-items-start">
                        <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; margin-right: 12px; flex-shrink: 0;">
                            <i class="bi bi-book-half"></i>
                        </div>
                        <div style="flex: 1;">
                            <div class="d-flex justify-content-between align-items-start">
                                <strong style="color: #1e3a5f;">Mata kuliah baru ditambahkan</strong>
                                <small style="color: #9ca3af;">5 jam lalu</small>
                            </div>
                            <p style="color: #6b7280; font-size: 14px; margin: 4px 0 0 0;">Matematika Lanjut - 3 SKS telah ditambahkan ke kurikulum</p>
                        </div>
                    </div>
                </div>
                
                <div style="padding: 16px; border-left: 3px solid #f7931e; margin-left: 8px; background: linear-gradient(90deg, rgba(247,147,30,0.05) 0%, transparent 100%); border-radius: 0 8px 8px 0;">
                    <div class="d-flex align-items-start">
                        <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; margin-right: 12px; flex-shrink: 0;">
                            <i class="bi bi-award"></i>
                        </div>
                        <div style="flex: 1;">
                            <div class="d-flex justify-content-between align-items-start">
                                <strong style="color: #1e3a5f;">Update nilai tersedia</strong>
                                <small style="color: #9ca3af;">1 hari lalu</small>
                            </div>
                            <p style="color: #6b7280; font-size: 14px; margin: 4px 0 0 0;">Nilai untuk semester ganjil 2025/2026 telah diperbarui</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Quick Actions -->
    <div class="col-lg-4 mb-4">
        <div class="content-box">
            <h5 style="font-weight: 700; color: #1e3a5f; margin-bottom: 20px;">
                <i class="bi bi-lightning-charge-fill"></i> Aksi Cepat
            </h5>
            <div class="d-grid gap-3">
                <a href="/profile" style="padding: 16px; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 12px; text-decoration: none; border: 2px solid #e5e7eb; transition: all 0.3s ease;" onmouseover="this.style.borderColor='#667eea'; this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='#e5e7eb'; this.style.transform='translateX(0)'">
                    <div class="d-flex align-items-center">
                        <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 12px;">
                            <i class="bi bi-person-circle" style="font-size: 24px; color: white;"></i>
                        </div>
                        <div>
                            <strong style="color: #1e3a5f; font-size: 15px;">Lihat Profil</strong><br>
                            <small style="color: #6b7280;">Informasi personal</small>
                        </div>
                    </div>
                </a>
                
                <a href="/spada" style="padding: 16px; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 12px; text-decoration: none; border: 2px solid #e5e7eb; transition: all 0.3s ease;" onmouseover="this.style.borderColor='#10b981'; this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='#e5e7eb'; this.style.transform='translateX(0)'">
                    <div class="d-flex align-items-center">
                        <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 12px;">
                            <i class="bi bi-laptop" style="font-size: 24px; color: white;"></i>
                        </div>
                        <div>
                            <strong style="color: #1e3a5f; font-size: 15px;">SPADA E-Learning</strong><br>
                            <small style="color: #6b7280;">Akses kelas online</small>
                        </div>
                    </div>
                </a>
                
                <a href="/berkas" style="padding: 16px; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 12px; text-decoration: none; border: 2px solid #e5e7eb; transition: all 0.3s ease;" onmouseover="this.style.borderColor='#f7931e'; this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='#e5e7eb'; this.style.transform='translateX(0)'">
                    <div class="d-flex align-items-center">
                        <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 12px;">
                            <i class="bi bi-folder-fill" style="font-size: 24px; color: white;"></i>
                        </div>
                        <div>
                            <strong style="color: #1e3a5f; font-size: 15px;">Kelola Berkas</strong><br>
                            <small style="color: #6b7280;">Upload dokumen</small>
                        </div>
                    </div>
                </a>
                
                <a href="/ktm" style="padding: 16px; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 12px; text-decoration: none; border: 2px solid #e5e7eb; transition: all 0.3s ease;" onmouseover="this.style.borderColor='#f093fb'; this.style.transform='translateX(4px)'" onmouseout="this.style.borderColor='#e5e7eb'; this.style.transform='translateX(0)'">
                    <div class="d-flex align-items-center">
                        <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 12px;">
                            <i class="bi bi-credit-card-2-front" style="font-size: 24px; color: white;"></i>
                        </div>
                        <div>
                            <strong style="color: #1e3a5f; font-size: 15px;">KTM Digital</strong><br>
                            <small style="color: #6b7280;">Kartu mahasiswa</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>
