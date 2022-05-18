<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 250 ; $i++) {
            $title = $faker->words(rand(2, 5), true);

            $postData = [
                'title'     => $title,
                'content'   => $faker->text(rand(200, 1000)),
                'slug'      => Post::generateSlug($title)
            ];

            Post::create($postData);
        }
    }
}
