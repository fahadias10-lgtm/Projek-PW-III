<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        // No login required - direct access to dashboard
        $data = [
            'title' => 'Dashboard - Sistem Akademik',
            'sidebar' => true, // Aktifkan sidebar
        ];
        return view('dashboard', $data);
    }

    public function login()
    {
        // Redirect langsung ke dashboard - no login required
        return redirect()->to('/dashboard');
    }
    
    public function logout()
    {
        // Just redirect to dashboard - no session to destroy
        return redirect()->to('/dashboard');
    }

    public function profile()
    {
        $data = [
            'title' => 'Profil - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('profile', $data);
    }

    public function prosedur()
    {
        $data = [
            'title' => 'Prosedur Perkuliahan - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('prosedur', $data);
    }

    public function ktm()
    {
        $data = [
            'title' => 'KTM Digital - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('ktm', $data);
    }

    public function berkas()
    {
        $data = [
            'title' => 'Berkas - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('berkas', $data);
    }

    public function students()
    {
        $data = [
            'title' => 'Data Mahasiswa - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('students', $data);
    }

    public function ubahPassword()
    {
        $data = [
            'title' => 'Ubah Password - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('ubah_password', $data);
    }

    public function krs()
    {
        $data = [
            'title' => 'Kartu Rencana Studi (KRS) - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('krs', $data);
    }

    public function simpanKrs()
    {
        $session = session();
        
        // Ambil data dari form
        $tahun_akademik = $this->request->getPost('tahun_akademik');
        $semester = $this->request->getPost('semester');
        $program_studi = $this->request->getPost('program_studi');
        $semester_angka = $this->request->getPost('semester_angka');
        $konsentrasi = $this->request->getPost('konsentrasi');
        $mata_kuliah = $this->request->getPost('mata_kuliah') ?? [];
        
        // Validasi data
        if (empty($semester) || empty($semester_angka) || empty($konsentrasi) || empty($mata_kuliah)) {
            $session->setFlashdata('error', 'Semua field harus diisi dan minimal pilih 1 mata kuliah!');
            return redirect()->to('/krs');
        }
        
        // Hitung total SKS
        $mata_kuliah_data = [
            'TI12-5111' => ['nama' => 'Data Mining', 'sks' => 4, 'dosen' => 'Anggie Kurniawan, M.Kom'],
            'TI12-5112' => ['nama' => 'Sistem Pakar dan Kecerdasan Buatan', 'sks' => 3, 'dosen' => 'Dr. Matias Bagus, M.Kom'],
            'TI12-5113' => ['nama' => 'Analisa Sistem', 'sks' => 3, 'dosen' => 'Zainul Hasan, M.Kom'],
            'TI12-5114' => ['nama' => 'Pemrograman Web III', 'sks' => 3, 'dosen' => 'Anggietas, M.Kom'],
            'TI12-5115' => ['nama' => 'Kecerdasan Bisnis', 'sks' => 3, 'dosen' => 'Sartika S.T., M.T., Ph.D'],
            'UNV-5116' => ['nama' => 'Bahasa Inggris V', 'sks' => 2, 'dosen' => 'Farah Dwi Rahmawati, M.Pd'],
            'UNV-5117' => ['nama' => 'Etika Profesi', 'sks' => 2, 'dosen' => 'Bambang Hariadi, M.Si'],
            'UNV-5118' => ['nama' => 'KKP - Seminar', 'sks' => 2, 'dosen' => '-'],
        ];
        
        $total_sks = 0;
        $mata_kuliah_dipilih = [];
        
        foreach ($mata_kuliah as $kode_mk) {
            if (isset($mata_kuliah_data[$kode_mk])) {
                $total_sks += $mata_kuliah_data[$kode_mk]['sks'];
                $mata_kuliah_dipilih[] = [
                    'kode' => $kode_mk,
                    'nama' => $mata_kuliah_data[$kode_mk]['nama'],
                    'sks' => $mata_kuliah_data[$kode_mk]['sks'],
                    'dosen' => $mata_kuliah_data[$kode_mk]['dosen']
                ];
            }
        }
        
        // Validasi SKS
        if ($total_sks > 24) {
            $session->setFlashdata('error', 'Total SKS tidak boleh lebih dari 24!');
            return redirect()->to('/krs');
        }
        
        if ($total_sks < 12) {
            $session->setFlashdata('error', 'Total SKS minimal 12!');
            return redirect()->to('/krs');
        }
        
        // Simpan ke session (simulasi database)
        $krs_baru = [
            'tahun' => $tahun_akademik,
            'semester' => $semester,
            'program_studi' => $program_studi,
            'konsentrasi' => $konsentrasi,
            'semester_angka' => $semester_angka,
            'jumlah_mk' => count($mata_kuliah_dipilih),
            'total_sks' => $total_sks,
            'mata_kuliah' => $mata_kuliah_dipilih,
            'tanggal_dibuat' => date('Y-m-d H:i:s'),
            'status' => 'Menunggu Persetujuan'
        ];
        
        // Ambil data KRS yang sudah ada dari session
        $riwayat_krs = $session->get('riwayat_krs') ?? [];
        
        // Cek apakah KRS untuk tahun dan semester ini sudah ada
        $key_exists = false;
        foreach ($riwayat_krs as $key => $krs) {
            if ($krs['tahun'] == $tahun_akademik && $krs['semester'] == $semester) {
                $riwayat_krs[$key] = $krs_baru; // Update yang sudah ada
                $key_exists = true;
                break;
            }
        }
        
        if (!$key_exists) {
            array_unshift($riwayat_krs, $krs_baru); // Tambah di awal array
        }
        
        // Simpan kembali ke session
        $session->set('riwayat_krs', $riwayat_krs);
        
        $session->setFlashdata('success', 'KRS berhasil disimpan! Total SKS: ' . $total_sks);
        return redirect()->to('/krs');
    }

    public function krsDetail($tahun = null, $semester = null)
    {
        // Convert tahun format dari 2025-2026 ke 2025/2026
        $tahun_akademik = $tahun ? str_replace('-', '/', $tahun) : '2025/2026';
        
        $data = [
            'title' => 'Detail KRS - Sistem Akademik',
            'sidebar' => true,
            'tahun_akademik' => $tahun_akademik,
            'semester' => $semester ?? 'GANJIL',
        ];
        return view('krs_detail', $data);
    }

    public function khs()
    {
        $data = [
            'title' => 'Kartu Hasil Studi (KHS) - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('khs', $data);
    }

    public function jadwal()
    {
        $data = [
            'title' => 'Jadwal Perkuliahan - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('jadwal', $data);
    }

    public function transkrip()
    {
        $data = [
            'title' => 'Transkrip Nilai - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('transkrip', $data);
    }

    public function pembayaran()
    {
        $data = [
            'title' => 'Pembayaran - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('pembayaran', $data);
    }

    public function pilihMataKuliah()
    {
        $data = [
            'title' => 'Pilih Mata Kuliah - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('pilih_mk', $data);
    }
    
    public function tentang()
    {
        $data = [
            'title' => 'Tentang Akademik SPADA - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('tentang_sistem', $data);
    }
}
