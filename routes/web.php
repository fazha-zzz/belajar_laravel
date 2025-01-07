<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faza', function () {
    return view('faza');
});

Route::get('/home', function () {
    return "<h1>selamat datang di halaman HOME</h1>";
});

Route::get('/', function () {
    return "<h1>selamat datang di halaman ABOUT</h1>";
});

Route::get('/contact', function () {
    return "<h1>selamat datang di halaman CONTACT</h1>";
});

Route::get('/tes/{nama}/{tanggal}/{jenis}/{agama}/{alamat}', function ($nama,$tanggal,$jenis,$agama,$alamat) {
    return "nama : ".$nama."<br>". 
           "tanggal lahir : ".$tanggal."<br>".
            "jenis kelamin : ".$jenis."<br>".
            "agama : ".$agama."<br>".
            "alamat : ".$alamat."<br>";
});

Route::get('/hitung/{b1}/{b2}', function ($b1,$b2) {
    $hasil = $b1 + $b2;
    return "bilangan 1 : ".$b1."<br>". 
           "bilangan 2 : ".$b2."<br>".
            "hasil : ".$hasil."<br>";
});

route::get('/siswa', function(){
    $data_siswa = ['faza','napis','nabila','daffa','dea'];

    return view('tampil',compact('data_siswa'));
});

Route::get('/latihan/{a1}/{a2}/{a3}/{a4}/{a5}/{a6}', function ($nama, $tlp, $jn, $nb, $jml, $pbayar) {
   
    if ( $jn == "handphone") {
        if ($nb == "poco") {
         $harga = 3000000;
        }elseif ($nb == "samsum") {
         $harga = 5000000;
        }elseif ($nb == "iphone") {
         $harga = 15000000;
        }else {
         echo "error";
        };
 
    }elseif ( $jn == "laptop") {
        if ($nb == "lenovo") {
         $harga = 4000000;
        }elseif ($nb == "acer") {
         $harga = 8000000;
        }elseif ($nb == "macbook") {
         $harga = 20000000;
        }else {
         echo "error";
        };
 
    }elseif ( $jn == "tv") {
        if ($nb == "toshiba") {
        $harga = 5000000;
        }elseif ($nb == "samsum") {
        $harga = 8000000;
        }elseif ($nb == "lg") {
        $harga = 10000000;
        }else {
        echo "error";
        };
    };
$total = $harga * $jml;

if ($total >= 10000000) {
    $cb = 500000;
}else {
    $cb = 0;
};

if ($pbayar == "transfer") {
    $potongan = 50000;
}else {
    $potongan = 0;
};

$total_p = ($total - $cb) - $potongan;

    return 
    "nama pembeli :" .$nama. "<br>".
    "telepon :" .$tlp. "<br><br><hr>".
    "nama pembeli :" .$jn. "<br>". 
    "nama barang :" .$nb. "<br>". 
    "harga :" .$harga. "<br>".
    "jumlah :" .$jml. "<br><br><hr>".
    "total :" .$total. "<br>". 
    "casback :" .$cb. "<br>". 
    "pembayaran :" .$pbayar. "<br>".
    "potongan :" .$potongan. "<br><hr>". 
    "total pembayaran :" .$total_p. "<br>";
 });


