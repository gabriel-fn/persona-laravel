<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'methir',
            'email' => 'methir.game@gmail.com',
        ]);

        factory(User::class)->create([
            'name' => 'destrus',
            'email' => 'destrus_2011@hotmail.com',
        ]);
    }
}
