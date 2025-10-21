<?php

namespace App\Controllers;

class DosenController extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard Dosen - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('dosen/dashboard', $data);
    }

    public function persetujuanKrs()
    {
        $data = [
            'title' => 'Persetujuan KRS - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('dosen/persetujuan_krs', $data);
    }

    public function mahasiswaPerwalian()
    {
        $data = [
            'title' => 'Mahasiswa Perwalian - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('dosen/mahasiswa_perwalian', $data);
    }

    public function inputNilai()
    {
        $data = [
            'title' => 'Input Nilai - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('dosen/input_nilai', $data);
    }

    public function jadwalMengajar()
    {
        $data = [
            'title' => 'Jadwal Mengajar - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('dosen/jadwal_mengajar', $data);
    }

    public function setujuiKrs()
    {
        $session = session();
        
        // Ambil data dari request
        $nim = $this->request->getPost('nim');
        
        // Simulasi persetujuan KRS
        // Dalam aplikasi nyata, ini akan update database
        
        $session->setFlashdata('success', 'KRS berhasil disetujui!');
        return redirect()->to('/dosen/persetujuan-krs');
    }

    public function tolakKrs()
    {
        $session = session();
        
        // Ambil data dari request
        $nim = $this->request->getPost('nim');
        $catatan = $this->request->getPost('catatan');
        
        // Simulasi penolakan KRS
        // Dalam aplikasi nyata, ini akan update database
        
        $session->setFlashdata('error', 'KRS telah ditolak!');
        return redirect()->to('/dosen/persetujuan-krs');
    }

    public function simpanNilai()
    {
        $session = session();
        
        // Ambil data dari request
        $kode_mk = $this->request->getPost('kode_mk');
        $nilai_data = $this->request->getPost('nilai');
        
        // Simulasi penyimpanan nilai
        // Dalam aplikasi nyata, ini akan simpan ke database
        
        $session->setFlashdata('success', 'Nilai berhasil disimpan!');
        return redirect()->to('/dosen/input-nilai');
    }
}
