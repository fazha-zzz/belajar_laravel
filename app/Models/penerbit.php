<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penerbit extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_penerbit'];
    public $timestamp = true;

    //relasi ke table telpon
    public function buku()
    {
        return $this->hasMany(buku::class);
    }
}
