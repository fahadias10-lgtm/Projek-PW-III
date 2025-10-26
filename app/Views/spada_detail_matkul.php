<?php $this->extend('layout_spada'); ?>
<?php $this->section('content'); ?>

<div class="modern-container">
    <!-- Modern Header -->
    <div class="modern-header">
        <div class="header-content">
            <div class="course-icon-modern">
                <i class="bi bi-book-half"></i>
            </div>
            <div class="course-info">
                <h1 class="course-title-modern">
                    <?= esc($matkul['nama']) ?>
                </h1>
                <div class="course-badges-modern">
                    <span class="badge-modern primary">
                        <i class="bi bi-mortarboard-fill me-1"></i>
                        <?= esc($matkul['prodi']) ?>
                    </span>
                    <span class="badge-modern success">
                        <i class="bi bi-calendar3 me-1"></i>
                        Semester <?= esc($matkul['semester']) ?>
                    </span>
                </div>
            </div>
            <div class="header-actions">
                <a href="/spada/perkuliahan" class="btn-modern secondary">
                    <i class="bi bi-arrow-left me-2"></i>
                    Kembali
                </a>
            </div>
        </div>

        <!-- Quick Info -->
        <div class="quick-info-modern">
            <div class="info-item-modern">
                <div class="info-icon-modern">
                    <i class="bi bi-clock"></i>
                </div>
                <div>
                    <small class="info-label">Waktu</small>
                    <div class="info-value">
                        <?= esc($matkul['waktu']) ?>
                    </div>
                </div>
            </div>
            <div class="info-item-modern">
                <div class="info-icon-modern">
                    <i class="bi bi-person"></i>
                </div>
                <div>
                    <small class="info-label">Dosen</small>
                    <div class="info-value">
                        <?= esc($matkul['dosen']) ?>
                    </div>
                </div>
            </div>
            <div class="info-item-modern">
                <div class="info-icon-modern">
                    <i class="bi bi-building"></i>
                </div>
                <div>
                    <small class="info-label">Kelas</small>
                    <div class="info-value">R1 / A1</div>
                </div>
            </div>
            <div class="info-item-modern">
                <div class="info-icon-modern">
                    <i class="bi bi-award"></i>
                </div>
                <div>
                    <small class="info-label">SKS</small>
                    <div class="info-value">3 SKS</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Info Banner -->
    <div class="info-banner-modern">
        <div class="banner-content">
            <div class="banner-icon">
                <i class="bi bi-info-circle"></i>
            </div>
            <div class="banner-text">
                <h6>Informasi KBM</h6>
                <p>Pilih KBM untuk memulai perkuliahan •
                   <span class="badge-modern success">Hijau: Aktif</span> •
                   <span class="badge-modern warning">Orange: Terlewat</span> •
                   <span class="badge-modern secondary">Abu: Belum dibuka</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content-modern">
        <!-- KBM Section -->
        <div class="section-modern">
            <div class="section-header-modern">
                <h5 class="section-title-modern">
                    <i class="bi bi-folder2-open me-2"></i>
                    Kegiatan Belajar Mengajar
                </h5>
            </div>

            <!-- Special KBM -->
            <div class="special-kbm-modern">
                <div class="kbm-card-modern special" data-bs-toggle="modal" data-bs-target="#kbmModal" data-kbm="perkenalan">
                    <div class="kbm-icon-modern">
                        <i class="bi bi-star"></i>
                    </div>
                    <div class="kbm-content-modern">
                        <div class="kbm-title-modern">PERKENALAN</div>
                        <div class="kbm-meta-modern">
                            <span class="meta-item">
                                <i class="bi bi-person me-1"></i>
                                <?= esc($matkul['dosen']) ?>
                            </span>
                            <span class="meta-item">
                                <i class="bi bi-clock me-1"></i>
                                2x50 menit
                            </span>
                        </div>
                    </div>
                    <div class="kbm-status-modern">
                        <span class="status-badge success">Selesai</span>
                    </div>
                </div>
            </div>

            <!-- KBM Grid -->
            <div class="kbm-grid-modern">
                <?php for($i = 1; $i <= 14; $i++):
                    $isPast = $i < 4;
                    $isCurrent = $i == 4;
                    $isLocked = $i > 7;
                    $status = $isPast ? 'terlewat' : ($isCurrent ? 'aktif' : ($isLocked ? 'terkunci' : 'tersedia'));
                    $badgeClass = $isPast ? 'warning' : ($isCurrent ? 'success' : ($isLocked ? 'secondary' : 'secondary'));
                    $badgeText = $isPast ? 'Terlewat' : ($isCurrent ? 'Berlangsung' : ($isLocked ? 'Terkunci' : 'Belum dimulai'));
                    $disabled = $isLocked ? 'disabled' : '';
                ?>
                <div class="kbm-card-modern <?= $isCurrent ? 'active' : '' ?> <?= $disabled ?>"
                     data-bs-toggle="modal"
                     data-bs-target="#kbmModal"
                     data-kbm="kbm<?= $i ?>">
                    <div class="kbm-icon-modern">
                        <i class="bi bi-<?= $isCurrent ? 'play-circle' : 'folder' ?>"></i>
                    </div>
                    <div class="kbm-content-modern">
                        <div class="kbm-title-modern">KBM <?= $i ?></div>
                        <div class="kbm-meta-modern">
                            <span class="meta-item">
                                <i class="bi bi-person me-1"></i>
                                <?= esc($matkul['dosen']) ?>
                            </span>
                        </div>
                    </div>
                    <div class="kbm-status-modern">
                        <span class="status-badge <?= $badgeClass ?>"><?= $badgeText ?></span>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>

        <!-- Exams Section -->
        <div class="section-modern">
            <div class="section-header-modern">
                <h5 class="section-title-modern">
                    <i class="bi bi-clipboard-check me-2"></i>
                    Ujian
                </h5>
            </div>

            <div class="exams-container-modern">
                <!-- UTS -->
                <div class="exam-section-modern">
                    <h6 class="exam-section-title">Ujian Tengah Semester</h6>
                    <div class="exam-cards-modern">
                        <div class="exam-card-modern manual"
                             data-bs-toggle="modal"
                             data-bs-target="#examModal"
                             data-exam="uts"
                             data-type="manual">
                            <div class="exam-icon-modern">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <div class="exam-content-modern">
                                <div class="exam-title-modern">UTS Manual</div>
                                <div class="exam-desc-modern">Ujian di kampus dengan pengawasan dosen</div>
                                <div class="exam-meta-modern">
                                    <span>14-18 Oktober 2024</span>
                                    <span>100 menit</span>
                                </div>
                            </div>
                            <div class="exam-status-modern">
                                <span class="status-badge warning">Akan Datang</span>
                            </div>
                        </div>

                        <div class="exam-card-modern cbt"
                             data-bs-toggle="modal"
                             data-bs-target="#examModal"
                             data-exam="uts"
                             data-type="cbt">
                            <div class="exam-icon-modern">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <div class="exam-content-modern">
                                <div class="exam-title-modern">UTS CBT</div>
                                <div class="exam-desc-modern">Ujian online melalui platform CBT</div>
                                <div class="exam-meta-modern">
                                    <span>Platform Online</span>
                                    <span>90 menit</span>
                                </div>
                            </div>
                            <div class="exam-status-modern">
                                <span class="status-badge success">Tersedia</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- UAS -->
                <div class="exam-section-modern">
                    <h6 class="exam-section-title">Ujian Akhir Semester</h6>
                    <div class="exam-cards-modern">
                        <div class="exam-card-modern manual"
                             data-bs-toggle="modal"
                             data-bs-target="#examModal"
                             data-exam="uas"
                             data-type="manual">
                            <div class="exam-icon-modern">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <div class="exam-content-modern">
                                <div class="exam-title-modern">UAS Manual</div>
                                <div class="exam-desc-modern">Ujian di kampus dengan pengawasan dosen</div>
                                <div class="exam-meta-modern">
                                    <span>16-20 Desember 2024</span>
                                    <span>120 menit</span>
                                </div>
                            </div>
                            <div class="exam-status-modern">
                                <span class="status-badge secondary">Belum Dibuka</span>
                            </div>
                        </div>

                        <div class="exam-card-modern cbt"
                             data-bs-toggle="modal"
                             data-bs-target="#examModal"
                             data-exam="uas"
                             data-type="cbt">
                            <div class="exam-icon-modern">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <div class="exam-content-modern">
                                <div class="exam-title-modern">UAS CBT</div>
                                <div class="exam-desc-modern">Ujian online melalui platform CBT</div>
                                <div class="exam-meta-modern">
                                    <span>Platform Online</span>
                                    <span>100 menit</span>
                                </div>
                            </div>
                            <div class="exam-status-modern">
                                <span class="status-badge secondary">Belum Dibuka</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Questionnaire Section -->
        <div class="questionnaire-section-modern">
            <div class="questionnaire-header-modern">
                <i class="bi bi-clipboard-data me-2"></i>
                <strong>Kuesioner Perkuliahan</strong>
            </div>
            <div class="questionnaire-items-modern">
                <div class="questionnaire-item-modern">
                    <div class="item-number">1</div>
                    <span>Kepuasan Mahasiswa Terhadap Kinerja Dosen</span>
                    <span class="status-incomplete">Belum Selesai</span>
                </div>
                <div class="questionnaire-item-modern">
                    <div class="item-number">2</div>
                    <span>Kepuasan Mahasiswa Terhadap Pelayanan Universitas</span>
                    <span class="status-incomplete">Belum Selesai</span>
                </div>
            </div>
            <div class="questionnaire-note-modern">
                <i class="bi bi-info-circle me-1"></i>
                Isi kuesioner di <a href="https://akademik.unsera.ac.id" target="_blank">Portal Akademik</a>
            </div>
        </div>
    </div>
