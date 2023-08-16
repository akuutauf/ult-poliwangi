<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BerkasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'berkas' => Berkas::all(),
        ];

        return view('pages.admin.berkas.index', $data);
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
            'nama_berkas' => 'required',
            'jenis_berkas' => ['required', 'string', 'max:100']
        ]);


        $berkas = new Berkas;
        $berkas->nama_berkas = $validated['nama_berkas'];
        $berkas->jenis_berkas = $validated['jenis_berkas'];
        $berkas->save();

        Alert::success('Success', 'Berkas berhasil ditambahkan');

        return redirect()->route('admin.berkas.index');
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
        Berkas::where('id', $request->id)->update($request->only(['nama_berkas','jenis_berkas']));
        Alert::success('Success', 'Berkas berhasil diupdate');
        return redirect()->route('admin.berkas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berkas = Berkas::findOrFail($id);
        $berkas->delete();
        Alert::success('Success', 'Berkas berhasil dihapus');

        return redirect()->route('admin.berkas.index');
    }
}