<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_pemohon',
        'jenis_permohonan',
        'tanggal_permohonan',
        'status',
        'kode_tiket',
        'is_layanan',
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan', 'id');
    }

    public function progress_pengajuan()
    {
        return $this->hasMany(ProgressPengajuan::class);
    }
}
