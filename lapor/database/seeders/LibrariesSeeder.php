<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('set_libraries')->insert([
            'id' => "1001",
            'category_id' => "10",
            'name' => "Administrator",
        ]);

        DB::table('set_libraries')->insert([
            'id' => "1002",
            'category_id' => "10",
            'name' => "User",
        ]);

        DB::table('set_libraries')->insert([
            'id' => "1101",
            'category_id' => "11",
            'name' => "Laki-Laki",
        ]);

        DB::table('set_libraries')->insert([
            'id' => "1102",
            'category_id' => "11",
            'name' => "Perempuan",
        ]);

        DB::table('set_libraries')->insert([
            'id' => "1201",
            'category_id' => "12",
            'name' => "Laporan Masuk",
        ]);

        DB::table('set_libraries')->insert([
            'id' => "1202",
            'category_id' => "12",
            'name' => "Laporan Terverifikasi",
        ]);

        DB::table('set_libraries')->insert([
            'id' => "1203",
            'category_id' => "12",
            'name' => "Laporan Selesai",
        ]);

        DB::table('set_libraries')->insert([
            'id' => "1301",
            'category_id' => "13",
            'name' => "Pengaduan",
        ]);

        DB::table('set_libraries')->insert([
            'id' => "1302",
            'category_id' => "13",
            'name' => "Aspirian",
        ]);

        DB::table('set_libraries')->insert([
            'id' => "1303",
            'category_id' => "13",
            'name' => "Permintaan Informasi",
        ]);
    }
}
