<?= $this->extend('layout_dosen'); ?>

<?= $this->section('content'); ?>

<!-- Navigasi -->
<div class="mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dosen/dashboard" style="color: #667eea; text-decoration: none;">Dashboard Dosen</a></li>
            <li class="breadcrumb-item active" aria-current="page">Persetujuan KRS</li>
        </ol>
    </nav>
</div>

<!-- Header -->
<div class="mb-4">
    <h1 style="font-weight: 700; color: #1e3a5f; font-size: 32px; margin-bottom: 8px;">
        <i class="bi bi-check-circle"></i> Persetujuan KRS Mahasiswa
    </h1>
    <p style="color: #6b7280; font-size: 16px; margin-bottom: 0;">Kelola persetujuan KRS mahasiswa perwalian Anda</p>
</div>

<!-- Filter dan Pencarian -->
<div class="content-box mb-4">
    <div class="row">
        <div class="col-md-4 mb-3">
            <label class="form-label" style="font-weight: 600; color: #374151;">Filter Status</label>
            <select class="form-select" style="border: 2px solid #e5e7eb; border-radius: 8px; padding: 12px;">
                <option value="">Semua Status</option>
                <option value="menunggu" selected>Menunggu Persetujuan</option>
                <option value="disetujui">Disetujui</option>
                <option value="ditolak">Ditolak</option>
            </select>
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label" style="font-weight: 600; color: #374151;">Filter Semester</label>
            <select class="form-select" style="border: 2px solid #e5e7eb; border-radius: 8px; padding: 12px;">
                <option value="">Semua Semester</option>
                <option value="1">Semester 1</option>
                <option value="3">Semester 3</option>
                <option value="5" selected>Semester 5</option>
                <option value="7">Semester 7</option>
            </select>
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label" style="font-weight: 600; color: #374151;">Cari Mahasiswa</label>
            <input type="text" class="form-control" placeholder="Cari NIM atau Nama..." style="border: 2px solid #e5e7eb; border-radius: 8px; padding: 12px;">
        </div>
    </div>
</div>

