<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        // Menampilkan halaman dashboard admin
        return view('admin/dashboard');
    }

    public function kuota()
    {
        // Data Kuota Berdasarkan Lampiran Kepmen 2025
        $data['kuota_2025'] = [
            ['provinsi' => 'JAWA TENGAH', 'kuota' => 67],
            ['provinsi' => 'JAWA TIMUR', 'kuota' => 70],
            ['provinsi' => 'SUMATERA UTARA', 'kuota' => 61],
            ['provinsi' => 'JAWA BARAT', 'kuota' => 48],
            ['provinsi' => 'SULAWESI SELATAN', 'kuota' => 48],
            ['provinsi' => 'ACEH', 'kuota' => 44],
            ['provinsi' => 'LAMPUNG', 'kuota' => 31],
            ['provinsi' => 'DKI JAKARTA', 'kuota' => 9],
        ];

        // Data simulasi untuk tahun sebelumnya
        $data['kuota_2024'] = [
            ['provinsi' => 'JAWA TENGAH', 'kuota' => 63],
            ['provinsi' => 'JAWA TIMUR', 'kuota' => 68],
            ['provinsi' => 'SUMATERA UTARA', 'kuota' => 50],
            ['provinsi' => 'JAWA BARAT', 'kuota' => 43],
            ['provinsi' => 'SULAWESI SELATAN', 'kuota' => 43],
            ['provinsi' => 'ACEH', 'kuota' => 41],
            ['provinsi' => 'LAMPUNG', 'kuota' => 29],
            ['provinsi' => 'DKI JAKARTA', 'kuota' => 7],
        ];

        $data['kuota_2023'] = [
            ['provinsi' => 'JAWA TENGAH', 'kuota' => 58],
            ['provinsi' => 'JAWA TIMUR', 'kuota' => 60],
            ['provinsi' => 'SUMATERA UTARA', 'kuota' => 45],
            ['provinsi' => 'JAWA BARAT', 'kuota' => 41],
            ['provinsi' => 'SULAWESI SELATAN', 'kuota' => 39],
            ['provinsi' => 'ACEH', 'kuota' => 40],
            ['provinsi' => 'LAMPUNG', 'kuota' => 27],
            ['provinsi' => 'DKI JAKARTA', 'kuota' => 5],
        ];

        return view('admin/kuota', $data);
    }

    public function berita()
    {
        // Data berita statis 
        $data['daftar_berita'] = [
            [
                'id' => 1,
                'judul' => 'IPDN Untuk Negeri, Aceh Mari Bangkit Bersama',
                'gambar' => 'Acehipdn.jpeg',
                'penulis' => 'Admin Utama',
                'tgl_rilis' => '03-02-2024',
                'status' => 'Published',
                'deskripsi' => 'Aceh (03/02/2026), Genap 1 bulan sudah misi kemanusiaan praja IPDN dan ASN Kemendagri...'
            ],
            [
                'id' => 2,
                'judul' => 'Calon Praja Pratama IPDN Angkatan XXXVI Siap Melaksanakan DIKSARMENDISPRA Selama 12 Hari',
                'gambar' => 'pengukuhan.jpeg',
                'penulis' => 'Admin Utama',
                'tgl_rilis' => '30-09-2025',
                'status' => 'Published',
                'deskripsi' => 'Jatinangor (30/09/2025), Bukan menjadi pejabat, calon praja IPDN dididik untuk menjadi...'
            ],
            [
                'id' => 3,
                'judul' => 'Lokasi Tes SKD Wilayah Semarang & Lampung',
                'gambar' => 'bkn.jpeg',
                'penulis' => 'Admin Utama',
                'tgl_rilis' => '25-04-2024',
                'status' => 'Draft',
                'deskripsi' => 'Berikut adalah daftar titik lokasi ujian SKD untuk wilayah Jawa Tengah dan Lampung...'
            ],
        ];

        return view('admin/berita', $data);
    }

    public function users()
    {
        return view('admin/users');
    }
}
