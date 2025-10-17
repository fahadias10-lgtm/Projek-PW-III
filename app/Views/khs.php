<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<div class="mb-4">
    <h1 style="font-weight: 700; color: #1e3a5f; font-size: 32px; margin-bottom: 8px;">
        <i class="bi bi-award"></i> Kartu Hasil Studi (KHS)
    </h1>
    <p style="color: #6b7280; font-size: 16px; margin-bottom: 0;">Hasil studi dan nilai mata kuliah per semester</p>
</div>

<!-- Semester Selector -->
<div class="content-box mb-4">
    <label style="font-weight: 600; color: #374151; margin-bottom: 12px;">
        <i class="bi bi-calendar3"></i> Pilih Semester
    </label>
    <select class="form-select form-select-lg" style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 14px;" onchange="loadKHS(this.value)">
        <option value="2025-ganjil" selected>2025/2026 - Ganjil (Semester 5)</option>
        <option value="2024-genap">2024/2025 - Genap (Semester 4)</option>
        <option value="2024-ganjil">2024/2025 - Ganjil (Semester 3)</option>
        <option value="2023-genap">2023/2024 - Genap (Semester 2)</option>
        <option value="2023-ganjil">2023/2024 - Ganjil (Semester 1)</option>
    </select>
</div>

<!-- IPK Cards -->
<div class="row mb-4">
    <div class="col-md-4 mb-3">
        <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 16px; padding: 24px; color: white; box-shadow: 0 8px 24px rgba(102,126,234,0.3);">
            <div style="font-size: 48px; font-weight: 800; margin-bottom: 8px;">3.68</div>
            <div style="font-size: 14px; opacity: 0.9;">IPK Kumulatif</div>
            <div style="margin-top: 12px; padding-top: 12px; border-top: 1px solid rgba(255,255,255,0.2);">
                <small style="opacity: 0.8;">Dari 84 SKS</small>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 16px; padding: 24px; color: white; box-shadow: 0 8px 24px rgba(16,185,129,0.3);">
            <div style="font-size: 48px; font-weight: 800; margin-bottom: 8px;">3.75</div>
            <div style="font-size: 14px; opacity: 0.9;">IPS Semester Ini</div>
            <div style="margin-top: 12px; padding-top: 12px; border-top: 1px solid rgba(255,255,255,0.2);">
                <small style="opacity: 0.8;">24 SKS</small>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div style="background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%); border-radius: 16px; padding: 24px; color: white; box-shadow: 0 8px 24px rgba(247,147,30,0.3);">
            <div style="font-size: 48px; font-weight: 800; margin-bottom: 8px;">A</div>
            <div style="font-size: 14px; opacity: 0.9;">Predikat</div>
            <div style="margin-top: 12px; padding-top: 12px; border-top: 1px solid rgba(255,255,255,0.2);">
                <small style="opacity: 0.8;">Sangat Memuaskan</small>
            </div>
        </div>
    </div>
</div>

