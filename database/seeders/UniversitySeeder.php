<?php

namespace Database\Seeders;
use App\Models\University;

use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        University::create(['name' => 'Universitas Brawijaya', 'detail' => 'Salah satu Perguruan Tinggi Negeri terbaik di Indonesia, berlokasi di Malang, memiliki mahasiswa terbanyak se-Indonesia.']);
        University::create(['name' => 'Institut Teknologi Bandung', 'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed nisl quam. Sed pretium imperdiet nisl, rhoncus dignissim tellus eleifend ultrices. ']);
        University::create(['name' => 'Universitas Indonesia', 'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed nisl quam. Sed pretium imperdiet nisl, rhoncus dignissim tellus eleifend ultrices. ']);
        University::create(['name' => 'Universitas Diponegoro', 'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed nisl quam. Sed pretium imperdiet nisl, rhoncus dignissim tellus eleifend ultrices. ']);
        University::create(['name' => 'Telkom University', 'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed nisl quam. Sed pretium imperdiet nisl, rhoncus dignissim tellus eleifend ultrices. ']);
        University::create(['name' => 'Bina Nusantara University', 'detail' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed nisl quam. Sed pretium imperdiet nisl, rhoncus dignissim tellus eleifend ultrices. ']);

        
    }
}
