<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\map;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Kategori produk
        DB::table('tbl_kategori_produk') -> insert([
            'kd_kategori' => 'BUNGA',
            'nama_kategori' => 'Bunga',
            'deksripsi' => 'Kategori bunga',
            'active' => '1'
        ]);
        DB::table('tbl_kategori_produk') -> insert([
            'kd_kategori' => 'PAPANBUNGA',
            'nama_kategori' => 'Papan Bunga',
            'deksripsi' => 'Kategori papan bunga',
            'active' => '1'
        ]);
        DB::table('tbl_kategori_produk') -> insert([
            'kd_kategori' => 'PARCEL',
            'nama_kategori' => 'Parcel',
            'deksripsi' => 'Kategori parcel',
            'active' => '1'
        ]);
        DB::table('tbl_kategori_produk') -> insert([
            'kd_kategori' => 'CAKE',
            'nama_kategori' => 'Cake',
            'deksripsi' => 'Kategori cake',
            'active' => '1'
        ]);
        // Sub kategori 
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'BUNGASEGAR',
            'nama_kategori' => 'Bunga Segar',
            'kd_kategori' => 'BUNGA',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'BUNGAPLASTIK',
            'nama_kategori' => 'Bunga Plastik',
            'kd_kategori' => 'BUNGA',
            'active' => '1'
        ]);
        DB::table('tbl_sub_kategori') -> insert([
            'kd_sub_kategori' => 'BOUQET',
            'nama_kategori' => 'Bunga BOUQUET',
            'kd_kategori' => 'BUNGA',
            'active' => '1'
        ]);
        
    }
}
