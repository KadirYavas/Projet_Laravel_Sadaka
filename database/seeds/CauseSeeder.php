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
            'prix' => 10,
            'image' => 'water.jpg',
        ]);
        DB::table('causes')->insert([
            'titre' => 'Pizza',
            'texte' => 'PizzaPizzaPizzaPizzaPizzaPizzaPizza',
            'prix' => 6,
            'image' => 'pizza.jpg',
        ]);
        DB::table('causes')->insert([
            'titre' => 'RedBull',
            'texte' => 'RedBullRedBullRedBullRedBull',
            'prix' => 2,
            'image' => 'redbull.jpg',
        ]);
        DB::table('causes')->insert([
            'titre' => 'Sushi',
            'texte' => 'SushiSushiSushi',
            'prix' => 30,
            'image' => 'sushi.jpg',
        ]);
    }
}
