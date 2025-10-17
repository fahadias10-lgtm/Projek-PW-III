<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<div class="content-box">
    <div class="content-header">
        <i class="bi bi-folder-fill"></i> Berkas Mahasiswa
    </div>
    
    <div class="alert" style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: white; border: none; border-radius: 12px; padding: 20px; margin-bottom: 24px;">
        <h6 style="font-weight: 700; margin-bottom: 12px;">
            <i class="bi bi-info-circle-fill"></i> Informasi Penting:
        </h6>
        <ul style="margin-bottom: 0; padding-left: 20px;">
            <li>Format file yang diijinkan: <strong>JPG, JPEG, PDF</strong></li>
            <li>Ukuran file maksimal <strong>2 MB</strong> (Sertifikat Vaksin: 300 KB)</li>
            <li>Pastikan berkas yang diupload <strong>terbaca & jelas</strong></li>
            <li>Dokumen bertanda (*) <strong>wajib diisi</strong></li>
        </ul>
    </div>
    
    <table class="table" style="margin-bottom: 0;">
        <thead style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
            <tr>
                <th style="padding: 16px;">Jenis Dokumen</th>
                <th style="padding: 16px;">Nama File</th>
                <th class="text-center" style="padding: 16px; width: 120px;">Preview</th>
                <th class="text-center" style="padding: 16px; width: 140px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td style="padding: 16px;">
                    <strong>Foto (*)</strong><br>
                    <small class="text-muted">Gunakan foto formal</small>
                </td>
                <td style="padding: 16px; color: #6b7280; font-size: 13px;">95170661206740ce38616c31f1a5b.jpg</td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm" style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: white; border: none;">
                        <i class="bi bi-eye"></i> Lihat
                    </button>
                </td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-upload"></i> Upload Ulang
                    </button>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td style="padding: 16px;">
                    <strong>KTP (*)</strong><br>
                    <small class="text-muted">Wajib upload</small>
                </td>
                <td style="padding: 16px; color: #6b7280; font-size: 13px;">IMG_20230927_183905_177.jpg</td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm" style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: white; border: none;">
                        <i class="bi bi-eye"></i> Lihat
                    </button>
                </td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-upload"></i> Upload Ulang
                    </button>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td style="padding: 16px;">
                    <strong>Ijazah Terakhir (*)</strong><br>
                    <small class="text-muted">Wajib upload</small>
                </td>
                <td style="padding: 16px; color: #6b7280; font-size: 13px;">IMG_20230927_183905_065.jpg</td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm" style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: white; border: none;">
                        <i class="bi bi-eye"></i> Lihat
                    </button>
                </td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-upload"></i> Upload Ulang
                    </button>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td style="padding: 16px;">
                    <strong>Transkrip Nilai</strong><br>
                    <small class="text-muted">Opsional</small>
                </td>
                <td style="padding: 16px; color: #9ca3af; font-style: italic;">Belum diupload</td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm btn-secondary" disabled>
                        <i class="bi bi-eye-slash"></i> Lihat
                    </button>
                </td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; border: none;">
                        <i class="bi bi-cloud-upload"></i> Upload
                    </button>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td style="padding: 16px;">
                    <strong>Kartu Keluarga (*)</strong><br>
                    <small class="text-muted">Wajib upload</small>
                </td>
                <td style="padding: 16px; color: #6b7280; font-size: 13px;">SLAMET_TURMUDI.pdf</td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm" style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: white; border: none;">
                        <i class="bi bi-eye"></i> Lihat
                    </button>
                </td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-upload"></i> Upload Ulang
                    </button>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td style="padding: 16px;">
                    <strong>Akte Kelahiran (*)</strong><br>
                    <small class="text-muted">Wajib upload</small>
                </td>
                <td style="padding: 16px; color: #6b7280; font-size: 13px;">IMG_20230927_190449_041.jpg</td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm" style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: white; border: none;">
                        <i class="bi bi-eye"></i> Lihat
                    </button>
                </td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-upload"></i> Upload Ulang
                    </button>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td style="padding: 16px;">
                    <strong>Sertifikat Vaksin 1</strong><br>
                    <small class="text-muted">Opsional</small>
                </td>
                <td style="padding: 16px; color: #9ca3af; font-style: italic;">Belum diupload</td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm btn-secondary" disabled>
                        <i class="bi bi-eye-slash"></i> Lihat
                    </button>
                </td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; border: none;">
                        <i class="bi bi-cloud-upload"></i> Upload
                    </button>
                </td>
            </tr>
            <tr>
                <td style="padding: 16px;">
                    <strong>Sertifikat Vaksin 2</strong><br>
                    <small class="text-muted">Opsional</small>
                </td>
                <td style="padding: 16px; color: #9ca3af; font-style: italic;">Belum diupload</td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm btn-secondary" disabled>
                        <i class="bi bi-eye-slash"></i> Lihat
                    </button>
                </td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; border: none;">
                        <i class="bi bi-cloud-upload"></i> Upload
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php $this->endSection(); ?>
