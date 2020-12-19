<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        ]);

        DB::table('set_categories')->insert([
            'id' => "11",
            'name' => "Gender",
        ]);

        DB::table('set_categories')->insert([
            'id' => "12",
            'name' => "Lapor Status",
        ]);

        DB::table('set_categories')->insert([
            'id' => "13",
            'name' => "Kategori Laporan",
        ]);
    }
}
