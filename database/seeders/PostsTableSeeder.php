<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Pasta with tomato sauce',
                'recipe' => '1. Boil water
                2. Add pasta
                3. Cook for 20 minutes
                4. Add sauce',
                'image' => ''
            ],
            [
                'title' => 'Pizza',
                'recipe' => '1. Preheat oven to 500 degrees
                2. Roll out dough
                3. Add sauce
                4. Add cheese
                5. Add toppings
                6. Bake for 10 minutes',
                'image' => ''
            ],
            [
                'title' => 'Spaghetti',
                'recipe' => '
                1. Boil water
                2. Add pasta
                3. Cook for 20 minutes
                4. Add sauce
                5. Add meatballs
                6. Serve with garlic bread
                7. Enjoy!',
                'image' => ''
            ],
            [
                'title' => 'Hamburger',
                'recipe' => '1. Cook meat
                2. Add cheese
                3. Add toppings
                4. Serve on bun',
                'image' => ''
            ],
            [
                'title' => 'Chicken Nuggets',
                'recipe' => '1. Preheat oven to 400 degrees
                2. Mix bread crumbs, parmesan cheese, and spices
                3. Dip chicken in egg
                4. Roll in bread crumb mixture
                5. Place on baking sheet
                6. Bake for 20 minutes',
                'image' => ''
            ]
        ];

        foreach ($posts as $post) {
            \App\Models\Post::create($post);
        }
    }
}
