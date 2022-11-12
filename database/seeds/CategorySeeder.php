<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'category'=>'Noodles',
                'description'=>'Just a random text description for noodles.'
            ],
            [
                'category'=>'Shampoo',
                'description'=>'Just a random text description for shampoo.'
            ],
            [
                'category'=>'Soap',
                'description'=>'Just a random text description for soap.'
            ],
            [
                'category'=>'Canned Goods',
                'description'=>'Just a random text description for canned goods.'
            ],
            [
                'category'=>'sugar',
                'description'=>'Just a random text description for sugar.'
            ],
        ];

        foreach($data as $categories) {
            \App\Category::create($categories);
        }
    }
}
