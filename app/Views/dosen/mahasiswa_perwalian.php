<?= $this->extend('layout_dosen'); ?>

<?= $this->section('content'); ?>

<!-- Navigasi -->
<div class="mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dosen/dashboard" style="color: #667eea; text-decoration: none;">Dashboard Dosen</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mahasiswa Perwalian</li>
        </ol>
    </nav>
</div>

<!-- Header -->
<div class="mb-4">
    <h1 style="font-weight: 700; color: #1e3a5f; font-size: 32px; margin-bottom: 8px;">
        <i class="bi bi-people"></i> Mahasiswa Perwalian
    </h1>
    <p style="color: #6b7280; font-size: 16px; margin-bottom: 0;">Daftar mahasiswa yang Anda bimbing sebagai dosen wali</p>
</div>

<!-- Filter dan Statistik -->
<div class="row mb-4">
    <div class="col-md-3 mb-3">
        <div class="content-box" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
            <div style="font-size: 14px; opacity: 0.9; margin-bottom: 8px;">Total Mahasiswa</div>
            <div style="font-size: 32px; font-weight: 700;">35</div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="content-box" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white;">
            <div style="font-size: 14px; opacity: 0.9; margin-bottom: 8px;">Mahasiswa Aktif</div>
            <div style="font-size: 32px; font-weight: 700;">32</div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="content-box" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white;">
            <div style="font-size: 14px; opacity: 0.9; margin-bottom: 8px;">Semester 5</div>
            <div style="font-size: 32px; font-weight: 700;">20</div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="content-box" style="background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%); color: white;">
            <div style="font-size: 14px; opacity: 0.9; margin-bottom: 8px;">Semester 7</div>
            <div style="font-size: 32px; font-weight: 700;">15</div>
        </div>
    </div>
</div>

<!-- Filter dan Pencarian -->
<div class="content-box mb-4">
    <div class="row">
        <div class="col-md-4 mb-3">
            <label class="form-label" style="font-weight: 600; color: #374151;">Filter Semester</label>
            <select class="form-select" style="border: 2px solid #e5e7eb; border-radius: 8px; padding: 12px;">
                <option value="">Semua Semester</option>
                <option value="1">Semester 1</option>
                <option value="3">Semester 3</option>
                <option value="5">Semester 5</option>
                <option value="7">Semester 7</option>
            </select>
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label" style="font-weight: 600; color: #374151;">Filter Status</label>
            <select class="form-select" style="border: 2px solid #e5e7eb; border-radius: 8px; padding: 12px;">
                <option value="">Semua Status</option>
                <option value="aktif">Aktif</option>
                <option value="cuti">Cuti</option>
                <option value="nonaktif">Non-Aktif</option>
            </select>
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label" style="font-weight: 600; color: #374151;">Cari Mahasiswa</label>
            <input type="text" class="form-control" placeholder="Cari NIM atau Nama..." style="border: 2px solid #e5e7eb; border-radius: 8px; padding: 12px;">
        </div>
    </div>
</div>

