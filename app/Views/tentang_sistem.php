<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<style>
    .about-card {
        background: white;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.08);
        margin-bottom: 25px;
        border: 1px solid rgba(255,255,255,0.8);
        transition: all 0.3s ease;
    }
    
    .about-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 40px rgba(0,0,0,0.12);
    }
    
    .about-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: white;
        margin-bottom: 20px;
    }
    
    .about-card h4 {
        font-weight: 700;
        color: #1e3a5f;
        margin-bottom: 15px;
        font-size: 1.3rem;
    }
    
    .about-card p {
        color: #6b7280;
        line-height: 1.7;
        margin-bottom: 15px;
    }
    
    .vm-card {
        background: white;
        padding: 30px;
        border-radius: 16px;
        text-align: center;
        box-shadow: 0 8px 32px rgba(0,0,0,0.08);
        height: 100%;
        transition: all 0.3s ease;
        border: 1px solid rgba(255,255,255,0.8);
    }
    
    .vm-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 50px rgba(0,0,0,0.15);
    }
    
    .vm-icon {
        width: 70px;
        height: 70px;
        margin: 0 auto 20px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        color: white;
    }
    
    .vm-card h5 {
        font-weight: 700;
        color: #1e3a5f;
        margin-bottom: 15px;
    }
    
    .vm-card p {
        color: #6b7280;
        line-height: 1.6;
    }
    
    .team-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 32px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        text-align: center;
        border: 1px solid rgba(255,255,255,0.8);
    }
    
    .team-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 50px rgba(0,0,0,0.15);
    }
    
    .team-avatar {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        margin: 25px auto 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.5rem;
        color: white;
    }
    
    .team-info {
        padding: 0 25px 25px;
    }
    
    .team-name {
        font-weight: 700;
        color: #1e3a5f;
        margin-bottom: 5px;
        font-size: 1.1rem;
    }
    
    .team-role {
        color: #667eea;
        font-weight: 500;
        margin-bottom: 10px;
        font-size: 0.9rem;
    }
    
    .team-desc {
        color: #6b7280;
        font-size: 0.85rem;
        line-height: 1.5;
    }
    
    .value-item {
        text-align: center;
        padding: 25px 15px;
        background: white;
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        height: 100%;
        border: 1px solid rgba(255,255,255,0.8);
    }
    
    .value-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    }
    
    .value-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%);
        border-radius: 50%;
        margin: 0 auto 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: white;
    }
    
    .value-item h6 {
        font-weight: 700;
        margin-bottom: 10px;
        color: #1e3a5f;
    }
    
    .value-item p {
        color: #6b7280;
        line-height: 1.5;
        font-size: 0.9rem;
    }
    
    .section-title {
        font-weight: 700;
        color: #1e3a5f;
        font-size: 2rem;
        margin-bottom: 15px;
        text-align: center;
    }
    
    .section-subtitle {
        color: #6b7280;
        font-size: 1.1rem;
        text-align: center;
        margin-bottom: 40px;
    }
</style>

<!-- Page Header -->
<div class="mb-4">
    <h1 style="font-weight: 700; color: #1e3a5f; font-size: 32px; margin-bottom: 8px;">
        <i class="bi bi-info-circle me-2"></i>Tentang Akademik SPADA
    </h1>
    <p style="color: #6b7280; font-size: 16px; margin-bottom: 0;">
        Mengenal lebih dekat platform pembelajaran digital terpadu
    </p>
</div>

<!-- About Platform -->
<div class="row mb-5">
    <div class="col-12">
        <div class="about-card">
            <div class="about-icon">
                <i class="bi bi-lightbulb"></i>
            </div>
            <h4>Tentang Platform Kami</h4>
            <p>Akademik SPADA adalah platform pembelajaran digital terpadu yang menggabungkan sistem manajemen akademik tradisional dengan Sistem Pembelajaran Daring (SPADA). Platform ini dirancang untuk memenuhi kebutuhan institusi pendidikan modern yang memerlukan fleksibilitas dalam pengelolaan akademik dan pembelajaran jarak jauh.</p>
            <p>Dengan mengintegrasikan berbagai fitur seperti manajemen KRS, KHS, jadwal perkuliahan, pembayaran, dan sistem pembelajaran online, kami menyediakan solusi komprehensif untuk mendukung ekosistem pendidikan digital yang efektif dan efisien.</p>
        </div>
    </div>
