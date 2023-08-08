<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [
            'divisi' => Divisi::all(),

        ];

        return view('pages.admin.divisi.index', $data);
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
            'name' => ['required', 'string', 'max:100']
        ]);


        $divisi = new Divisi;
        $divisi->name = $validated['name'];
        $divisi->save();

        Alert::success('Success', 'Divisi berhasil ditambahkan');

        return redirect()->route('admin.divisi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data = [
        //     'divisi' => Divisi::find($id),
        // ];

        // return view('pages.admin.divisi.index', $data);
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
        Divisi::where('id', $request->id)->update($request->only(['name']));
        Alert::success('Success', 'Divisi berhasil diupdate');
        return redirect()->route('admin.divisi');
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
        $divisi = Divisi::findOrFail($id);
        $divisi->delete();
        Alert::success('Success', 'Divisi berhasil dihapus');

        return redirect()->route('admin.divisi');
    }
}