<!-- Daftar Mahasiswa -->
<div class="content-box">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 style="font-weight: 700; color: #1e3a5f; margin: 0;">
            Daftar Mahasiswa
        </h5>
        <button class="btn" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; padding: 8px 16px; border-radius: 8px; font-weight: 600;">
            <i class="bi bi-download"></i> Export Data
        </button>
    </div>
    
    <div class="table-responsive">
        <table class="table" style="margin-bottom: 0;">
            <thead style="background: #f8f9fa; border-bottom: 2px solid #dee2e6;">
                <tr>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">No.</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">NIM</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">Nama Mahasiswa</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">Semester</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">IPK</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">Total SKS</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">Status</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $mahasiswa_list = [
                    ['nim' => '2021110001', 'nama' => 'Ahmad Rizki Pratama', 'semester' => 5, 'ipk' => 3.75, 'total_sks' => 85, 'status' => 'Aktif'],
                    ['nim' => '2021110015', 'nama' => 'Siti Nurhaliza', 'semester' => 5, 'ipk' => 3.82, 'total_sks' => 88, 'status' => 'Aktif'],
                    ['nim' => '2021110028', 'nama' => 'Budi Santoso', 'semester' => 5, 'ipk' => 3.45, 'total_sks' => 82, 'status' => 'Aktif'],
                    ['nim' => '2021110042', 'nama' => 'Dewi Lestari', 'semester' => 5, 'ipk' => 3.91, 'total_sks' => 90, 'status' => 'Aktif'],
                    ['nim' => '2021110056', 'nama' => 'Eko Prasetyo', 'semester' => 5, 'ipk' => 3.25, 'total_sks' => 78, 'status' => 'Aktif'],
                    ['nim' => '2021110063', 'nama' => 'Fitri Handayani', 'semester' => 5, 'ipk' => 3.68, 'total_sks' => 86, 'status' => 'Aktif'],
                    ['nim' => '2021110077', 'nama' => 'Gilang Ramadhan', 'semester' => 5, 'ipk' => 3.55, 'total_sks' => 84, 'status' => 'Aktif'],
                    ['nim' => '2021110084', 'nama' => 'Hana Pertiwi', 'semester' => 5, 'ipk' => 3.88, 'total_sks' => 89, 'status' => 'Aktif'],
                    ['nim' => '2019110045', 'nama' => 'Indra Gunawan', 'semester' => 7, 'ipk' => 3.42, 'total_sks' => 125, 'status' => 'Aktif'],
                    ['nim' => '2019110052', 'nama' => 'Joko Widodo', 'semester' => 7, 'ipk' => 3.35, 'total_sks' => 122, 'status' => 'Aktif'],
                ];
                
                foreach($mahasiswa_list as $index => $mhs):
                    // Warna IPK
                    $ipkColor = '';
                    if($mhs['ipk'] >= 3.75) {
                        $ipkColor = '#10b981'; // Green
                    } elseif($mhs['ipk'] >= 3.50) {
                        $ipkColor = '#06b6d4'; // Cyan
                    } elseif($mhs['ipk'] >= 3.00) {
                        $ipkColor = '#f59e0b'; // Orange
                    } else {
                        $ipkColor = '#ef4444'; // Red
                    }
                    
                    // Status
                    $statusBg = '';
                    $statusColor = '';
                    if($mhs['status'] == 'Aktif') {
                        $statusBg = '#dcfce7';
                        $statusColor = '#166534';
                    } elseif($mhs['status'] == 'Cuti') {
                        $statusBg = '#fef3c7';
                        $statusColor = '#92400e';
                    } else {
                        $statusBg = '#fee2e2';
                        $statusColor = '#dc2626';
                    }
                ?>
                <tr style="border-bottom: 1px solid #e5e7eb;">
                    <td style="padding: 12px; color: #6b7280; font-weight: 600;"><?= $index + 1 ?></td>
                    <td style="padding: 12px; color: #374151; font-weight: 700;"><?= $mhs['nim'] ?></td>
                    <td style="padding: 12px; color: #374151; font-weight: 600;"><?= $mhs['nama'] ?></td>
                    <td style="padding: 12px; color: #374151; text-align: center; font-weight: 600;"><?= $mhs['semester'] ?></td>
                    <td style="padding: 12px; text-align: center;">
                        <span style="background: <?= $ipkColor ?>; color: white; padding: 4px 12px; border-radius: 6px; font-size: 13px; font-weight: 700;">
                            <?= number_format($mhs['ipk'], 2) ?>
                        </span>
                    </td>
                    <td style="padding: 12px; color: #374151; text-align: center; font-weight: 600;"><?= $mhs['total_sks'] ?> SKS</td>
                    <td style="padding: 12px; text-align: center;">
                        <span style="background: <?= $statusBg ?>; color: <?= $statusColor ?>; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 700;">
                            <?= $mhs['status'] ?>
                        </span>
                    </td>
                    <td style="padding: 12px; text-align: center;">
                        <button class="btn btn-sm" onclick="lihatDetail('<?= $mhs['nim'] ?>', '<?= $mhs['nama'] ?>')" style="background: #667eea; color: white; border: none; padding: 6px 12px; border-radius: 6px; font-weight: 600; margin-right: 4px;">
                            <i class="bi bi-eye"></i> Detail
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    <div class="d-flex justify-content-between align-items-center mt-3" style="padding: 12px;">
        <div style="color: #6b7280; font-size: 14px;">
            Menampilkan 1-10 dari 35 mahasiswa
        </div>
        <nav>
            <ul class="pagination mb-0">
                <li class="page-item disabled">
                    <a class="page-link" href="#" style="border-radius: 6px;">Previous</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#" style="background: #667eea; border-color: #667eea;">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" style="color: #667eea;">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" style="color: #667eea;">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" style="border-radius: 6px; color: #667eea;">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- Modal Detail Mahasiswa -->
