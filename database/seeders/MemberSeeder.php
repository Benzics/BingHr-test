<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'id' => '1',
            'first_name' => 'David',
            'user_name' => 'David',
            'last_name' => 'Wagner',
            'email' => 'david_wagner@example.com',
            'password' => Hash::make('1234'),
            'role' => '3',
            'phone' => '1234567890',
        ]);
        DB::table('members')->insert([
            'id' => '2',
            'first_name' => 'Ina',
            'user_name' => 'Ina',
            'last_name' => 'Hogan',
            'email' => 'ina_hogan@example.com',
            'password' => Hash::make('1234'),
            'role' => '1',
            'phone' => '1234567890',
        ]);
        DB::table('members')->insert([
            'id' => '3',
            'first_name' => 'Devin',
            'user_name' => 'Devin',
            'last_name' => 'Harmon',
            'email' => 'devin_harmon@example.com',
            'password' => Hash::make('1234'),
            'role' => '2',
            'phone' => '1234567890',
        ]);
        DB::table('members')->insert([
            'id' => '4',
            'first_name' => 'Lena',
            'user_name' => 'Lena',
            'last_name' => 'Page',
            'email' => 'lena_page@example.com',
            'password' => Hash::make('1234'),
            'role' => '0',
            'phone' => '1234567890',
        ]);
        DB::table('members')->insert([
            'id' => '5',
            'first_name' => 'Eula',
            'user_name' => 'Eula',
            'last_name' => 'Horton',
            'email' => 'eula_horton@example.com',
            'password' => Hash::make('1234'),
            'role' => '3',
            'phone' => '1234567890',
        ]);
        DB::table('members')->insert([
            'id' => '6',
            'first_name' => 'Victoria',
            'user_name' => 'Victoria',
            'last_name' => 'Perez',
            'email' => 'victoria_perez@example.com',
            'password' => Hash::make('1234'),
            'role' => '2',
            'phone' => '1234567890',
        ]);
        DB::table('members')->insert([
            'id' => '7',
            'first_name' => 'Cora',
            'user_name' => 'Cora',
            'last_name' => 'Medina',
            'email' => 'cora_medina@example.com',
            'password' => Hash::make('1234'),
            'role' => '0',
            'phone' => '1234567890',
        ]);
    }
}
