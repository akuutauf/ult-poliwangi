<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_pengajuan',
        'id_pertanyaan_survei',
        'id_saran'
    ];

    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class, 'id_pengajuan', 'id');
    }

    public function pertanyaanSurvei()
    {
        return $this->belongsTo(PertanyaanSurvei::class, 'id_pertanyaan_survei', 'id');
    }
    public function saran()
    {
        return $this->belongsTo(Saran::class, 'id_saran', 'id');
    }
}
