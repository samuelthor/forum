<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Samúel Þór Traustason',
          'email' => 'vistaediting@gmail.com',
          'password' => bcrypt('password'),
      ]);


      DB::table('threads')->insert([
        ['title' => 'title a',   'message' => 'Message a',   'eigandi' => 1],
        ['title' => 'title b',   'message1' => 'Message b',   'eigandi' => 1],
        ['title' => 'title c',   'message2' => 'Message c',   'eigandi' => 1],
        ['title' => 'title d',   'message3' => 'Message d',   'eigandi' => 1],
        ['title' => 'title e',   'message4' => 'Message e',   'eigandi' => 1]
      ]);

      DB::table('leikstjori')->insert([
        ['nafn' => 'Samúel',   'thjoderni' => 'Ísland'],
        ['nafn' => 'Aleksei',   'thjoderni' => 'Russia'],
        ['nafn' => 'Gretar',   'thjoderni' => 'Ísland'],
        ['nafn' => 'Baldur',   'thjoderni' => 'Ísland']
      ]);

      DB::table('dvd')->insert([
        ['titill' => 'Ljótan',   'adalleikari' => 'Aleksei',    'utgafuar' => 2017,   'verd' => 2500,   'flokkur' => 'Drama',   'leikstjori_id' => 3],
        ['titill' => 'Bjútínan',   'adalleikari' => 'Samúel',    'utgafuar' => 2016,   'verd' => 3500,   'flokkur' => 'Spenna',   'leikstjori_id' => 1],
        ['titill' => 'Vídjóleigan',   'adalleikari' => 'Baldur',    'utgafuar' => 2020,   'verd' => 5500,   'flokkur' => 'Hasar',   'leikstjori_id' => 4],
        ['titill' => 'Veiðin',   'adalleikari' => 'Gretar',    'utgafuar' => 2014,   'verd' => 1500,   'flokkur' => 'Spenna',   'leikstjori_id' => 2]

      ]);
    }
}
