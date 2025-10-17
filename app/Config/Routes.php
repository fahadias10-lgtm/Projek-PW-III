<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/beranda', 'Home::beranda');
$routes->get('/tentang-publik', 'Home::tentang');
$routes->get('/login', 'Dashboard::login');
$routes->post('/login', 'Dashboard::login');
$routes->get('/logout', 'Dashboard::logout');

// Routes untuk Sistem Akademik
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/students', 'Dashboard::students');
$routes->get('/profile', 'Dashboard::profile');
$routes->get('/prosedur', 'Dashboard::prosedur');
$routes->get('/ktm', 'Dashboard::ktm');
$routes->get('/berkas', 'Dashboard::berkas');
$routes->get('/ubah-password', 'Dashboard::ubahPassword');
$routes->post('/ubah-password', 'Dashboard::ubahPassword');
$routes->get('/tentang', 'Dashboard::tentang');

// Routes Akademik Mahasiswa
$routes->get('/krs', 'Dashboard::krs');
$routes->post('/krs/simpan', 'Dashboard::simpanKrs');
$routes->get('/krs-detail/(:segment)/(:segment)', 'Dashboard::krsDetail/$1/$2');
$routes->get('/khs', 'Dashboard::khs');
$routes->get('/jadwal', 'Dashboard::jadwal');
$routes->get('/transkrip', 'Dashboard::transkrip');
$routes->get('/pembayaran', 'Dashboard::pembayaran');
$routes->get('/materi', 'Dashboard::materi');

// Routes untuk SPADA
$routes->get('/spada', 'Spada::index');
$routes->get('/spada/perkuliahan', 'Spada::perkuliahan');
$routes->get('/spada/arsip', 'Spada::arsip');
$routes->get('/spada/panduan', 'Spada::panduan');
