<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<?php
// Data dummy mahasiswa dan KRS detail
$mahasiswa = [
    'nim' => '2021110001',
    'nama' => 'Ahmad Rizki Pratama',
    'program_studi' => 'INFORMATIKA',
    'program_studi_lengkap' => 'INFORMATIKA (S1)',
    'angkatan' => '2021',
    'semester_berjalan' => 5,
    'tahun_akademik' => '2025/2026',
    'semester' => 'GANJIL'
];

// Data mata kuliah untuk semester yang dipilih
$matakuliah = [
    ['kode' => 'TI12-5111', 'nama' => 'DATA MINING', 'dosen' => 'Anggie Kurniawan, M.Kom', 'sks' => 4, 't' => 3, 'p' => 1, 'nilai' => 'A-', 'bobot' => 15.00],
    ['kode' => 'TI12-5112', 'nama' => 'SISTEM PAKAR DAN KECERDASAN BUATAN', 'dosen' => 'Dr. Matias Bagus, M.Kom', 'sks' => 3, 't' => 2, 'p' => 1, 'nilai' => 'A', 'bobot' => 12.00],
    ['kode' => 'TI12-5113', 'nama' => 'ANALISA SISTEM', 'dosen' => 'Zainul Hasan, M.Kom', 'sks' => 3, 't' => 2, 'p' => 1, 'nilai' => 'B+', 'bobot' => 10.50],
    ['kode' => 'TI12-5114', 'nama' => 'PEMROGRAMAN WEB III', 'dosen' => 'Anggietas, M.Kom', 'sks' => 3, 't' => 2, 'p' => 1, 'nilai' => 'A', 'bobot' => 12.00],
    ['kode' => 'TI12-5115', 'nama' => 'KECERDASAN BISNIS', 'dosen' => 'Sartika S.T., M.T., Ph.D', 'sks' => 3, 't' => 2, 'p' => 1, 'nilai' => 'B+', 'bobot' => 10.50],
    ['kode' => 'UNV-5116', 'nama' => 'BAHASA INGGRIS V', 'dosen' => 'Farah Dwi Rahmawati, M.Pd', 'sks' => 2, 't' => 2, 'p' => 0, 'nilai' => 'A', 'bobot' => 8.00],
    ['kode' => 'UNV-5117', 'nama' => 'ETIKA PROFESI', 'dosen' => 'Bambang Hariadi, M.Si', 'sks' => 2, 't' => 2, 'p' => 0, 'nilai' => 'A-', 'bobot' => 7.40],
    ['kode' => 'UNV-5118', 'nama' => 'KKP - SEMINAR', 'dosen' => '-', 'sks' => 2, 't' => 0, 'p' => 2, 'nilai' => 'A', 'bobot' => 8.00]
];

$total_sks = array_sum(array_column($matakuliah, 'sks'));
$total_bobot = array_sum(array_column($matakuliah, 'bobot'));
$ips = $total_bobot / $total_sks;
?>

<div class="mb-4">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h1 style="font-weight: 700; color: #1e3a5f; font-size: 32px; margin-bottom: 8px;">
                <i class="bi bi-journal-text"></i> KRS (Kartu Rencana Studi)
            </h1>
            <p style="color: #6b7280; font-size: 16px; margin-bottom: 0;">Detail Kartu Rencana Studi - <?= $mahasiswa['semester'] ?> <?= $mahasiswa['tahun_akademik'] ?></p>
        </div>
        <div>
            <a href="/krs" class="btn btn-outline-primary me-2">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
            <button class="btn btn-primary">
                <i class="bi bi-printer"></i> Print KRS
            </button>
        </div>
    </div>
</div>

