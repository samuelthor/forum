<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into users (name, email, password) values (?, ?, ?)',
        ['Samúel Þór Traustason', 'vistaediting@gmail.com', 'password']);
    }
}
