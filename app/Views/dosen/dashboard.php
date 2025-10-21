<?= $this->extend('layout_dosen'); ?>

<?= $this->section('content'); ?>

<?php
// Data dummy dosen - dalam aplikasi nyata ini akan diambil dari database/session
$dosen = [
    'nidn' => '0412048901',
    'nama' => 'Dr. Ahmad Fauzi, M.Kom',
    'email' => 'ahmad.fauzi@univ.ac.id',
    'program_studi' => 'INFORMATIKA',
    'jabatan' => 'Lektor Kepala'
];

// Data statistik
$stats = [
    'total_mahasiswa_perwalian' => 35,
    'krs_menunggu' => 8,
    'mata_kuliah_diampu' => 3,
    'jadwal_hari_ini' => 2
];
?>

<!-- Header -->
<div class="mb-4">
    <h1 style="font-weight: 700; color: #1e3a5f; font-size: 32px; margin-bottom: 8px;">
        <i class="bi bi-speedometer2"></i> Dashboard Dosen
    </h1>
    <p style="color: #6b7280; font-size: 16px; margin-bottom: 0;">Selamat datang, <?= $dosen['nama'] ?></p>
</div>

<!-- Info Dosen -->
<div class="content-box mb-4" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 style="font-weight: 700; margin-bottom: 16px; opacity: 0.9;">Informasi Dosen</h6>
            <div class="row">
                <div class="col-md-6">
                    <div style="margin-bottom: 8px;">
                        <strong><?= $dosen['nama'] ?></strong>
                    </div>
                    <div style="font-size: 14px; opacity: 0.8;">
                        NIDN: <?= $dosen['nidn'] ?>
                    </div>
                    <div style="font-size: 14px; opacity: 0.8;">
                        Email: <?= $dosen['email'] ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="margin-bottom: 8px;">
                        <strong>Program Studi: <?= $dosen['program_studi'] ?></strong>
                    </div>
                    <div style="font-size: 14px; opacity: 0.8;">
                        Jabatan: <?= $dosen['jabatan'] ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-end">
            <div style="background: rgba(255,255,255,0.2); padding: 12px; border-radius: 8px;">
                <div style="font-size: 14px; opacity: 0.8;">Semester Aktif</div>
                <div style="font-weight: 700;">Ganjil 2025/2026</div>
            </div>
        </div>
    </div>
</div>

<!-- Statistik Cards -->
<div class="row mb-4">
    <div class="col-md-3 mb-3">
        <div class="content-box" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div style="font-size: 14px; opacity: 0.9; margin-bottom: 8px;">Mahasiswa Perwalian</div>
                    <div style="font-size: 32px; font-weight: 700;"><?= $stats['total_mahasiswa_perwalian'] ?></div>
                </div>
                <div style="font-size: 48px; opacity: 0.3;">
                    <i class="bi bi-people"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 mb-3">
        <div class="content-box" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white;">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div style="font-size: 14px; opacity: 0.9; margin-bottom: 8px;">KRS Menunggu</div>
                    <div style="font-size: 32px; font-weight: 700;"><?= $stats['krs_menunggu'] ?></div>
                </div>
                <div style="font-size: 48px; opacity: 0.3;">
                    <i class="bi bi-clock-history"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 mb-3">
        <div class="content-box" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white;">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div style="font-size: 14px; opacity: 0.9; margin-bottom: 8px;">Mata Kuliah</div>
                    <div style="font-size: 32px; font-weight: 700;"><?= $stats['mata_kuliah_diampu'] ?></div>
                </div>
                <div style="font-size: 48px; opacity: 0.3;">
                    <i class="bi bi-book"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 mb-3">
        <div class="content-box" style="background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%); color: white;">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div style="font-size: 14px; opacity: 0.9; margin-bottom: 8px;">Jadwal Hari Ini</div>
                    <div style="font-size: 32px; font-weight: 700;"><?= $stats['jadwal_hari_ini'] ?></div>
                </div>
                <div style="font-size: 48px; opacity: 0.3;">
                    <i class="bi bi-calendar-check"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="row mb-4">
    <div class="col-md-6 mb-3">
        <div class="content-box">
            <h5 style="font-weight: 700; color: #1e3a5f; margin-bottom: 20px;">
                <i class="bi bi-lightning-charge"></i> Menu Cepat
            </h5>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <a href="/dosen/persetujuan-krs" class="btn w-100" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; padding: 20px; border-radius: 12px; text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 10px;">
                        <i class="bi bi-check-circle" style="font-size: 24px;"></i>
                        <div class="text-start">
                            <div style="font-weight: 700; font-size: 14px;">Persetujuan KRS</div>
                            <div style="font-size: 12px; opacity: 0.8;"><?= $stats['krs_menunggu'] ?> menunggu</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="/dosen/mahasiswa-perwalian" class="btn w-100" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; border: none; padding: 20px; border-radius: 12px; text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 10px;">
                        <i class="bi bi-people" style="font-size: 24px;"></i>
                        <div class="text-start">
                            <div style="font-weight: 700; font-size: 14px;">Mahasiswa Perwalian</div>
                            <div style="font-size: 12px; opacity: 0.8;"><?= $stats['total_mahasiswa_perwalian'] ?> mahasiswa</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="/dosen/input-nilai" class="btn w-100" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white; border: none; padding: 20px; border-radius: 12px; text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 10px;">
                        <i class="bi bi-pencil-square" style="font-size: 24px;"></i>
                        <div class="text-start">
                            <div style="font-weight: 700; font-size: 14px;">Input Nilai</div>
                            <div style="font-size: 12px; opacity: 0.8;">Kelola nilai</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="/dosen/jadwal-mengajar" class="btn w-100" style="background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%); color: white; border: none; padding: 20px; border-radius: 12px; text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 10px;">
                        <i class="bi bi-calendar-week" style="font-size: 24px;"></i>
                        <div class="text-start">
                            <div style="font-weight: 700; font-size: 14px;">Jadwal Mengajar</div>
                            <div style="font-size: 12px; opacity: 0.8;">Lihat jadwal</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 mb-3">
        <div class="content-box">
            <h5 style="font-weight: 700; color: #1e3a5f; margin-bottom: 20px;">
                <i class="bi bi-calendar-event"></i> Jadwal Hari Ini
            </h5>
            <?php
            $jadwal_hari_ini = [
                ['waktu' => '08:00 - 10:30', 'matakuliah' => 'Data Mining', 'kelas' => 'TI-5A', 'ruangan' => 'Lab. Komputer A1'],
                ['waktu' => '13:00 - 15:30', 'matakuliah' => 'Pemrograman Web III', 'kelas' => 'TI-5B', 'ruangan' => 'Lab. Komputer B2']
            ];
            
            foreach($jadwal_hari_ini as $jadwal):
            ?>
            <div style="background: #f8f9fa; padding: 16px; border-radius: 8px; margin-bottom: 12px; border-left: 4px solid #667eea;">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <div style="font-weight: 700; color: #374151; margin-bottom: 4px;"><?= $jadwal['matakuliah'] ?></div>
                        <div style="font-size: 14px; color: #6b7280;">
                            <i class="bi bi-clock"></i> <?= $jadwal['waktu'] ?> | 
                            <i class="bi bi-people"></i> <?= $jadwal['kelas'] ?> | 
                            <i class="bi bi-door-open"></i> <?= $jadwal['ruangan'] ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- KRS Menunggu Persetujuan -->
