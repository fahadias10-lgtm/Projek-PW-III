<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<div class="mb-4">
    <h1 style="font-weight: 700; color: #1e3a5f; font-size: 32px; margin-bottom: 8px;">
        <i class="bi bi-credit-card"></i> Pembayaran
    </h1>
    <p style="color: #6b7280; font-size: 16px; margin-bottom: 0;">Informasi pembayaran dan tagihan</p>
</div>

<!-- Status Pembayaran -->
<div class="row mb-4">
    <div class="col-md-4 mb-3">
        <div style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 16px; padding: 24px; color: white; box-shadow: 0 8px 24px rgba(16,185,129,0.3);">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div>
                    <div style="font-size: 13px; opacity: 0.9; margin-bottom: 8px;">Status Pembayaran</div>
                    <div style="font-size: 28px; font-weight: 800;">LUNAS</div>
                </div>
                <div style="width: 56px; height: 56px; background: rgba(255,255,255,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-check-circle-fill" style="font-size: 28px;"></i>
                </div>
            </div>
            <div style="font-size: 12px; opacity: 0.8; padding-top: 12px; border-top: 1px solid rgba(255,255,255,0.2);">
                Semester Ganjil 2025/2026
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-3">
        <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 16px; padding: 24px; color: white; box-shadow: 0 8px 24px rgba(102,126,234,0.3);">
            <div style="font-size: 13px; opacity: 0.9; margin-bottom: 8px;">Total Dibayar</div>
            <div style="font-size: 32px; font-weight: 800; margin-bottom: 4px;">Rp 15.000.000</div>
            <div style="font-size: 12px; opacity: 0.8;">
                <i class="bi bi-calendar3"></i> Dibayar: 15 Agustus 2025
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-3">
        <div style="background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%); border-radius: 16px; padding: 24px; color: white; box-shadow: 0 8px 24px rgba(247,147,30,0.3);">
            <div style="font-size: 13px; opacity: 0.9; margin-bottom: 8px;">Sisa Tagihan</div>
            <div style="font-size: 32px; font-weight: 800; margin-bottom: 4px;">Rp 0</div>
            <div style="font-size: 12px; opacity: 0.8;">
                <i class="bi bi-check2-all"></i> Semua tagihan lunas
            </div>
        </div>
    </div>
</div>

