<?php

use Illuminate\Database\Seeder;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tweets')->insert([
            'texte' => '20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://www.webaslan.com/',
        ]);
        DB::table('tweets')->insert([
            'texte' => '40 Not-Surprise Potato, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://www.google.com/',
        ]);
        DB::table('tweets')->insert([
            'texte' => '10 Milk, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://www.livescore.com/',
        ]);
        DB::table('tweets')->insert([
            'texte' => 'Fish Fish Fish, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://www.hotmail.com/',
        ]);
        DB::table('tweets')->insert([
            'texte' => 'SUSHIIIIIIIIIIIIIII, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://www.booska-p.com/',
        ]);
        DB::table('tweets')->insert([
            'texte' => '199 KA ME HA ME HAAAAAAAAA, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar  http://www.youtube.com/',
        ]);
    }
}
