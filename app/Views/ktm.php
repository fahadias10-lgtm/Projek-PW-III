<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<div class="content-box">
    <div class="content-header">
        <i class="bi bi-credit-card-2-front"></i> Kartu Tanda Mahasiswa (KTM) Digital
    </div>
    
    <div class="alert" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; border: none; border-radius: 12px; padding: 20px; margin-bottom: 30px;">
        <h6 style="font-weight: 700; margin-bottom: 12px;">
            <i class="bi bi-exclamation-triangle-fill"></i> Penting!
        </h6>
        <p style="margin-bottom: 8px;">Apabila foto profil Anda kosong (hitam), pastikan:</p>
        <ul style="margin-bottom: 0; padding-left: 20px;">
            <li>Anda telah mengunggah foto profil pada menu <strong>User → Berkas</strong></li>
            <li>Foto profil harus berformat <strong>JPG, PNG, JPEG</strong> (tidak boleh PDF)</li>
            <li>Ukuran maksimal <strong>1 MB</strong> dengan rasio foto 1:1 atau 4:3</li>
        </ul>
    </div>
    
    <div class="row mt-4">
        <div class="col-md-6 mb-4">
            <div style="background: white; border-radius: 16px; padding: 24px; box-shadow: 0 8px 32px rgba(0,0,0,0.08); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 12px 40px rgba(0,0,0,0.12)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.08)'">
                <div class="text-center">
                    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 12px; padding: 16px; margin-bottom: 20px;">
                        <img src="https://via.placeholder.com/400x250/667eea/ffffff?text=Tampak+Belakang+KTM" class="img-fluid" alt="KTM Belakang" style="border-radius: 8px;">
                    </div>
                    <h5 style="font-weight: 600; color: #1e3a5f; margin-bottom: 16px;">
                        <i class="bi bi-back"></i> Tampak Belakang KTM
                    </h5>
                    <button class="btn btn-primary" style="width: 100%; padding: 12px;">
                        <i class="bi bi-zoom-in"></i> Lihat Ukuran Penuh
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div style="background: white; border-radius: 16px; padding: 24px; box-shadow: 0 8px 32px rgba(0,0,0,0.08); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 12px 40px rgba(0,0,0,0.12)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.08)'">
                <div class="text-center">
                    <div style="background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%); border-radius: 12px; padding: 16px; margin-bottom: 20px;">
                        <img src="https://via.placeholder.com/400x250/f7931e/ffffff?text=Tampak+Depan+KTM" class="img-fluid" alt="KTM Depan" style="border-radius: 8px;">
                    </div>
                    <h5 style="font-weight: 600; color: #1e3a5f; margin-bottom: 16px;">
                        <i class="bi bi-card-heading"></i> Tampak Depan KTM
                    </h5>
                    <button class="btn btn-warning" style="width: 100%; padding: 12px;">
                        <i class="bi bi-zoom-in"></i> Lihat Ukuran Penuh
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mt-4 p-4" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 12px; border-left: 4px solid #667eea;">
        <p class="mb-0" style="color: #6b7280;">
            <i class="bi bi-info-circle"></i> 
            <strong>Catatan:</strong> KTM Digital ini dapat digunakan sebagai identitas mahasiswa resmi. 
            Simpan dan tunjukkan saat diperlukan.
        </p>
    </div>
</div>

<?php $this->endSection(); ?>
