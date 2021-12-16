<?php

use Illuminate\Database\Seeder;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'alexander@hotmail.com',
                'password' => \Hash::make('123456'),
                'rol' => 'Administrador',
                'name' => 'Alexander',
                'fotografia' => '',
            ],
            [
                'email' => 'vicky@hotmail.com',
                'password' => \Hash::make('123456'),
                'rol' => 'Vendedor',
                'name' => 'Victoria',
                'fotografia' => '',
            ],
        ]);
    }
}
