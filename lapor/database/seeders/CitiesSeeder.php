<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(dirname(__FILE__) . "/set_cities.csv", "r");
        while (($data = fgetcsv($file, 200, ';')) !== false) {
            // print_r($data);
            DB::table('set_cities')->insert(
                array(
                    'id' => $data[0],
                    'province_id' => $data[1],
                    'name' => $data[2],
                )
            );
        }
    }
}
