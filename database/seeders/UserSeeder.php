<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'=> 'Admin Kokeru',
            'email' => 'admin@kokeru.com',
            'password' => bcrypt('admin12345')
        ]);

        $admin->assignRole('admin');

        $cleaner = User::create([
            'name'=> 'Mr.Cleaner',
            'email' => 'cleaner@kokeru.com',
            'password' => bcrypt('cleaner12345')
        ]);

        $cleaner->assignRole('cleaner');
    }
}
