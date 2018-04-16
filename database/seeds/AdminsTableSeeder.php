<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'nim' => '1202154186',
            'name' => 'Vian',
            'email' => 'vian@vanard.com',
            'password' => Hash::make(123098),
            'level' => 'admin',
        ]);

        \App\User::create([
            'nim' => '1202154354',
            'name' => 'Marissa',
            'email' => 'ica@vanard.com',
            'password' => Hash::make(123098),
            'level' => 'user',
        ]);

        \App\User::create([
            'nim' => '1202150282',
            'name' => 'Khalida',
            'email' => 'ida@vanard.com',
            'password' => Hash::make(123098),
            'level' => 'user',
        ]);
    }
}
