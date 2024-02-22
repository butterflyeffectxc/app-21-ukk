<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => "Fiction",
                'description' => 'lorem ipsum',
            ],
            [
                'name' => "Non-Fiction",
                'description' => 'lorem ipsum',
            ],
            [
                'name' => "History",
                'description' => null,
            ],
            [
                'name' => "Thriller",
                'description' => 'lorem ipsum',
            ],
            [
                'name' => "Mystery",
                'description' => null,
            ],
        ]);
    }
}
