<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Spada extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SPADA - Sistem Pembelajaran Daring',
        ];
        return view('spada_home', $data);
    }

    public function perkuliahan()
    {
        $data = [
            'title' => 'Perkuliahan - SPADA',
        ];
        return view('spada_perkuliahan', $data);
    }

    public function arsip()
    {
        $data = [
            'title' => 'Arsip Perkuliahan - SPADA',
        ];
        return view('spada_arsip', $data);
    }

    public function panduan()
    {
        $data = [
            'title' => 'Panduan - SPADA',
        ];
        return view('spada_panduan', $data);
    }

    public function detailMatkul($id = null)
    {
        // Data dummy untuk contoh, bisa diganti dengan data dari database
        $matakuliah = [
            '1' => ['nama' => 'ETIKA PROFESI', 'prodi' => 'INFORMATIKA', 'semester' => '5', 'waktu' => 'SENIN - 08.00 s/d 11.15', 'dosen' => 'Matias Bagus M.Kom'],
            '2' => ['nama' => 'ANALISA SISTEM', 'prodi' => 'INFORMATIKA', 'semester' => '5', 'waktu' => 'SELASA - 08.00 s/d 11.15', 'dosen' => 'ZAINUL - H.M.Kom M.M'],
            '3' => ['nama' => 'KECERDASAN BUATAN', 'prodi' => 'INFORMATIKA', 'semester' => '5', 'waktu' => 'SELASA - 08.00 s/d 14.45', 'dosen' => 'Matias Bagus M.Kom'],
            '4' => ['nama' => 'KKP + SEMINAR', 'prodi' => 'INFORMATIKA', 'semester' => '5', 'waktu' => 'SABTU - 08.00 s/d 12.00', 'dosen' => 'TRNA'],
            '5' => ['nama' => 'IMPLEMENTASI & PEMELIHARAAN JARINGAN KOMPUTER', 'prodi' => 'INFORMATIKA', 'semester' => '5', 'waktu' => 'KAMIS - 14.15 s/d 16.45', 'dosen' => 'Zainul - H.M.Kom Endang Ripan M.Kom'],
            '6' => ['nama' => 'PEMROGRAMAN WEB III', 'prodi' => 'INFORMATIKA', 'semester' => '5', 'waktu' => 'KAMIS - 08.00 s/d 10.30', 'dosen' => 'Anggietas M.Kom'],
            '7' => ['nama' => 'BAHASA INGGRIS V', 'prodi' => 'INFORMATIKA', 'semester' => '5', 'waktu' => 'RABU - 08.10 s/d 11.25', 'dosen' => 'Dosen Bahagia H.Pd (Nama Lengkap) M.Pd'],
            '8' => ['nama' => 'DATA MINING', 'prodi' => 'INFORMATIKA', 'semester' => '5', 'waktu' => 'JUMAT - 8.10 s/d 10.15', 'dosen' => 'Anggietas M.Kom Agung Prasetyo M.Kom'],
        ];

        $matkul = $matakuliah[$id] ?? $matakuliah['1'];

        $data = [
            'title' => $matkul['nama'] . ' - SPADA',
            'matkul' => $matkul,
        ];
        return view('spada_detail_matkul', $data);
    }
}
