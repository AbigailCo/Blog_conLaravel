<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'username'=> 'JohnDoe123',
            'email' => 'john.doe@example.com',
            'password' => Hash::make('MiContraseña123'),
        ]);
    }
}
