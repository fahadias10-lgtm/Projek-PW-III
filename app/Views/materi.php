<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<div class="mb-4">
    <h1 style="font-weight: 700; color: #1e3a5f; font-size: 32px; margin-bottom: 8px;">
        <i class="bi bi-cloud-download"></i> Unduhan Materi
    </h1>
    <p style="color: #6b7280; font-size: 16px; margin-bottom: 0;">Akses dan download materi perkuliahan</p>
</div>

<!-- Filter & Search -->
<div class="content-box mb-4">
    <div class="row align-items-end">
        <div class="col-md-4 mb-3">
            <label style="font-weight: 600; color: #374151; margin-bottom: 8px;">
                <i class="bi bi-calendar3"></i> Semester
            </label>
            <select class="form-select" style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 12px;">
                <option selected>Semester Ganjil 2025/2026</option>
                <option>Semester Genap 2024/2025</option>
                <option>Semester Ganjil 2024/2025</option>
            </select>
        </div>
        <div class="col-md-4 mb-3">
            <label style="font-weight: 600; color: #374151; margin-bottom: 8px;">
                <i class="bi bi-book"></i> Mata Kuliah
            </label>
            <select class="form-select" style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 12px;">
                <option selected>Semua Mata Kuliah</option>
                <option>Etika Profesi</option>
                <option>Analisa Sistem</option>
                <option>Kecerdasan Buatan</option>
                <option>Pemrograman Web III</option>
            </select>
        </div>
        <div class="col-md-4 mb-3">
            <label style="font-weight: 600; color: #374151; margin-bottom: 8px;">
                <i class="bi bi-search"></i> Cari Materi
            </label>
            <input type="text" class="form-control" placeholder="Ketik nama file..." style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 12px;">
        </div>
    </div>
</div>

<!-- Stats -->
<div class="row mb-4">
    <div class="col-md-3 mb-3">
        <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 16px; padding: 20px; color: white; box-shadow: 0 8px 24px rgba(102,126,234,0.3);">
            <div style="font-size: 36px; font-weight: 800; margin-bottom: 4px;">48</div>
            <div style="font-size: 13px; opacity: 0.9;">Total Materi</div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 16px; padding: 20px; color: white; box-shadow: 0 8px 24px rgba(16,185,129,0.3);">
            <div style="font-size: 36px; font-weight: 800; margin-bottom: 4px;">12</div>
            <div style="font-size: 13px; opacity: 0.9;">Video Pembelajaran</div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div style="background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%); border-radius: 16px; padding: 20px; color: white; box-shadow: 0 8px 24px rgba(247,147,30,0.3);">
            <div style="font-size: 36px; font-weight: 800; margin-bottom: 4px;">24</div>
            <div style="font-size: 13px; opacity: 0.9;">Dokumen PDF</div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 16px; padding: 20px; color: white; box-shadow: 0 8px 24px rgba(240,147,251,0.3);">
            <div style="font-size: 36px; font-weight: 800; margin-bottom: 4px;">12</div>
            <div style="font-size: 13px; opacity: 0.9;">Presentasi PPT</div>
        </div>
    </div>
</div>

<!-- Materi per Mata Kuliah -->
<?php 
$courses = [
    [
        'name' => 'Etika Profesi', 
        'code' => 'IF501',
        'dosen' => 'Matias Bagus M.Kom',
        'color' => '#667eea',
        'materials' => [
            ['title' => 'Pengantar Etika Profesi IT', 'type' => 'pdf', 'size' => '2.5 MB', 'date' => '20 Agt 2025'],
            ['title' => 'Kode Etik Profesional', 'type' => 'pdf', 'size' => '1.8 MB', 'date' => '27 Agt 2025'],
            ['title' => 'Video: Studi Kasus Etika IT', 'type' => 'video', 'size' => '85 MB', 'date' => '3 Sep 2025'],
            ['title' => 'Slide Presentasi Minggu 4', 'type' => 'ppt', 'size' => '3.2 MB', 'date' => '10 Sep 2025'],
        ]
    ],
    [
        'name' => 'Analisa Sistem', 
        'code' => 'IF502',
        'dosen' => 'Zainul H.M.Kom M.M',
        'color' => '#10b981',
        'materials' => [
            ['title' => 'Metodologi Analisis Sistem', 'type' => 'pdf', 'size' => '3.1 MB', 'date' => '21 Agt 2025'],
            ['title' => 'DFD dan ERD', 'type' => 'pdf', 'size' => '2.4 MB', 'date' => '28 Agt 2025'],
            ['title' => 'Template Use Case Diagram', 'type' => 'ppt', 'size' => '1.5 MB', 'date' => '4 Sep 2025'],
            ['title' => 'Video Tutorial: Membuat ERD', 'type' => 'video', 'size' => '120 MB', 'date' => '11 Sep 2025'],
        ]
    ],
    [
        'name' => 'Kecerdasan Buatan', 
        'code' => 'IF503',
        'dosen' => 'Matias Bagus M.Kom',
        'color' => '#f7931e',
        'materials' => [
            ['title' => 'Introduction to AI', 'type' => 'pdf', 'size' => '4.2 MB', 'date' => '22 Agt 2025'],
            ['title' => 'Machine Learning Basics', 'type' => 'pdf', 'size' => '5.5 MB', 'date' => '29 Agt 2025'],
            ['title' => 'Neural Network Presentation', 'type' => 'ppt', 'size' => '6.8 MB', 'date' => '5 Sep 2025'],
            ['title' => 'Demo: Simple AI Project', 'type' => 'video', 'size' => '150 MB', 'date' => '12 Sep 2025'],
        ]
    ],
    [
        'name' => 'Pemrograman Web III', 
        'code' => 'IF504',
        'dosen' => 'Anggietas M.Kom',
        'color' => '#f093fb',
        'materials' => [
            ['title' => 'PHP Advanced Techniques', 'type' => 'pdf', 'size' => '3.8 MB', 'date' => '23 Agt 2025'],
            ['title' => 'Laravel Framework Guide', 'type' => 'pdf', 'size' => '7.2 MB', 'date' => '30 Agt 2025'],
            ['title' => 'REST API Development', 'type' => 'ppt', 'size' => '4.5 MB', 'date' => '6 Sep 2025'],
            ['title' => 'Tutorial: Build CRUD Laravel', 'type' => 'video', 'size' => '95 MB', 'date' => '13 Sep 2025'],
        ]
    ]
];

