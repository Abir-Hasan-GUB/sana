<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user           = new User();
        $user->name     = "Mr. Admin";
        $user->email    = "admin@gmail.com";
        $user->password = bcrypt('12345678');
        $user->save();
    }
}
