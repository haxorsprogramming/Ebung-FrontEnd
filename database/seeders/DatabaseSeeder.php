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
        // user 
        DB::table('tbl_user') -> insert([
            'username' => 'admin',
            'tipe' => 'super-admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'active' => '1'
        ]);
        DB::table('tbl_user') -> insert([
            'username' => 'ebunga-seller',
            'tipe' => 'seller',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'active' => '1'
        ]);
        DB::table('tbl_user') -> insert([
            'username' => 'ebunga-buyer',
            'tipe' => 'buyer',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'active' => '1'
        ]);
        // seller 
        DB::table('tbl_seller') -> insert([
            'username' => 'ebunga-seller',
            'full_name' => 'Ebunga Sukses Makmur Seller',
            'email' => 'admin@ebunga.co.id',
            'phone' => '082272177022',
            'country' => 'id',
            'provinsi' => '12',
            'kabupaten' => '1207',
            'kecamatan' => '120726',
            'kelurahan' => '1207262006',
            'alamat' => 'Medan tembung, jln. padang no. 12',
            'postal_code' => '-',
            'ktp' => '-',
            'npwp' => '-',
            'siup' => '-',
            'status' => '-',
            'suspend' => 'n'
        ]);
        // produk
        DB::table('tbl_produk') -> insert([
            'kd_produk' => 'EBUNGA891233',
            'nama_produk' => 'Buket bunga & snack sedang',
            'deks_produk' => '-',
            'kategori' => 'BUNGA',
            'sub_kategori' => 'BOUQET',
            'harga' => '200000',
            'stok' => '10',
            'foto_utama' => 'EBUNGA891233.jpg',
            'active' => 'y'
        ]);
        DB::table('tbl_produk') -> insert([
            'kd_produk' => 'EBUNGA891290',
            'nama_produk' => 'Papan bunga biasa',
            'deks_produk' => '-',
            'kategori' => 'PAPANBUNGA',
            'sub_kategori' => 'PAPANBUNGAKONVENSIONAL',
            'harga' => '150000',
            'stok' => '10',
            'foto_utama' => 'EBUNGA891290.jpg',
            'active' => 'y'
        ]);
        DB::table('tbl_produk') -> insert([
            'kd_produk' => 'EBUNGA78900',
            'nama_produk' => 'Papan bunga biasa',
            'deks_produk' => '-',
            'kategori' => 'PAPANBUNGA',
            'sub_kategori' => 'PAPANBUNGAKONVENSIONAL',
            'harga' => '150000',
            'stok' => '10',
            'foto_utama' => 'EBUNGA78900.jpg',
            'active' => 'y'
        ]);
        // branch
        DB::table('tbl_branch_seller') -> insert([
            'kd_branch' => 'BRANCH0001',
            'nama_branch' => 'PT NADHA BUNGA SERASI',
            'id_seller' => 'ebunga-seller',
            'alamat' => 'Medan perjuangan',
            'phone' => '082272177022',
            'email' => 'ebungaseller@yahoo.com',
            'active' => '1',
            'status_branch' => 'active'
        ]);
        // coverage area 
        DB::table('tbl_coverage_area') -> insert([
            'kd_coverage' => 'aqwl1239012jmn',
            'kd_branch' => 'BRANCH0001',
            'kd_area' => '1101012016'
        ]);
        // country support 
        DB::table('tbl_country_support') -> insert([
            'kd_country' => 'id',
            'name_country' => 'Indonesia',
            'status' => 'available',
            'active' => '1'
        ]);
        DB::table('tbl_country_support') -> insert([
            'kd_country' => 'my',
            'name_country' => 'Malaysia',
            'status' => 'available',
            'active' => '1'
        ]);
    }
}
