<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang'=>'mobil', 'merk'=>'akari', 'harga'=>'10000000'],
            ['nama_barang'=>'kipas angin', 'merk'=>'postic', 'harga'=>'200000'],
            ['nama_barang'=>'mesin cuci', 'merk'=>'dream water', 'harga'=>'500000'],
            ['nama_barang'=>'motor', 'merk'=>'pegasus', 'harga'=>'3000000'],
            ['nama_barang'=>'jam tangan', 'merk'=>'croads', 'harga'=>'5000000'],
            
        ];
        //masukan data ke database
        DB::table('barangs')->insert($barangs); 
    }
}
