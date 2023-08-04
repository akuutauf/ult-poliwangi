<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis',
        'id_layanan',
    ];

    // relasi dari berkas ke layanan (many to one)
    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan', 'id');
    }

    // relasi dari berkas ke berkas layanan (one to many)
    public function berkas_layanan()
    {
        return $this->hasMany(BerkasLayanan::class);
    }
}
