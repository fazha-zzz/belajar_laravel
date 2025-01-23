<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama'];
    public $timestamp = true;

    //relasi ke table telpon
    public function telpon()
    {
        return $this->hasOne(telpon::class);
    }
}
