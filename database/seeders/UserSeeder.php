<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create(['name' => 'Admin', 'password' => bcrypt('admin'), 'email' => 'admin@admin.com', 'role_id' => '1']);
        User::create(['name' => 'John Doe', 'password' => bcrypt('user'), 'email' => 'user@user.com', 'role_id' => '2']);
        User::create(['name' => 'Srifulan bin Fulan', 'password' => bcrypt('user1'), 'email' => 'user1@user.com', 'role_id' => '2']);


    }
}
