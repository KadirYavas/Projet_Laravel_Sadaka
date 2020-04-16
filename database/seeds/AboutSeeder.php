<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'texte' => 'Visus: quod quae qui est incitans ut ad orsi vocibus expediendum usque crebris urbis haec postea incitans eosque quidam orsi autem urbis vocibus conatibus conatibus quae longe autem vocibus orsi. Visus: quod quae qui est incitans ut ad orsi vocibus expediendum usque crebris urbis haec postea incitans eosque quidam orsi autem urbis vocibus conatibus conatibus quae longe autem vocibus orsi. Visus: quod quae qui est incitans ut ad orsi vocibus expediendum usque crebris urbis haec postea incitans eosque quidam orsi autem urbis vocibus conatibus conatibus quae longe autem vocibus orsi. Visus: quod quae qui est incitans ut ad orsi vocibus expediendum usque crebris urbis haec postea incitans eosque quidam orsi autem urbis vocibus conatibus conatibus quae longe autem vocibus orsi. Visus: quod quae qui est incitans ut ad orsi vocibus expediendum usque crebris urbis haec postea incitans eosque quidam orsi autem urbis vocibus conatibus conatibus quae longe autem vocibus orsi.',
        ]);
    }
}
