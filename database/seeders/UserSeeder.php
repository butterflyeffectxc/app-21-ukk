<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => "Munaa Raudhatul",
                'email' => 'munaa@gmail.com',
                'password' => Hash::make('password'),
                'nik' => "6789876545678765",
                'phone' => "089682780336",
                'role' => '1',
                'address' => "Jl. Perum Binong Permai"
            ],
            [
                'name' => "Hasna Chorunnisa",
                'email' => 'hasna@gmail.com',
                'password' => Hash::make('password'),
                'nik' => "6789876545158765",
                'phone' => "089682781336",
                'role' => '2',
                'address' => "Grand Duta"
            ],
            [
                'name' => "Shafira Maudyna",
                'email' => 'shafira@gmail.com',
                'password' => Hash::make('password'),
                'nik' => "6789876543078765",
                'phone' => "089682680336",
                'role' => '3',
                'address' => "Jl. Cipondoh Makmur"
            ],
        ]);
    }
}
