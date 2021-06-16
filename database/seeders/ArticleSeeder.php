<?php

namespace Database\Seeders;
use App\Models\Article;

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Article::create(['user_id' => '2', 'name' => 'PTN atau PTS?', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam convallis eros sed dui gravida cursus. Sed blandit justo arcu, quis mollis enim vulputate quis. Proin porttitor tristique mauris vitae bibendum.']);
        Article::create(['user_id' => '2', 'name' => 'Kehidupan di Kampus', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam convallis eros sed dui gravida cursus. Sed blandit justo arcu, quis mollis enim vulputate quis. Proin porttitor tristique mauris vitae bibendum. ']);
        Article::create(['user_id' => '2', 'name' => 'Lorem Ipsum Dolor', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam convallis eros sed dui gravida cursus. Sed blandit justo arcu, quis mollis enim vulputate quis. Proin porttitor tristique mauris vitae bibendum. ']);
        Article::create(['user_id' => '3', 'name' => 'Lorem Ipsum Dolor', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam convallis eros sed dui gravida cursus. Sed blandit justo arcu, quis mollis enim vulputate quis. Proin porttitor tristique mauris vitae bibendum. ']);
        Article::create(['user_id' => '3', 'name' => 'Lorem Ipsum Dolor', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam convallis eros sed dui gravida cursus. Sed blandit justo arcu, quis mollis enim vulputate quis. Proin porttitor tristique mauris vitae bibendum. ']);


    }
}
