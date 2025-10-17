<?php $this->extend('layout_spada'); ?>
<?php $this->section('content'); ?>

<div class="container my-5">
    <div class="content-box">
        <div class="d-flex align-items-center mb-4">
            <i class="bi bi-book-half" style="font-size: 32px; color: #667eea; margin-right: 16px;"></i>
            <h2 style="margin: 0; font-weight: 700; color: #2c3e50;">PANDUAN PENGGUNAAN SISTEM</h2>
        </div>
        
        <div class="alert" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; border: none; border-radius: 12px; padding: 16px; margin-bottom: 30px;">
            <i class="bi bi-lightbulb"></i> <strong>Tips:</strong> Pelajari panduan ini untuk memaksimalkan penggunaan SPADA
        </div>

        <!-- Quick Guide Cards -->
        <div class="row mb-4">
            <div class="col-md-4 mb-3">
                <div style="border: 2px solid #e5e7eb; border-radius: 16px; padding: 24px; background: white; transition: all 0.3s;" onmouseover="this.style.borderColor='#667eea'; this.style.transform='translateY(-4px)'" onmouseout="this.style.borderColor='#e5e7eb'; this.style.transform='translateY(0)'">
                    <div style="width: 56px; height: 56px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                        <i class="bi bi-door-open" style="font-size: 28px; color: white;"></i>
                    </div>
                    <h5 style="font-weight: 700; color: #2c3e50; margin-bottom: 12px;">Login & Akses</h5>
                    <p style="color: #6b7280; font-size: 14px; margin-bottom: 16px;">Cara login dan mengakses kelas perkuliahan Anda</p>
                    <button class="btn btn-sm" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none;" onclick="showGuide('login')">
                        <i class="bi bi-play-circle"></i> Lihat Panduan
                    </button>
                </div>
            </div>
            
            <div class="col-md-4 mb-3">
                <div style="border: 2px solid #e5e7eb; border-radius: 16px; padding: 24px; background: white; transition: all 0.3s;" onmouseover="this.style.borderColor='#10b981'; this.style.transform='translateY(-4px)'" onmouseout="this.style.borderColor='#e5e7eb'; this.style.transform='translateY(0)'">
                    <div style="width: 56px; height: 56px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                        <i class="bi bi-clipboard-check" style="font-size: 28px; color: white;"></i>
                    </div>
                    <h5 style="font-weight: 700; color: #2c3e50; margin-bottom: 12px;">Mengerjakan Tugas</h5>
                    <p style="color: #6b7280; font-size: 14px; margin-bottom: 16px;">Panduan mengerjakan dan mengumpulkan tugas</p>
                    <button class="btn btn-sm" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; border: none;" onclick="showGuide('tugas')">
                        <i class="bi bi-play-circle"></i> Lihat Panduan
                    </button>
                </div>
            </div>
            
            <div class="col-md-4 mb-3">
                <div style="border: 2px solid #e5e7eb; border-radius: 16px; padding: 24px; background: white; transition: all 0.3s;" onmouseover="this.style.borderColor='#f7931e'; this.style.transform='translateY(-4px)'" onmouseout="this.style.borderColor='#e5e7eb'; this.style.transform='translateY(0)'">
                    <div style="width: 56px; height: 56px; background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
                        <i class="bi bi-camera-video" style="font-size: 28px; color: white;"></i>
                    </div>
                    <h5 style="font-weight: 700; color: #2c3e50; margin-bottom: 12px;">Kelas Virtual</h5>
                    <p style="color: #6b7280; font-size: 14px; margin-bottom: 16px;">Mengikuti perkuliahan online via video conference</p>
                    <button class="btn btn-sm" style="background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%); color: white; border: none;" onclick="showGuide('virtual')">
                        <i class="bi bi-play-circle"></i> Lihat Panduan
                    </button>
                </div>
            </div>
        </div>

        <hr style="margin: 40px 0; border-color: #e5e7eb;">

        <!-- Download Section -->
        <h4 style="font-weight: 700; color: #2c3e50; margin-bottom: 24px;">
            <i class="bi bi-download"></i> Download Panduan Lengkap
        </h4>
        
        <div class="row">
            <div class="col-md-6 mb-3">
                <div style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 20px; background: linear-gradient(135deg, #fff5f5 0%, #ffffff 100%); transition: all 0.3s;" onmouseover="this.style.borderColor='#dc2626'" onmouseout="this.style.borderColor='#e5e7eb'">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-file-pdf-fill" style="font-size: 48px; color: #dc2626; margin-right: 16px;"></i>
                        <div style="flex: 1;">
                            <strong style="color: #2c3e50; font-size: 16px;">Panduan SPADA Mahasiswa</strong>
                            <p style="color: #6b7280; font-size: 13px; margin: 4px 0 0 0;">Panduan lengkap penggunaan sistem untuk mahasiswa</p>
                            <small style="color: #9ca3af;">PDF • 2.5 MB</small>
                        </div>
                        <button class="btn" style="background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%); color: white; border: none;">
                            <i class="bi bi-download"></i> Download
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-3">
                <div style="border: 2px solid #e5e7eb; border-radius: 12px; padding: 20px; background: linear-gradient(135deg, #f0f9ff 0%, #ffffff 100%); transition: all 0.3s;" onmouseover="this.style.borderColor='#2563eb'" onmouseout="this.style.borderColor='#e5e7eb'">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-file-pdf-fill" style="font-size: 48px; color: #2563eb; margin-right: 16px;"></i>
                        <div style="flex: 1;">
                            <strong style="color: #2c3e50; font-size: 16px;">Quick Start Guide</strong>
                            <p style="color: #6b7280; font-size: 13px; margin: 4px 0 0 0;">Panduan cepat untuk pemula</p>
                            <small style="color: #9ca3af;">PDF • 850 KB</small>
                        </div>
                        <button class="btn" style="background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%); color: white; border: none;">
                            <i class="bi bi-download"></i> Download
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <hr style="margin: 40px 0; border-color: #e5e7eb;">

        <!-- FAQ Section -->
        <h4 style="font-weight: 700; color: #2c3e50; margin-bottom: 24px;">
            <i class="bi bi-question-circle"></i> Frequently Asked Questions (FAQ)
        </h4>
        
        <div class="accordion" id="faqAccordion">
            <div style="border: 2px solid #e5e7eb; border-radius: 12px; margin-bottom: 12px; overflow: hidden;">
                <div style="padding: 20px; background: white; cursor: pointer;" onclick="toggleAccordion('faq1')">
                    <div class="d-flex justify-content-between align-items-center">
                        <strong style="color: #2c3e50;">Bagaimana cara login ke sistem SPADA?</strong>
                        <i class="bi bi-chevron-down" id="icon-faq1" style="color: #667eea;"></i>
                    </div>
                </div>
                <div id="faq1" style="display: none; padding: 0 20px 20px 20px; background: #f8f9fa;">
                    <p style="color: #6b7280; margin: 0;">Gunakan NIM dan password yang sama dengan portal akademik. Jika lupa password, silakan hubungi admin akademik untuk reset password.</p>
                </div>
            </div>
            
            <div style="border: 2px solid #e5e7eb; border-radius: 12px; margin-bottom: 12px; overflow: hidden;">
                <div style="padding: 20px; background: white; cursor: pointer;" onclick="toggleAccordion('faq2')">
                    <div class="d-flex justify-content-between align-items-center">
                        <strong style="color: #2c3e50;">Bagaimana cara mengumpulkan tugas?</strong>
                        <i class="bi bi-chevron-down" id="icon-faq2" style="color: #667eea;"></i>
                    </div>
                </div>
                <div id="faq2" style="display: none; padding: 0 20px 20px 20px; background: #f8f9fa;">
                    <p style="color: #6b7280; margin: 0;">Masuk ke kelas → pilih menu Tugas → klik tugas yang akan dikumpulkan → upload file → klik Submit. Pastikan format file sesuai dengan yang diminta dosen.</p>
                </div>
            </div>
            
            <div style="border: 2px solid #e5e7eb; border-radius: 12px; margin-bottom: 12px; overflow: hidden;">
                <div style="padding: 20px; background: white; cursor: pointer;" onclick="toggleAccordion('faq3')">
                    <div class="d-flex justify-content-between align-items-center">
                        <strong style="color: #2c3e50;">Apakah bisa mengakses SPADA dari HP?</strong>
                        <i class="bi bi-chevron-down" id="icon-faq3" style="color: #667eea;"></i>
                    </div>
                </div>
                <div id="faq3" style="display: none; padding: 0 20px 20px 20px; background: #f8f9fa;">
                    <p style="color: #6b7280; margin: 0;">Ya, SPADA dapat diakses melalui browser mobile. Untuk pengalaman terbaik, disarankan menggunakan laptop/PC terutama untuk ujian online.</p>
                </div>
            </div>
            
            <div style="border: 2px solid #e5e7eb; border-radius: 12px; margin-bottom: 12px; overflow: hidden;">
                <div style="padding: 20px; background: white; cursor: pointer;" onclick="toggleAccordion('faq4')">
                    <div class="d-flex justify-content-between align-items-center">
                        <strong style="color: #2c3e50;">Bagaimana jika terlambat mengumpulkan tugas?</strong>
                        <i class="bi bi-chevron-down" id="icon-faq4" style="color: #667eea;"></i>
                    </div>
                </div>
                <div id="faq4" style="display: none; padding: 0 20px 20px 20px; background: #f8f9fa;">
                    <p style="color: #6b7280; margin: 0;">Sistem akan menandai tugas sebagai terlambat. Kebijakan penerimaan tugas terlambat tergantung pada aturan dosen pengampu masing-masing.</p>
                </div>
            </div>
        </div>

        <!-- Contact Support -->
        <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 16px; padding: 32px; margin-top: 40px; color: white; text-align: center;">
            <h5 style="font-weight: 700; margin-bottom: 12px;">Butuh Bantuan Lebih Lanjut?</h5>
            <p style="opacity: 0.95; margin-bottom: 24px;">Tim support kami siap membantu Anda</p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <button class="btn btn-lg" style="background: white; color: #667eea; border: none; font-weight: 600;">
                    <i class="bi bi-envelope"></i> Email Support
                </button>
                <button class="btn btn-lg" style="background: rgba(255,255,255,0.2); color: white; border: 2px solid white; font-weight: 600;">
                    <i class="bi bi-whatsapp"></i> WhatsApp Admin
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function toggleAccordion(id) {
    const content = document.getElementById(id);
    const icon = document.getElementById('icon-' + id);
    
    if(content.style.display === 'none') {
        content.style.display = 'block';
        icon.className = 'bi bi-chevron-up';
    } else {
        content.style.display = 'none';
        icon.className = 'bi bi-chevron-down';
    }
}

function showGuide(type) {
    alert('Panduan ' + type + ' akan ditampilkan. (Fitur dalam pengembangan)');
}
</script>

<?php $this->endSection(); ?>
