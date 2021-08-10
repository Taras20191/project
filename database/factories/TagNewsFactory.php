<?php

namespace Database\Factories;

use App\Models\TagNews;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TagNewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TagNews::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'news' => Str::random(10),
        ];
    }
}
