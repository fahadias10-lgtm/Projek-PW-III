<?= $this->extend('layout_dosen'); ?>

<?= $this->section('content'); ?>

<!-- Navigasi -->
<div class="mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dosen/dashboard" style="color: #667eea; text-decoration: none;">Dashboard Dosen</a></li>
            <li class="breadcrumb-item active" aria-current="page">Input Nilai</li>
        </ol>
    </nav>
</div>

<!-- Header -->
<div class="mb-4">
    <h1 style="font-weight: 700; color: #1e3a5f; font-size: 32px; margin-bottom: 8px;">
        <i class="bi bi-pencil-square"></i> Input Nilai Mahasiswa
    </h1>
    <p style="color: #6b7280; font-size: 16px; margin-bottom: 0;">Kelola nilai mahasiswa untuk mata kuliah yang Anda ampu</p>
</div>

<!-- Pilih Mata Kuliah -->
<div class="content-box mb-4">
    <h5 style="font-weight: 700; color: #1e3a5f; margin-bottom: 20px;">
        <i class="bi bi-book"></i> Pilih Mata Kuliah
    </h5>
    <div class="row">
        <?php
        $mata_kuliah_diampu = [
            ['kode' => 'TI12-5111', 'nama' => 'Data Mining', 'kelas' => 'TI-5A', 'jumlah_mhs' => 32],
            ['kode' => 'TI12-5114', 'nama' => 'Pemrograman Web III', 'kelas' => 'TI-5B', 'jumlah_mhs' => 30],
            ['kode' => 'TI12-7211', 'nama' => 'Machine Learning', 'kelas' => 'TI-7A', 'jumlah_mhs' => 28],
        ];
        
        foreach($mata_kuliah_diampu as $mk):
        ?>
        <div class="col-md-4 mb-3">
            <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; border-radius: 12px; cursor: pointer;" onclick="pilihMataKuliah('<?= $mk['kode'] ?>', '<?= $mk['nama'] ?>', '<?= $mk['kelas'] ?>')">
                <div style="font-size: 14px; opacity: 0.9; margin-bottom: 8px;"><?= $mk['kode'] ?></div>
                <div style="font-weight: 700; font-size: 18px; margin-bottom: 12px;"><?= $mk['nama'] ?></div>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <i class="bi bi-people"></i> <?= $mk['jumlah_mhs'] ?> Mahasiswa
                    </div>
                    <div>
                        <i class="bi bi-mortarboard"></i> <?= $mk['kelas'] ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Form Input Nilai -->
