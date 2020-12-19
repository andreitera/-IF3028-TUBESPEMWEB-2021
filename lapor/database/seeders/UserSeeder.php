<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Administrator",
            'role_id' => "1001",
            'email' => "admin@admin.com",
            'username' => "admin",
            'no_tlp' => "08123456789",
            'password' => Hash::make('admin123'),
        ]);

        DB::table('users')->insert([
            'name' => "User",
            'role_id' => "1002",
            'email' => "user@user.com",
            'username' => "user",
            'no_tlp' => "08123456789",
            'password' => Hash::make('user123'),
        ]);
    }
}