</div>

<!-- KBM Modal -->
<div class="modal fade" id="kbmModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content modern-modal">
            <div class="modal-header modern-modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-folder-open me-2"></i>
                    <span id="kbmModalTitle">KBM Detail</span>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body modern-modal-body">
                <div class="kbm-detail-grid">
                    <div class="kbm-detail-main">
                        <div class="detail-badge-modern">
                            <i class="bi bi-info-circle me-1"></i>
                            Deskripsi Materi
                        </div>
                        <p class="detail-description-modern">
                            Memahami konsep dasar dan ruang lingkup mata kuliah ini, termasuk capaian pembelajaran,
                            metode pengajaran, dan sistem penilaian yang akan diterapkan selama satu semester ke depan.
                        </p>

                        <div class="materials-section-modern">
                            <h6 class="section-subtitle-modern">📚 Materi Pembelajaran</h6>
                            <div class="materials-grid-modern">
                                <div class="material-card-modern">
                                    <div class="material-icon-modern pdf">
                                        <i class="bi bi-file-earmark-pdf"></i>
                                    </div>
                                    <div class="material-info-modern">
                                        <h6>Modul 1 - Pengenalan Mata Kuliah</h6>
                                        <small>PDF • 2.4 MB</small>
                                    </div>
                                    <a href="#" class="btn-modern small primary">Unduh</a>
                                </div>

                                <div class="material-card-modern">
                                    <div class="material-icon-modern video">
                                        <i class="bi bi-youtube"></i>
                                    </div>
                                    <div class="material-info-modern">
                                        <h6>Video Pengantar Perkuliahan</h6>
                                        <small>Video • 15:32 menit</small>
                                    </div>
                                    <button class="btn-modern small primary" data-bs-toggle="modal" data-bs-target="#videoModal">Tonton</button>
                                </div>

                                <div class="material-card-modern">
                                    <div class="material-icon-modern presentation">
                                        <i class="bi bi-file-earmark-presentation"></i>
                                    </div>
                                    <div class="material-info-modern">
                                        <h6>Slide Presentasi - Konsep Dasar</h6>
                                        <small>PPT • 5.2 MB</small>
                                    </div>
                                    <a href="#" class="btn-modern small primary">Unduh</a>
                                </div>
                            </div>
                        </div>

                        <div class="assignments-section-modern">
                            <h6 class="section-subtitle-modern">📝 Tugas & Quiz</h6>
                            <div class="assignments-grid-modern">
                                <div class="assignment-card-modern">
                                    <div class="assignment-icon-modern">
                                        <i class="bi bi-journal-text"></i>
                                    </div>
                                    <div class="assignment-info-modern">
                                        <h6>Tugas 1 - Resume Perkuliahan</h6>
                                        <p class="assignment-desc-modern">Buat resume perkuliahan pertama dalam format PDF maksimal 2 halaman.</p>
                                        <div class="assignment-meta-modern">
                                            <span class="meta-tag-modern">
                                                <i class="bi bi-calendar2-week me-1"></i>
                                                Deadline: 9 Sep 2024
                                            </span>
                                            <span class="meta-tag-modern">
                                                <i class="bi bi-star-fill me-1"></i>
                                                Bobot: 10%
                                            </span>
                                        </div>
                                    </div>
                                    <a href="#" class="btn-modern small primary">Kerjakan</a>
                                </div>

                                <div class="assignment-card-modern">
                                    <div class="assignment-icon-modern">
                                        <i class="bi bi-question-circle"></i>
                                    </div>
                                    <div class="assignment-info-modern">
                                        <h6>Quiz 1 - Konsep Dasar</h6>
                                        <p class="assignment-desc-modern">Quiz mengenai materi pengenalan mata kuliah.</p>
                                        <div class="assignment-meta-modern">
                                            <span class="meta-tag-modern">
                                                <i class="bi bi-clock me-1"></i>
                                                Durasi: 30 menit
                                            </span>
                                            <span class="meta-tag-modern">
                                                <i class="bi bi-trophy me-1"></i>
                                                Bobot: 15%
                                            </span>
                                        </div>
                                    </div>
                                    <button class="btn-modern small success">Mulai Quiz</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kbm-detail-sidebar">
                        <div class="progress-section-modern">
                            <h6 class="sidebar-title-modern">📊 Progress KBM</h6>
                            <div class="progress-card-modern">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Status</span>
                                    <span class="progress-percent">75%</span>
                                </div>
                                <div class="progress-modern">
                                    <div class="progress-bar-modern" style="width: 75%"></div>
                                </div>
                            </div>

                            <div class="status-indicators-modern">
                                <div class="status-indicator-modern">
                                    <div class="status-dot success"></div>
                                    <span>Kehadiran: Hadir</span>
                                </div>
                                <div class="status-indicator-modern">
                                    <div class="status-dot warning"></div>
                                    <span>Tugas: Belum dikerjakan</span>
                                </div>
                                <div class="status-indicator-modern">
                                    <div class="status-dot info"></div>
                                    <span>Quiz: Belum dikerjakan</span>
                                </div>
                            </div>
                        </div>

                        <div class="actions-section-modern">
                            <button class="btn-modern primary w-100 mb-2">
                                <i class="bi bi-play-circle me-2"></i>
                                Masuk Kelas
                            </button>
                            <button class="btn-modern secondary w-100">
                                <i class="bi bi-chat-dots me-2"></i>
                                Forum Diskusi
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer modern-modal-footer">
                <button type="button" class="btn-modern secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn-modern primary">Masuk Kelas</button>
            </div>
        </div>
    </div>