<div class="content-box" id="formNilaiSection" style="display: none;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h5 style="font-weight: 700; color: #1e3a5f; margin: 0;" id="judulMataKuliah">
                Data Mining - TI-5A
            </h5>
            <p style="color: #6b7280; margin: 0; font-size: 14px;">Semester Ganjil 2025/2026</p>
        </div>
        <button class="btn" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; border: none; padding: 10px 20px; border-radius: 8px; font-weight: 600;" onclick="simpanSemuaNilai()">
            <i class="bi bi-save"></i> Simpan Semua
        </button>
    </div>
    
    <div class="mb-3">
        <div class="alert alert-info" style="background: #e0f2fe; border: 1px solid #0369a1; color: #0369a1;">
            <i class="bi bi-info-circle"></i> 
            <strong>Petunjuk:</strong> Masukkan nilai dalam bentuk angka (0-100) atau huruf (A, B+, B, C+, C, D, E)
        </div>
    </div>
    
    <div class="table-responsive">
        <table class="table" style="margin-bottom: 0;">
            <thead style="background: #f8f9fa; border-bottom: 2px solid #dee2e6;">
                <tr>
                    <th style="padding: 12px; width: 50px; font-weight: 700; color: #374151;">No.</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">NIM</th>
                    <th style="padding: 12px; font-weight: 700; color: #374151;">Nama Mahasiswa</th>
                    <th style="padding: 12px; text-align: center; font-weight: 700; color: #374151; width: 120px;">Nilai UTS</th>
                    <th style="padding: 12px; text-align: center; font-weight: 700; color: #374151; width: 120px;">Nilai UAS</th>
                    <th style="padding: 12px; text-align: center; font-weight: 700; color: #374151; width: 120px;">Nilai Tugas</th>
                    <th style="padding: 12px; text-align: center; font-weight: 700; color: #374151; width: 100px;">Nilai Akhir</th>
                    <th style="padding: 12px; text-align: center; font-weight: 700; color: #374151; width: 80px;">Grade</th>
                </tr>
            </thead>
            <tbody id="tabelNilai">
                <?php
                $mahasiswa_nilai = [
                    ['nim' => '2021110001', 'nama' => 'Ahmad Rizki Pratama', 'uts' => 85, 'uas' => 88, 'tugas' => 90],
                    ['nim' => '2021110015', 'nama' => 'Siti Nurhaliza', 'uts' => 78, 'uas' => 82, 'tugas' => 85],
                    ['nim' => '2021110028', 'nama' => 'Budi Santoso', 'uts' => 70, 'uas' => 75, 'tugas' => 78],
                    ['nim' => '2021110042', 'nama' => 'Dewi Lestari', 'uts' => 92, 'uas' => 90, 'tugas' => 95],
                    ['nim' => '2021110056', 'nama' => 'Eko Prasetyo', 'uts' => 65, 'uas' => 68, 'tugas' => 70],
                ];
                
                foreach($mahasiswa_nilai as $index => $mhs):
                    $nilai_akhir = ($mhs['uts'] * 0.3) + ($mhs['uas'] * 0.4) + ($mhs['tugas'] * 0.3);
                    $grade = '';
                    if($nilai_akhir >= 85) $grade = 'A';
                    elseif($nilai_akhir >= 80) $grade = 'A-';
                    elseif($nilai_akhir >= 75) $grade = 'B+';
                    elseif($nilai_akhir >= 70) $grade = 'B';
                    elseif($nilai_akhir >= 65) $grade = 'B-';
                    elseif($nilai_akhir >= 60) $grade = 'C+';
                    elseif($nilai_akhir >= 55) $grade = 'C';
                    elseif($nilai_akhir >= 40) $grade = 'D';
                    else $grade = 'E';
                ?>
                <tr style="border-bottom: 1px solid #e5e7eb;">
                    <td style="padding: 12px; color: #6b7280; font-weight: 600;"><?= $index + 1 ?></td>
                    <td style="padding: 12px; color: #374151; font-weight: 700;"><?= $mhs['nim'] ?></td>
                    <td style="padding: 12px; color: #374151; font-weight: 600;"><?= $mhs['nama'] ?></td>
                    <td style="padding: 12px;">
                        <input type="number" class="form-control text-center nilai-input" data-nim="<?= $mhs['nim'] ?>" data-jenis="uts" value="<?= $mhs['uts'] ?>" min="0" max="100" style="border: 2px solid #e5e7eb; border-radius: 6px;" onchange="hitungNilaiAkhir(this)">
                    </td>
                    <td style="padding: 12px;">
                        <input type="number" class="form-control text-center nilai-input" data-nim="<?= $mhs['nim'] ?>" data-jenis="uas" value="<?= $mhs['uas'] ?>" min="0" max="100" style="border: 2px solid #e5e7eb; border-radius: 6px;" onchange="hitungNilaiAkhir(this)">
                    </td>
                    <td style="padding: 12px;">
                        <input type="number" class="form-control text-center nilai-input" data-nim="<?= $mhs['nim'] ?>" data-jenis="tugas" value="<?= $mhs['tugas'] ?>" min="0" max="100" style="border: 2px solid #e5e7eb; border-radius: 6px;" onchange="hitungNilaiAkhir(this)">
                    </td>
                    <td style="padding: 12px; text-align: center;">
                        <span class="nilai-akhir" data-nim="<?= $mhs['nim'] ?>" style="font-weight: 700; color: #374151;">
                            <?= number_format($nilai_akhir, 2) ?>
                        </span>
                    </td>
                    <td style="padding: 12px; text-align: center;">
                        <span class="grade-badge" data-nim="<?= $mhs['nim'] ?>" style="background: <?= $grade == 'A' || $grade == 'A-' ? '#10b981' : ($grade == 'B+' || $grade == 'B' ? '#06b6d4' : ($grade == 'C+' || $grade == 'C' ? '#f59e0b' : '#ef4444')) ?>; color: white; padding: 6px 12px; border-radius: 6px; font-size: 14px; font-weight: 700;">
                            <?= $grade ?>
                        </span>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
