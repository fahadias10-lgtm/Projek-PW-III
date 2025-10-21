<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<div class="mb-4">
    <h1 style="font-weight: 700; color: #1e3a5f; font-size: 32px; margin-bottom: 8px;">
        <i class="bi bi-journal-check"></i> Pilih Mata Kuliah
    </h1>
    <p style="color: #6b7280; font-size: 16px; margin-bottom: 0;">Pilih mata kuliah yang akan diambil semester ini</p>
</div>

<!-- Navigasi -->
<div class="mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard" style="color: #667eea; text-decoration: none;">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/krs" style="color: #667eea; text-decoration: none;">KRS</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pilih Mata Kuliah</li>
        </ol>
    </nav>
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

<!-- Form Pemilihan Mata Kuliah -->
<div class="content-box mb-4">
    <h5 style="font-weight: 700; color: #1e3a5f; margin-bottom: 20px;">
        <i class="bi bi-list-check"></i> Pilih Mata Kuliah Semester <?= $mahasiswa['semester_aktif'] ?> <?= $mahasiswa['tahun_akademik_aktif'] ?>
    </h5>

    <form action="/krs/simpan" method="POST" id="formPilihMK">
        <!-- Hidden fields untuk data KRS -->
        <input type="hidden" name="tahun_akademik" value="<?= $mahasiswa['tahun_akademik_aktif'] ?>">
        <input type="hidden" name="semester" value="<?= $mahasiswa['semester_aktif'] ?>">
        <input type="hidden" name="program_studi" value="<?= $mahasiswa['program_studi'] ?>">
        <input type="hidden" name="semester_angka" value="<?= $mahasiswa['semester_berjalan'] ?>">
        <input type="hidden" name="konsentrasi" value="<?= $mahasiswa['konsentrasi'] ?>">

        <!-- Pilihan Mata Kuliah -->
        <div class="mb-4">
            <div class="row">
                <?php
                $mata_kuliah_tersedia = [
                    ['kode' => 'TI12-5111', 'nama' => 'Data Mining', 'sks' => 4, 'dosen' => 'Anggie Kurniawan, M.Kom', 'konsentrasi' => 'PEMPROGRAMAN'],
                    ['kode' => 'TI12-5112', 'nama' => 'Sistem Pakar dan Kecerdasan Buatan', 'sks' => 3, 'dosen' => 'Dr. Matias Bagus, M.Kom', 'konsentrasi' => 'MULTIMEDIA'],
                    ['kode' => 'TI12-5113', 'nama' => 'Analisa Sistem', 'sks' => 3, 'dosen' => 'Zainul Hasan, M.Kom', 'konsentrasi' => 'PEMPROGRAMAN WEB'],
                    ['kode' => 'TI12-5114', 'nama' => 'Pemrograman Web III', 'sks' => 3, 'dosen' => 'Anggietas, M.Kom', 'konsentrasi' => 'PEMPROGRAMAN WEB'],
                    ['kode' => 'TI12-5115', 'nama' => 'Kecerdasan Bisnis', 'sks' => 3, 'dosen' => 'Sartika S.T., M.T., Ph.D', 'konsentrasi' => 'MULTIMEDIA'],
                    ['kode' => 'UNV-5116', 'nama' => 'Bahasa Inggris V', 'sks' => 2, 'dosen' => 'Farah Dwi Rahmawati, M.Pd', 'konsentrasi' => 'UMUM'],
                    ['kode' => 'UNV-5117', 'nama' => 'Etika Profesi', 'sks' => 2, 'dosen' => 'Bambang Hariadi, M.Si', 'konsentrasi' => 'UMUM'],
                    ['kode' => 'UNV-5118', 'nama' => 'KKP - Seminar', 'sks' => 2, 'dosen' => '-', 'konsentrasi' => 'PEMPROGRAMAN'],
                ];

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

                foreach($mata_kuliah_tersedia as $mk):
                ?>
                <div class="col-md-6 mb-3">
                    <div class="form-check" style="background: #f8f9fa; padding: 12px; border-radius: 8px; border: 1px solid #e5e7eb;">
                        <input class="form-check-input mk-checkbox" type="checkbox" name="mata_kuliah[]" value="<?= $mk['kode'] ?>" data-sks="<?= $mk['sks'] ?>">
                        <label class="form-check-label" style="color: #374151; font-weight: 500;">
                            <strong><?= $mk['kode'] ?></strong> - <?= $mk['nama'] ?>
                            <br><small style="color: #6b7280; margin-bottom: 8px; display: block;"><?= $mk['dosen'] ?> | <?= $mk['sks'] ?> SKS</small>
                            <span style="background: <?= getKonsentrasiColor($mk['konsentrasi']) ?>; color: white; padding: 2px 8px; border-radius: 12px; font-size: 10px; font-weight: 700;">
                                <?= $mk['konsentrasi'] ?>
                            </span>
                        </label>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Info Total SKS -->
            <div class="mt-3">
                <div class="alert alert-info" style="background: #e0f2fe; border: 1px solid #0369a1; color: #0369a1;">
                    <i class="bi bi-info-circle"></i>
                    <strong>Total SKS Dipilih: <span id="totalSKS">0</span></strong>
                    (Minimal: 12 SKS, Maksimal: 24 SKS)
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="d-flex gap-2">
            <a href="/krs" class="btn" style="background: #6b7280; color: white; border: none; padding: 12px 24px; border-radius: 8px; font-weight: 600;">
                <i class="bi bi-arrow-left"></i> Kembali ke KRS
            </a>
            <button type="submit" class="btn" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; padding: 12px 30px; border-radius: 8px; font-weight: 600;">
                <i class="bi bi-check-circle"></i> Simpan KRS
            </button>
        </div>
    </form>
</div>

<!-- Info Tambahan -->
<div class="content-box mt-4" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <h6 style="font-weight: 700; color: #1e3a5f; margin-bottom: 16px;">
        <i class="bi bi-info-circle"></i> Informasi Pemilihan Mata Kuliah
    </h6>
    <div class="row">
        <div class="col-md-6">
            <ul style="color: #6b7280; margin: 0; padding-left: 20px;">
                <li>Pilih mata kuliah sesuai dengan kemampuan dan minat Anda</li>
                <li>Pastikan total SKS antara 12-24 SKS per semester</li>
                <li>Konsultasikan dengan dosen wali sebelum mengisi KRS</li>
            </ul>
        </div>
        <div class="col-md-6">
            <ul style="color: #6b7280; margin: 0; padding-left: 20px;">
                <li>Setelah menyimpan, KRS akan menunggu persetujuan dosen wali</li>
                <li>Anda dapat melihat status KRS di halaman riwayat KRS</li>
                <li>Pastikan data sudah benar sebelum menyimpan</li>
            </ul>
        </div>
    </div>
</div>

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
        document.getElementById('formPilihMK').addEventListener('submit', function(e) {
            const total = parseInt(totalSKSElement.textContent);
            if (total > 24) {
                e.preventDefault();
                alert('Total SKS tidak boleh lebih dari 24!');
            } else if (total < 12) {
                e.preventDefault();
                alert('Total SKS minimal 12!');
            } else if (total === 0) {
                e.preventDefault();
                alert('Pilih minimal 1 mata kuliah!');
            }
        });
    });
</script>

<?php $this->endSection(); ?>
