<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pengajuan extends Model
{
    use HasFactory;

    // mengaktifkan fitur uuid
    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();

        // action
        static::creating(function ($model) {
            // meelakukan pengecekan
            if ($model->getKey() == null) {
                $model->setAttribute($model->getKeyName(), Str::uuid()->toString());
            }
        });
    }

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
