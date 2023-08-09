<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'kode_tiket',
        'nama_pemohon',
        'nomor_identitas',
        'email',
        'jenis_permohonan',
        'tanggal_permohonan',
        'nomor_telepon',
        'id_prodi',
        'id_layanan',
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan', 'id');
    }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
    }

    public function progress_pengajuan()
    {
        return $this->hasMany(ProgressPengajuan::class);
    }

    public function survei()
    {
        return $this->hasOne(Survei::class);
    }
}
