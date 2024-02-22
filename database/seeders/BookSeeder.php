<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title'=> 'Laut Bercerita', 
                'isbn'=>  '9786024246945',
                'publisher'=> 'Kepustakaan Populer Gramedia',
                'published'=> '2017',
                'author'=> 'Leila S. Chudori',
                'availability'=> '6',
                'language'=> 'Bahasa Indonesia',
                'cover'=> null,
                'description'=> null 
            ],
            [
                'title'=> 'The Family Hightower', 
                'isbn'=>  '9781609805647',
                'publisher'=> 'Seven Stories Press',
                'published'=> '2014',
                'author'=> 'Brian Francis Slattery',
                'availability'=> '8',
                'language'=> 'English',
                'cover'=> null,
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat' 
            ],
            [
                'title'=> 'Domina', 
                'isbn'=>  '9780399184338',
                'publisher'=> 'Penguin Publishing Group',
                'published'=> '2017',
                'author'=> 'L.S. Hilton',
                'availability'=> '3',
                'language'=> 'English',
                'cover'=> null,
                'description'=> null 
            ],
        ]);
    }
}
