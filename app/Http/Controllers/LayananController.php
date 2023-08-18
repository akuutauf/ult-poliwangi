<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Layanan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rule;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'layanan' => Layanan::all(),
            'divisi' => Divisi::all(),
        ];

        return view('pages.admin.layanan.index', $data);
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
        $validated = $request->validate([
            'create_id_divisi' => 'required',
            'create_nama_layanan' => ['required', 'string', Rule::unique('layanans', 'nama_layanan')],
            'create_estimasi_layanan' => ['required'],
        ]);

        $layanan = new Layanan;
        $layanan->id_divisi = $validated['create_id_divisi'];
        $layanan->nama_layanan = $validated['create_nama_layanan'];
        $layanan->estimasi_layanan = $validated['create_estimasi_layanan'];
        $layanan->save();

        Alert::success('Success', 'Layanan Berhasil Ditambahkan');

        return redirect()->route('admin.layanan.index');
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
        $layanan = Layanan::findOrFail($id);

        $validated = $request->validate([
            'update_id_divisi' => ['required', 'string'],
            'update_nama_layanan' => ['required', 'string', Rule::unique('layanans', 'nama_layanan')->ignore($layanan->id, 'id')],
            'update_estimasi_layanan' => ['required', 'string'],
        ]);

        Layanan::where('id', $id)->update([
            'id_divisi' => $validated['update_id_divisi'],
            'estimasi_layanan' => $validated['update_estimasi_layanan'],
            'nama_layanan' => $validated['update_nama_layanan'],
        ]);

        Alert::success('Success', 'Layanan Berhasil Diupdate');

        return redirect()->route('admin.layanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->delete();
        Alert::success('Success', 'Layanan Berhasil Dihapus');

        return redirect()->route('admin.layanan.index');
    }
}
