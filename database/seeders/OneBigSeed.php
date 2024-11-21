<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;
use App\Models\Albums;
use App\Models\Band;
use Illuminate\Support\Facades\DB;

class OneBigSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $linkin_park = Band::create([
            'name' => 'Linkin Park',
            'genre' => 'Rock',
            'founded' => 1996,
            'active_until' => 'heden',
        ]);
        $minutes_to_midnight = Albums::create([
            'name' => 'Minutes to Midnight',
            'year' => 2007,
            'times_sold' => 1000000,
            'band_id' => $linkin_park->id,
        ]);
        $hybrid_theory = Albums::create([
            'name' => 'Hybrid Theory',
            'year' => 2000,
            'times_sold' => 10000000,
            'band_id' => $linkin_park->id,
        ]);
        $meteora = Albums::create([
            'name' => 'Meteora',
            'year' => 2003,
            'times_sold' => 8000000,
            'band_id' => $linkin_park->id,
        ]);
        $one_more_light = Albums::create([
            'name' => 'One More Light',
            'year' => 2017,
            'times_sold' => 5000000,
            'band_id' => $linkin_park->id,

        ]);

        $in_the_end = Song::create([
            'title' => 'In the End',
            'singer' => 'linkin park',
        ]);
        $crawling = Song::create([
            'title' => 'Crawling',
            'singer' => 'linkin park',
        ]);
        $numb = Song::create([
            'title' => 'Numb',
            'singer' => 'linkin park',
        ]);
$hybrid_theory->songs()->attach($in_the_end);
$hybrid_theory->songs()->attach($crawling);
$meteora->songs()->attach($numb);
    }
}

