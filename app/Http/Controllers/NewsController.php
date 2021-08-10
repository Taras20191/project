<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function news()
    {
        $news = News::take(20)->get();
        $categories = Categories::paginate(20);
        return view('news', ['news' => $news, 'categories' => $categories]);
    }

    public function category()
    {
        $categories = DB::table('categories')
            ->whereIn('id', [1, 2, 3])
            ->get();
        return view('news', ['categories' => $categories]);
    }
}
