<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Routing\Controller;

class TagController extends Controller
{
    public function news($tag_id)
    {
        {
            $news = News::whereIn('id', function ($query) use ($tag_id) {
                $query->select('news_id')->from('news_to_tags')->where('tag_id', $tag_id);
            })->paginate(25);
            return view('tags_page', ['news' => $news, 'tag' => $tag_id]);
        }
    }
}
