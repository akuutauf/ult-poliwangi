<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Berkas;
use App\Models\Divisi;
use App\Models\Layanan;
use App\Models\Pengajuan;
use App\Models\Prodi;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home_page()
    {
        return view('pages.client.home');
    }
    public function admin_page()
    {
        $data = [
            // jumlah data
            'prodi_count' => Prodi::count(),
            'divisi_count' => Divisi::count(),
            'admin_count' => Admin::count(),    
            'layanan_count' => Layanan::count(),
            'berkas_count' => Berkas::count(),
            'pengajuan_count' => Pengajuan::count(),
        ];

        return view('pages.admin.home', $data);
    }
}
