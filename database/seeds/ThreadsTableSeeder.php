<?php

use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into threads(title, message, eigandi) values(?, ?, ?)',
        ['Title', 'message', 1]);

        DB::insert('insert into threads(title, message, eigandi) values(?, ?, ?)',
        ['Title2', 'message2', 1]);

        DB::insert('insert into threads(title, message, eigandi) values(?, ?, ?)',
        ['Title3', 'message3', 1]);

        DB::insert('insert into threads(title, message, eigandi) values(?, ?, ?)',
        ['Title4', 'message4', 1]);

        DB::insert('insert into threads(title, message, eigandi) values(?, ?, ?)',
        ['Title5', 'message5', 1]);
    }
}
