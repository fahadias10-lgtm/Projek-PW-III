<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<div class="row">
    <!-- Profile Card Kiri -->
    <div class="col-lg-4 mb-4">
        <div class="content-box text-center">
            <div style="width: 120px; height: 120px; margin: 0 auto 20px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 48px; font-weight: 700; box-shadow: 0 8px 24px rgba(102,126,234,0.3);">
                DA
            </div>
            <h4 style="font-weight: 700; color: #1e3a5f; margin-bottom: 4px;">Dwiyas Ainur Fahad</h4>
            <p style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">11223020</p>
            <span class="badge" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 600;">MAHASISWA AKTIF</span>
            
            <div style="margin-top: 24px; padding-top: 24px; border-top: 2px solid #e5e7eb;">
                <div class="mb-3">
                    <small style="color: #6b7280; display: block; margin-bottom: 4px;">Fakultas</small>
                    <strong style="color: #1e3a5f;">Teknik dan Informatika</strong>
                </div>
                <div class="mb-3">
                    <small style="color: #6b7280; display: block; margin-bottom: 4px;">Program Studi</small>
                    <strong style="color: #1e3a5f;">Informatika (S1)</strong>
                </div>
                <div>
                    <small style="color: #6b7280; display: block; margin-bottom: 4px;">Email</small>
                    <strong style="color: #1e3a5f; font-size: 13px;">fahadias10@gmail.com</strong>
                </div>
            </div>
        </div>
        
        <div class="content-box mt-3">
            <h6 style="font-weight: 600; color: #1e3a5f; margin-bottom: 16px;">
                <i class="bi bi-gear-fill"></i> Aksi Cepat
            </h6>
            <div class="d-grid gap-2">
                <button class="btn btn-primary">
                    <i class="bi bi-pencil-square"></i> Ubah Profile
                </button>
                <button class="btn btn-warning">
                    <i class="bi bi-shield-lock"></i> Ubah Password
                </button>
                <button class="btn btn-secondary">
                    <i class="bi bi-printer"></i> Cetak Profile
                </button>
            </div>
        </div>
    </div>
    
    <!-- Detail Info Kanan -->
    <div class="col-lg-8 mb-4">
        <div class="content-box">
            <div class="content-header">
                <i class="bi bi-person-circle"></i> Informasi Pribadi
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-4">
                    <label style="font-size: 12px; color: #6b7280; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; display: block; margin-bottom: 8px;">NIM</label>
                    <p style="font-size: 16px; color: #1e3a5f; font-weight: 600; margin: 0;">11223020</p>
                </div>
                <div class="col-md-6 mb-4">
                    <label style="font-size: 12px; color: #6b7280; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; display: block; margin-bottom: 8px;">Tempat Lahir</label>
                    <p style="font-size: 16px; color: #1e3a5f; font-weight: 600; margin: 0;">Serang</p>
                </div>
                <div class="col-md-6 mb-4">
                    <label style="font-size: 12px; color: #6b7280; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; display: block; margin-bottom: 8px;">Tanggal Lahir</label>
                    <p style="font-size: 16px; color: #1e3a5f; font-weight: 600; margin: 0;">28 Januari 2005</p>
                </div>
                <div class="col-md-6 mb-4">
                    <label style="font-size: 12px; color: #6b7280; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; display: block; margin-bottom: 8px;">Jenis Kelamin</label>
                    <p style="font-size: 16px; color: #1e3a5f; font-weight: 600; margin: 0;">Laki-laki</p>
                </div>
                <div class="col-md-6 mb-4">
                    <label style="font-size: 12px; color: #6b7280; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; display: block; margin-bottom: 8px;">Agama</label>
                    <p style="font-size: 16px; color: #1e3a5f; font-weight: 600; margin: 0;">Islam</p>
                </div>
                <div class="col-md-6 mb-4">
                    <label style="font-size: 12px; color: #6b7280; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; display: block; margin-bottom: 8px;">Status Marital</label>
                    <p style="font-size: 16px; color: #1e3a5f; font-weight: 600; margin: 0;">Belum Menikah</p>
                </div>
                <div class="col-12 mb-4">
                    <label style="font-size: 12px; color: #6b7280; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; display: block; margin-bottom: 8px;">Alamat Lengkap</label>
                    <p style="font-size: 16px; color: #1e3a5f; font-weight: 600; margin: 0;">KPCITEREP RT001 RW004, Serang, Banten</p>
                </div>
                <div class="col-md-6">
                    <label style="font-size: 12px; color: #6b7280; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; display: block; margin-bottom: 8px;">No. Telepon</label>
                    <p style="font-size: 16px; color: #6b7280; margin: 0;">-</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>
