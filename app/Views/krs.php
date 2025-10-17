<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<div class="mb-4">
    <h1 style="font-weight: 700; color: #1e3a5f; font-size: 32px; margin-bottom: 8px;">
        <i class="bi bi-journal-text"></i> KRS (Kartu Rencana Studi)
    </h1>
    <p style="color: #6b7280; font-size: 16px; margin-bottom: 0;">Sistem Kartu Rencana Studi</p>
</div>

<?php
// Data dummy mahasiswa - dalam aplikasi nyata ini akan diambil dari database/session
$mahasiswa = [
    'nim' => '2021110001',
    'nama' => 'Ahmad Rizki Pratama',
    'program_studi' => 'INFORMATIKA',
    'program_studi_lengkap' => 'INFORMATIKA (S1)',
    'angkatan' => '2021',
    'semester_berjalan' => 5,
    'tahun_akademik_aktif' => '2025/2026',
    'semester_aktif' => 'GANJIL'
];

// Hitung tahun akademik berdasarkan angkatan dan semester
$tahun_masuk = intval($mahasiswa['angkatan']);
$semester_ke = $mahasiswa['semester_berjalan'];
$tahun_sekarang = $tahun_masuk + floor(($semester_ke - 1) / 2);
$tahun_akademik_otomatis = $tahun_sekarang . '/' . ($tahun_sekarang + 1);
?>

<!-- Info Mahasiswa -->
<div class="content-box mb-4" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 style="font-weight: 700; margin-bottom: 8px; opacity: 0.9;">Data Mahasiswa</h6>
            <div class="row">
                <div class="col-md-6">
                    <div style="margin-bottom: 8px;">
                        <strong><?= $mahasiswa['nama'] ?></strong>
                    </div>
                    <div style="font-size: 14px; opacity: 0.8;">
                        NIM: <?= $mahasiswa['nim'] ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="margin-bottom: 8px;">
                        <strong><?= $mahasiswa['program_studi_lengkap'] ?></strong>
                    </div>
                    <div style="font-size: 14px; opacity: 0.8;">
                        Semester <?= $mahasiswa['semester_berjalan'] ?> - Angkatan <?= $mahasiswa['angkatan'] ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-end">
            <div style="background: rgba(255,255,255,0.2); padding: 12px; border-radius: 8px;">
                <div style="font-size: 14px; opacity: 0.8;">Status</div>
                <div style="font-weight: 700;">Mahasiswa Aktif</div>
            </div>
        </div>
    </div>
</div>

