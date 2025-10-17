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
}
