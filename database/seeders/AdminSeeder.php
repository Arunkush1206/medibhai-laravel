<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ADMIN SEEDER
        $user = User::create([
            'broker_id' => 1,
            'name' => 'Aziz Jawadwala',
            'username' => 'azizjawad',
            'first_name' => 'Aziz',
            'last_name' => 'Jawadwala',
            'email' => 'super_admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('Super Admin');

        $user = User::create([
            'broker_id' => 1,
            'name' => 'Srinivas Mahindrakar',
            'username' => 'azizjawad1',
            'first_name' => 'Srinivas',
            'last_name' => 'Mahindrakar',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('Admin');

        $user = User::create([
            'broker_id' => 1,
            'username' => 'azizjawad2',
            'name' => 'Punit Anand',
            'first_name' => 'Punit',
            'last_name' => 'Anand',
            'email' => 'broker@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('Broker');
    }
}
