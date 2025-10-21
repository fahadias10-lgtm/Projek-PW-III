<?= $this->extend('layout_dosen'); ?>

<?= $this->section('content'); ?>

<!-- Navigasi -->
<div class="mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dosen/dashboard" style="color: #667eea; text-decoration: none;">Dashboard Dosen</a></li>
            <li class="breadcrumb-item active" aria-current="page">Jadwal Mengajar</li>
        </ol>
    </nav>
</div>

<!-- Header -->
<div class="mb-4">
    <h1 style="font-weight: 700; color: #1e3a5f; font-size: 32px; margin-bottom: 8px;">
        <i class="bi bi-calendar-week"></i> Jadwal Mengajar
    </h1>
    <p style="color: #6b7280; font-size: 16px; margin-bottom: 0;">Jadwal mengajar Semester Ganjil 2025/2026</p>
</div>

<!-- Info Ringkas -->
<div class="row mb-4">
    <div class="col-md-3 mb-3">
        <div class="content-box" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
            <div style="font-size: 14px; opacity: 0.9; margin-bottom: 8px;">Total Mata Kuliah</div>
            <div style="font-size: 32px; font-weight: 700;">3</div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="content-box" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white;">
            <div style="font-size: 14px; opacity: 0.9; margin-bottom: 8px;">Total SKS</div>
            <div style="font-size: 32px; font-weight: 700;">10</div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="content-box" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white;">
            <div style="font-size: 14px; opacity: 0.9; margin-bottom: 8px;">Total Kelas</div>
            <div style="font-size: 32px; font-weight: 700;">3</div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="content-box" style="background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%); color: white;">
            <div style="font-size: 14px; opacity: 0.9; margin-bottom: 8px;">Total Jam/Minggu</div>
            <div style="font-size: 32px; font-weight: 700;">10</div>
        </div>
    </div>
</div>

<!-- Jadwal Mingguan -->
<div class="content-box mb-4">
    <h5 style="font-weight: 700; color: #1e3a5f; margin-bottom: 20px;">
        <i class="bi bi-calendar3"></i> Jadwal Mingguan
    </h5>
    
    <div class="table-responsive">
        <table class="table table-bordered" style="margin-bottom: 0;">
            <thead style="background: #f8f9fa;">
                <tr>
                    <th style="padding: 12px; width: 100px; font-weight: 700; color: #374151; text-align: center;">Jam</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">Senin</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">Selasa</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">Rabu</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">Kamis</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">Jumat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $jadwal_minggu = [
                    '08:00 - 10:30' => [
                        'senin' => ['mk' => 'Data Mining', 'kelas' => 'TI-5A', 'ruangan' => 'Lab. Komputer A1', 'color' => '#667eea'],
                        'selasa' => null,
                        'rabu' => null,
                        'kamis' => null,
                        'jumat' => null
                    ],
                    '10:30 - 13:00' => [
                        'senin' => null,
                        'selasa' => null,
                        'rabu' => ['mk' => 'Machine Learning', 'kelas' => 'TI-7A', 'ruangan' => 'Lab. Komputer B1', 'color' => '#10b981'],
                        'kamis' => null,
                        'jumat' => null
                    ],
                    '13:00 - 15:30' => [
                        'senin' => null,
                        'selasa' => ['mk' => 'Pemrograman Web III', 'kelas' => 'TI-5B', 'ruangan' => 'Lab. Komputer B2', 'color' => '#f59e0b'],
                        'rabu' => null,
                        'kamis' => null,
                        'jumat' => null
                    ],
                    '15:30 - 18:00' => [
                        'senin' => null,
                        'selasa' => null,
                        'rabu' => null,
                        'kamis' => null,
                        'jumat' => null
                    ]
                ];
                
                foreach($jadwal_minggu as $jam => $hari):
                ?>
                <tr>
                    <td style="padding: 12px; background: #f8f9fa; font-weight: 700; color: #374151; text-align: center; vertical-align: middle;">
                        <?= $jam ?>
                    </td>
                    <?php foreach(['senin', 'selasa', 'rabu', 'kamis', 'jumat'] as $h): ?>
                    <td style="padding: 8px; vertical-align: middle;">
                        <?php if($hari[$h]): ?>
                        <div style="background: <?= $hari[$h]['color'] ?>; color: white; padding: 12px; border-radius: 8px; text-align: center;">
                            <div style="font-weight: 700; font-size: 14px; margin-bottom: 4px;"><?= $hari[$h]['mk'] ?></div>
                            <div style="font-size: 12px; opacity: 0.9;">
                                <i class="bi bi-people"></i> <?= $hari[$h]['kelas'] ?>
                            </div>
                            <div style="font-size: 12px; opacity: 0.9;">
                                <i class="bi bi-door-open"></i> <?= $hari[$h]['ruangan'] ?>
                            </div>
                        </div>
                        <?php else: ?>
                        <div style="text-align: center; color: #d1d5db; padding: 20px;">
                            <i class="bi bi-dash-lg"></i>
                        </div>
                        <?php endif; ?>
                    </td>
                    <?php endforeach; ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Daftar Detail Mata Kuliah -->
