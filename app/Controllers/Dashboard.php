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

    public function materi()
    {
        $data = [
            'title' => 'Unduhan Materi - Sistem Akademik',
            'sidebar' => true,
        ];
        return view('materi', $data);
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
