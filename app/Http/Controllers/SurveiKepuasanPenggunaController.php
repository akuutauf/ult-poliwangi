<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\Survei;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SurveiKepuasanPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nama_divisi_user = Auth()->user()->divisi->nama_divisi;

        $all_survei = Survei::whereHas('pengajuan.layanan.divisi', function ($query) use ($nama_divisi_user) {
            $query->where('nama_divisi', $nama_divisi_user);
        })->get();

        $data = [
            'surveis' => $all_survei,
        ];

        return view('pages.admin.survei.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $survei = Survei::where('id_pengajuan', $id)->first();

        if ($survei) {
            // Data ID pengajuan ditemukan di tabel Survei
            return redirect()->route('home.page');
        }

        $data = [
            'data_pengajuan' => Pengajuan::findOrFail($id),
        ];

        return view('pages.client.kepuasan-pengguna.form-survei-kepuasan-pengguna', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_pengajuan)
    {
        $pengajuan = Pengajuan::findOrFail($id_pengajuan);

        $validated = $request->validate([
            'rating' => 'required|numeric',
            'nama' => 'required|string',
            'email' => 'required|email',
            'saran' => 'required|string'
        ]);

        Survei::create([
            'rating' => $validated['rating'],
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'saran' => $validated['saran'],
            'id_pengajuan' => $pengajuan->id,
        ]);

        Alert::success('Terima Kasih', 'Saran Telah Kami Tanggapi');

        return redirect()->route('home.page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
};
