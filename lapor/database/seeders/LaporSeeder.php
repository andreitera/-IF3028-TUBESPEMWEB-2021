<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LaporSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lapor')->insert([
            'title' => "Sampah",
            'laporan' => "Sampah banyak banget disini",
            'tgl_kejadian' => "2020-12-19",
            'anonim' => "0",
            'rahasia' => "0",
            'user_id' => "1",
            'category_id' => "1301",
            'laporan_type_id' => "1301",
            'location_id' => "1102",
            'instansi_tujuan_id' => "65",
            'status_id' => "1201",
            'created_at'=> Carbon::now()->format("Y-m-d")
        ]);

        DB::table('lapor')->insert([
            'title' => "Tidak Pakai Masker",
            'laporan' => "Banyak orang yang masih melanggar protokol covid-19",
            'tgl_kejadian' => "2020-12-19",
            'anonim' => "0",
            'rahasia' => "0",
            'user_id' => "1",
            'category_id' => "1301",
            'laporan_type_id' => "1302",
            'location_id' => "1102",
            'instansi_tujuan_id' => "65",
            'status_id' => "1201",
            'created_at'=> Carbon::now()->format("Y-m-d")
        ]);
    }
}
