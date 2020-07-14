<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            'bluzki',
            'spodnie',
            'buty',
            'czapki',
            'skarpetki'
        ];

        foreach($categories as $category) {

            factory(App\Category::class)->create([

                'name' => $category,

            ]);

        }

        
    }
}
