<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Ahmad',
            'last_name' => 'Alavi',
            'father_first_name' => 'ali',
            'email' => 'Ahmad@mail.com',
        ]);

        User::create([
            'first_name' => 'Hamed',
            'last_name' => 'Heydari',
            'father_first_name' => 'Hamid',
            'email' => 'Hamed@mail.com',
            'mobile' => '09141112233'
        ]);
    }
}
