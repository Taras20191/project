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

    public function category($categories)
    {
       $news = News::whereIn('id', function ($query) use ($categories) {
            $query->select('news_id')->from('news_to_categories')->where('category_id');
        })->get();
        $categories = Categories::paginate(20);
        return view('category_page', ['news' => $news, 'categories' => $categories]);
    }
}
