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
        $this->call(PeopleSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ConfigurationSeeder::class);

    }
}
