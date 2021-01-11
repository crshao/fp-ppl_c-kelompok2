<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class PengeluaranSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengeluarans')->insert([
            'Tanggal' => Carbon::now()->format('Y-m-d'),
            'Nama Barang' => 'Semen',
            'Nama Toko' => 'Toko Rahayu',
            'Deskripsi' => 'Untuk pembangunan',
            'Kategori' => 'Material',
            'Jumlah' => 120000,
        ]);

        DB::table('pengeluarans')->insert([
            'Tanggal' => Carbon::now()->format('Y-m-d'),
            'Nama Barang' => 'Semen',
            'Nama Toko' => 'Toko Belakang',
            'Deskripsi' => 'Untuk disimpan',
            'Kategori' => 'Material',
            'Jumlah' => 120000,
        ]);

        DB::table('pengeluarans')->insert([
            'Tanggal' => Carbon::now()->format('Y-m-d'),
            'Nama Barang' => 'Laptop',
            'Nama Toko' => 'Toko Rahayu',
            'Deskripsi' => 'Laptop Baru',
            'Kategori' => 'Inventaris',
            'Jumlah' => 4000000,
        ]);

        DB::table('pengeluarans')->insert([
            'Tanggal' => Carbon::now()->format('Y-m-d'),
            'Nama Barang' => 'HP',
            'Nama Toko' => 'Toko Depan',
            'Deskripsi' => 'HP Baru',
            'Kategori' => 'Inventaris',
            'Jumlah' => 3000000,
        ]);
    }
}
