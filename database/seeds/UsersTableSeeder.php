<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class,10)->create();

        factory(\App\User::class)->create([
           'email' => 'hugopessanha@gmail.com'
        ]);

        factory(\App\User::class)->create([
            'email' => 'h.pessanha@yahoo.com.br'
        ]);

    }
}
