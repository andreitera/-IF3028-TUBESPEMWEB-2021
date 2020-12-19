<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('set_categories')->insert([
            'id' => "10",
            'name' => "Role User",
            'created_at'=> Carbon::now()->format("Y-m-d")
        ]);

        DB::table('set_categories')->insert([
            'id' => "11",
            'name' => "Gender",
            'created_at'=> Carbon::now()->format("Y-m-d")
        ]);

        DB::table('set_categories')->insert([
            'id' => "12",
            'name' => "Lapor Status",
            'created_at'=> Carbon::now()->format("Y-m-d")
        ]);

        DB::table('set_categories')->insert([
            'id' => "13",
            'name' => "Kategori Laporan",
            'created_at'=> Carbon::now()->format("Y-m-d")
        ]);
    }
}
