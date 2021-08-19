<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use App\Models\Tag;
use Illuminate\Routing\Controller;

class TagController extends Controller
{
    public function tags($tag_id)
    {
        $tag_info = Tag::whereIn('id', function ($query) use ($tag_id) {
            $query->select('news_id')->from('news_to_tags')->where('tag_id', $tag_id);
        })->paginate(15);
        $categories = Categories::paginate(25);
        $news = News::paginate(25);
        return view('tags_page', ['tag'=>$tag_info, 'news' => $news, 'categories' => $categories]);
    }
}
