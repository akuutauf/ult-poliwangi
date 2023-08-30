<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\PertanyaanSurvei;
use App\Models\Saran;
use App\Models\Skor;
use App\Models\Survei;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $saran = Saran::where('id_pengajuan', $id)->first();
        $activePertanyaanSurvei = PertanyaanSurvei::select('pertanyaan_surveis.*', 'surveis.*')
            ->with('pertanyaan', 'survei')
            ->join('surveis', 'pertanyaan_surveis.id_survei', '=', 'surveis.id')
            ->where('surveis.status', 'Aktif')
            ->get()
            ->groupBy('id_survei');

        if ($saran) {
            // Data ID pengajuan ditemukan di tabel Survei
            return redirect()->route('home.page');
        }

        $data = [
            'data_pengajuan' => Pengajuan::findOrFail($id),
            'activePertanyaanSurvei' => $activePertanyaanSurvei,
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
            'question_rating' => 'required|array|min:1',
            'question_rating.*' => 'required',
            'nama' => 'required|string',
            'email' => 'required|email',
            'saran' => 'nullable'
        ]);

        dd($request);

        // $saran = Saran::create([
        //     'nama' => $validated['nama'],
        //     'email' => $validated['email'],
        //     'saran' => $validated['saran'],
        //     'id_pengajuan' => $pengajuan->id,
        // ]);

        // Skor::create([
        //     'skor' => $validated['question_rating'],
        //     'id_pengajuan' => $pengajuan->id,
        //     'id_pertanyaan_survei' => $validated['question_rating'],
        //     'id_saran' => $saran->id,
        // ]);

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
