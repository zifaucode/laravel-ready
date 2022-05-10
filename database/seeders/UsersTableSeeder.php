<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->level = 1;
        $user->name = "Admin Web";
        $user->username = "admin";
        $user->email = "admin@mail.com";
        $user->password = bcrypt('12345678');
        $user->save();
    }
}
