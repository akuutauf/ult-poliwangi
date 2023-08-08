<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    protected $table = 'divisis';

    protected $fillable = [
        'id',
        'name'
    ];

    public function admin()
    {
        return $this->hasMany(Admin::class);
    }

    public function layanan()
    {
        return $this->hasMany(Layanan::class);
    }
}
