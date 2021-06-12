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

    }
}
