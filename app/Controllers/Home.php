<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Akademik SPADA - Sistem Pembelajaran Digital Terpadu',
        ];
        return view('landing', $data);
    }
    
    public function beranda(): string
    {
        $data = [
            'title' => 'Beranda - Akademik SPADA',
        ];
        return view('beranda', $data);
    }
    
    public function tentang(): string
    {
        $data = [
            'title' => 'Tentang Kami - Akademik SPADA',
        ];
        return view('tentang', $data);
    }
}
