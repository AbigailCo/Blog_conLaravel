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
            'name' => 'Abigail',
            'username'=>'abigailCo',
            'email' => 'john.doe@example.com',
            'password' => Hash::make('1234qwer'),
            'image' => '/user/public/storage/user/2a4e7e68d4a06478487eed039aacbf89'
        ]);

    }
}
