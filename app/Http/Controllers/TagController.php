<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsToTag;
use Illuminate\Routing\Controller;

class TagController extends Controller
{
    public function news($tag_id)
    {
        {
            $tag = NewsToTag::whereIn('tag_id', function ($query) use ($tag_id) {
                $query->select('tag_id')->from('news_to_tags')->where('news_id', $tag_id);
            })->paginate(25);

            $news = News::paginate(25);
            return view('tags_page', ['news' => $news, 'tag' => $tag_id]);
        }
    }
}
