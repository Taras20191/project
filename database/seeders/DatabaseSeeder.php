<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => '1', 'name' => Str::random(15), 'description' => Str::random(10)],
            ['id' => '2', 'name' => Str::random(15), 'description' => Str::random(10)],
            ['id' => '3', 'name' => Str::random(15), 'description' => Str::random(10)],
            ['id' => '4', 'name' => Str::random(15), 'description' => Str::random(10)],
            ['id' => '5', 'name' => Str::random(15), 'description' => Str::random(10)],
            ['id' => '6', 'name' => Str::random(15), 'description' => Str::random(10)],
        ]);

        DB::table('news')->insert([
            ['tag_news_id' => '22', 'news_category_id' => '1', 'news_description' => Str::random(15)],
            ['tag_news_id' => '17', 'news_category_id' => '2', 'news_description' => Str::random(15)],
            ['tag_news_id' => '12', 'news_category_id' => '3', 'news_description' => Str::random(15)],
            ['tag_news_id' => '4', 'news_category_id' => '4', 'news_description' => Str::random(15)],
            ['tag_news_id' => '5', 'news_category_id' => '5', 'news_description' => Str::random(15)],
            ['tag_news_id' => '6', 'news_category_id' => '6', 'news_description' => Str::random(15)],
        ]);

        DB::table('tags')->insert([
            ['tag_id' => '12', 'tag_name' => Str::random(10)],
            ['tag_id' => '15', 'tag_name' => Str::random(10)],
            ['tag_id' => '17', 'tag_name' => Str::random(10)],
            ['tag_id' => '11', 'tag_name' => Str::random(10)],
            ['tag_id' => '22', 'tag_name' => Str::random(10)],
            ['tag_id' => '22', 'tag_name' => Str::random(10)],
        ]);

        DB::table('tag_news')->insert([
            ['tag_id' => '16', 'news' => Str::random(15)],
            ['tag_id' => '22', 'news' => Str::random(15)],
            ['tag_id' => '11', 'news' => Str::random(15)],
            ['tag_id' => '17', 'news' => Str::random(15)],
            ['tag_id' => '15', 'news' => Str::random(15)],
            ['tag_id' => '12', 'news' => Str::random(15)],
        ]);

        DB::table('news_to_category')->insert([
            ['news_id' => '1', 'category_id' => '1'],
            ['news_id' => '2', 'category_id' => '2'],
            ['news_id' => '3', 'category_id' => '3'],
            ['news_id' => '4', 'category_id' => '4'],
            ['news_id' => '5', 'category_id' => '5'],
            ['news_id' => '6', 'category_id' => '6'],

        ]);

        DB::table('news_to_tags')->insert([
            ['tags_id' => '16', 'news_id' => '1'],
            ['tags_id' => '22', 'news_id' => '2'],
            ['tags_id' => '11', 'news_id' => '3'],
            ['tags_id' => '17', 'news_id' => '4'],
            ['tags_id' => '15', 'news_id' => '5'],
            ['tags_id' => '12', 'news_id' => '6'],

        ]);
    }

}
