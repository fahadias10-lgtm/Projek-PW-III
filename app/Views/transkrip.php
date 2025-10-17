<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<div class="mb-4">
    <h1 style="font-weight: 700; color: #1e3a5f; font-size: 32px; margin-bottom: 8px;">
        <i class="bi bi-file-earmark-text"></i> Transkrip Nilai
    </h1>
    <p style="color: #6b7280; font-size: 16px; margin-bottom: 0;">Transkrip nilai akademik lengkap</p>
</div>

<!-- IPK Summary -->
<div class="content-box mb-4" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h2 style="font-weight: 800; margin-bottom: 8px;">IPK: 3.68</h2>
            <p style="opacity: 0.9; margin-bottom: 12px;">Indeks Prestasi Kumulatif</p>
            <div class="d-flex gap-4 flex-wrap">
                <div>
                    <div style="font-size: 24px; font-weight: 700;">84</div>
                    <div style="font-size: 13px; opacity: 0.8;">Total SKS Lulus</div>
                </div>
                <div>
                    <div style="font-size: 24px; font-weight: 700;">5</div>
                    <div style="font-size: 13px; opacity: 0.8;">Semester Ditempuh</div>
                </div>
                <div>
                    <div style="font-size: 24px; font-weight: 700;">A</div>
                    <div style="font-size: 13px; opacity: 0.8;">Predikat</div>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-end">
            <button class="btn btn-lg" style="background: white; color: #667eea; border: none; font-weight: 700;">
                <i class="bi bi-download"></i> Download Transkrip PDF
            </button>
        </div>
    </div>
</div>

<!-- Transkrip per Semester -->
<?php 
$semesters = [
    ['no' => 1, 'semester' => 'Semester 1 - Ganjil 2023/2024', 'sks' => 18, 'ips' => 3.55],
    ['no' => 2, 'semester' => 'Semester 2 - Genap 2023/2024', 'sks' => 20, 'ips' => 3.62],
    ['no' => 3, 'semester' => 'Semester 3 - Ganjil 2024/2025', 'sks' => 22, 'ips' => 3.71],
    ['no' => 4, 'semester' => 'Semester 4 - Genap 2024/2025', 'sks' => 20, 'ips' => 3.78],
    ['no' => 5, 'semester' => 'Semester 5 - Ganjil 2025/2026', 'sks' => 24, 'ips' => 3.75],
];

foreach($semesters as $sem): ?>
<div class="content-box mb-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 style="font-weight: 700; color: #1e3a5f; margin: 0;">
            <?= $sem['semester'] ?>
        </h5>
        <div class="d-flex gap-3">
            <span style="background: #e0f2fe; color: #0369a1; padding: 8px 16px; border-radius: 8px; font-weight: 600;">
                <?= $sem['sks'] ?> SKS
            </span>
            <span style="background: #dcfce7; color: #166534; padding: 8px 16px; border-radius: 8px; font-weight: 600;">
                IPS: <?= $sem['ips'] ?>
            </span>
        </div>
    </div>
    
    <table class="table" style="margin-bottom: 0;">
        <thead style="background: #f8f9fa;">
            <tr>
                <th style="padding: 12px; width: 50px;">No</th>
                <th style="padding: 12px;">Kode</th>
                <th style="padding: 12px;">Nama Mata Kuliah</th>
                <th style="padding: 12px; text-align: center;">SKS</th>
                <th style="padding: 12px; text-align: center;">Nilai</th>
                <th style="padding: 12px; text-align: center;">Bobot</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // Sample data - in real app this would come from database
            $courses = [
                ['kode' => 'IF'.$sem['no'].'01', 'nama' => 'Mata Kuliah '.chr(64+$sem['no']), 'sks' => 3, 'nilai' => 'A', 'bobot' => 12.00],
                ['kode' => 'IF'.$sem['no'].'02', 'nama' => 'Mata Kuliah '.chr(65+$sem['no']), 'sks' => 3, 'nilai' => 'A-', 'bobot' => 11.10],
                ['kode' => 'IF'.$sem['no'].'03', 'nama' => 'Mata Kuliah '.chr(66+$sem['no']), 'sks' => 3, 'nilai' => 'A', 'bobot' => 12.00],
                ['kode' => 'IF'.$sem['no'].'04', 'nama' => 'Mata Kuliah '.chr(67+$sem['no']), 'sks' => 3, 'nilai' => 'B+', 'bobot' => 10.50],
            ];
            $no = 1;
            foreach($courses as $course): 
                $bgColor = ($course['nilai'] == 'A') ? '#dcfce7' : (($course['nilai'] == 'A-') ? '#dbeafe' : '#fef3c7');
                $textColor = ($course['nilai'] == 'A') ? '#166534' : (($course['nilai'] == 'A-') ? '#1e40af' : '#92400e');
            ?>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td style="padding: 12px;"><?= $no++ ?></td>
                <td style="padding: 12px; color: #6b7280;"><?= $course['kode'] ?></td>
                <td style="padding: 12px;"><strong style="color: #374151;"><?= $course['nama'] ?></strong></td>
                <td style="padding: 12px; text-align: center; font-weight: 600;"><?= $course['sks'] ?></td>
                <td style="padding: 12px; text-align: center;">
                    <span style="background: <?= $bgColor ?>; color: <?= $textColor ?>; padding: 6px 12px; border-radius: 6px; font-weight: 700;">
                        <?= $course['nilai'] ?>
                    </span>
                </td>
                <td style="padding: 12px; text-align: center; font-weight: 600;"><?= $course['bobot'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php endforeach; ?>

<!-- Info Predikat -->
<div class="content-box" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <h6 style="font-weight: 700; color: #1e3a5f; margin-bottom: 16px;">
        <i class="bi bi-info-circle"></i> Keterangan Predikat Kelulusan
    </h6>
    <div class="row">
        <div class="col-md-3 mb-2">
            <strong>Cum Laude:</strong> IPK ≥ 3.75
        </div>
        <div class="col-md-3 mb-2">
            <strong>Sangat Memuaskan:</strong> 3.50 ≤ IPK < 3.75
        </div>
        <div class="col-md-3 mb-2">
            <strong>Memuaskan:</strong> 3.00 ≤ IPK < 3.50
        </div>
        <div class="col-md-3 mb-2">
            <strong>Cukup:</strong> IPK < 3.00
        </div>
    </div>
</div>

<?php $this->endSection(); ?>