<!-- Riwayat Pembayaran -->
<div class="content-box mb-4">
    <h5 style="font-weight: 700; color: #1e3a5f; margin-bottom: 24px;">
        <i class="bi bi-clock-history"></i> Riwayat Pembayaran
    </h5>
    
    <table class="table" style="margin-bottom: 0;">
        <thead style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
            <tr>
                <th style="padding: 16px;">No</th>
                <th style="padding: 16px;">Semester</th>
                <th style="padding: 16px;">Jenis Pembayaran</th>
                <th style="padding: 16px;">Jumlah</th>
                <th style="padding: 16px;">Tanggal Bayar</th>
                <th style="padding: 16px; text-align: center;">Status</th>
                <th style="padding: 16px; text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td style="padding: 16px; font-weight: 600;">1</td>
                <td style="padding: 16px;">
                    <strong style="color: #1e3a5f;">Ganjil 2025/2026</strong><br>
                    <small style="color: #6b7280;">Semester 5</small>
                </td>
                <td style="padding: 16px; color: #6b7280;">SPP + Praktikum</td>
                <td style="padding: 16px;">
                    <strong style="color: #1e3a5f; font-size: 15px;">Rp 15.000.000</strong>
                </td>
                <td style="padding: 16px; color: #6b7280;">15 Agustus 2025</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #dcfce7; color: #166534; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">
                        <i class="bi bi-check-circle"></i> LUNAS
                    </span>
                </td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-download"></i> Kwitansi
                    </button>
                </td>
            </tr>
            
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td style="padding: 16px; font-weight: 600;">2</td>
                <td style="padding: 16px;">
                    <strong style="color: #1e3a5f;">Genap 2024/2025</strong><br>
                    <small style="color: #6b7280;">Semester 4</small>
                </td>
                <td style="padding: 16px; color: #6b7280;">SPP + Praktikum</td>
                <td style="padding: 16px;">
                    <strong style="color: #1e3a5f; font-size: 15px;">Rp 14.500.000</strong>
                </td>
                <td style="padding: 16px; color: #6b7280;">20 Februari 2025</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #dcfce7; color: #166534; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">
                        <i class="bi bi-check-circle"></i> LUNAS
                    </span>
                </td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-download"></i> Kwitansi
                    </button>
                </td>
            </tr>
            
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td style="padding: 16px; font-weight: 600;">3</td>
                <td style="padding: 16px;">
                    <strong style="color: #1e3a5f;">Ganjil 2024/2025</strong><br>
                    <small style="color: #6b7280;">Semester 3</small>
                </td>
                <td style="padding: 16px; color: #6b7280;">SPP + Praktikum</td>
                <td style="padding: 16px;">
                    <strong style="color: #1e3a5f; font-size: 15px;">Rp 14.000.000</strong>
                </td>
                <td style="padding: 16px; color: #6b7280;">10 Agustus 2024</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #dcfce7; color: #166534; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">
                        <i class="bi bi-check-circle"></i> LUNAS
                    </span>
                </td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-download"></i> Kwitansi
                    </button>
                </td>
            </tr>
            
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td style="padding: 16px; font-weight: 600;">4</td>
                <td style="padding: 16px;">
                    <strong style="color: #1e3a5f;">Genap 2023/2024</strong><br>
                    <small style="color: #6b7280;">Semester 2</small>
                </td>
                <td style="padding: 16px; color: #6b7280;">SPP + Praktikum</td>
                <td style="padding: 16px;">
                    <strong style="color: #1e3a5f; font-size: 15px;">Rp 13.500.000</strong>
                </td>
                <td style="padding: 16px; color: #6b7280;">5 Februari 2024</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #dcfce7; color: #166534; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">
                        <i class="bi bi-check-circle"></i> LUNAS
                    </span>
                </td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-download"></i> Kwitansi
                    </button>
                </td>
            </tr>
            
            <tr>
                <td style="padding: 16px; font-weight: 600;">5</td>
                <td style="padding: 16px;">
                    <strong style="color: #1e3a5f;">Ganjil 2023/2024</strong><br>
                    <small style="color: #6b7280;">Semester 1</small>
                </td>
                <td style="padding: 16px; color: #6b7280;">SPP + Daftar Ulang</td>
                <td style="padding: 16px;">
                    <strong style="color: #1e3a5f; font-size: 15px;">Rp 18.000.000</strong>
                </td>
                <td style="padding: 16px; color: #6b7280;">25 Juli 2023</td>
                <td class="text-center" style="padding: 16px;">
                    <span style="background: #dcfce7; color: #166534; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">
                        <i class="bi bi-check-circle"></i> LUNAS
                    </span>
                </td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-download"></i> Kwitansi
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Informasi Rekening -->
<div class="content-box" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <h6 style="font-weight: 700; color: #1e3a5f; margin-bottom: 16px;">
        <i class="bi bi-bank"></i> Informasi Rekening Pembayaran
    </h6>
    <div class="row">
        <div class="col-md-6 mb-3">
            <div style="background: white; border-radius: 12px; padding: 20px; border: 2px solid #e5e7eb;">
                <div style="font-weight: 700; color: #1e3a5f; margin-bottom: 12px; font-size: 18px;">
                    <i class="bi bi-bank2"></i> Bank BCA
                </div>
                <div style="color: #6b7280; margin-bottom: 4px;">No. Rekening:</div>
                <div style="font-size: 20px; font-weight: 700; color: #667eea; margin-bottom: 8px;">1234 5678 9012</div>
                <div style="color: #6b7280;">a.n. <strong>Universitas Serang Raya</strong></div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div style="background: white; border-radius: 12px; padding: 20px; border: 2px solid #e5e7eb;">
                <div style="font-weight: 700; color: #1e3a5f; margin-bottom: 12px; font-size: 18px;">
                    <i class="bi bi-bank2"></i> Bank Mandiri
                </div>
                <div style="color: #6b7280; margin-bottom: 4px;">No. Rekening:</div>
                <div style="font-size: 20px; font-weight: 700; color: #667eea; margin-bottom: 8px;">9876 5432 1098</div>
                <div style="color: #6b7280;">a.n. <strong>Universitas Serang Raya</strong></div>
            </div>
        </div>
    </div>
    <div class="alert alert-warning mt-3" style="border-radius: 12px; border: none;">
        <i class="bi bi-exclamation-triangle"></i> <strong>Perhatian:</strong> Setelah melakukan pembayaran, segera konfirmasi ke bagian keuangan dengan membawa bukti transfer.
    </div>
</div>

<?php $this->endSection(); ?>
