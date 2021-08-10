<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Routing\Controller;

class NewsController extends Controller
{
    public function news()
    {
        $news = News::paginate(20);
        $categories = Categories::paginate(20);
        return view('news', ['news' => $news, 'categories' => $categories]);
    }

}
