<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\News;
use App\Models\NewsToCategory;
use Illuminate\Database\Seeder;

class NewsToCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = News::all();
        $categories = Categories::all()->toArray();
        $categories_ids = array_column($categories, 'id');


        foreach ($news as $item) {
            $category_key = array_rand($categories_ids);

            $data[] = array(
                'news_id' => $item->id,
                'category_id' => $categories_ids[$category_key],
            );

        }
        NewsToCategory::insert($data);
    }
}
