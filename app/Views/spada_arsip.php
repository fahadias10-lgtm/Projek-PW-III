<?php $this->extend('layout_spada'); ?>
<?php $this->section('content'); ?>

<div class="container my-5">
    <div class="content-box">
        <div class="d-flex align-items-center mb-4">
            <i class="bi bi-archive" style="font-size: 32px; color: #667eea; margin-right: 16px;"></i>
            <h2 style="margin: 0; font-weight: 700; color: #2c3e50;">ARSIP PERKULIAHAN</h2>
        </div>
        
        <div class="alert" style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: white; border: none; border-radius: 12px; padding: 16px; margin-bottom: 30px;">
            <i class="bi bi-info-circle"></i> <strong>Info:</strong> Akses materi dan nilai perkuliahan dari semester sebelumnya
        </div>
        
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <label for="tahunAkademik" class="form-label" style="font-weight: 600; color: #374151; margin-bottom: 12px;">
                    <i class="bi bi-calendar3"></i> Pilih Tahun Akademik
                </label>
                <select class="form-select form-select-lg" id="tahunAkademik" style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 14px;" onchange="showArsip(this.value)">
                    <option value="">-- Pilih Tahun Akademik --</option>
                    <option value="2024-ganjil">2024/2025 - GANJIL</option>
                    <option value="2023-genap">2023/2024 - GENAP</option>
                    <option value="2023-ganjil">2023/2024 - GANJIL</option>
                    <option value="2022-genap">2022/2023 - GENAP</option>
                </select>
            </div>
        </div>

        <!-- Placeholder saat belum pilih -->
        <div id="placeholder" class="mt-5 text-center" style="padding: 60px 20px;">
            <i class="bi bi-folder2-open" style="font-size: 80px; color: #d1d5db; margin-bottom: 24px;"></i>
            <p style="color: #6b7280; font-size: 18px; margin: 0;">Silakan pilih tahun akademik untuk melihat arsip perkuliahan</p>
        </div>

        <!-- Data Arsip (hidden by default) -->
        <div id="arsipData" style="display: none;">
            <div class="row mt-4">
                <div class="col-md-6 mb-4">
                    <div style="border: 2px solid #e5e7eb; border-radius: 16px; padding: 20px; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); transition: all 0.3s;" onmouseover="this.style.borderColor='#667eea'; this.style.transform='translateY(-4px)'" onmouseout="this.style.borderColor='#e5e7eb'; this.style.transform='translateY(0)'">
                        <div class="d-flex align-items-start">
                            <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 16px; flex-shrink: 0;">
                                <i class="bi bi-book" style="font-size: 24px; color: white;"></i>
                            </div>
                            <div style="flex: 1;">
                                <h5 style="font-weight: 700; color: #2c3e50; margin-bottom: 8px;">Pemrograman Web II</h5>
                                <p style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">Dosen: Anggietas M.Kom</p>
                                <div class="d-flex gap-2 mb-3">
                                    <span style="background: #dcfce7; color: #166534; padding: 4px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">A</span>
                                    <span style="color: #6b7280; font-size: 13px;">3 SKS</span>
                                </div>
                                <button class="btn btn-sm" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none;">
                                    <i class="bi bi-eye"></i> Lihat Detail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div style="border: 2px solid #e5e7eb; border-radius: 16px; padding: 20px; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); transition: all 0.3s;" onmouseover="this.style.borderColor='#10b981'; this.style.transform='translateY(-4px)'" onmouseout="this.style.borderColor='#e5e7eb'; this.style.transform='translateY(0)'">
                        <div class="d-flex align-items-start">
                            <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 16px; flex-shrink: 0;">
                                <i class="bi bi-database" style="font-size: 24px; color: white;"></i>
                            </div>
                            <div style="flex: 1;">
                                <h5 style="font-weight: 700; color: #2c3e50; margin-bottom: 8px;">Basis Data</h5>
                                <p style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">Dosen: Dr. Budi Santoso M.Kom</p>
                                <div class="d-flex gap-2 mb-3">
                                    <span style="background: #dcfce7; color: #166534; padding: 4px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">A-</span>
                                    <span style="color: #6b7280; font-size: 13px;">3 SKS</span>
                                </div>
                                <button class="btn btn-sm" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; border: none;">
                                    <i class="bi bi-eye"></i> Lihat Detail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div style="border: 2px solid #e5e7eb; border-radius: 16px; padding: 20px; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); transition: all 0.3s;" onmouseover="this.style.borderColor='#f7931e'; this.style.transform='translateY(-4px)'" onmouseout="this.style.borderColor='#e5e7eb'; this.style.transform='translateY(0)'">
                        <div class="d-flex align-items-start">
                            <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 16px; flex-shrink: 0;">
                                <i class="bi bi-bar-chart" style="font-size: 24px; color: white;"></i>
                            </div>
                            <div style="flex: 1;">
                                <h5 style="font-weight: 700; color: #2c3e50; margin-bottom: 8px;">Statistika</h5>
                                <p style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">Dosen: Dra. Siti Aminah M.Si</p>
                                <div class="d-flex gap-2 mb-3">
                                    <span style="background: #fef3c7; color: #92400e; padding: 4px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">B+</span>
                                    <span style="color: #6b7280; font-size: 13px;">2 SKS</span>
                                </div>
                                <button class="btn btn-sm" style="background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%); color: white; border: none;">
                                    <i class="bi bi-eye"></i> Lihat Detail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div style="border: 2px solid #e5e7eb; border-radius: 16px; padding: 20px; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); transition: all 0.3s;" onmouseover="this.style.borderColor='#f093fb'; this.style.transform='translateY(-4px)'" onmouseout="this.style.borderColor='#e5e7eb'; this.style.transform='translateY(0)'">
                        <div class="d-flex align-items-start">
                            <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 16px; flex-shrink: 0;">
                                <i class="bi bi-cpu" style="font-size: 24px; color: white;"></i>
                            </div>
                            <div style="flex: 1;">
                                <h5 style="font-weight: 700; color: #2c3e50; margin-bottom: 8px;">Algoritma & Pemrograman</h5>
                                <p style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">Dosen: Matias Bagus M.Kom</p>
                                <div class="d-flex gap-2 mb-3">
                                    <span style="background: #dcfce7; color: #166534; padding: 4px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">A</span>
                                    <span style="color: #6b7280; font-size: 13px;">4 SKS</span>
                                </div>
                                <button class="btn btn-sm" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; border: none;">
                                    <i class="bi bi-eye"></i> Lihat Detail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 12px; padding: 24px; margin-top: 32px; border-left: 4px solid #667eea;">
                <div class="row">
                    <div class="col-md-3 text-center mb-3">
                        <div style="font-size: 32px; font-weight: 800; color: #2c3e50;">3.75</div>
                        <div style="color: #6b7280; font-size: 14px;">IPK Semester</div>
                    </div>
                    <div class="col-md-3 text-center mb-3">
                        <div style="font-size: 32px; font-weight: 800; color: #2c3e50;">18</div>
                        <div style="color: #6b7280; font-size: 14px;">Total SKS</div>
                    </div>
                    <div class="col-md-3 text-center mb-3">
                        <div style="font-size: 32px; font-weight: 800; color: #2c3e50;">6</div>
                        <div style="color: #6b7280; font-size: 14px;">Mata Kuliah</div>
                    </div>
                    <div class="col-md-3 text-center mb-3">
                        <div style="font-size: 32px; font-weight: 800; color: #10b981;">95%</div>
                        <div style="color: #6b7280; font-size: 14px;">Kehadiran</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function showArsip(value) {
    if(value) {
        document.getElementById('placeholder').style.display = 'none';
        document.getElementById('arsipData').style.display = 'block';
    } else {
        document.getElementById('placeholder').style.display = 'block';
        document.getElementById('arsipData').style.display = 'none';
    }
}
</script>

<?php $this->endSection(); ?>
