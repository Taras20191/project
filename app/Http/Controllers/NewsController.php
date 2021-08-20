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

    public function category($category_id)
    {
        $news = News::whereIn('id', function ($query) use ($category_id) {
            $query->select('news_id')->from('news_to_categories')->where('category_id', $category_id);
        })->paginate(20);
        $categories = Categories::paginate(20);

        return view('category_page', ['news' => $news, 'categories' => $categories]);
    }

    public function show($news_id)
    {
        $categories = Categories::paginate(20);
        $news_info = News::find($news_id);

        return view('news_page', ['news_info' => $news_info, 'categories' => $categories]);
    }
}