<!-- Info Mahasiswa Detail -->
<div class="content-box mb-4">
    <div class="row">
        <div class="col-md-6">
            <table style="width: 100%; font-size: 14px;">
                <tr>
                    <td style="padding: 8px 0; width: 150px; font-weight: 600; color: #374151;">Tahun Akademik</td>
                    <td style="padding: 8px 0; color: #6b7280;">: <?= $mahasiswa['tahun_akademik'] ?></td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; font-weight: 600; color: #374151;">Semester</td>
                    <td style="padding: 8px 0; color: #6b7280;">: <?= $mahasiswa['semester'] ?></td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; font-weight: 600; color: #374151;">Program Studi</td>
                    <td style="padding: 8px 0; color: #6b7280;">: <?= $mahasiswa['program_studi_lengkap'] ?></td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; font-weight: 600; color: #374151;">Konsentrasi</td>
                    <td style="padding: 8px 0; color: #6b7280;">: [1] MULTIMEDIA</td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <table style="width: 100%; font-size: 14px;">
                <tr>
                    <td style="padding: 8px 0; width: 150px; font-weight: 600; color: #374151;">Semester Angka</td>
                    <td style="padding: 8px 0; color: #6b7280;">: <?= $mahasiswa['semester_berjalan'] ?></td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; font-weight: 600; color: #374151;">NIM</td>
                    <td style="padding: 8px 0; color: #6b7280;">: <?= $mahasiswa['nim'] ?></td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; font-weight: 600; color: #374151;">Nama</td>
                    <td style="padding: 8px 0; color: #6b7280;">: <?= $mahasiswa['nama'] ?></td>
                </tr>
                <tr>
                    <td style="padding: 8px 0; font-weight: 600; color: #374151;">Angkatan</td>
                    <td style="padding: 8px 0; color: #6b7280;">: <?= $mahasiswa['angkatan'] ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<!-- Validasi Persyaratan -->