<div class="content-box">
    <h5 style="font-weight: 700; color: #1e3a5f; margin-bottom: 20px;">
        <i class="bi bi-list-check"></i> Detail Mata Kuliah
    </h5>
    
    <div class="table-responsive">
        <table class="table" style="margin-bottom: 0;">
            <thead style="background: #f8f9fa; border-bottom: 2px solid #dee2e6;">
                <tr>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">No.</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">Kode MK</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">Mata Kuliah</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">Kelas</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">SKS</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">Hari</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">Jam</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">Ruangan</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151; text-align: center;">Jumlah Mhs</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $detail_mk = [
                    ['kode' => 'TI12-5111', 'nama' => 'Data Mining', 'kelas' => 'TI-5A', 'sks' => 4, 'hari' => 'Senin', 'jam' => '08:00 - 10:30', 'ruangan' => 'Lab. Komputer A1', 'jumlah_mhs' => 32],
                    ['kode' => 'TI12-5114', 'nama' => 'Pemrograman Web III', 'kelas' => 'TI-5B', 'sks' => 3, 'hari' => 'Selasa', 'jam' => '13:00 - 15:30', 'ruangan' => 'Lab. Komputer B2', 'jumlah_mhs' => 30],
                    ['kode' => 'TI12-7211', 'nama' => 'Machine Learning', 'kelas' => 'TI-7A', 'sks' => 3, 'hari' => 'Rabu', 'jam' => '10:30 - 13:00', 'ruangan' => 'Lab. Komputer B1', 'jumlah_mhs' => 28],
                ];
                
                foreach($detail_mk as $index => $mk):
                ?>
                <tr style="border-bottom: 1px solid #e5e7eb;">
                    <td style="padding: 12px; color: #6b7280; font-weight: 600;"><?= $index + 1 ?></td>
                    <td style="padding: 12px; color: #374151; font-weight: 700;"><?= $mk['kode'] ?></td>
                    <td style="padding: 12px; color: #374151; font-weight: 600;"><?= $mk['nama'] ?></td>
                    <td style="padding: 12px; color: #374151; font-weight: 600;"><?= $mk['kelas'] ?></td>
                    <td style="padding: 12px; color: #374151; text-align: center; font-weight: 700;">
                        <span style="background: #e0f2fe; color: #0369a1; padding: 4px 10px; border-radius: 6px; font-size: 13px;">
                            <?= $mk['sks'] ?> SKS
                        </span>
                    </td>
                    <td style="padding: 12px; color: #374151;"><?= $mk['hari'] ?></td>
                    <td style="padding: 12px; color: #6b7280; font-size: 13px;"><?= $mk['jam'] ?></td>
                    <td style="padding: 12px; color: #374151;"><?= $mk['ruangan'] ?></td>
                    <td style="padding: 12px; color: #374151; text-align: center; font-weight: 600;">
                        <i class="bi bi-people"></i> <?= $mk['jumlah_mhs'] ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tr style="background: #f8f9fa; font-weight: 700;">
                    <td colspan="4" style="padding: 12px; text-align: right; color: #374151;">Total:</td>
                    <td style="padding: 12px; text-align: center; color: #374151;">
                        <span style="background: #667eea; color: white; padding: 4px 10px; border-radius: 6px; font-size: 13px;">
                            10 SKS
                        </span>
                    </td>
                    <td colspan="3" style="padding: 12px;"></td>
                    <td style="padding: 12px; text-align: center; color: #374151;">
                        <i class="bi bi-people"></i> 90
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Download & Print Buttons -->
<div class="mt-4 d-flex gap-2 justify-content-end">
    <button class="btn" style="background: #6b7280; color: white; border: none; padding: 12px 24px; border-radius: 8px; font-weight: 600;">
        <i class="bi bi-download"></i> Download PDF
    </button>
    <button class="btn" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; padding: 12px 24px; border-radius: 8px; font-weight: 600;" onclick="window.print()">
        <i class="bi bi-printer"></i> Cetak Jadwal
    </button>
</div>

<?php $this->endSection(); ?>
