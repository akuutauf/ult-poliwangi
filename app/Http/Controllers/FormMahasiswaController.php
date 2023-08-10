<?php

namespace App\Http\Controllers;


use App\Models\Berkas;
use App\Models\Layanan;
use App\Models\Pengajuan;
use App\Models\Prodi;
use App\Models\ProgressPengajuan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class FormMahasiswaController extends Controller
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
        $data = [
            'prodis' => Prodi::all(),
            'layanans' => Layanan::with('divisi')->orderBy('id_divisi', 'asc')->get(),
            'berkas_layanans' => Berkas::all(),
        ];

        return view('pages.client.formulir.mahasiswa.form-mahasiswa', $data);
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
            'nama_pemohon' => 'required|string',
            'nomor_identitas' => 'required|numeric',
            'email' => 'required|email',
            'nomor_telepon' => 'required|numeric',
            'id_prodi' => 'required',
            'id_layanan' => 'required',
            'tanggal_permohonan' => 'required|date',
        ]);

        $newPengajuan = Pengajuan::create([
            'nama_pemohon' => $validated['nama_pemohon'],
            'nomor_identitas' => $validated['nomor_identitas'],
            'email' => $validated['email'],
            'nomor_telepon' => $validated['nomor_telepon'],
            'id_prodi' => $validated['id_prodi'],
            'id_layanan' => $validated['id_layanan'],
            'tanggal_permohonan' => $validated['tanggal_permohonan'],

            // generate kode tiket dan jenis permohonan
            'kode_tiket' => Str::random(7),
            'jenis_permohonan' => 'Mahasiswa',
        ]);

        ProgressPengajuan::create([
            'pesan' => 'Dokumen Berhasil Diunggah',
            'tanggal' => Carbon::now(),
            'status' => 'Formulir Pengajuan Berhasil Terkirim',
            'id_pengajuan' => $newPengajuan->id,
        ]);

        Alert::success('Pengajuan Berhasil Dikirim', 'Jangan Lupa Salin Kode Tiket');

        return redirect()->route('survei.kepuasan.pengguna.page', $newPengajuan->id);
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
}
