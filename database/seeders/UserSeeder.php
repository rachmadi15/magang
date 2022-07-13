<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
            'email' => 'rachmadi@gmail.com',
            'username' => 'rachmadi23421',
            'password' => Hash::make('12325'),
            'id_group' => 1,
        ]);
    }
}
