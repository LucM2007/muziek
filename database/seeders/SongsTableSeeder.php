<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('songs')->insert([
            ['title' => 'Bohemian Rhapsody', 'singer' => 'Queen'],
            ['title' => 'psychological', 'singer' => 'Slipknot'],
            ['title' => 'Pshyco Killer', 'singer' => 'Talking Heads'],
            ['title' => 'Shadow Of The Day', 'singer' => 'Linkin Park'],
            ['title' => 'Numb', 'singer' => 'Linkin Park'],
        ]);
    }
}
