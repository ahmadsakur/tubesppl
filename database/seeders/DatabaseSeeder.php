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
        $this->call(RoleSeeder::Class);
        $this->call(UserSeeder::Class);
        $this->call(RuangSeeder::Class);
    }
}
