<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_layanan',
        'id_divisi'
    ];

    // Relasi dari layanan ke berkas(one to many)
    public function berkas()
    {
        return $this->hasMany(Berkas::class);
    }

    // Relasi dari layanan ke divisi (many to one)
    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'id_divisi', 'id');
    }

    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class);
    }

    public function berkas_layanan()
    {
        return $this->hasMany(BerkasLayanan::class);
    }
}
