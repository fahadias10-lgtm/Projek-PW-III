<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<div class="content-box">
    <div class="content-header">
        <i class="bi bi-shield-lock"></i> Ubah Password
    </div>
    
    <div class="alert" style="background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%); color: white; border: none; border-radius: 12px; padding: 16px; margin-bottom: 30px;">
        <i class="bi bi-info-circle-fill"></i> 
        <strong>Tips Keamanan:</strong> Gunakan kombinasi huruf besar, huruf kecil, angka, dan simbol untuk password yang lebih aman.
    </div>
    
    <form action="/ubah-password" method="post" style="max-width: 700px;">
        <div class="mb-4">
            <label class="form-label" style="font-weight: 600; color: #374151; margin-bottom: 8px;">
                <i class="bi bi-lock-fill"></i> Password Lama
            </label>
            <input type="password" class="form-control" name="password_lama" placeholder="Masukkan password lama" style="padding: 12px; border-radius: 8px; border: 2px solid #e5e7eb;" required>
        </div>
        
        <div class="mb-4">
            <label class="form-label" style="font-weight: 600; color: #374151; margin-bottom: 8px;">
                <i class="bi bi-key-fill"></i> Password Baru
            </label>
            <input type="password" class="form-control" name="password_baru" placeholder="Masukkan password baru" style="padding: 12px; border-radius: 8px; border: 2px solid #e5e7eb;" required>
            <small class="text-muted">Minimal 8 karakter</small>
        </div>
        
        <div class="mb-4">
            <label class="form-label" style="font-weight: 600; color: #374151; margin-bottom: 8px;">
                <i class="bi bi-check-circle-fill"></i> Konfirmasi Password Baru
            </label>
            <input type="password" class="form-control" name="password_konfirmasi" placeholder="Ketik ulang password baru" style="padding: 12px; border-radius: 8px; border: 2px solid #e5e7eb;" required>
        </div>
        
        <div class="d-flex gap-2 mt-4">
            <button type="submit" class="btn btn-primary" style="padding: 12px 32px;">
                <i class="bi bi-save"></i> Simpan Perubahan
            </button>
            <button type="reset" class="btn btn-secondary" style="padding: 12px 32px;">
                <i class="bi bi-arrow-counterclockwise"></i> Reset
            </button>
        </div>
    </form>
</div>

<?php $this->endSection(); ?>
