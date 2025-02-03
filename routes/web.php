<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postsController;
use App\Http\Controllers\siswasController;
use App\Http\Controllers\ppdbs222Controller;
use App\Http\Controllers\ayamscontroller;
use App\Http\Controllers\penggunascontroller;
use App\Http\Controllers\TelponsController;
use App\Http\Controllers\kategorisController;
use App\Http\Controllers\produksController;
use App\Http\Controllers\customersController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\penerbitsController;
use App\Http\Controllers\pembelisController;
use App\Http\Controllers\genresController;
use App\Http\Controllers\bukusController;
use App\Http\Controllers\transaksisController;












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

Route::get('/about', function () {
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


//routing dengan model


//routing dengan model
Route::get('/post', [postsController::class, 'menampilkan']);
Route::get('/barang', [postsController::class, 'menampilkan2']);



// Route::get('/barang', function () {
//     $barang = barang::all();
//     return view('tampil_barang',compact('barang'));
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//CRUD
Route::resource('siswa', siswasController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('ppdb', ppdbs222Controller::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('ayam', ayamsController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('pengguna', penggunasController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('telpon', TelponsController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('kategori', kategorisController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('produk', produksController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('product', productsController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('customer', customersController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('order', ordersController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('penerbit', penerbitsController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('pembeli', pembelisController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('genre', genresController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('buku', bukusController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('transaksi', transaksisController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

