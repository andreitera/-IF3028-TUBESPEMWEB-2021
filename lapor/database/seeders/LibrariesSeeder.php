<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
            'created_at'=> Carbon::now()->format("Y-m-d")
        ]);

        DB::table('set_libraries')->insert([
            'id' => "1002",
            'category_id' => "10",
            'name' => "User",
            'created_at'=> Carbon::now()->format("Y-m-d")
        ]);

        DB::table('set_libraries')->insert([
            'id' => "1101",
            'category_id' => "11",
            'name' => "Laki-Laki",
            'created_at'=> Carbon::now()->format("Y-m-d")
        ]);

        DB::table('set_libraries')->insert([
            'id' => "1102",
            'category_id' => "11",
            'name' => "Perempuan",
            'created_at'=> Carbon::now()->format("Y-m-d")
        ]);

        DB::table('set_libraries')->insert([
            'id' => "1201",
            'category_id' => "12",
            'name' => "Laporan Masuk",
            'created_at'=> Carbon::now()->format("Y-m-d")
        ]);

        DB::table('set_libraries')->insert([
            'id' => "1202",
            'category_id' => "12",
            'name' => "Laporan Terverifikasi",
            'created_at'=> Carbon::now()->format("Y-m-d")
        ]);

        DB::table('set_libraries')->insert([
            'id' => "1203",
            'category_id' => "12",
            'name' => "Laporan Selesai",
            'created_at'=> Carbon::now()->format("Y-m-d")
        ]);

        DB::table('set_libraries')->insert([
            'id' => "1301",
            'category_id' => "13",
            'name' => "Pengaduan",
            'created_at'=> Carbon::now()->format("Y-m-d")
        ]);

        DB::table('set_libraries')->insert([
            'id' => "1302",
            'category_id' => "13",
            'name' => "Aspirian",
            'created_at'=> Carbon::now()->format("Y-m-d")
        ]);

        DB::table('set_libraries')->insert([
            'id' => "1303",
            'category_id' => "13",
            'name' => "Permintaan Informasi",
            'created_at'=> Carbon::now()->format("Y-m-d")
        ]);
    }
}
