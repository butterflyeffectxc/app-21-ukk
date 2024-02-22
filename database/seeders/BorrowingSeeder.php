<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BorrowingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('borrowings')->insert([
            [
                'user_id' => "3",
                'book_id' => "1",
                'start_date' => "2024-09-03",
                'end_date' => "2024-09-03",
                'quantity' => "2",
                'status' => "1",
            ],
            [
                'user_id' => "3",
                'book_id' => "3",
                'start_date' => "2024-09-03",
                'end_date' => "2024-09-03",
                'quantity' => "1",
                'status' => "1",
            ],
        ]);
    }
}