</div>

<!-- Exam Detail Modal -->
<div class="modal fade" id="examModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content modern-modal">
            <div class="modal-header modern-modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-clipboard-check me-2"></i>
                    <span id="examModalTitle">Ujian Detail</span>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body modern-modal-body">
                <div class="exam-content-modern">
                    <!-- Content will be loaded here -->
                </div>
            </div>
            <div class="modal-footer modern-modal-footer">
                <button type="button" class="btn-modern secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn-modern primary exam-action-btn">Mulai Ujian</button>
            </div>
        </div>
    </div>
</div>

<!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content modern-modal">
            <div class="modal-header modern-modal-header">
                <h5 class="modal-title">Video Pengantar Perkuliahan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body modern-modal-body p-0">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Video Pengantar" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Modern Base Styles */
:root {
    --primary-color: #6366f1;
    --primary-light: #818cf8;
    --primary-dark: #4f46e5;
    --success-color: #10b981;
    --success-light: #34d399;
    --warning-color: #f59e0b;
    --warning-light: #fbbf24;
    --secondary-color: #6b7280;
    --secondary-light: #9ca3af;
    --danger-color: #ef4444;
    --info-color: #3b82f6;

    --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
    --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);

    --border-radius: 12px;
    --border-radius-lg: 16px;
    --transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}

* {
    box-sizing: border-box;
}

body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    min-height: 100vh;
    margin: 0;
    padding: 0;
}

.modern-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 1.5rem;
}

