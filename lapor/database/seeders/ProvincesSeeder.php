<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(dirname(__FILE__) . "/set_provinces.csv", "r");
        while (($data = fgetcsv($file, 200, ';')) !== false) {
            // print_r($data);
            DB::table('set_provinces')->insert(
                array(
                    'id' => $data[0],
                    'name' => $data[1],
                )
            );
        }
    }
}
