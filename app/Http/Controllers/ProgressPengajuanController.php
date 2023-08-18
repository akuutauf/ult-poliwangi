<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\ProgressPengajuan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProgressPengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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
    public function store(Request $request, $id_pengajuan)
    {
        // dd($request);
        $pengajuan = Pengajuan::findOrFail($id_pengajuan);
        $validated = $request->validate(
            [
                'create_pesan' => 'required|string',
                'create_file_dokumen' => 'nullable',
                'create_tanggal' => 'required|date',
                'create_status' => 'required',
            ]
        );

        ProgressPengajuan::create(
            [
                'pesan' => $validated['create_pesan'],
                'file_dokumen' => $validated['create_file_dokumen'],
                'tanggal' => $validated['create_tanggal'],
                'status' => $validated['create_status'],
                'id_pengajuan' => $pengajuan->id

            ]
        );
        Alert::success('Success', 'Progres Pengajuan Berhasil Ditambahkan');

        return redirect()->route('admin.progress.pengajuan.index', $pengajuan->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($progress_pengajuan_id)
    {
        $data = [
            'progress_pengajuans' => ProgressPengajuan::where('id_pengajuan', $progress_pengajuan_id)->get(),
            'pengajuan' => Pengajuan::findOrFail($progress_pengajuan_id)
        ];

        //
        return view('pages.admin.progress-pengajuan.index', $data);
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
        $progresspengajuan = ProgressPengajuan::findOrFail($id);
        $progresspengajuan->delete();

        Alert::success('Success', 'Progress Pengajuan Berhasil Dihapus');

        return redirect()->route('admin.progress.pengajuan.index', $progresspengajuan->id);
    }
}
