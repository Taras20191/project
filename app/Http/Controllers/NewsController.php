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
    public function category(){
        DB::table('users')
            ->whereIn('id', [1, 2, 3])
            ->get();
    }
}
