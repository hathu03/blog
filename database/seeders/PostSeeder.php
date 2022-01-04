<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->title = 'Một con bò';
        $post->desc = 'hay';
        $post->content = '1234567890';
        $post->save();

        $post = new Post();
        $post->title = 'Một con gà';
        $post->desc = 'hay';
        $post->content = '1234567890';
        $post->save();

        $post = new Post();
        $post->title = 'Một con lợn';
        $post->desc = 'hay';
        $post->content = '1234567890';
        $post->save();

        $post = new Post();
        $post->title = 'Một con khỉ';
        $post->desc = 'hay';
        $post->content = '1234567890';
        $post->save();

        $post = new Post();
        $post->title = 'Một con chó';
        $post->desc = 'hay';
        $post->content = '1234567890';
        $post->save();
    }
}