<!-- Tabel KHS -->
<div class="content-box">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 style="font-weight: 700; color: #1e3a5f; margin: 0;">
            Detail Nilai Semester Ganjil 2025/2026
        </h5>
        <div class="d-flex gap-2">
            <button class="btn btn-primary">
                <i class="bi bi-printer"></i> Cetak KHS
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
                <th style="padding: 16px;">Kode</th>
                <th style="padding: 16px;">Nama Mata Kuliah</th>
                <th style="padding: 16px; text-align: center;">SKS</th>
                <th style="padding: 16px; text-align: center;">Nilai Angka</th>
                <th style="padding: 16px; text-align: center;">Nilai Huruf</th>
                <th style="padding: 16px; text-align: center;">Bobot</th>
            </tr>
        </thead>
        <tbody>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600;">1</td>
                <td style="padding: 16px; color: #6b7280;">IF501</td>
                <td style="padding: 16px;"><strong style="color: #1e3a5f;">Etika Profesi</strong></td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">3</td>
                <td style="padding: 16px; text-align: center; color: #10b981; font-weight: 700;">87</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #dcfce7; color: #166534; padding: 8px 16px; border-radius: 8px; font-size: 14px; font-weight: 700;">A</span>
                </td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">12.00</td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600;">2</td>
                <td style="padding: 16px; color: #6b7280;">IF502</td>
                <td style="padding: 16px;"><strong style="color: #1e3a5f;">Analisa Sistem</strong></td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">3</td>
                <td style="padding: 16px; text-align: center; color: #10b981; font-weight: 700;">82</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #dcfce7; color: #166534; padding: 8px 16px; border-radius: 8px; font-size: 14px; font-weight: 700;">A-</span>
                </td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">11.10</td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600;">3</td>
                <td style="padding: 16px; color: #6b7280;">IF503</td>
                <td style="padding: 16px;"><strong style="color: #1e3a5f;">Kecerdasan Buatan</strong></td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">3</td>
                <td style="padding: 16px; text-align: center; color: #10b981; font-weight: 700;">90</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #dcfce7; color: #166534; padding: 8px 16px; border-radius: 8px; font-size: 14px; font-weight: 700;">A</span>
                </td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">12.00</td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600;">4</td>
                <td style="padding: 16px; color: #6b7280;">IF504</td>
                <td style="padding: 16px;"><strong style="color: #1e3a5f;">Pemrograman Web III</strong></td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">3</td>
                <td style="padding: 16px; text-align: center; color: #10b981; font-weight: 700;">85</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #dcfce7; color: #166534; padding: 8px 16px; border-radius: 8px; font-size: 14px; font-weight: 700;">A</span>
                </td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">12.00</td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600;">5</td>
                <td style="padding: 16px; color: #6b7280;">IF505</td>
                <td style="padding: 16px;"><strong style="color: #1e3a5f;">Data Mining</strong></td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">3</td>
                <td style="padding: 16px; text-align: center; color: #fbbf24; font-weight: 700;">78</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #fef3c7; color: #92400e; padding: 8px 16px; border-radius: 8px; font-size: 14px; font-weight: 700;">B+</span>
                </td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">10.50</td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600;">6</td>
                <td style="padding: 16px; color: #6b7280;">IF506</td>
                <td style="padding: 16px;"><strong style="color: #1e3a5f;">Implementasi & Pemeliharaan Jaringan</strong></td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">3</td>
                <td style="padding: 16px; text-align: center; color: #10b981; font-weight: 700;">83</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #dcfce7; color: #166534; padding: 8px 16px; border-radius: 8px; font-size: 14px; font-weight: 700;">A-</span>
                </td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">11.10</td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600;">7</td>
                <td style="padding: 16px; color: #6b7280;">IF507</td>
                <td style="padding: 16px;"><strong style="color: #1e3a5f;">Bahasa Inggris V</strong></td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">3</td>
                <td style="padding: 16px; text-align: center; color: #fbbf24; font-weight: 700;">76</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #fef3c7; color: #92400e; padding: 8px 16px; border-radius: 8px; font-size: 14px; font-weight: 700;">B+</span>
                </td>
                <td style="padding: 16px; text-align: center; font-weight: 600;">10.50</td>
            </tr>
            <tr style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                <td colspan="3" style="padding: 20px; text-align: right;">
                    <strong style="color: #1e3a5f; font-size: 16px;">Jumlah:</strong>
                </td>
                <td style="padding: 20px; text-align: center;">
                    <strong style="color: #667eea; font-size: 18px;">24 SKS</strong>
                </td>
                <td colspan="2" style="padding: 20px; text-align: right;">
                    <strong style="color: #1e3a5f; font-size: 16px;">IPS Semester:</strong>
                </td>
                <td style="padding: 20px; text-align: center;">
                    <strong style="color: #10b981; font-size: 20px;">3.75</strong>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
function loadKHS(semester) {
    console.log('Loading KHS for semester: ' + semester);
    // Implementasi load data KHS berdasarkan semester
}
</script>

<?php $this->endSection(); ?>
