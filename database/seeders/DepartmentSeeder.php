<?php

namespace Database\Seeders;
use App\Models\Department;


use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Department::create(['name' => 'Teknik Informatika', 'univ_id' => '1', 'detail' => 'Jurusan ini kebanyakan belajar ngoding, banyak cabangnya juga kaya Software Engineering, Data Science, Machine Learning, Security, dan masih banyak yang lainnya. Disini juga banyak wibu']);
        Department::create(['name' => 'Pendidikan Kedokteran', 'univ_id' => '1', 'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed nisl quam. Sed pretium imperdiet nisl, rhoncus dignissim tellus eleifend ultrices.']);
        Department::create(['name' => 'Ekonomi Islam', 'univ_id' => '1', 'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed nisl quam. Sed pretium imperdiet nisl, rhoncus dignissim tellus eleifend ultrices.']);
        Department::create(['name' => 'Farmasi', 'univ_id' => '1', 'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed nisl quam. Sed pretium imperdiet nisl, rhoncus dignissim tellus eleifend ultrices.']);
        Department::create(['name' => 'Sastra Mesin', 'univ_id' => '2', 'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed nisl quam. Sed pretium imperdiet nisl, rhoncus dignissim tellus eleifend ultrices.']);
        Department::create(['name' => 'Teknik Perteknikan', 'univ_id' => '2', 'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed nisl quam. Sed pretium imperdiet nisl, rhoncus dignissim tellus eleifend ultrices.']);
        Department::create(['name' => 'Manajemen', 'univ_id' => '3', 'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed nisl quam. Sed pretium imperdiet nisl, rhoncus dignissim tellus eleifend ultrices.']);



    }
}
