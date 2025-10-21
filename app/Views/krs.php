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
    'semester_aktif' => 'GANJIL',
    'konsentrasi' => 'PEMPROGRAMAN WEB'
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
                <select name="semester" id="semesterSelect" class="form-select" style="border: 2px solid #e5e7eb; border-radius: 8px; padding: 12px;" required>
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
                <label class="form-label" style="font-weight: 600; color: #374151;">Konsentrasi</label>
                <select name="konsentrasi" class="form-select" style="border: 2px solid #e5e7eb; border-radius: 8px; padding: 12px;" required>
                    <option value="">Pilih Konsentrasi</option>
                    <option value="PEMPROGRAMAN" <?= $mahasiswa['konsentrasi'] == 'PEMPROGRAMAN' ? 'selected' : '' ?>>PEMPROGRAMAN</option>
                    <option value="PEMPROGRAMAN WEB" <?= $mahasiswa['konsentrasi'] == 'PEMPROGRAMAN WEB' ? 'selected' : '' ?>>PEMPROGRAMAN WEB</option>
                    <option value="MULTIMEDIA" <?= $mahasiswa['konsentrasi'] == 'MULTIMEDIA' ? 'selected' : '' ?>>MULTIMEDIA</option>
                    <option value="UMUM" <?= $mahasiswa['konsentrasi'] == 'UMUM' ? 'selected' : '' ?>>UMUM</option>
                </select>
                <small class="text-muted">
                    <i class="bi bi-info-circle"></i> Pilih konsentrasi sesuai minat Anda
                </small>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label" style="font-weight: 600; color: #374151;">Semester Angka</label>
                <select name="semester_angka" id="semesterAngka" class="form-select" style="border: 2px solid #e5e7eb; border-radius: 8px; padding: 12px;" required>
                    <option value="">Pilih Semester</option>
                    <?php for($i = 1; $i <= 8; $i++): ?>
                    <option value="<?= $i ?>" data-type="<?= $i % 2 == 1 ? 'ganjil' : 'genap' ?>" <?= $i == $mahasiswa['semester_berjalan'] ? 'selected' : '' ?>><?= $i ?></option>
                    <?php endfor; ?>
                </select>
                <small class="text-muted">
                    <i class="bi bi-info-circle"></i> Semester akan terfilter berdasarkan pilihan semester
                </small>
            </div>
        </div>
        
        <!-- Navigasi ke Pemilihan Mata Kuliah -->
        <div class="mb-4">
            <div class="content-box" style="background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%); border: 1px solid #0369a1;">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h6 style="font-weight: 700; color: #0369a1; margin-bottom: 8px;">
                            <i class="bi bi-arrow-right-circle"></i> Langkah Selanjutnya
                        </h6>
                        <p style="color: #0369a1; margin: 0;">Silakan lanjutkan ke halaman pemilihan mata kuliah untuk memilih mata kuliah yang akan diambil.</p>
                    </div>
                    <div class="col-md-4 text-end">
                        <a href="/pilih-mata-kuliah" class="btn" style="background: linear-gradient(135deg, #0ea5e9 0%, #0369a1 100%); color: white; border: none; padding: 12px 24px; border-radius: 8px; font-weight: 600;">
                            <i class="bi bi-journal-check"></i> Pilih Mata Kuliah
                        </a>
                    </div>
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
        // Filter semester angka berdasarkan pilihan semester GANJIL/GENAP
        document.addEventListener('DOMContentLoaded', function() {
            const semesterSelect = document.getElementById('semesterSelect');
            const semesterAngkaSelect = document.getElementById('semesterAngka');
            const allOptions = Array.from(semesterAngkaSelect.querySelectorAll('option[data-type]'));

            function filterSemesterAngka() {
                const selectedSemester = semesterSelect.value;

                // Reset - tampilkan semua option
                allOptions.forEach(option => {
                    option.style.display = '';
                });

                // Filter berdasarkan pilihan
                if (selectedSemester === 'GANJIL') {
                    allOptions.forEach(option => {
                        if (option.dataset.type === 'genap') {
                            option.style.display = 'none';
                        }
                    });
                } else if (selectedSemester === 'GENAP') {
                    allOptions.forEach(option => {
                        if (option.dataset.type === 'ganjil') {
                            option.style.display = 'none';
                        }
                    });
                }

                // Reset pilihan jika option yang dipilih tersembunyi
                const selectedOption = semesterAngkaSelect.options[semesterAngkaSelect.selectedIndex];
                if (selectedOption && selectedOption.style.display === 'none') {
                    semesterAngkaSelect.value = '';
                }
            }

            // Jalankan filter saat semester berubah
            semesterSelect.addEventListener('change', filterSemesterAngka);

            // Jalankan filter saat halaman dimuat (jika sudah ada pilihan default)
            filterSemesterAngka();
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
                <th style="padding: 16px; font-weight: 700; color: #374151; text-align: center;">Konsentrasi</th>
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
                    ['tahun' => '2024/2025', 'semester' => 'GENAP', 'konsentrasi' => 'MULTIMEDIA', 'jumlah_mk' => 7, 'status' => 'Disetujui'],
                    ['tahun' => '2024/2025', 'semester' => 'GANJIL', 'konsentrasi' => 'PEMPROGRAMAN WEB', 'jumlah_mk' => 8, 'status' => 'Disetujui'],
                    ['tahun' => '2023/2024', 'semester' => 'GENAP', 'konsentrasi' => 'PEMPROGRAMAN', 'jumlah_mk' => 7, 'status' => 'Disetujui'],
                    ['tahun' => '2023/2024', 'semester' => 'GANJIL', 'konsentrasi' => 'UMUM', 'jumlah_mk' => 8, 'status' => 'Disetujui'],
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
                <td style="padding: 16px; text-align: center;">
                    <?php 
                    $konsentrasi = $krs['konsentrasi'] ?? 'UMUM';
                    $konsentrasiColor = '';
                    
                    if ($konsentrasi == 'PEMPROGRAMAN') {
                        $konsentrasiColor = '#8b5cf6';
                    } elseif ($konsentrasi == 'PEMPROGRAMAN WEB') {
                        $konsentrasiColor = '#06b6d4';
                    } elseif ($konsentrasi == 'MULTIMEDIA') {
                        $konsentrasiColor = '#10b981';
                    } else {
                        $konsentrasiColor = '#f59e0b';
                    }
                    ?>
                    <span style="background: <?= $konsentrasiColor ?>; color: white; padding: 4px 10px; border-radius: 12px; font-size: 11px; font-weight: 700;">
                        <?= $konsentrasi ?>
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
