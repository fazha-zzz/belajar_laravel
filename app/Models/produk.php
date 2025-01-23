<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = ['id', 'nama_produk', 'harga', 'stok', 'id_kategori'];
    public $timestamp = true;

    //relasi ke table kategori
    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori');
    }
}
