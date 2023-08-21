<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Berkas;
use App\Models\Divisi;
use App\Models\Layanan;
use App\Models\Pengajuan;
use App\Models\Prodi;
use App\Models\ProgressPengajuan;
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
            'daftar_permohonan_count' => Pengajuan::where('submission_confirmed',  ['No'])->count(),

            // belum fiks
            'pengajuan_count' => Pengajuan::where('submission_confirmed',  ['Accept'])->count(),
            'daftar_permohonan_selesai_count' => ProgressPengajuan::where('status', 'Dokumen Selesai')->count(),
        ];

        return view('pages.admin.home', $data);
    }
}
