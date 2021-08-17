<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Routing\Controller;

class NewsController extends Controller
{
    public function news()
    {
        $news = News::take(25)->get();
        $categories = Categories::paginate(25);
        return view('news', ['news' => $news, 'categories' => $categories]);
    }

    public function category($category_id)
    {
        $news = News::whereIn('id', function ($query) use ($category_id) {
            $query->select('news_id')->from('news_to_categories')->where('category_id', $category_id);
        })->paginate(15);
        $categories = Categories::paginate(25);

        return view('category_page', ['news' => $news, 'categories' => $categories]);
    }

    public function show($news_id)
    {
        $categories = Categories::paginate(25);
        $news_info = News::find('id', $news_id);

        return view('news_page', ['categories' => $categories, 'news' => $news_info]);
    }
}