function pilihMataKuliah(kode, nama, kelas) {
    document.getElementById('judulMataKuliah').textContent = nama + ' - ' + kelas;
    document.getElementById('formNilaiSection').style.display = 'block';
    
    // Scroll to form
    document.getElementById('formNilaiSection').scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function hitungNilaiAkhir(input) {
    const nim = input.dataset.nim;
    const row = input.closest('tr');
    
    // Get all nilai inputs for this student
    const inputs = row.querySelectorAll('.nilai-input');
    let uts = 0, uas = 0, tugas = 0;
    
    inputs.forEach(inp => {
        const jenis = inp.dataset.jenis;
        const nilai = parseFloat(inp.value) || 0;
        
        if(jenis === 'uts') uts = nilai;
        else if(jenis === 'uas') uas = nilai;
        else if(jenis === 'tugas') tugas = nilai;
    });
    
    // Calculate final grade
    const nilaiAkhir = (uts * 0.3) + (uas * 0.4) + (tugas * 0.3);
    
    // Determine grade
    let grade = '';
    if(nilaiAkhir >= 85) grade = 'A';
    else if(nilaiAkhir >= 80) grade = 'A-';
    else if(nilaiAkhir >= 75) grade = 'B+';
    else if(nilaiAkhir >= 70) grade = 'B';
    else if(nilaiAkhir >= 65) grade = 'B-';
    else if(nilaiAkhir >= 60) grade = 'C+';
    else if(nilaiAkhir >= 55) grade = 'C';
    else if(nilaiAkhir >= 40) grade = 'D';
    else grade = 'E';
    
    // Determine color
    let color = '#ef4444';
    if(grade === 'A' || grade === 'A-') color = '#10b981';
    else if(grade === 'B+' || grade === 'B' || grade === 'B-') color = '#06b6d4';
    else if(grade === 'C+' || grade === 'C') color = '#f59e0b';
    
    // Update display
    row.querySelector('.nilai-akhir[data-nim="' + nim + '"]').textContent = nilaiAkhir.toFixed(2);
    
    const gradeBadge = row.querySelector('.grade-badge[data-nim="' + nim + '"]');
    gradeBadge.textContent = grade;
    gradeBadge.style.background = color;
}

function simpanSemuaNilai() {
    if(confirm('Apakah Anda yakin ingin menyimpan semua nilai?')) {
        // Collect all nilai data
        const nilaiData = [];
        const rows = document.querySelectorAll('#tabelNilai tr');
        
        rows.forEach(row => {
            const inputs = row.querySelectorAll('.nilai-input');
            if(inputs.length > 0) {
                const nim = inputs[0].dataset.nim;
                let uts = 0, uas = 0, tugas = 0;
                
                inputs.forEach(inp => {
                    const jenis = inp.dataset.jenis;
                    const nilai = parseFloat(inp.value) || 0;
                    
                    if(jenis === 'uts') uts = nilai;
                    else if(jenis === 'uas') uas = nilai;
                    else if(jenis === 'tugas') tugas = nilai;
                });
                
                nilaiData.push({
                    nim: nim,
                    uts: uts,
                    uas: uas,
                    tugas: tugas
                });
            }
        });
        
        // In real application, send to server
        console.log('Nilai data:', nilaiData);
        
        alert('Nilai berhasil disimpan!');
    }
}
</script>

<?php $this->endSection(); ?>
