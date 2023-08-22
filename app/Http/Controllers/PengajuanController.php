<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\ProgressPengajuan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_pengajuan = Pengajuan::all();
        $all_progress_pengajuan = ProgressPengajuan::all();

        $pengajuans = [];

        foreach ($all_pengajuan as $pengajuan) {
            // Ambil data progress pengajuan terakhir berdasarkan id_pengajuan
            $last_progress = $all_progress_pengajuan
                ->where('id_pengajuan', $pengajuan->id)
                ->sortByDesc('created_at') // Urutkan berdasarkan created_at descending
                ->first();

            // Jika progress terakhir ditemukan dan status bukan 'Dokumen Selesai'
            if ($last_progress && $last_progress->status !== 'Dokumen Selesai') {
                $pengajuans[] = $pengajuan; // Simpan data pengajuan ke dalam array
            }
        }

        $data = [
            'pengajuans' => $pengajuans,
        ];

        return view('pages.admin.pengajuan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy($id_pengajuan)
    {
        $pengajuan = Pengajuan::findOrFail($id_pengajuan);

        $pengajuan->delete();

        Alert::success('Success', 'Pengajuan Berhasil Dihapus');

        return redirect()->route('admin.pengajuan.index');
    }
}
