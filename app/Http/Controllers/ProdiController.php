<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'prodi' => Prodi::all(),
        ];


        return view('pages.admin.prodi.index', $data);
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
            'nama_prodi' => ['required', 'string', 'max:100']
        ]);


        $prodi = new Prodi;
        $prodi->nama_prodi = $validated['nama_prodi'];
        $prodi->save();

        Alert::success('Success', 'Prodi berhasil ditambahkan');

        return redirect()->route('admin.prodi.index');
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
        Prodi::where('id', $request->id)->update($request->only(['nama_prodi']));
        Alert::success('Success', 'Prodi berhasil diupdate');
        return redirect()->route('admin.prodi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $prodi = Prodi::findOrFail($id);
        $prodi->delete();
        Alert::success('Success', 'Prodi berhasil dihapus');

        return redirect()->route('admin.prodi.index');
    }
}
