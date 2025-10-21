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
    'semester' => 'GANJIL',
    'konsentrasi' => 'PEMPROGRAMAN WEB'
];

// Data mata kuliah untuk semester yang dipilih
$matakuliah = [
    ['kode' => 'TI12-5111', 'nama' => 'DATA MINING', 'dosen' => 'Anggie Kurniawan, M.Kom', 'sks' => 4, 'hari' => 'Senin', 'jam' => '08:00-10:30', 'ruangan' => 'Lab. Komputer A1', 'konsentrasi' => 'PEMPROGRAMAN'],
    ['kode' => 'TI12-5112', 'nama' => 'SISTEM PAKAR DAN KECERDASAN BUATAN', 'dosen' => 'Dr. Matias Bagus, M.Kom', 'sks' => 3, 'hari' => 'Selasa', 'jam' => '10:30-12:10', 'ruangan' => 'Ruang Kuliah 201', 'konsentrasi' => 'MULTIMEDIA'],
    ['kode' => 'TI12-5113', 'nama' => 'ANALISA SISTEM', 'dosen' => 'Zainul Hasan, M.Kom', 'sks' => 3, 'hari' => 'Rabu', 'jam' => '13:00-15:30', 'ruangan' => 'Ruang Kuliah 203', 'konsentrasi' => 'PEMPROGRAMAN WEB'],
    ['kode' => 'TI12-5114', 'nama' => 'PEMROGRAMAN WEB III', 'dosen' => 'Anggietas, M.Kom', 'sks' => 3, 'hari' => 'Kamis', 'jam' => '15:30-17:10', 'ruangan' => 'Lab. Komputer B2', 'konsentrasi' => 'PEMPROGRAMAN WEB'],
    ['kode' => 'TI12-5115', 'nama' => 'KECERDASAN BISNIS', 'dosen' => 'Sartika S.T., M.T., Ph.D', 'sks' => 3, 'hari' => 'Jumat', 'jam' => '09:00-11:30', 'ruangan' => 'Ruang Kuliah 205', 'konsentrasi' => 'MULTIMEDIA'],
    ['kode' => 'UNV-5116', 'nama' => 'BAHASA INGGRIS V', 'dosen' => 'Farah Dwi Rahmawati, M.Pd', 'sks' => 2, 'hari' => 'Senin', 'jam' => '13:00-14:40', 'ruangan' => 'Ruang Kuliah 101', 'konsentrasi' => 'UMUM'],
    ['kode' => 'UNV-5117', 'nama' => 'ETIKA PROFESI', 'dosen' => 'Bambang Hariadi, M.Si', 'sks' => 2, 'hari' => 'Selasa', 'jam' => '14:00-15:40', 'ruangan' => 'Ruang Kuliah 102', 'konsentrasi' => 'UMUM'],
    ['kode' => 'UNV-5118', 'nama' => 'KKP - SEMINAR', 'dosen' => '-', 'sks' => 2, 'hari' => 'Rabu', 'jam' => '10:00-11:40', 'ruangan' => 'Auditorium', 'konsentrasi' => 'PEMPROGRAMAN']
];

$total_sks = 4 + 3 + 3 + 3 + 3 + 2 + 2 + 2; // Total: 22 SKS

// Fungsi untuk memberikan warna berdasarkan konsentrasi
function getKonsentrasiColor($konsentrasi) {
    $colors = [
        'PEMPROGRAMAN' => '#8b5cf6',     // Purple
        'PEMPROGRAMAN WEB' => '#06b6d4', // Cyan
        'MULTIMEDIA' => '#10b981',       // Emerald
        'UMUM' => '#f59e0b'              // Amber
    ];
    return $colors[$konsentrasi] ?? '#6b7280';
}
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
                    <td style="padding: 8px 0; color: #6b7280;">: <?= $mahasiswa['konsentrasi'] ?></td>
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
                    <th style="padding: 12px 8px; width: 60px; font-weight: 700; color: #374151; text-align: center;">Hari</th>
                    <th style="padding: 12px 8px; width: 80px; font-weight: 700; color: #374151; text-align: center;">Jam</th>
                    <th style="padding: 12px 8px; width: 100px; font-weight: 700; color: #374151; text-align: center;">Konsentrasi</th>
                    <th style="padding: 12px 8px; width: 50px; font-weight: 700; color: #374151; text-align: center;">SKS</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($matakuliah as $index => $mk): ?>
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
                        <?= $mk['hari'] ?>
                    </td>
                    <td style="padding: 12px 8px; text-align: center; font-weight: 600; color: #374151;">
                        <?= $mk['jam'] ?>
                    </td>
                    <td style="padding: 12px 8px; text-align: center; font-weight: 600; color: #374151;">
                        <?= $mk['ruangan'] ?>
                    </td>
                    <td style="padding: 12px 8px; text-align: center; font-weight: 600; color: #374151;">
                        <span style="background: <?= getKonsentrasiColor($mk['konsentrasi']) ?>; color: white; padding: 4px 8px; border-radius: 12px; font-size: 10px; font-weight: 700;">
                            <?= $mk['konsentrasi'] ?>
                        </span>
                    </td>
                    <td style="padding: 12px 8px; text-align: center; font-weight: 600; color: #374151;">
                        <?= $mk['sks'] ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php $this->endSection(); ?>
