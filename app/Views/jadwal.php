<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<div class="mb-4">
    <h1 style="font-weight: 700; color: #1e3a5f; font-size: 32px; margin-bottom: 8px;">
        <i class="bi bi-calendar-week"></i> Jadwal Perkuliahan
    </h1>
    <p style="color: #6b7280; font-size: 16px; margin-bottom: 0;">Jadwal kuliah semester Ganjil 2025/2026</p>
</div>

<!-- Filter & Actions -->
<div class="content-box mb-4">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
        <div style="flex: 1; min-width: 250px;">
            <select class="form-select" style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 12px;">
                <option selected>Semester Ganjil 2025/2026</option>
                <option>Semester Genap 2024/2025</option>
                <option>Semester Ganjil 2024/2025</option>
            </select>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-primary">
                <i class="bi bi-printer"></i> Cetak
            </button>
            <button class="btn btn-success">
                <i class="bi bi-download"></i> Download PDF
            </button>
            <button class="btn btn-warning">
                <i class="bi bi-calendar-plus"></i> Export to Calendar
            </button>
        </div>
    </div>
</div>

<!-- Jadwal per Hari -->
<div class="row">
    <!-- SENIN -->
    <div class="col-md-6 mb-4">
        <div class="content-box" style="border-left: 4px solid #667eea;">
            <h5 style="font-weight: 700; color: #667eea; margin-bottom: 20px;">
                <i class="bi bi-calendar-day"></i> SENIN
            </h5>
            
            <div style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 16px; margin-bottom: 16px; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <strong style="color: #1e3a5f; font-size: 16px;">Etika Profesi</strong>
                    <span style="background: #667eea; color: white; padding: 4px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">3 SKS</span>
                </div>
                <div style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">
                    <i class="bi bi-clock"></i> 08:00 - 11:15
                </div>
                <div style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">
                    <i class="bi bi-door-open"></i> Ruang R.301 - Gedung A
                </div>
                <div style="color: #6b7280; font-size: 14px;">
                    <i class="bi bi-person"></i> Matias Bagus M.Kom
                </div>
            </div>
        </div>
    </div>

    <!-- SELASA -->
    <div class="col-md-6 mb-4">
        <div class="content-box" style="border-left: 4px solid #10b981;">
            <h5 style="font-weight: 700; color: #10b981; margin-bottom: 20px;">
                <i class="bi bi-calendar-day"></i> SELASA
            </h5>
            
            <div style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 16px; margin-bottom: 16px; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <strong style="color: #1e3a5f; font-size: 16px;">Analisa Sistem</strong>
                    <span style="background: #10b981; color: white; padding: 4px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">3 SKS</span>
                </div>
                <div style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">
                    <i class="bi bi-clock"></i> 08:00 - 11:15
                </div>
                <div style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">
                    <i class="bi bi-door-open"></i> Ruang R.205 - Gedung B
                </div>
                <div style="color: #6b7280; font-size: 14px;">
                    <i class="bi bi-person"></i> Zainul H.M.Kom M.M
                </div>
            </div>

            <div style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 16px; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <strong style="color: #1e3a5f; font-size: 16px;">Kecerdasan Buatan</strong>
                    <span style="background: #10b981; color: white; padding: 4px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">3 SKS</span>
                </div>
                <div style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">
                    <i class="bi bi-clock"></i> 12:30 - 14:45
                </div>
                <div style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">
                    <i class="bi bi-door-open"></i> Lab Komputer 2 - Gedung C
                </div>
                <div style="color: #6b7280; font-size: 14px;">
                    <i class="bi bi-person"></i> Matias Bagus M.Kom
                </div>
            </div>
        </div>
    </div>

    <!-- RABU -->
    <div class="col-md-6 mb-4">
        <div class="content-box" style="border-left: 4px solid #f7931e;">
            <h5 style="font-weight: 700; color: #f7931e; margin-bottom: 20px;">
                <i class="bi bi-calendar-day"></i> RABU
            </h5>
            
            <div style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 16px; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <strong style="color: #1e3a5f; font-size: 16px;">Bahasa Inggris V</strong>
                    <span style="background: #f7931e; color: white; padding: 4px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">3 SKS</span>
                </div>
                <div style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">
                    <i class="bi bi-clock"></i> 08:10 - 11:25
                </div>
                <div style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">
                    <i class="bi bi-door-open"></i> Ruang R.108 - Gedung A
                </div>
                <div style="color: #6b7280; font-size: 14px;">
                    <i class="bi bi-person"></i> Dosen Bahagia M.Pd
                </div>
            </div>
        </div>
    </div>

    <!-- KAMIS -->
    <div class="col-md-6 mb-4">
        <div class="content-box" style="border-left: 4px solid #f093fb;">
            <h5 style="font-weight: 700; color: #f093fb; margin-bottom: 20px;">
                <i class="bi bi-calendar-day"></i> KAMIS
            </h5>
            
            <div style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 16px; margin-bottom: 16px; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <strong style="color: #1e3a5f; font-size: 16px;">Pemrograman Web III</strong>
                    <span style="background: #f093fb; color: white; padding: 4px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">3 SKS</span>
                </div>
                <div style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">
                    <i class="bi bi-clock"></i> 08:00 - 10:30
                </div>
                <div style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">
                    <i class="bi bi-door-open"></i> Lab Komputer 1 - Gedung C
                </div>
                <div style="color: #6b7280; font-size: 14px;">
                    <i class="bi bi-person"></i> Anggietas M.Kom
                </div>
            </div>

            <div style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 16px; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <strong style="color: #1e3a5f; font-size: 16px;">Implementasi & Pemeliharaan Jaringan</strong>
                    <span style="background: #f093fb; color: white; padding: 4px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">3 SKS</span>
                </div>
                <div style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">
                    <i class="bi bi-clock"></i> 14:15 - 16:45
                </div>
                <div style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">
                    <i class="bi bi-door-open"></i> Lab Jaringan - Gedung C
                </div>
                <div style="color: #6b7280; font-size: 14px;">
                    <i class="bi bi-person"></i> Zainul H.M.Kom
                </div>
            </div>
        </div>
    </div>

    <!-- JUMAT -->
    <div class="col-md-6 mb-4">
        <div class="content-box" style="border-left: 4px solid #3b82f6;">
            <h5 style="font-weight: 700; color: #3b82f6; margin-bottom: 20px;">
                <i class="bi bi-calendar-day"></i> JUMAT
            </h5>
            
            <div style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 16px; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <strong style="color: #1e3a5f; font-size: 16px;">Data Mining</strong>
                    <span style="background: #3b82f6; color: white; padding: 4px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">3 SKS</span>
                </div>
                <div style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">
                    <i class="bi bi-clock"></i> 08:10 - 10:15
                </div>
                <div style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">
                    <i class="bi bi-door-open"></i> Lab Komputer 3 - Gedung C
                </div>
                <div style="color: #6b7280; font-size: 14px;">
                    <i class="bi bi-person"></i> Anggietas M.Kom
                </div>
            </div>
        </div>
    </div>

    <!-- SABTU -->
    <div class="col-md-6 mb-4">
        <div class="content-box" style="border-left: 4px solid #8b5cf6;">
            <h5 style="font-weight: 700; color: #8b5cf6; margin-bottom: 20px;">
                <i class="bi bi-calendar-day"></i> SABTU
            </h5>
            
            <div style="padding: 40px; text-align: center;">
                <i class="bi bi-calendar-x" style="font-size: 48px; color: #d1d5db; margin-bottom: 12px;"></i>
                <p style="color: #9ca3af; margin: 0;">Tidak ada jadwal kuliah</p>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>
