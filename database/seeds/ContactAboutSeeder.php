<?php

use Illuminate\Database\Seeder;

class ContactAboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'texte' => 'SADAKA quod quae qui est incitans ut ad orsi vocibus expediendum usque crebris urbis haec postea incitans eosque quidam orsi autem urbis vocibus conatibus conatibus quae longe autem vocibus orsi. Visus: quod quae qui est incitans ut ad orsi vocibus expediendum usque crebris urbis haec postea incitans eosque quidam orsi autem urbis vocibus conatibus conatibus quae longe autem vocibus orsi. Visus: quod quae qui est incitans ut ad orsi vocibus expediendum usque crebris urbis haec postea incitans eosque quidam orsi autem urbis vocibus conatibus conatibus quae longe autem vocibus orsi.',
        ]);
    }
}
