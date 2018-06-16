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
        $this->call([
            UsersTableSeeder::class,
            PoderesTableSeeder::class,
            PericiasTableSeeder::class,
            ExtrasTableSeeder::class,
            FalhasTableSeeder::class,
            FeitosTableSeeder::class,
            PersonasTableSeeder::class,
        ]);
    }
}
