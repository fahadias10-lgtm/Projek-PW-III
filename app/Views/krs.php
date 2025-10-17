<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<div class="mb-4">
    <h1 style="font-weight: 700; color: #1e3a5f; font-size: 32px; margin-bottom: 8px;">
        <i class="bi bi-journal-text"></i> Kartu Rencana Studi (KRS)
    </h1>
    <p style="color: #6b7280; font-size: 16px; margin-bottom: 0;">Daftar mata kuliah yang direncanakan untuk semester ini</p>
</div>

<!-- Info Cards -->
<div class="row mb-4">
    <div class="col-md-3 mb-3">
        <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 16px; padding: 20px; color: white; box-shadow: 0 8px 24px rgba(102,126,234,0.3);">
            <div style="font-size: 36px; font-weight: 800; margin-bottom: 4px;">24</div>
            <div style="font-size: 13px; opacity: 0.9;">Total SKS</div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 16px; padding: 20px; color: white; box-shadow: 0 8px 24px rgba(16,185,129,0.3);">
            <div style="font-size: 36px; font-weight: 800; margin-bottom: 4px;">8</div>
            <div style="font-size: 13px; opacity: 0.9;">Mata Kuliah</div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div style="background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%); border-radius: 16px; padding: 20px; color: white; box-shadow: 0 8px 24px rgba(247,147,30,0.3);">
            <div style="font-size: 36px; font-weight: 800; margin-bottom: 4px;">5</div>
            <div style="font-size: 13px; opacity: 0.9;">Semester</div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); border-radius: 16px; padding: 20px; color: white; box-shadow: 0 8px 24px rgba(59,130,246,0.3);">
            <div style="font-size: 36px; font-weight: 800; margin-bottom: 4px;">3.68</div>
            <div style="font-size: 13px; opacity: 0.9;">IPK Terakhir</div>
        </div>
    </div>
</div>

<!-- Alert Info -->
<div class="alert" style="background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%); color: white; border: none; border-radius: 12px; padding: 16px; margin-bottom: 24px;">
    <i class="bi bi-info-circle"></i> <strong>Status:</strong> KRS sudah disetujui oleh Dosen Wali (PA) pada 15 Agustus 2025
</div>

<!-- Tabel KRS -->
<div class="content-box">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 style="font-weight: 700; color: #1e3a5f; margin: 0;">
            Semester Ganjil 2025/2026
        </h5>
        <div class="d-flex gap-2">
            <button class="btn btn-primary">
                <i class="bi bi-printer"></i> Cetak KRS
            </button>
            <button class="btn btn-success">
                <i class="bi bi-download"></i> Download PDF
            </button>
        </div>
    </div>
    
    <table class="table" style="margin-bottom: 0;">
        <thead style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
            <tr>
                <th style="padding: 16px; width: 60px;" class="text-center">No</th>
                <th style="padding: 16px;">Kode MK</th>
                <th style="padding: 16px;">Nama Mata Kuliah</th>
                <th style="padding: 16px;">Kelas</th>
                <th style="padding: 16px; text-align: center;">SKS</th>
                <th style="padding: 16px;">Dosen</th>
                <th style="padding: 16px; text-align: center;">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600;">1</td>
                <td style="padding: 16px; color: #6b7280;">IF501</td>
                <td style="padding: 16px;">
                    <strong style="color: #1e3a5f;">Etika Profesi</strong>
                </td>
                <td style="padding: 16px; color: #6b7280;">A1</td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">3</td>
                <td style="padding: 16px; color: #6b7280;">Matias Bagus M.Kom</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #dcfce7; color: #166534; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">
                        <i class="bi bi-check-circle"></i> Disetujui
                    </span>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600;">2</td>
                <td style="padding: 16px; color: #6b7280;">IF502</td>
                <td style="padding: 16px;">
                    <strong style="color: #1e3a5f;">Analisa Sistem</strong>
                </td>
                <td style="padding: 16px; color: #6b7280;">A1</td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">3</td>
                <td style="padding: 16px; color: #6b7280;">Zainul H.M.Kom M.M</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #dcfce7; color: #166534; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">
                        <i class="bi bi-check-circle"></i> Disetujui
                    </span>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600;">3</td>
                <td style="padding: 16px; color: #6b7280;">IF503</td>
                <td style="padding: 16px;">
                    <strong style="color: #1e3a5f;">Kecerdasan Buatan</strong>
                </td>
                <td style="padding: 16px; color: #6b7280;">A1</td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">3</td>
                <td style="padding: 16px; color: #6b7280;">Matias Bagus M.Kom</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #dcfce7; color: #166534; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">
                        <i class="bi bi-check-circle"></i> Disetujui
                    </span>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600;">4</td>
                <td style="padding: 16px; color: #6b7280;">IF504</td>
                <td style="padding: 16px;">
                    <strong style="color: #1e3a5f;">Pemrograman Web III</strong>
                </td>
                <td style="padding: 16px; color: #6b7280;">A1</td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">3</td>
                <td style="padding: 16px; color: #6b7280;">Anggietas M.Kom</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #dcfce7; color: #166534; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">
                        <i class="bi bi-check-circle"></i> Disetujui
                    </span>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600;">5</td>
                <td style="padding: 16px; color: #6b7280;">IF505</td>
                <td style="padding: 16px;">
                    <strong style="color: #1e3a5f;">Data Mining</strong>
                </td>
                <td style="padding: 16px; color: #6b7280;">A1</td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">3</td>
                <td style="padding: 16px; color: #6b7280;">Anggietas M.Kom</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #dcfce7; color: #166534; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">
                        <i class="bi bi-check-circle"></i> Disetujui
                    </span>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600;">6</td>
                <td style="padding: 16px; color: #6b7280;">IF506</td>
                <td style="padding: 16px;">
                    <strong style="color: #1e3a5f;">Implementasi & Pemeliharaan Jaringan</strong>
                </td>
                <td style="padding: 16px; color: #6b7280;">A1</td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">3</td>
                <td style="padding: 16px; color: #6b7280;">Zainul H.M.Kom</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #dcfce7; color: #166534; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">
                        <i class="bi bi-check-circle"></i> Disetujui
                    </span>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600;">7</td>
                <td style="padding: 16px; color: #6b7280;">IF507</td>
                <td style="padding: 16px;">
                    <strong style="color: #1e3a5f;">Bahasa Inggris V</strong>
                </td>
                <td style="padding: 16px; color: #6b7280;">A1</td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">3</td>
                <td style="padding: 16px; color: #6b7280;">Dosen Bahagia M.Pd</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #dcfce7; color: #166534; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">
                        <i class="bi bi-check-circle"></i> Disetujui
                    </span>
                </td>
            </tr>
            <tr style="background: #f8f9fa;">
                <td colspan="4" style="padding: 16px; text-align: right;">
                    <strong style="color: #1e3a5f; font-size: 16px;">Total SKS:</strong>
                </td>
                <td style="padding: 16px; text-align: center;">
                    <strong style="color: #667eea; font-size: 18px;">24</strong>
                </td>
                <td colspan="2"></td>
            </tr>
        </tbody>
    </table>
</div>

<?php $this->endSection(); ?>
