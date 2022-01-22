<?php

namespace Database\Seeders;

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

        $this->call(UserSeeder::class);
        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(10)->create();
        \App\Models\Category::factory(10)->create();

        \App\Models\Country::factory(10)->create();
        \App\Models\State::factory(100)->create();
        \App\Models\City::factory(500)->create();
    }
}
