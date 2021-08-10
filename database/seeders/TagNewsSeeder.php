<?php

namespace Database\Seeders;

use App\Models\TagNews;
use Illuminate\Database\Seeder;

class TagNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TagNews::factory()->count(25)->create();
    }
}
