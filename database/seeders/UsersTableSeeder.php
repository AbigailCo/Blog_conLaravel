<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('public/storage/user');
        User::create([
            'name' => 'John Doe',
            'username'=> 'JohnDoe123',
            'email' => 'john.doe@example.com',
            'password' => Hash::make('1234qwer'),
            'profile_photo' => '/user/public/storage/user/2a4e7e68d4a06478487eed039aacbf89'
        ]);

    }
}
