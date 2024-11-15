<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bands = [
            ['name' => 'The Beatles', 'genre' => 'Rock', 'founded' => 1960, 'active_until' => "1970"],
            ['name' => 'The Rolling Stones', 'genre' => 'Rock', 'founded' => 1962, "active_until" => "heden"],
            ['name' => 'Queen', 'genre' => 'Rock', 'founded' => 1970, "active_until" => "heden"],
            ['name' => 'Linkin Park', 'genre' => 'Rock', 'founded' => 1996, 'active_until' => "heden"],
            ['name' => 'The Who', 'genre' => 'Rock', 'founded' => 1964, 'active_until' => "heden"],
            ['name' => 'The Doors', 'genre' => 'Rock', 'founded' => 1965, "active_until" => "1973"]
        ];

        foreach ($bands as $band) {
            \DB::table('bands')->insert($band);
        }
    }
}