<!-- Daftar KRS -->
<div class="content-box">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 style="font-weight: 700; color: #1e3a5f; margin: 0;">
            Daftar KRS Mahasiswa
        </h5>
        <span style="background: #f59e0b; color: white; padding: 8px 16px; border-radius: 8px; font-weight: 700; font-size: 14px;">
            <i class="bi bi-hourglass-split"></i> 8 Menunggu Persetujuan
        </span>
    </div>
    
    <div class="table-responsive">
        <table class="table" style="margin-bottom: 0;">
            <thead style="background: #f8f9fa; border-bottom: 2px solid #dee2e6;">
                <tr>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">No.</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">NIM</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">Nama Mahasiswa</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">Semester</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">Jumlah MK</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">Total SKS</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">Tanggal</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">Status</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $daftar_krs = [
                    ['nim' => '2021110001', 'nama' => 'Ahmad Rizki Pratama', 'semester' => 5, 'jumlah_mk' => 8, 'total_sks' => 22, 'tanggal' => '2025-01-15 10:30', 'status' => 'Menunggu'],
                    ['nim' => '2021110015', 'nama' => 'Siti Nurhaliza', 'semester' => 5, 'jumlah_mk' => 7, 'total_sks' => 20, 'tanggal' => '2025-01-15 11:15', 'status' => 'Menunggu'],
                    ['nim' => '2021110028', 'nama' => 'Budi Santoso', 'semester' => 5, 'jumlah_mk' => 7, 'total_sks' => 21, 'tanggal' => '2025-01-15 13:45', 'status' => 'Menunggu'],
                    ['nim' => '2021110042', 'nama' => 'Dewi Lestari', 'semester' => 5, 'jumlah_mk' => 8, 'total_sks' => 23, 'tanggal' => '2025-01-15 14:20', 'status' => 'Menunggu'],
                    ['nim' => '2021110056', 'nama' => 'Eko Prasetyo', 'semester' => 5, 'jumlah_mk' => 6, 'total_sks' => 18, 'tanggal' => '2025-01-15 15:10', 'status' => 'Menunggu'],
                    ['nim' => '2021110063', 'nama' => 'Fitri Handayani', 'semester' => 5, 'jumlah_mk' => 8, 'total_sks' => 22, 'tanggal' => '2025-01-16 08:15', 'status' => 'Menunggu'],
                    ['nim' => '2021110077', 'nama' => 'Gilang Ramadhan', 'semester' => 5, 'jumlah_mk' => 7, 'total_sks' => 21, 'tanggal' => '2025-01-16 09:30', 'status' => 'Menunggu'],
                    ['nim' => '2021110084', 'nama' => 'Hana Pertiwi', 'semester' => 5, 'jumlah_mk' => 8, 'total_sks' => 24, 'tanggal' => '2025-01-16 10:45', 'status' => 'Menunggu'],
                ];
                
                foreach($daftar_krs as $index => $krs):
                    $statusBg = '';
                    $statusColor = '';
                    
                    if($krs['status'] == 'Menunggu') {
                        $statusBg = '#fef3c7';
                        $statusColor = '#92400e';
                    } elseif($krs['status'] == 'Disetujui') {
                        $statusBg = '#dcfce7';
                        $statusColor = '#166534';
                    } else {
                        $statusBg = '#fee2e2';
                        $statusColor = '#dc2626';
                    }
                ?>
                <tr style="border-bottom: 1px solid #e5e7eb;">
                    <td style="padding: 12px; color: #6b7280; font-weight: 600;"><?= $index + 1 ?></td>
                    <td style="padding: 12px; color: #374151; font-weight: 700;"><?= $krs['nim'] ?></td>
                    <td style="padding: 12px; color: #374151; font-weight: 600;"><?= $krs['nama'] ?></td>
                    <td style="padding: 12px; color: #374151; text-align: center; font-weight: 600;"><?= $krs['semester'] ?></td>
                    <td style="padding: 12px; color: #374151; text-align: center; font-weight: 600;"><?= $krs['jumlah_mk'] ?> MK</td>
                    <td style="padding: 12px; color: #374151; text-align: center; font-weight: 700;">
                        <span style="background: #e0f2fe; color: #0369a1; padding: 4px 10px; border-radius: 6px; font-size: 13px;">
                            <?= $krs['total_sks'] ?> SKS
                        </span>
                    </td>
                    <td style="padding: 12px; color: #6b7280; text-align: center; font-size: 13px;">
                        <?= date('d/m/Y', strtotime($krs['tanggal'])) ?>
                        <br>
                        <small><?= date('H:i', strtotime($krs['tanggal'])) ?></small>
                    </td>
                    <td style="padding: 12px; text-align: center;">
                        <span style="background: <?= $statusBg ?>; color: <?= $statusColor ?>; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 700;">
                            <?= $krs['status'] ?>
                        </span>
                    </td>
                    <td style="padding: 12px; text-align: center;">
                        <button class="btn btn-sm" onclick="lihatDetailKRS('<?= $krs['nim'] ?>', '<?= $krs['nama'] ?>')" style="background: #667eea; color: white; border: none; padding: 6px 12px; border-radius: 6px; font-weight: 600; margin-right: 4px;">
                            <i class="bi bi-eye"></i> Review
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Detail KRS -->
<div class="modal fade" id="modalDetailKRS" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                <h5 class="modal-title"><i class="bi bi-journal-text"></i> Detail KRS Mahasiswa</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="modalKRSContent">
                <!-- Content will be loaded dynamically -->
                <div style="padding: 40px; text-align: center;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger" onclick="tolakKRS()">
                    <i class="bi bi-x-circle"></i> Tolak KRS
                </button>
                <button type="button" class="btn btn-success" onclick="setujuiKRS()">
                    <i class="bi bi-check-circle"></i> Setujui KRS
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function lihatDetailKRS(nim, nama) {
    // Show modal
    const modal = new bootstrap.Modal(document.getElementById('modalDetailKRS'));
    modal.show();
    
    // Simulate loading detail KRS
    setTimeout(() => {
        document.getElementById('modalKRSContent').innerHTML = `
            <div style="padding: 20px;">
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                    <div class="row">
                        <div class="col-md-6">
                            <table style="width: 100%; font-size: 14px;">
                                <tr>
                                    <td style="padding: 8px 0; font-weight: 600; width: 150px;">NIM</td>
                                    <td style="padding: 8px 0;">: ${nim}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px 0; font-weight: 600;">Nama</td>
                                    <td style="padding: 8px 0;">: ${nama}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px 0; font-weight: 600;">Semester</td>
                                    <td style="padding: 8px 0;">: 5</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table style="width: 100%; font-size: 14px;">
                                <tr>
                                    <td style="padding: 8px 0; font-weight: 600; width: 150px;">Tahun Akademik</td>
                                    <td style="padding: 8px 0;">: 2025/2026</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px 0; font-weight: 600;">Semester</td>
                                    <td style="padding: 8px 0;">: GANJIL</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px 0; font-weight: 600;">Total SKS</td>
                                    <td style="padding: 8px 0;">: <strong>22 SKS</strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <h6 style="font-weight: 700; margin-bottom: 16px;">Daftar Mata Kuliah:</h6>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead style="background: #f8f9fa;">
                            <tr>
                                <th>No</th>
                                <th>Kode MK</th>
                                <th>Nama Mata Kuliah</th>
                                <th>Dosen</th>
                                <th class="text-center">SKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>TI12-5111</td>
                                <td>Data Mining</td>
                                <td>Anggie Kurniawan, M.Kom</td>
                                <td class="text-center">4</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>TI12-5112</td>
                                <td>Sistem Pakar dan Kecerdasan Buatan</td>
                                <td>Dr. Matias Bagus, M.Kom</td>
                                <td class="text-center">3</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>TI12-5113</td>
                                <td>Analisa Sistem</td>
                                <td>Zainul Hasan, M.Kom</td>
                                <td class="text-center">3</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>TI12-5114</td>
                                <td>Pemrograman Web III</td>
                                <td>Anggietas, M.Kom</td>
                                <td class="text-center">3</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>TI12-5115</td>
                                <td>Kecerdasan Bisnis</td>
                                <td>Sartika S.T., M.T., Ph.D</td>
                                <td class="text-center">3</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>UNV-5116</td>
                                <td>Bahasa Inggris V</td>
                                <td>Farah Dwi Rahmawati, M.Pd</td>
                                <td class="text-center">2</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>UNV-5117</td>
                                <td>Etika Profesi</td>
                                <td>Bambang Hariadi, M.Si</td>
                                <td class="text-center">2</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>UNV-5118</td>
                                <td>KKP - Seminar</td>
                                <td>-</td>
                                <td class="text-center">2</td>
                            </tr>
                            <tr style="background: #f8f9fa; font-weight: 700;">
                                <td colspan="4" class="text-end">Total SKS:</td>
                                <td class="text-center">22</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-3">
                    <label class="form-label" style="font-weight: 600;">Catatan (Opsional):</label>
                    <textarea class="form-control" rows="3" placeholder="Tambahkan catatan untuk mahasiswa..." style="border: 2px solid #e5e7eb; border-radius: 8px;"></textarea>
                </div>
            </div>
        `;
    }, 500);
}

function setujuiKRS() {
    if(confirm('Apakah Anda yakin ingin menyetujui KRS ini?')) {
        alert('KRS berhasil disetujui!');
        location.reload();
    }
}

function tolakKRS() {
    if(confirm('Apakah Anda yakin ingin menolak KRS ini?')) {
        alert('KRS telah ditolak!');
        location.reload();
    }
}
</script>

<?php $this->endSection(); ?>