<div class="content-box">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 style="font-weight: 700; color: #1e3a5f; margin: 0;">
            <i class="bi bi-hourglass-split"></i> KRS Menunggu Persetujuan
        </h5>
        <a href="/dosen/persetujuan-krs" class="btn btn-sm" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; padding: 8px 16px; border-radius: 6px; font-weight: 600; text-decoration: none;">
            Lihat Semua
        </a>
    </div>
    
    <div class="table-responsive">
        <table class="table" style="margin-bottom: 0;">
            <thead style="background: #f8f9fa; border-bottom: 2px solid #dee2e6;">
                <tr>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">No.</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">NIM</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">Nama Mahasiswa</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">Semester</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">Total SKS</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">Tanggal Pengajuan</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $krs_pending = [
                    ['nim' => '2021110001', 'nama' => 'Ahmad Rizki Pratama', 'semester' => 5, 'total_sks' => 22, 'tanggal' => '2025-01-15 10:30'],
                    ['nim' => '2021110015', 'nama' => 'Siti Nurhaliza', 'semester' => 5, 'total_sks' => 20, 'tanggal' => '2025-01-15 11:15'],
                    ['nim' => '2021110028', 'nama' => 'Budi Santoso', 'semester' => 5, 'total_sks' => 21, 'tanggal' => '2025-01-15 13:45'],
                ];
                
                foreach($krs_pending as $index => $krs):
                ?>
                <tr style="border-bottom: 1px solid #e5e7eb;">
                    <td style="padding: 12px; color: #6b7280;"><?= $index + 1 ?></td>
                    <td style="padding: 12px; color: #374151; font-weight: 600;"><?= $krs['nim'] ?></td>
                    <td style="padding: 12px; color: #374151;"><?= $krs['nama'] ?></td>
                    <td style="padding: 12px; color: #374151; text-align: center;"><?= $krs['semester'] ?></td>
                    <td style="padding: 12px; color: #374151; text-align: center; font-weight: 600;"><?= $krs['total_sks'] ?> SKS</td>
                    <td style="padding: 12px; color: #6b7280;"><?= date('d M Y H:i', strtotime($krs['tanggal'])) ?></td>
                    <td style="padding: 12px; text-align: center;">
                        <a href="/dosen/persetujuan-krs/<?= $krs['nim'] ?>" class="btn btn-sm" style="background: #667eea; color: white; border: none; padding: 6px 12px; border-radius: 6px; font-weight: 600; text-decoration: none; margin-right: 4px;">
                            <i class="bi bi-eye"></i> Lihat
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php $this->endSection(); ?>
