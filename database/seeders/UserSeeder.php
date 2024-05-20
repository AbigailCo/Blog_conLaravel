<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //creo los usuarios que elijo yo, para que ademas de los que me cree laravel esten estos

        User::create([
            'full_name'=> 'Matias Infante',
            'email'=> 'matias@gmail.com',
            'password'=> Hash::make('12345678'),
        ]);

        User::create([
            'full_name'=> 'Maria del Barrio',
            'email'=> 'ladel@gmail.com',
            'password'=> Hash::make('12345678'),
        ]);
       
        User::factory(5)->create();
    }
}
