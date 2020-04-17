<?php

use Illuminate\Database\Seeder;

class CauseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('causes')->insert([
            'titre' => 'Water',
            'texte' => 'WaterWaterWaterWaterWater',
            'prix' => 500000000,
            'image' => 'water.jpg',
        ]);
        DB::table('causes')->insert([
            'titre' => 'Pizza',
            'texte' => 'PizzaPizzaPizzaPizzaPizzaPizzaPizza',
            'prix' => 300010,
            'image' => 'pizza.jpg',
        ]);
        DB::table('causes')->insert([
            'titre' => 'RedBull',
            'texte' => 'RedBullRedBullRedBullRedBull',
            'prix' => 9957299,
            'image' => 'redbull.jpg',
        ]);
        DB::table('causes')->insert([
            'titre' => 'Sushi',
            'texte' => 'SushiSushiSushi',
            'prix' => 1331313,
            'image' => 'sushi.jpg',
        ]);
    }
}
