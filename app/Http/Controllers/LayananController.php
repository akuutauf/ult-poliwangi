<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Layanan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
            'id_divisi' => 'required',
            'estimasi_layanan' => ['required', 'number'],
            'nama_layanan' => ['required', 'string']
        ]);

        $layanan = new Layanan;
        $layanan->id_divisi = $validated['id_divisi'];
        $layanan->nama_layanan = $validated['nama_layanan'];
        $layanan->estimasi_layanan = $validated['estimasi_layanan'];
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
        $validated = $request->validate([
            'id_divisi' => ['required', 'string'],
            'estimasi_layanan' => ['required', 'string'],
            'nama_layanan' => ['required', 'string'],
        ]);

        Layanan::where('id', $id)->update([
            'id_divisi' => $validated['id_divisi'],
            'estimasi_layanan' => $validated['estimasi_layanan'],
            'nama_layanan' => $validated['nama_layanan'],
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
