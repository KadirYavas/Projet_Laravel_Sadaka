<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ContactAboutSeeder::class);
        $this->call(TweetSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(UserSeeder::class);
    }
}
