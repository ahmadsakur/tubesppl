<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::Create([
            'name'=> 'admin',
            'guard_name' => 'web'
        ]);

        Role::Create([
            'name'=> 'cleaner',
            'guard_name' => 'web'
        ]);
    }
}