<?php 
// Flash messages
$session = session();
if ($session->getFlashdata('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bi bi-check-circle"></i> <?= $session->getFlashdata('success') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
<?php endif; ?>

<?php if ($session->getFlashdata('error')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <i class="bi bi-exclamation-triangle"></i> <?= $session->getFlashdata('error') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
<?php endif; ?>

<!-- Form Input KRS -->
<div class="content-box mb-4">
    <h5 style="font-weight: 700; color: #1e3a5f; margin-bottom: 20px;">
        <i class="bi bi-plus-circle"></i> KRS (Kartu Rencana Studi):
    </h5>
    
    <form action="/krs/simpan" method="POST" id="formKRS">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label" style="font-weight: 600; color: #374151;">Tahun Akademik</label>
                <input type="hidden" name="tahun_akademik" value="<?= $mahasiswa['tahun_akademik_aktif'] ?>">
                <select class="form-select" style="border: 2px solid #e5e7eb; border-radius: 8px; padding: 12px; background-color: #f9fafb;" readonly>
                    <option value="<?= $mahasiswa['tahun_akademik_aktif'] ?>" selected><?= $mahasiswa['tahun_akademik_aktif'] ?></option>
                </select>
                <small class="text-muted">
                    <i class="bi bi-info-circle"></i> Otomatis berdasarkan semester berjalan
                </small>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" style="font-weight: 600; color: #374151;">Semester</label>
                <select name="semester" class="form-select" style="border: 2px solid #e5e7eb; border-radius: 8px; padding: 12px;" required>
                    <option value="">Pilih Semester</option>
                    <option value="GANJIL" <?= $mahasiswa['semester_aktif'] == 'GANJIL' ? 'selected' : '' ?>>GANJIL</option>
                    <option value="GENAP" <?= $mahasiswa['semester_aktif'] == 'GENAP' ? 'selected' : '' ?>>GENAP</option>
                </select>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label" style="font-weight: 600; color: #374151;">Program Studi</label>
                <input type="hidden" name="program_studi" value="<?= $mahasiswa['program_studi'] ?>">
                <select class="form-select" style="border: 2px solid #e5e7eb; border-radius: 8px; padding: 12px; background-color: #f9fafb;" readonly>
                    <option value="<?= $mahasiswa['program_studi'] ?>" selected><?= $mahasiswa['program_studi_lengkap'] ?></option>
                </select>
                <small class="text-muted">
                    <i class="bi bi-info-circle"></i> Otomatis berdasarkan data mahasiswa
                </small>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" style="font-weight: 600; color: #374151;">Semester Angka</label>
                <select name="semester_angka" class="form-select" style="border: 2px solid #e5e7eb; border-radius: 8px; padding: 12px;" required>
                    <option value="">Pilih Semester</option>
                    <?php for($i = 1; $i <= 8; $i++): ?>
                    <option value="<?= $i ?>" <?= $i == $mahasiswa['semester_berjalan'] ? 'selected' : '' ?>><?= $i ?></option>
                    <?php endfor; ?>
                </select>
                <small class="text-muted">
                    <i class="bi bi-info-circle"></i> Semester <?= $mahasiswa['semester_berjalan'] ?> dipilih otomatis
                </small>
            </div>
        </div>
        
        <!-- Pilihan Mata Kuliah -->
        <div class="mb-4">
            <h6 style="font-weight: 700; color: #1e3a5f; margin-bottom: 16px;">
                <i class="bi bi-list-check"></i> Pilih Mata Kuliah
            </h6>
            <div class="row">
                <?php 
                $mata_kuliah_tersedia = [
                    ['kode' => 'TI12-5111', 'nama' => 'Data Mining', 'sks' => 4, 'dosen' => 'Anggie Kurniawan, M.Kom'],
                    ['kode' => 'TI12-5112', 'nama' => 'Sistem Pakar dan Kecerdasan Buatan', 'sks' => 3, 'dosen' => 'Dr. Matias Bagus, M.Kom'],
                    ['kode' => 'TI12-5113', 'nama' => 'Analisa Sistem', 'sks' => 3, 'dosen' => 'Zainul Hasan, M.Kom'],
                    ['kode' => 'TI12-5114', 'nama' => 'Pemrograman Web III', 'sks' => 3, 'dosen' => 'Anggietas, M.Kom'],
                    ['kode' => 'TI12-5115', 'nama' => 'Kecerdasan Bisnis', 'sks' => 3, 'dosen' => 'Sartika S.T., M.T., Ph.D'],
                    ['kode' => 'UNV-5116', 'nama' => 'Bahasa Inggris V', 'sks' => 2, 'dosen' => 'Farah Dwi Rahmawati, M.Pd'],
                    ['kode' => 'UNV-5117', 'nama' => 'Etika Profesi', 'sks' => 2, 'dosen' => 'Bambang Hariadi, M.Si'],
                    ['kode' => 'UNV-5118', 'nama' => 'KKP - Seminar', 'sks' => 2, 'dosen' => '-'],
                ];
                
                foreach($mata_kuliah_tersedia as $mk): 
                ?>
                <div class="col-md-6 mb-3">
                    <div class="form-check" style="background: #f8f9fa; padding: 12px; border-radius: 8px; border: 1px solid #e5e7eb;">
                        <input class="form-check-input mk-checkbox" type="checkbox" name="mata_kuliah[]" value="<?= $mk['kode'] ?>" data-sks="<?= $mk['sks'] ?>" checked>
                        <label class="form-check-label" style="color: #374151; font-weight: 500;">
                            <strong><?= $mk['kode'] ?></strong> - <?= $mk['nama'] ?>
                            <br><small style="color: #6b7280;"><?= $mk['dosen'] ?> | <?= $mk['sks'] ?> SKS</small>
                        </label>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div class="mt-3">
                <div class="alert alert-info" style="background: #e0f2fe; border: 1px solid #0369a1; color: #0369a1;">
                    <i class="bi bi-info-circle"></i> 
                    <strong>Total SKS Dipilih: <span id="totalSKS">24</span></strong> 
                    (Maksimal: 24 SKS)
                </div>
            </div>
        </div>
        
        <div class="text-end">
            <button type="submit" class="btn" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; padding: 12px 30px; border-radius: 8px; font-weight: 600;">
                <i class="bi bi-check-circle"></i> Simpan KRS
            </button>
        </div>
    </form>
    
    <script>
        // Hitung total SKS secara real-time
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.mk-checkbox');
            const totalSKSElement = document.getElementById('totalSKS');
            
            function updateTotalSKS() {
                let total = 0;
                checkboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        total += parseInt(checkbox.dataset.sks);
                    }
                });
                totalSKSElement.textContent = total;
                
                // Ubah warna alert berdasarkan total SKS
                const alert = totalSKSElement.closest('.alert');
                if (total > 24) {
                    alert.className = 'alert alert-danger';
                    alert.style.background = '#fee2e2';
                    alert.style.borderColor = '#dc2626';
                    alert.style.color = '#dc2626';
                } else if (total < 12) {
                    alert.className = 'alert alert-warning';
                    alert.style.background = '#fef3c7';
                    alert.style.borderColor = '#d97706';
                    alert.style.color = '#d97706';
                } else {
                    alert.className = 'alert alert-info';
                    alert.style.background = '#e0f2fe';
                    alert.style.borderColor = '#0369a1';
                    alert.style.color = '#0369a1';
                }
            }
            
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateTotalSKS);
            });
            
            // Validasi form sebelum submit
            document.getElementById('formKRS').addEventListener('submit', function(e) {
                const total = parseInt(totalSKSElement.textContent);
                if (total > 24) {
                    e.preventDefault();
                    alert('Total SKS tidak boleh lebih dari 24!');
                } else if (total < 12) {
                    e.preventDefault();
                    alert('Total SKS minimal 12!');
                }
            });
        });
    </script>
