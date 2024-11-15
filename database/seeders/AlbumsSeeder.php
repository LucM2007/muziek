<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $albums = [
            
        ];

        foreach ($albums as $album) {
            \DB::table('bands')->insert($albums);
            $albums = [
                ['name' => 'Hybrid Theory', 'band' => 'Linkin Park', 'release_year' => 2000],
                ['name' => 'Meteora', 'band' => 'Linkin Park', 'release_year' => 2003],
                ['name' => 'Minutes to Midnight', 'band' => 'Linkin Park', 'release_year' => 2007],
                ['name' => 'A Thousand Suns', 'band' => 'Linkin Park', 'release_year' => 2010],
                ['name' => 'Living Things', 'band' => 'Linkin Park', 'release_year' => 2012],
            ];

            foreach ($albums as $album) {
                \DB::table('albums')->insert($album);
            }
        }
    }
}
