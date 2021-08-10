<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\NewsToTag;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class NewsToTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = News::all();
        $tag = Tag::all()->toArray();
        $tag_ids = array_column($tag, 'id');


        foreach ($news as $item) {
            $tag_key = array_rand($tag_ids);

            $data[] = array(
                'news_id' => $item->id,
                'tag_id' => $tag_ids[$tag_key],
            );

        }
        NewsToTag::insert($data);
    }
}
