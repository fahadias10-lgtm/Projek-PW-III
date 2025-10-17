<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<div class="content-box">
    <div class="content-header">
        <i class="bi bi-file-earmark-text"></i> Prosedur Perkuliahan
    </div>
    
    <p style="color: #6b7280; margin-bottom: 24px;">
        Berikut adalah dokumen-dokumen penting terkait prosedur dan panduan perkuliahan.
    </p>
    
    <table class="table" style="margin-bottom: 0;">
        <thead style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
            <tr>
                <th style="padding: 16px; width: 60px;" class="text-center">No.</th>
                <th style="padding: 16px;">Nama Dokumen</th>
                <th style="padding: 16px; width: 180px;" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600;">1</td>
                <td style="padding: 16px;">
                    <i class="bi bi-file-pdf text-danger"></i> 
                    <strong>Buku Pedoman MERPAT UNDIKSHA</strong>
                    <br><small class="text-muted">Format: PDF | Ukuran: 2.5 MB</small>
                </td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-warning">
                        <i class="bi bi-download"></i> Unduh
                    </button>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600;">2</td>
                <td style="padding: 16px;">
                    <i class="bi bi-file-pdf text-danger"></i> 
                    <strong>Pedoman Perkuliahan Tugas Akhir</strong>
                    <br><small class="text-muted">Format: PDF | Ukuran: 1.8 MB</small>
                </td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-warning">
                        <i class="bi bi-download"></i> Unduh
                    </button>
                </td>
            </tr>
            <tr>
                <td class="text-center" style="padding: 16px; font-weight: 600;">3</td>
                <td style="padding: 16px;">
                    <i class="bi bi-file-pdf text-danger"></i> 
                    <strong>Pedoman Akademik</strong>
                    <br><small class="text-muted">Format: PDF | Ukuran: 3.2 MB</small>
                </td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-warning">
                        <i class="bi bi-download"></i> Unduh
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php $this->endSection(); ?>