</div>

<!-- Vision Mission -->
<div class="row mb-5">
    <div class="col-12">
        <h2 class="section-title">Visi & Misi</h2>
        <p class="section-subtitle">Komitmen kami dalam memajukan pendidikan digital Indonesia</p>
    </div>
</div>

<div class="row g-4 mb-5">
    <div class="col-lg-6">
        <div class="vm-card">
            <div class="vm-icon">
                <i class="bi bi-eye"></i>
            </div>
            <h5>Visi</h5>
            <p>Menjadi platform pembelajaran digital terdepan yang mengintegrasikan sistem akademik dan pembelajaran daring untuk menciptakan ekosistem pendidikan yang inovatif, aksesibel, dan berkelanjutan di Indonesia.</p>
        </div>
    </div>
    
    <div class="col-lg-6">
        <div class="vm-card">
            <div class="vm-icon">
                <i class="bi bi-target"></i>
            </div>
            <h5>Misi</h5>
            <p>Menyediakan solusi teknologi pendidikan yang komprehensif, user-friendly, dan terintegrasi untuk mendukung transformasi digital institusi pendidikan serta meningkatkan kualitas pembelajaran di era digital.</p>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="row mb-5">
    <div class="col-12">
        <h2 class="section-title">Tim Pengembang</h2>
        <p class="section-subtitle">Profesional berpengalaman yang berdedikasi untuk pendidikan digital</p>
    </div>
</div>

<div class="row g-4 mb-5">
    <div class="col-lg-4 col-md-6">
        <div class="team-card">
            <div class="team-avatar">
                <i class="bi bi-person"></i>
            </div>
            <div class="team-info">
                <h6 class="team-name">Dr. Ahmad Wijaya</h6>
                <div class="team-role">Project Manager</div>
                <p class="team-desc">Memimpin pengembangan platform dengan pengalaman 10+ tahun dalam teknologi pendidikan dan manajemen proyek IT.</p>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-6">
        <div class="team-card">
            <div class="team-avatar">
                <i class="bi bi-person"></i>
            </div>
            <div class="team-info">
                <h6 class="team-name">Sari Indrawati, M.Kom</h6>
                <div class="team-role">Lead Developer</div>
                <p class="team-desc">Ahli dalam pengembangan aplikasi web dengan spesialisasi dalam sistem informasi akademik dan e-learning.</p>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-6">
        <div class="team-card">
            <div class="team-avatar">
                <i class="bi bi-person"></i>
            </div>
            <div class="team-info">
                <h6 class="team-name">Budi Santoso</h6>
                <div class="team-role">UI/UX Designer</div>
                <p class="team-desc">Desainer berpengalaman yang fokus pada user experience dan interface design untuk aplikasi pendidikan.</p>
            </div>
        </div>
    </div>
</div>

<!-- Values Section -->
<div class="row mb-4">
    <div class="col-12">
        <h2 class="section-title">Nilai-Nilai Kami</h2>
        <p class="section-subtitle">Prinsip-prinsip yang memandu setiap langkah pengembangan platform</p>
    </div>
</div>

<div class="row g-4">
    <div class="col-lg-3 col-md-6">
        <div class="value-item">
            <div class="value-icon">
                <i class="bi bi-shield-check"></i>
            </div>
            <h6>Keamanan</h6>
            <p>Melindungi data dan privasi pengguna dengan standar keamanan tertinggi dalam setiap fitur yang kami kembangkan.</p>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6">
        <div class="value-item">
            <div class="value-icon">
                <i class="bi bi-people"></i>
            </div>
            <h6>User-Centric</h6>
            <p>Mengutamakan pengalaman pengguna dengan desain intuitif dan fitur yang mudah digunakan oleh semua kalangan.</p>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6">
        <div class="value-item">
            <div class="value-icon">
                <i class="bi bi-arrow-up-right"></i>
            </div>
            <h6>Inovasi</h6>
            <p>Terus berinovasi dengan teknologi terdepan untuk memberikan solusi terbaik dalam dunia pendidikan digital.</p>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6">
        <div class="value-item">
            <div class="value-icon">
                <i class="bi bi-heart"></i>
            </div>
            <h6>Dedikasi</h6>
            <p>Berkomitmen penuh untuk mendukung kemajuan pendidikan Indonesia melalui teknologi yang berkelanjutan.</p>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>