</div>

<!-- Riwayat KRS -->
<div class="content-box">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 style="font-weight: 700; color: #1e3a5f; margin: 0;">
            <i class="bi bi-clock-history"></i> Riwayat KRS
        </h5>
        <div class="d-flex gap-2">
            <button class="btn btn-primary">
                <i class="bi bi-printer"></i> Cetak
            </button>
            <button class="btn btn-success">
                <i class="bi bi-download"></i> Download
            </button>
        </div>
    </div>
    
    <table class="table" style="margin-bottom: 0;">
        <thead style="background: #f8f9fa; border-bottom: 2px solid #dee2e6;">
            <tr>
                <th style="padding: 16px; width: 60px; font-weight: 700; color: #374151;" class="text-center">No.</th>
                <th style="padding: 16px; font-weight: 700; color: #374151;">Tahun Akademik</th>
                <th style="padding: 16px; font-weight: 700; color: #374151;">Semester</th>
                <th style="padding: 16px; font-weight: 700; color: #374151; text-align: center;">Jumlah MK</th>
                <th style="padding: 16px; font-weight: 700; color: #374151; text-align: center;">Status</th>
                <th style="padding: 16px; font-weight: 700; color: #374151; text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // Ambil data KRS dari session
            $riwayat_krs = $session->get('riwayat_krs') ?? [];
            
            // Jika belum ada data di session, gunakan data default
            if (empty($riwayat_krs)) {
                $krsData = [
                    ['tahun' => '2024/2025', 'semester' => 'GENAP', 'jumlah_mk' => 7, 'status' => 'Disetujui'],
                    ['tahun' => '2024/2025', 'semester' => 'GANJIL', 'jumlah_mk' => 8, 'status' => 'Disetujui'],
                    ['tahun' => '2023/2024', 'semester' => 'GENAP', 'jumlah_mk' => 7, 'status' => 'Disetujui'],
                    ['tahun' => '2023/2024', 'semester' => 'GANJIL', 'jumlah_mk' => 8, 'status' => 'Disetujui'],
                ];
            } else {
                $krsData = $riwayat_krs;
            }
            
            foreach($krsData as $index => $krs): 
            ?>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600; color: #6b7280;">
                    <?= $index + 1 ?>
                </td>
                <td style="padding: 16px; color: #374151; font-weight: 600;">
                    <?= $krs['tahun'] ?>
                </td>
                <td style="padding: 16px; color: #374151;">
                    <span style="background: <?= $krs['semester'] == 'GANJIL' ? '#dbeafe' : '#dcfce7' ?>; 
                                 color: <?= $krs['semester'] == 'GANJIL' ? '#1e40af' : '#166534' ?>; 
                                 padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">
                        <?= $krs['semester'] ?>
                    </span>
                </td>
                <td style="padding: 16px; text-align: center; font-weight: 600; color: #374151;">
                    <?= $krs['jumlah_mk'] ?> Mata Kuliah
                </td>
                <td class="text-center" style="padding: 16px;">
                    <?php 
                    $status = $krs['status'] ?? 'Disetujui';
                    $statusColor = '';
                    $statusBg = '';
                    
                    if ($status == 'Disetujui') {
                        $statusBg = '#dcfce7';
                        $statusColor = '#166534';
                    } elseif ($status == 'Menunggu Persetujuan') {
                        $statusBg = '#fef3c7';
                        $statusColor = '#92400e';
                    } else {
                        $statusBg = '#fee2e2';
                        $statusColor = '#dc2626';
                    }
                    ?>
                    <span style="background: <?= $statusBg ?>; color: <?= $statusColor ?>; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">
                        <?= $status ?>
                    </span>
                </td>
                <td class="text-center" style="padding: 16px;">
                    <a href="/krs-detail/<?= str_replace('/', '-', $krs['tahun']) ?>/<?= $krs['semester'] ?>" class="btn btn-sm" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; padding: 8px 16px; border-radius: 6px; font-weight: 600; text-decoration: none;">
                        <i class="bi bi-eye"></i> Lihat Detail
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Info Tambahan -->
<div class="content-box mt-4" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <div class="row">
        <div class="col-md-6">
            <h6 style="font-weight: 700; color: #1e3a5f; margin-bottom: 16px;">
                <i class="bi bi-info-circle"></i> Informasi KRS
            </h6>
            <ul style="color: #6b7280; margin: 0; padding-left: 20px;">
                <li>Batas maksimal SKS per semester: 24 SKS</li>
                <li>KRS harus disetujui oleh Dosen Wali (PA)</li>
                <li>Periode pengisian KRS sesuai kalender akademik</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h6 style="font-weight: 700; color: #1e3a5f; margin-bottom: 16px;">
                <i class="bi bi-calendar-check"></i> Status Periode KRS
            </h6>
            <div style="background: #dcfce7; color: #166534; padding: 12px 16px; border-radius: 8px; font-weight: 600;">
                <i class="bi bi-check-circle"></i> Periode KRS Semester Ganjil 2025/2026 Aktif
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>
