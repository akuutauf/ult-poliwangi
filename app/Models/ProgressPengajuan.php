<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressPengajuan extends Model
{
    use HasFactory;
        protected $fillable =[
        'pesan',
        'file',
        'tanggal',
        'id_pengajuan'
    ];

    // Relasi dari progress pengajuan ke pengajuan (many to one)
    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_pengajuan','id');
    }
}