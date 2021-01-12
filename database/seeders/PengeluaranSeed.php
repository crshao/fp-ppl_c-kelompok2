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
            'tanggal' => Carbon::now()->format('Y-m-d'),
            'nama_barang' => 'Semen',
            'nama_toko' => 'Toko Rahayu',
            'deskripsi' => 'Untuk pembangunan',
            'kategori' => 'Material',
            'jumlah' => 120000,
        ]);

        DB::table('pengeluarans')->insert([
            'tanggal' => Carbon::now()->format('Y-m-d'),
            'nama_barang' => 'Semen',
            'nama_toko' => 'Toko Belakang',
            'deskripsi' => 'Untuk disimpan',
            'kategori' => 'Material',
            'jumlah' => 120000,
        ]);

        DB::table('pengeluarans')->insert([
            'tanggal' => Carbon::now()->format('Y-m-d'),
            'nama_barang' => 'Laptop',
            'nama_toko' => 'Toko Rahayu',
            'deskripsi' => 'Laptop Baru',
            'kategori' => 'Inventaris',
            'jumlah' => 4000000,
        ]);

        DB::table('pengeluarans')->insert([
            'tanggal' => Carbon::now()->format('Y-m-d'),
            'nama_barang' => 'HP',
            'nama_toko' => 'Toko Depan',
            'deskripsi' => 'HP Baru',
            'kategori' => 'Inventaris',
            'jumlah' => 3000000,
        ]);
    }
}