<div class="content-box mb-4">
    <h6 style="font-weight: 700; color: #1e3a5f; margin-bottom: 16px;">
        <i class="bi bi-check-square"></i> Validasi Persyaratan Akademik
    </h6>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" checked disabled>
                <label class="form-check-label" style="color: #374151; font-size: 14px;">
                    Validasi Pembimbing Akademik
                </label>
            </div>
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" checked disabled>
                <label class="form-check-label" style="color: #374151; font-size: 14px;">
                    Validasi Keuangan
                </label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" checked disabled>
                <label class="form-check-label" style="color: #374151; font-size: 14px;">
                    Validasi UTS
                </label>
            </div>
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" checked disabled>
                <label class="form-check-label" style="color: #374151; font-size: 14px;">
                    Validasi UAS
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Tabel Detail Mata Kuliah -->
<div class="content-box">
    <h6 style="font-weight: 700; color: #1e3a5f; margin-bottom: 16px;">
        <i class="bi bi-list-ul"></i> Daftar Mata Kuliah
    </h6>
    
    <div class="table-responsive">
        <table class="table" style="margin-bottom: 0; font-size: 13px;">
            <thead style="background: #f8f9fa; border-bottom: 2px solid #dee2e6;">
                <tr>
                    <th style="padding: 12px 8px; width: 40px; font-weight: 700; color: #374151; text-align: center;">No.</th>
                    <th style="padding: 12px 8px; width: 80px; font-weight: 700; color: #374151;">Kode MK</th>
                    <th style="padding: 12px 8px; font-weight: 700; color: #374151;">Nama Mata Kuliah</th>
                    <th style="padding: 12px 8px; font-weight: 700; color: #374151;">Dosen</th>
                    <th style="padding: 12px 8px; width: 50px; font-weight: 700; color: #374151; text-align: center;">SKS</th>
                    <th style="padding: 12px 8px; width: 40px; font-weight: 700; color: #374151; text-align: center;">T</th>
                    <th style="padding: 12px 8px; width: 40px; font-weight: 700; color: #374151; text-align: center;">P</th>
                    <th style="padding: 12px 8px; width: 60px; font-weight: 700; color: #374151; text-align: center;">Nilai</th>
                    <th style="padding: 12px 8px; width: 70px; font-weight: 700; color: #374151; text-align: center;">Bobot</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($matakuliah as $index => $mk): 
                    $bgColor = '';
                    $textColor = '#374151';
                    if($mk['nilai'] == 'A') {
                        $bgColor = '#dcfce7';
                        $textColor = '#166534';
                    } elseif($mk['nilai'] == 'A-') {
                        $bgColor = '#dbeafe';
                        $textColor = '#1e40af';
                    } elseif($mk['nilai'] == 'B+') {
                        $bgColor = '#fef3c7';
                        $textColor = '#92400e';
                    }
                ?>
                <tr style="border-bottom: 1px solid #e5e7eb;">
                    <td style="padding: 12px 8px; text-align: center; font-weight: 600; color: #6b7280;">
                        <?= $index + 1 ?>
                    </td>
                    <td style="padding: 12px 8px; color: #6b7280; font-weight: 600;">
                        <?= $mk['kode'] ?>
                    </td>
                    <td style="padding: 12px 8px; color: #374151; font-weight: 600;">
                        <?= $mk['nama'] ?>
                    </td>
                    <td style="padding: 12px 8px; color: #6b7280;">
                        <?= $mk['dosen'] ?>
                    </td>
                    <td style="padding: 12px 8px; text-align: center; font-weight: 600; color: #374151;">
                        <?= $mk['sks'] ?>
                    </td>
                    <td style="padding: 12px 8px; text-align: center; font-weight: 600; color: #374151;">
                        <?= $mk['t'] ?>
                    </td>
                    <td style="padding: 12px 8px; text-align: center; font-weight: 600; color: #374151;">
                        <?= $mk['p'] ?>
                    </td>
                    <td style="padding: 12px 8px; text-align: center;">
                        <span style="background: <?= $bgColor ?>; color: <?= $textColor ?>; padding: 4px 8px; border-radius: 4px; font-weight: 700; font-size: 12px;">
                            <?= $mk['nilai'] ?>
                        </span>
                    </td>
                    <td style="padding: 12px 8px; text-align: center; font-weight: 600; color: #374151;">
                        <?= number_format($mk['bobot'], 2) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                
                <!-- Total Row -->
                <tr style="background: #f8f9fa; border-top: 2px solid #dee2e6;">
                    <td colspan="4" style="padding: 16px 8px; text-align: right; font-weight: 700; color: #1e3a5f;">
                        <strong>TOTAL:</strong>
                    </td>
                    <td style="padding: 16px 8px; text-align: center; font-weight: 700; color: #667eea; font-size: 16px;">
                        <?= $total_sks ?>
                    </td>
                    <td colspan="3" style="padding: 16px 8px; text-align: right; font-weight: 700; color: #1e3a5f;">
                        <strong>IPS:</strong>
                    </td>
                    <td style="padding: 16px 8px; text-align: center; font-weight: 700; color: #667eea; font-size: 16px;">
                        <?= number_format($ips, 2) ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Info Status -->
<div class="content-box mt-4" style="background: linear-gradient(135deg, #dcfce7 0%, #bbf7d0 100%);">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 style="font-weight: 700; color: #166534; margin-bottom: 8px;">
                <i class="bi bi-check-circle-fill"></i> Status KRS
            </h6>
            <p style="color: #166534; margin: 0; font-size: 14px;">
                KRS telah disetujui oleh Dosen Pembimbing Akademik pada tanggal 15 Agustus 2025
            </p>
        </div>
        <div class="col-md-4 text-end">
            <div style="background: rgba(22,101,52,0.1); padding: 12px; border-radius: 8px; border: 1px solid #bbf7d0;">
                <div style="font-size: 12px; color: #166534; opacity: 0.8;">Total SKS Semester</div>
                <div style="font-weight: 700; color: #166534; font-size: 18px;"><?= $total_sks ?> SKS</div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>
