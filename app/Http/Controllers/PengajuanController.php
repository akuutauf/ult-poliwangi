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
        // belum fiks
        $progress_pengajuan = ProgressPengajuan::where('status', '!=', 'Dokumen Selesai')->get();
        $id_pengajuan_array = [];

        foreach ($progress_pengajuan as $progress) {
            $id_pengajuan_array[] = $progress->id_pengajuan;
        }

        $data = [
            'pengajuans' => Pengajuan::where('submission_confirmed', 'Accept')->get(),
            'id_pengajuan_from_progress' => $id_pengajuan_array,
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
