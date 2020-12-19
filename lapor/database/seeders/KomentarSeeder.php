<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('komentar')->insert([
            'user_id' => "1",
            'lapor_id' => "1",
            'komentar' => "Betul Sekali",
        ]);
    }
}
