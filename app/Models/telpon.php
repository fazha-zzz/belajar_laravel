<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telpon extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama', 'id_pengguna'];
    public $timestamp = true;

    //relasi ke table pengguna
    public function pengguna()
    {
        return $this->belongsTo(pengguna::class, 'id_pengguna');
    }
}