<div class="modal fade" id="modalDetailMahasiswa" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                <h5 class="modal-title"><i class="bi bi-person-badge"></i> Detail Mahasiswa</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="modalMahasiswaContent">
                <!-- Content will be loaded dynamically -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
function lihatDetail(nim, nama) {
    const modal = new bootstrap.Modal(document.getElementById('modalDetailMahasiswa'));
    modal.show();
    
    // Simulate loading
    document.getElementById('modalMahasiswaContent').innerHTML = `
        <div style="padding: 20px;">
            <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                <h6 style="font-weight: 700; margin-bottom: 16px;">Informasi Mahasiswa</h6>
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
                                <td style="padding: 8px 0; font-weight: 600;">Program Studi</td>
                                <td style="padding: 8px 0;">: INFORMATIKA (S1)</td>
                            </tr>
                            <tr>
                                <td style="padding: 8px 0; font-weight: 600;">Angkatan</td>
                                <td style="padding: 8px 0;">: 2021</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table style="width: 100%; font-size: 14px;">
                            <tr>
                                <td style="padding: 8px 0; font-weight: 600; width: 150px;">Semester</td>
                                <td style="padding: 8px 0;">: 5</td>
                            </tr>
                            <tr>
                                <td style="padding: 8px 0; font-weight: 600;">IPK</td>
                                <td style="padding: 8px 0;">: <strong style="color: #10b981;">3.75</strong></td>
                            </tr>
                            <tr>
                                <td style="padding: 8px 0; font-weight: 600;">Total SKS</td>
                                <td style="padding: 8px 0;">: 85 SKS</td>
                            </tr>
                            <tr>
                                <td style="padding: 8px 0; font-weight: 600;">Status</td>
                                <td style="padding: 8px 0;">: <span style="background: #dcfce7; color: #166534; padding: 4px 8px; border-radius: 4px; font-weight: 600;">Aktif</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            
            <h6 style="font-weight: 700; margin-bottom: 16px;">Riwayat Akademik</h6>
            <div class="table-responsive">
                <table class="table table-sm table-bordered">
                    <thead style="background: #f8f9fa;">
                        <tr>
                            <th>Semester</th>
                            <th class="text-center">SKS</th>
                            <th class="text-center">IPS</th>
                            <th class="text-center">IPK</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Semester 1</td>
                            <td class="text-center">20</td>
                            <td class="text-center">3.65</td>
                            <td class="text-center">3.65</td>
                        </tr>
                        <tr>
                            <td>Semester 2</td>
                            <td class="text-center">20</td>
                            <td class="text-center">3.70</td>
                            <td class="text-center">3.68</td>
                        </tr>
                        <tr>
                            <td>Semester 3</td>
                            <td class="text-center">22</td>
                            <td class="text-center">3.75</td>
                            <td class="text-center">3.70</td>
                        </tr>
                        <tr>
                            <td>Semester 4</td>
                            <td class="text-center">23</td>
                            <td class="text-center">3.82</td>
                            <td class="text-center">3.75</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    `;
}
</script>

<?php $this->endSection(); ?>