foreach($courses as $course): ?>
<div class="content-box mb-4">
    <div style="border-left: 4px solid <?= $course['color'] ?>; padding-left: 16px; margin-bottom: 20px;">
        <div class="d-flex justify-content-between align-items-start flex-wrap">
            <div>
                <h5 style="font-weight: 700; color: #1e3a5f; margin-bottom: 4px;">
                    <?= $course['name'] ?>
                </h5>
                <small style="color: #6b7280;">
                    <i class="bi bi-code-square"></i> <?= $course['code'] ?> • 
                    <i class="bi bi-person"></i> <?= $course['dosen'] ?>
                </small>
            </div>
            <span style="background: <?= $course['color'] ?>; color: white; padding: 8px 16px; border-radius: 8px; font-size: 13px; font-weight: 600;">
                <?= count($course['materials']) ?> Materi
            </span>
        </div>
    </div>
    
    <div class="row">
        <?php foreach($course['materials'] as $material): 
            $icons = ['pdf' => 'file-pdf-fill', 'video' => 'play-circle-fill', 'ppt' => 'file-slides-fill'];
            $colors = ['pdf' => '#dc2626', 'video' => '#7c3aed', 'ppt' => '#ea580c'];
        ?>
        <div class="col-md-6 mb-3">
            <div style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 16px; background: white; transition: all 0.3s;" onmouseover="this.style.borderColor='<?= $course['color'] ?>'; this.style.transform='translateY(-2px)'" onmouseout="this.style.borderColor='#e5e7eb'; this.style.transform='translateY(0)'">
                <div class="d-flex align-items-start">
                    <div style="width: 48px; height: 48px; background: <?= $colors[$material['type']] ?>15; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 12px; flex-shrink: 0;">
                        <i class="bi bi-<?= $icons[$material['type']] ?>" style="font-size: 24px; color: <?= $colors[$material['type']] ?>;"></i>
                    </div>
                    <div style="flex: 1; min-width: 0;">
                        <strong style="color: #1e3a5f; font-size: 14px; display: block; margin-bottom: 6px;">
                            <?= $material['title'] ?>
                        </strong>
                        <div style="color: #9ca3af; font-size: 12px; margin-bottom: 8px;">
                            <i class="bi bi-hdd"></i> <?= $material['size'] ?> • 
                            <i class="bi bi-calendar3"></i> <?= $material['date'] ?>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm" style="background: <?= $course['color'] ?>; color: white; border: none; font-size: 12px; padding: 6px 12px;">
                                <i class="bi bi-download"></i> Download
                            </button>
                            <?php if($material['type'] == 'video'): ?>
                            <button class="btn btn-sm btn-outline-secondary" style="font-size: 12px; padding: 6px 12px;">
                                <i class="bi bi-play"></i> Tonton
                            </button>
                            <?php else: ?>
                            <button class="btn btn-sm btn-outline-secondary" style="font-size: 12px; padding: 6px 12px;">
                                <i class="bi bi-eye"></i> Preview
                            </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endforeach; ?>

<!-- Info -->
<div class="alert" style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: white; border: none; border-radius: 12px; padding: 20px;">
    <h6 style="font-weight: 700; margin-bottom: 12px;">
        <i class="bi bi-info-circle"></i> Informasi Penting
    </h6>
    <ul style="margin-bottom: 0; padding-left: 20px;">
        <li>Materi yang diupload akan tersedia selama 1 semester</li>
        <li>Pastikan koneksi internet stabil saat mendownload materi berukuran besar</li>
        <li>Jika ada kendala download, hubungi dosen pengampu atau admin SPADA</li>
        <li>Materi dilindungi hak cipta, tidak untuk disebarluaskan tanpa izin</li>
    </ul>
</div>

<?php $this->endSection(); ?>
