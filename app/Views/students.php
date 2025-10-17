<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<div class="content-box">
    <div class="content-header">
        <i class="bi bi-people-fill"></i> Daftar Mahasiswa
    </div>
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <button class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Tambah Mahasiswa
        </button>
        <div class="input-group" style="width: 300px;">
            <span class="input-group-text" style="background: white; border-right: none;">
                <i class="bi bi-search"></i>
            </span>
            <input type="text" class="form-control" placeholder="Cari mahasiswa..." style="border-left: none;">
        </div>
    </div>
    
    <table class="table" style="margin-bottom: 0;">
        <thead style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
            <tr>
                <th style="padding: 16px; width: 60px;" class="text-center">No.</th>
                <th style="padding: 16px;">Nama Lengkap</th>
                <th style="padding: 16px;">NIM</th>
                <th style="padding: 16px;">Program Studi</th>
                <th style="padding: 16px; width: 200px;" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600;">1</td>
                <td style="padding: 16px;">
                    <div class="d-flex align-items-center">
                        <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600; margin-right: 12px;">JD</div>
                        <div>
                            <strong>John Doe</strong><br>
                            <small class="text-muted">john.doe@unsera.ac.id</small>
                        </div>
                    </div>
                </td>
                <td style="padding: 16px; color: #6b7280;">12345678</td>
                <td style="padding: 16px;">Teknik Informatika</td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm btn-warning me-1">
                        <i class="bi bi-pencil"></i>
                    </button>
                    <button class="btn btn-sm btn-danger">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid #e5e7eb;">
                <td class="text-center" style="padding: 16px; font-weight: 600;">2</td>
                <td style="padding: 16px;">
                    <div class="d-flex align-items-center">
                        <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600; margin-right: 12px;">JS</div>
                        <div>
                            <strong>Jane Smith</strong><br>
                            <small class="text-muted">jane.smith@unsera.ac.id</small>
                        </div>
                    </div>
                </td>
                <td style="padding: 16px; color: #6b7280;">87654321</td>
                <td style="padding: 16px;">Sistem Informasi</td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm btn-warning me-1">
                        <i class="bi bi-pencil"></i>
                    </button>
                    <button class="btn btn-sm btn-danger">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td class="text-center" style="padding: 16px; font-weight: 600;">3</td>
                <td style="padding: 16px;">
                    <div class="d-flex align-items-center">
                        <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600; margin-right: 12px;">BJ</div>
                        <div>
                            <strong>Bob Johnson</strong><br>
                            <small class="text-muted">bob.johnson@unsera.ac.id</small>
                        </div>
                    </div>
                </td>
                <td style="padding: 16px; color: #6b7280;">11223344</td>
                <td style="padding: 16px;">Teknik Komputer</td>
                <td class="text-center" style="padding: 16px;">
                    <button class="btn btn-sm btn-warning me-1">
                        <i class="bi bi-pencil"></i>
                    </button>
                    <button class="btn btn-sm btn-danger">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
    
    <nav aria-label="Page navigation" class="mt-4">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" style="border-radius: 8px 0 0 8px;">Previous</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none;">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" style="border-radius: 0 8px 8px 0;">Next</a>
            </li>
        </ul>
    </nav>
</div>

<?php $this->endSection(); ?>
