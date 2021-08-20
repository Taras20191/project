<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Routing\Controller;

class NewsController extends Controller
{
    public function news()
    {
        $news = News::take(20)->get();
        $categories = Categories::paginate(20);

        return view('news', ['news' => $news, 'categories' => $categories]);
    }



    public function show($news_id)
    {
        $categories = Categories::paginate(20);
        $news_info = News::find($news_id);

        return view('news_page', ['news_info' => $news_info, 'categories' => $categories]);
    }
}
