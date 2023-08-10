<?php

namespace App\Http\Livewire;

use App\Models\Berkas;
use App\Models\BerkasLayanan;
use App\Models\Layanan;
use App\Models\Prodi;
use Livewire\Component;

class FormulirPengajuanUmum extends Component
{public $byLayanans;

    public function mount()
    {
        $this->byLayanans = '';
    }

    public function render()
    {
        // view data
        $prodis = Prodi::all();
        $berkas_layanans =  Berkas::all();
        $layanans = Layanan::with('divisi')->orderBy('id_divisi', 'asc')->get();

        $query_berkas_layanans = BerkasLayanan::query();

        $query_berkas_layanans->when($this->byLayanans, function ($query, $layananId) {
            return $query->where('id_layanan', $layananId);
        });

        $persyaratan_berkas = $query_berkas_layanans->with('berkas')->get();

        return view('livewire.formulir-pengajuan-umum', compact('persyaratan_berkas', 'prodis', 'berkas_layanans', 'layanans'));
    }


    public function filterByLayanans($layananId)
    {
        $this->byLayanans = $layananId;
    }
}