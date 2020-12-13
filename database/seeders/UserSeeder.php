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
        
        // Seeder Cleaner
        $c0 = User::create([
            'name'=> 'Ahmad Sakur',
            'email' => 'ahmadsakur@kokeru.com',
            'password' => bcrypt('cleaner12345')
        ]);
        $c1 = User::create([
            'name'=> 'Abe Randa Putra',
            'email' => 'aberanda@kokeru.com',
            'password' => bcrypt('cleaner12345')
        ]);
        $c2 = User::create([
            'name'=> 'Hilmi Yogantama',
            'email' => 'hilmiyoga@kokeru.com',
            'password' => bcrypt('cleaner12345')
        ]);
        $c3 = User::create([
            'name'=> 'Putrisya Novatiara Sonia',
            'email' => 'putrisya@kokeru.com',
            'password' => bcrypt('cleaner12345')
        ]);
        $c4 = User::create([
            'name'=> 'Akbar Falih',
            'email' => 'akbarfalih@kokeru.com',
            'password' => bcrypt('cleaner12345')
        ]);
        $c5 = User::create([
            'name'=> 'Dimas Andhika',
            'email' => 'dimasandhika@kokeru.com',
            'password' => bcrypt('cleaner12345')
        ]);
        $c6 = User::create([
            'name'=> 'Akhmad Fadlil Khakim',
            'email' => 'akhmadfadlil@kokeru.com',
            'password' => bcrypt('cleaner12345')
        ]);
        $c7 = User::create([
            'name'=> 'Erwin Fariskayana Rizki',
            'email' => 'erwinfaris@kokeru.com',
            'password' => bcrypt('cleaner12345')
        ]);
        $c8 = User::create([
            'name'=> 'Rizki Cahya Pradana',
            'email' => 'rizkicp@kokeru.com',
            'password' => bcrypt('cleaner12345')
        ]);
        $c9 = User::create([
            'name'=> 'Muhammad Syafiq Alatas',
            'email' => 'syafiqalatas@kokeru.com',
            'password' => bcrypt('cleaner12345')
        ]);

        $c0->assignRole('cleaner');
        $c1->assignRole('cleaner');
        $c2->assignRole('cleaner');
        $c3->assignRole('cleaner');
        $c4->assignRole('cleaner');
        $c5->assignRole('cleaner');
        $c6->assignRole('cleaner');
        $c7->assignRole('cleaner');
        $c8->assignRole('cleaner');
        $c9->assignRole('cleaner');

    }
}