/* Modern Header */
.modern-header {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: var(--border-radius-lg);
    padding: 2rem;
    box-shadow: var(--shadow-lg);
    margin-bottom: 1.5rem;
}

.header-content {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 1.5rem;
}

.course-icon-modern {
    width: 4rem;
    height: 4rem;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-radius: var(--border-radius);
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: var(--shadow-lg);
    color: white;
    font-size: 1.5rem;
    flex-shrink: 0;
}

.course-info {
    flex: 1;
    margin-left: 1.5rem;
}

.course-title-modern {
    font-size: 1.875rem;
    font-weight: 800;
    color: #1e293b;
    margin: 0 0 0.5rem 0;
    line-height: 1.2;
}

.course-badges-modern {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.btn-modern {
    border: none;
    border-radius: var(--border-radius);
    padding: 0.75rem 1.5rem;
    font-weight: 600;
    font-size: 0.875rem;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    cursor: pointer;
    text-decoration: none;
    background: rgba(255, 255, 255, 0.8);
    color: #475569;
    border: 1px solid rgba(0, 0, 0, 0.1);
}

.btn-modern.primary {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: white;
    box-shadow: var(--shadow-md);
    border: none;
}

.btn-modern.primary:hover {
    transform: translateY(-1px);
    box-shadow: var(--shadow-lg);
    color: white;
}

.btn-modern.secondary {
    background: rgba(255, 255, 255, 0.8);
    color: #475569;
    border: 1px solid rgba(0, 0, 0, 0.1);
}

.btn-modern.secondary:hover {
    background: white;
    transform: translateY(-1px);
    box-shadow: var(--shadow-md);
}

.btn-modern.small {
    padding: 0.5rem 1rem;
    font-size: 0.75rem;
}

/* Quick Info */
.quick-info-modern {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
}

.info-item-modern {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem;
    background: rgba(255, 255, 255, 0.6);
    border-radius: var(--border-radius);
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.info-icon-modern {
    width: 2.5rem;
    height: 2.5rem;
    background: linear-gradient(135deg, var(--primary-light), var(--primary-color));
    border-radius: var(--border-radius);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.125rem;
    flex-shrink: 0;
}

.info-label {
    display: block;
    font-size: 0.75rem;
    color: #64748b;
    margin-bottom: 0.25rem;
}

.info-value {
    font-size: 0.875rem;
    color: #1e293b;
    font-weight: 600;
}

/* Info Banner */
.info-banner-modern {
    background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 100%);
    border: 1px solid #0ea5e9;
    border-radius: var(--border-radius);
    padding: 1rem 1.5rem;
    margin-bottom: 2rem;
}

.banner-content {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.banner-icon {
    width: 2.5rem;
    height: 2.5rem;
    background: #0ea5e9;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.125rem;
    flex-shrink: 0;
}

.banner-text h6 {
    color: #0c4a6e;
    font-weight: 600;
    margin: 0 0 0.25rem 0;
    font-size: 1rem;
}

.banner-text p {
    margin: 0;
    color: #0c4a6e;
    font-size: 0.875rem;
}

.badge-modern {
    padding: 0.25rem 0.75rem;
    border-radius: 1rem;
    font-size: 0.75rem;
    font-weight: 600;
    border: none;
    display: inline-block;
}

.badge-modern.primary {
    background: linear-gradient(135deg, #3b82f6, #2563eb);
    color: white;
}

.badge-modern.success {
    background: linear-gradient(135deg, var(--success-color), #059669);
    color: white;
}

.badge-modern.warning {
    background: linear-gradient(135deg, var(--warning-color), #d97706);
    color: white;
}

.badge-modern.secondary {
    background: linear-gradient(135deg, var(--secondary-color), #4b5563);
    color: white;
}

/* Main Content */
.main-content-modern {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: var(--border-radius-lg);
    padding: 2rem;
    box-shadow: var(--shadow-lg);
}

.section-modern {
    margin-bottom: 2rem;
}

.section-header-modern {
    margin-bottom: 1.5rem;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid var(--primary-color);
}

.section-title-modern {
    font-size: 1.25rem;
    font-weight: 700;
    color: #1e293b;
    margin: 0;
    display: flex;
    align-items: center;
}

/* KBM Cards */
.special-kbm-modern {
    margin-bottom: 1.5rem;
}

.kbm-card-modern {
    background: white;
    border-radius: var(--border-radius);
    padding: 1.25rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    box-shadow: var(--shadow-md);
    cursor: pointer;
    transition: var(--transition);
    border: 2px solid transparent;
}

.kbm-card-modern:hover:not(.disabled) {
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

.kbm-card-modern.special {
    background: linear-gradient(135deg, rgba(99, 102, 241, 0.05), rgba(79, 70, 229, 0.02));
    border-color: var(--primary-color);
}

.kbm-card-modern.active {
    border-color: var(--primary-color);
    background: linear-gradient(135deg, rgba(99, 102, 241, 0.05), rgba(79, 70, 229, 0.02));
}

.kbm-card-modern.disabled {
    opacity: 0.6;
    cursor: not-allowed;
}

.kbm-icon-modern {
    width: 3rem;
    height: 3rem;
    border-radius: var(--border-radius);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.25rem;
    flex-shrink: 0;
}

.kbm-card-modern.special .kbm-icon-modern {
    background: linear-gradient(135deg, #fbbf24, #f59e0b);
    box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
}

.kbm-card-modern:not(.special):not(.disabled) .kbm-icon-modern {
    background: linear-gradient(135deg, var(--warning-color), #d97706);
}

.kbm-card-modern.disabled .kbm-icon-modern {
    background: linear-gradient(135deg, var(--secondary-color), #4b5563);
}

.kbm-content-modern {
    flex: 1;
}

.kbm-title-modern {
    font-size: 1rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 0.25rem;
}

.kbm-meta-modern {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}

.meta-item {
    font-size: 0.75rem;
    color: #64748b;
    display: flex;
    align-items: center;
    gap: 0.25rem;
}

.kbm-status-modern {
    flex-shrink: 0;
}

.status-badge {
    padding: 0.375rem 0.75rem;
    border-radius: 1rem;
    font-size: 0.75rem;
    font-weight: 600;
    border: none;
}

.status-badge.success {
    background: linear-gradient(135deg, var(--success-color), #059669);
    color: white;
}

.status-badge.warning {
    background: linear-gradient(135deg, var(--warning-color), #d97706);
    color: white;
}

.status-badge.secondary {
    background: linear-gradient(135deg, var(--secondary-color), #4b5563);
    color: white;
}

/* KBM Grid */
.kbm-grid-modern {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 1rem;
    margin-bottom: 2rem;
}

/* Exams Section */
.exams-container-modern {
    display: grid;
    gap: 2rem;
}

.exam-section-modern {
    background: rgba(255, 255, 255, 0.6);
    border-radius: var(--border-radius);
    padding: 1.5rem;
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.exam-section-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: #1e293b;
    margin-bottom: 1rem;
    text-align: center;
}

.exam-cards-modern {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1rem;
}

.exam-card-modern {
    background: white;
    border-radius: var(--border-radius);
    padding: 1.25rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    box-shadow: var(--shadow-md);
    cursor: pointer;
    transition: var(--transition);
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.exam-card-modern:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

.exam-icon-modern {
    width: 3rem;
    height: 3rem;
    border-radius: var(--border-radius);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.25rem;
    flex-shrink: 0;
}

.exam-card-modern.manual .exam-icon-modern {
    background: linear-gradient(135deg, #6366f1, #4f46e5);
    box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
}

.exam-card-modern.cbt .exam-icon-modern {
    background: linear-gradient(135deg, var(--success-color), #059669);
    box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
}

.exam-content-modern {
    flex: 1;
}

.exam-title-modern {
    font-size: 1rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 0.25rem;
}

.exam-desc-modern {
    font-size: 0.875rem;
    color: #64748b;
    margin-bottom: 0.5rem;
    line-height: 1.4;
}

.exam-meta-modern {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
}

.exam-meta-modern span {
    font-size: 0.75rem;
    color: #64748b;
    background: rgba(0, 0, 0, 0.05);
    padding: 0.25rem 0.5rem;
    border-radius: 0.5rem;
}

.exam-status-modern {
    flex-shrink: 0;
}

/* Questionnaire */
.questionnaire-section-modern {
    background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
    border: 1px solid var(--warning-color);
    border-radius: var(--border-radius);
    padding: 1.5rem;
    margin-top: 2rem;
}

.questionnaire-header-modern {
    color: #92400e;
    font-weight: 600;
    font-size: 1rem;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
}

.questionnaire-items-modern {
    display: grid;
    gap: 0.75rem;
    margin-bottom: 1rem;
}

.questionnaire-item-modern {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem;
    background: white;
    border-radius: var(--border-radius);
    color: #78350f;
    font-size: 0.875rem;
}

.item-number {
    width: 1.5rem;
    height: 1.5rem;
    background: var(--warning-color);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    font-size: 0.75rem;
    flex-shrink: 0;
}

.questionnaire-item-modern {
    flex: 1;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.status-incomplete {
    color: #dc2626;
    font-weight: 600;
    font-size: 0.75rem;
}

.questionnaire-note-modern {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem;
    background: rgba(251, 191, 36, 0.2);
    border-radius: var(--border-radius);
    color: #78350f;
    font-size: 0.875rem;
}

.questionnaire-note-modern a {
    color: #2563eb;
    font-weight: 600;
    text-decoration: none;
}

.questionnaire-note-modern a:hover {
    text-decoration: underline;
}

/* Modern Modals */
.modern-modal {
    border: none;
    border-radius: var(--border-radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-xl);
}

.modern-modal-header {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: white;
    border: none;
    padding: 1.5rem 2rem;
}

.modern-modal-header .modal-title {
    font-weight: 700;
    font-size: 1.25rem;
}

.modern-modal-body {
    padding: 0;
}

.modern-modal-footer {
    border: none;
    padding: 1.5rem 2rem;
    background: rgba(248, 250, 252, 0.8);
}

/* KBM Detail */
.kbm-detail-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 2rem;
    padding: 2rem;
}

.kbm-detail-main {
    background: white;
    border-radius: var(--border-radius);
    padding: 1.5rem;
    box-shadow: var(--shadow-sm);
}

.kbm-detail-sidebar {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.detail-badge-modern {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 2rem;
    font-size: 0.875rem;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 1rem;
    width: fit-content;
}

.detail-description-modern {
    color: #64748b;
    line-height: 1.6;
    font-size: 1rem;
    margin-bottom: 2rem;
}

.section-subtitle-modern {
    font-size: 1.125rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.materials-grid-modern, .assignments-grid-modern {
    display: grid;
    gap: 1rem;
}

.material-card-modern, .assignment-card-modern {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    background: rgba(255, 255, 255, 0.7);
    border-radius: var(--border-radius);
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.material-icon-modern, .assignment-icon-modern {
    width: 3rem;
    height: 3rem;
    border-radius: var(--border-radius);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.25rem;
    flex-shrink: 0;
}

.material-icon-modern.pdf {
    background: linear-gradient(135deg, #dc2626, #b91c1c);
}

.material-icon-modern.video {
    background: linear-gradient(135deg, #dc2626, #b91c1c);
}

.material-icon-modern.presentation {
    background: linear-gradient(135deg, #2563eb, #1d4ed8);
}

.assignment-icon-modern {
    background: linear-gradient(135deg, var(--warning-color), #d97706);
}

.material-info-modern, .assignment-info-modern {
    flex: 1;
}

.material-info-modern h6, .assignment-info-modern h6 {
    font-size: 1rem;
    font-weight: 600;
    color: #1e293b;
    margin-bottom: 0.25rem;
}

.material-info-modern small {
    font-size: 0.875rem;
    color: #64748b;
}

.assignment-desc-modern {
    font-size: 0.875rem;
    color: #64748b;
    margin-bottom: 0.5rem;
    line-height: 1.4;
}

.assignment-meta-modern {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.meta-tag-modern {
    font-size: 0.75rem;
    padding: 0.25rem 0.5rem;
    background: rgba(0, 0, 0, 0.05);
    border-radius: 0.75rem;
    color: #64748b;
    display: flex;
    align-items: center;
    gap: 0.25rem;
}

/* Sidebar Sections */
.progress-section-modern {
    background: white;
    border-radius: var(--border-radius);
    padding: 1.5rem;
    box-shadow: var(--shadow-sm);
}

.sidebar-title-modern {
    font-size: 1rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.progress-card-modern {
    margin-bottom: 1.5rem;
}

.progress-percent {
    font-weight: 700;
    color: var(--primary-color);
}

.progress-modern {
    width: 100%;
    height: 0.5rem;
    background: rgba(0, 0, 0, 0.1);
    border-radius: 0.25rem;
    overflow: hidden;
}

.progress-bar-modern {
    height: 100%;
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    border-radius: 0.25rem;
    transition: width 0.3s ease;
}

.status-indicators-modern {
    display: grid;
    gap: 0.75rem;
}

.status-indicator-modern {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem;
    background: rgba(255, 255, 255, 0.7);
    border-radius: var(--border-radius);
    font-size: 0.875rem;
    color: #1e293b;
}

.status-dot {
    width: 0.75rem;
    height: 0.75rem;
    border-radius: 50%;
    flex-shrink: 0;
}

.status-dot.success {
    background: var(--success-color);
}

.status-dot.warning {
    background: var(--warning-color);
}

.status-dot.info {
    background: var(--info-color);
}

.actions-section-modern {
    background: white;
    border-radius: var(--border-radius);
    padding: 1.5rem;
    box-shadow: var(--shadow-sm);
}

.actions-section-modern .btn-modern {
    justify-content: flex-start;
    padding: 1rem;
}

/* Exam Content */
.exam-content-modern {
    padding: 2rem;
}

/* Responsive */
@media (max-width: 768px) {
    .modern-container {
        padding: 1rem;
    }

    .modern-header {
        padding: 1.5rem;
    }

    .header-content {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
    }

    .course-title-modern {
        font-size: 1.5rem;
    }

    .quick-info-modern {
        grid-template-columns: 1fr;
    }

    .kbm-grid-modern {
        grid-template-columns: 1fr;
    }

    .exam-cards-modern {
        grid-template-columns: 1fr;
    }

    .main-content-modern {
        padding: 1.5rem;
    }

    .kbm-detail-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
        padding: 1.5rem;
    }

    .exam-content-modern {
        padding: 1.5rem;
    }

    .modal-dialog {
        margin: 0.5rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle KBM Modal
    const kbmModal = document.getElementById('kbmModal');
    if (kbmModal) {
        kbmModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const kbmType = button.getAttribute('data-kbm');
            const modalTitle = document.getElementById('kbmModalTitle');

            if (modalTitle) {
                if (kbmType === 'perkenalan') {
                    modalTitle.textContent = 'PERKENALAN - Pengenalan Mata Kuliah';
                } else if (kbmType.startsWith('kbm')) {
                    const kbmNumber = kbmType.replace('kbm', '');
                    modalTitle.textContent = `KBM ${kbmNumber} - Topik Pembelajaran`;
                }
            }

            // Update header gradient
            const modalHeader = kbmModal.querySelector('.modal-header');
            if (modalHeader && kbmType === 'perkenalan') {
                modalHeader.className = 'modal-header modal-header-success';
                modalHeader.style.background = 'linear-gradient(135deg, #10b981 0%, #059669 100%)';
            } else if (modalHeader && kbmType.startsWith('kbm')) {
                const kbmNumber = parseInt(kbmType.replace('kbm', ''));
                if (kbmNumber <= 4) {
                    modalHeader.className = 'modal-header modal-header-warning';
                    modalHeader.style.background = 'linear-gradient(135deg, #f7931e 0%, #ff6b35 100%)';
                } else {
                    modalHeader.className = 'modal-header modal-header-danger';
                    modalHeader.style.background = 'linear-gradient(135deg, #ef4444 0%, #dc2626 100%)';
                }
            }
        });
    }

    // Handle Exam Modal
    const examModal = document.getElementById('examModal');
    if (examModal) {
        examModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const examType = button.getAttribute('data-exam');
            const ujianType = button.getAttribute('data-type');
            const modalTitle = document.getElementById('examModalTitle');
            const contentContainer = document.querySelector('.exam-content-container');

            if (modalTitle) {
                const examName = examType.toUpperCase();
                const ujianName = ujianType.toUpperCase();
                modalTitle.textContent = `${examName} ${ujianName} - ${'<?= addslashes($matkul['nama']) ?>'}`;
            }

            // Load appropriate content
            if (contentContainer) {
                let content = '';

                if (ujianType === 'manual') {
                    content = generateManualExamContent(examType);
                } else if (ujianType === 'cbt') {
                    content = generateCBTExamContent(examType);
                }

                contentContainer.innerHTML = content;
            }

            // Update header and button
            const modalHeader = examModal.querySelector('.modal-header');
            const actionButton = examModal.querySelector('.exam-action-btn');

            if (ujianType === 'manual') {
                modalHeader.style.background = 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)';
                actionButton.className = 'btn btn-primary exam-action-btn';
                actionButton.innerHTML = '<i class="bi bi-download me-1"></i> Unduh Soal';
            } else {
                if (examType === 'uts') {
                    modalHeader.style.background = 'linear-gradient(135deg, #10b981 0%, #059669 100%)';
                    actionButton.className = 'btn btn-success exam-action-btn';
                    actionButton.innerHTML = '<i class="bi bi-play-circle me-1"></i> Mulai Ujian';
                } else {
                    modalHeader.style.background = 'linear-gradient(135deg, #6b7280 0%, #4b5563 100%)';
                    actionButton.className = 'btn btn-secondary exam-action-btn';
                    actionButton.innerHTML = '<i class="bi bi-lock me-1"></i> Ujian Belum Dibuka';
                    actionButton.disabled = true;
                }
            }
        });
    }

    // Generate Manual Exam Content
    function generateManualExamContent(examType) {
        const isUTS = examType === 'uts';
        const examDate = isUTS ? '14-18 Oktober 2024' : '16-20 Desember 2024';
        const examDuration = isUTS ? '100 menit' : '120 menit';
        const uploadDate = isUTS ? '10 Oktober 2024' : '12 Desember 2024';
        const fileSize = isUTS ? '2.8 MB' : '3.2 MB';
        const docxSize = isUTS ? '156 KB' : '180 KB';

        return `
            <div class="row">
                <div class="col-md-8">
                    <div class="exam-detail-content p-4">
                        <div class="exam-header-info mb-4">
                            <div class="exam-type-badge bg-primary mb-3">
                                <i class="bi bi-pencil-square me-1"></i>
                                <span>${examType.toUpperCase()} MANUAL</span>
                            </div>
                            <h6 class="exam-subtitle">Ujian Manual - ${'<?= addslashes($matkul['nama']) ?>'}</h6>
                            <p class="exam-description">
                                Ujian dilaksanakan secara manual di kampus dengan pengawasan langsung oleh dosen pengampu mata kuliah.
                            </p>
                        </div>

                        <div class="exam-info-grid mb-4">
                            <h6 class="info-section-title">📋 Informasi Ujian</h6>
                            <div class="info-grid">
                                <div class="info-item-modern">
                                    <i class="bi bi-calendar-check text-primary"></i>
                                    <div>
                                        <strong>Jadwal Ujian</strong>
                                        <small class="d-block text-muted">${examDate}</small>
                                    </div>
                                </div>
                                <div class="info-item-modern">
                                    <i class="bi bi-clock text-warning"></i>
                                    <div>
                                        <strong>Durasi</strong>
                                        <small class="d-block text-muted">${examDuration}</small>
                                    </div>
                                </div>
                                <div class="info-item-modern">
                                    <i class="bi bi-building text-success"></i>
                                    <div>
                                        <strong>Lokasi</strong>
                                        <small class="d-block text-muted">Ruang Ujian Kampus</small>
                                    </div>
                                </div>
                                <div class="info-item-modern">
                                    <i class="bi bi-person-check text-info"></i>
                                    <div>
                                        <strong>Pengawas</strong>
                                        <small class="d-block text-muted">Dosen Pengampu</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="exam-files-section mb-4">
                            <h6 class="info-section-title">📄 File Soal Ujian</h6>
                            <div class="files-list">
                                <div class="file-item">
                                    <div class="file-icon pdf">
                                        <i class="bi bi-file-earmark-pdf"></i>
                                    </div>
                                    <div class="file-info">
                                        <h6>Soal ${examType.toUpperCase()} - ${'<?= addslashes($matkul['nama']) ?>'}</h6>
                                        <p class="file-desc">File PDF berisi kumpulan soal ujian ${isUTS ? 'tengah' : 'akhir'} semester</p>
                                        <div class="file-meta">
                                            <span class="meta-item">
                                                <i class="bi bi-calendar2-week me-1"></i>
                                                Diunggah: ${uploadDate}
                                            </span>
                                            <span class="meta-item">
                                                <i class="bi bi-file-earmark-pdf me-1"></i>
                                                PDF • ${fileSize}
                                            </span>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Unduh Soal</a>
                                </div>

                                <div class="file-item">
                                    <div class="file-icon word">
                                        <i class="bi bi-file-earmark-word"></i>
                                    </div>
                                    <div class="file-info">
                                        <h6>Lembar Jawaban ${examType.toUpperCase()}</h6>
                                        <p class="file-desc">Template lembar jawaban untuk mengisi hasil ujian</p>
                                        <div class="file-meta">
                                            <span class="meta-item">
                                                <i class="bi bi-calendar2-week me-1"></i>
                                                Diunggah: ${uploadDate}
                                            </span>
                                            <span class="meta-item">
                                                <i class="bi bi-file-earmark-word me-1"></i>
                                                DOCX • ${docxSize}
                                            </span>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Unduh Template</a>
                                </div>
                            </div>

                            <div class="alert ${isUTS ? 'alert-info' : 'alert-warning'}">
                                <i class="bi bi-${isUTS ? 'info-circle' : 'exclamation-triangle'} me-2"></i>
                                <strong>Penting:</strong> ${isUTS ?
                                    'Kumpulkan jawaban ujian ke dosen pengampu sesuai jadwal yang telah ditentukan. Pastikan membawa identitas mahasiswa saat ujian.' :
                                    'Ujian UAS menentukan kelulusan mata kuliah. Pastikan hadir tepat waktu dan membawa semua perlengkapan yang diperlukan.'
                                }
                            </div>
                        </div>

                        <div class="exam-status-section">
                            <h6 class="info-section-title">📊 Status Pengumpulan</h6>
                            <div class="status-card">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="status-title">Jawaban Ujian</h6>
                                        <small class="status-desc">${isUTS ? 'Belum ada jawaban yang dikumpulkan' : 'Ujian belum dimulai'}</small>
                                    </div>
                                    <span class="badge ${isUTS ? 'bg-warning' : 'bg-secondary'}">
                                        ${isUTS ? 'Belum Dikumpul' : 'Belum Dibuka'}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="exam-sidebar p-4">
                            <h6 class="sidebar-title">📋 Persiapan Ujian</h6>
                            <div class="preparation-checklist">
                                <div class="checklist-item">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="${examType}-prep1">
                                        <label class="form-check-label" for="${examType}-prep1">
                                            <strong>${isUTS ? 'Unduh Soal Ujian' : 'Review Seluruh Materi'}</strong>
                                            <small class="d-block text-muted">
                                                ${isUTS ? 'Download file soal dalam format PDF' : 'Pelajari semua KBM dari awal semester'}
                                            </small>
                                        </label>
                                    </div>
                                </div>
                                <div class="checklist-item">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="${examType}-prep2">
                                        <label class="form-check-label" for="${examType}-prep2">
                                            <strong>Unduh Template Jawaban</strong>
                                            <small class="d-block text-muted">Download lembar jawaban resmi</small>
                                        </label>
                                    </div>
                                </div>
                                <div class="checklist-item">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="${examType}-prep3">
                                        <label class="form-check-label" for="${examType}-prep3">
                                            <strong>Siapkan Alat Tulis</strong>
                                            <small class="d-block text-muted">
                                                ${isUTS ?
                                                    'Pensil, penghapus, dan kalkulator jika diperlukan' :
                                                    'Pensil, penghapus, kalkulator, dan penggaris'
                                                }
                                            </small>
                                        </label>
                                    </div>
                                </div>
                                <div class="checklist-item">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="${examType}-prep4">
                                        <label class="form-check-label" for="${examType}-prep4">
                                            <strong>Periksa Jadwal</strong>
                                            <small class="d-block text-muted">Pastikan tanggal dan waktu ujian sesuai</small>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="countdown-section">
                                <h6 class="sidebar-title">⏰ Countdown Ujian</h6>
                                <div class="countdown-display">
                                    <div class="countdown-item">
                                        <div class="countdown-number">${isUTS ? '5' : '18'}</div>
                                        <div class="countdown-label">Hari</div>
                                    </div>
                                    <div class="countdown-item">
                                        <div class="countdown-number">${isUTS ? '12' : '6'}</div>
                                        <div class="countdown-label">Jam</div>
                                    </div>
                                    <div class="countdown-item">
                                        <div class="countdown-number">45</div>
                                        <div class="countdown-label">Menit</div>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-section">
                                <h6 class="sidebar-title">🔗 Kontak Dosen</h6>
                                <div class="contact-list">
                                    <div class="contact-item">
                                        <i class="bi bi-envelope text-primary"></i>
                                        <small>${'<?= addslashes($matkul['dosen']) ?>'}</small>
                                    </div>
                                    <div class="contact-item">
                                        <i class="bi bi-telephone text-success"></i>
                                        <small>Konsultasi via WhatsApp Group</small>
                                    </div>
                                    <div class="contact-item">
                                        <i class="bi bi-geo-alt text-warning"></i>
                                        <small>Ruangan Dosen - Gedung Informatika</small>
                                    </div>
                                </div>
                            </div>

                            <div class="security-section">
                                <h6 class="sidebar-title">🚨 Anti-Cheating</h6>
                                <div class="security-features">
                                    <div class="security-item">
                                        <i class="bi bi-camera-video ${isUTS ? 'text-danger' : 'text-secondary'}"></i>
                                        <small>${isUTS ? 'Webcam monitoring aktif' : 'Webcam monitoring (saat ujian)'}</small>
                                    </div>
                                    <div class="security-item">
                                        <i class="bi bi-mouse ${isUTS ? 'text-danger' : 'text-secondary'}"></i>
                                        <small>${isUTS ? 'Screen recording aktif' : 'Screen recording (saat ujian)'}</small>
                                    </div>
                                    <div class="security-item">
                                        <i class="bi bi-shield-exclamation ${isUTS ? 'text-danger' : 'text-secondary'}"></i>
                                        <small>Multiple tabs detector</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
    }

    // Handle start button clicks
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('start-exam-btn') || event.target.classList.contains('exam-action-btn')) {
            const button = event.target;
            const isCBT = button.textContent.includes('MULAI') || button.textContent.includes('Mulai');

            if (isCBT) {
                alert('Memulai Ujian CBT...\n\nFitur ini akan mengarahkan ke sistem ujian online dengan monitoring real-time.');
                // window.location.href = '/cbt/start';
            } else {
                alert('Mengunduh file soal ujian...\n\nFile soal akan didownload dalam format PDF.');
                // window.open('/exam/download/' + examType + '/manual', '_blank');
            }
        }
    });

    // Add hover effects
    document.querySelectorAll('.kbm-item, .exam-card').forEach(item => {
        item.addEventListener('mouseenter', function() {
            if (!this.classList.contains('disabled')) {
                this.style.transform = 'translateY(-4px)';
            }
        });

        item.addEventListener('mouseleave', function() {
            if (!this.classList.contains('disabled')) {
                this.style.transform = 'translateY(0)';
            }
        });
    });
});
</script>

<?php $this->endSection(); ?>
