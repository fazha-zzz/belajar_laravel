<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'genre'];
    public $timestamp = true;

    //relasi ke table telpon
    public function buku()
    {
        return $this->hasMany(buku::class);
    }
}
