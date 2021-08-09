<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = Categories::all()->toArray();
        $categories_ids = array_column($categories, 'id');

        $category_key = array_rand($categories_ids);

        return [
            'news_description' => Str::random(10),
            'news_category_id' => $categories_ids[$category_key],
        ];
    }

}
