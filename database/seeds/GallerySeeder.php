<?php

use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            'titre' => 'Lion',
            'photo' => 'lion.jpg',
        ]);
        DB::table('galleries')->insert([
            'titre' => 'Wolf',
            'photo' => 'wolf.jpeg',
        ]);
        DB::table('galleries')->insert([
            'titre' => 'Husky',
            'photo' => 'husky.jpg',
        ]);
        DB::table('galleries')->insert([
            'titre' => 'Cat',
            'photo' => 'cat.jpeg',
        ]);
    }
}
