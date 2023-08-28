<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Models\PertanyaanSurvei;
use App\Models\Survei;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use RealRashid\SweetAlert\Facades\Alert;

class PertanyaanSurveiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surveiWithPertanyaan = Survei::has('pertanyaan_survei')->get();
        $data = [
            'pertanyaan' => Pertanyaan::all(),
            'survei' => $surveiWithPertanyaan,
            'pertanyaansurvei' => PertanyaanSurvei::all()
        ];
        return view('pages.admin.manajemen-pertanyaan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usedSurveiIds = PertanyaanSurvei::pluck('id_survei')->unique();

        $usersWithoutAdmin = Survei::whereNotIn('id', $usedSurveiIds)->get();

        $data = [
            'survei_option' => $usersWithoutAdmin,
            'pertanyaan' => Pertanyaan::all(),
            'survei' => Survei::all(),
        ];
        return view('pages.admin.manajemen-pertanyaan.form-create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'create_id_survei' => 'required',
            'pertanyaan' => 'required|array|min:1',
        ]);

        $id_survei = $validated['create_id_survei'];
        $id_pertanyaan = $validated['pertanyaan'];

        $pertanyaan = Pertanyaan::all();

        foreach ($id_pertanyaan as $pertanyaanID) {
            if ($pertanyaan->contains('id', $pertanyaanID)) {
                PertanyaanSurvei::create([
                    'id_survei' => $id_survei,
                    'id_pertanyaan' => $pertanyaanID,
                ]);
            }
        }


        Alert::success('Success', 'Berhasil Menambahkan Pertanyaan Survei');

        return redirect()->route('admin.pertanyaan.survei.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Ambil data pertanyaansurvei berdasarkan ID survei
        $pertanyaansurvei = PertanyaanSurvei::where('id_survei', $id)->get();

        // dd($pertanyaansurvei);
        // Ambil data survei untuk informasi tambahan
        $survei = Survei::findOrFail($id);

        // Kirim data ke view
        return view('pages.admin.manajemen-pertanyaan.show', compact('pertanyaansurvei', 'survei'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $survei = Survei::findOrFail($id);
        $pertanyaanSurvei = PertanyaanSurvei::where('id_survei', $id)->get();

        $data = [
            'survei' => Survei::all(),
            'pertanyaansurvei' => $pertanyaanSurvei,
            'pertanyaan' => Pertanyaan::all(),
            'action' => route('admin.pertanyaan.survei.update', $id)
        ];

        return view('pages.admin.manajemen-pertanyaan.form-update', $data);
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

        $pertanyaansurvei = PertanyaanSurvei::findOrFail($id);
        $pertanyaansurvei->delete();
        Alert::success('Success', 'Pertanyaan Survei Berhasil Dihapus');

        return redirect()->route('admin.pertanyaan.survei.index');
    }
}
