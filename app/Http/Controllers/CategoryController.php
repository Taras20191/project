<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    private $categories;


    public function __construct(Request $request)
    {
        $this->categories = $this->getCategoriesData($request->all());
    }

    public function home()
    {
        $news = News::paginate(20);

        return view('home', ['categories' => $this->categories, 'news' => $news]);
    }

    public function index(Request $request)
    {
        $news = News::paginate(20);

        return view('category', [
            'categories' => $this->categories,
            'news' => $news
        ]);
    }

    public function category2(Request $request)
    {
        $this->categories = $this->getCategoriesData($request->all());

        return view('Category2',
            [
                'data' => [
                    'categories' => $this->categories,
                ]
            ]);
    }

    public function getCategoryTotal(Request $request)
    {
        return response()->json([
            'status' => 'ok',
            'total' => Categories::count()
        ]);
    }

    public function getCategory(Request $request)
    {
        $this->categories = $this->getCategoriesData($request->all());

        return response()->json([
            'status' => 'ok',
            'categories' => $this->categories
        ]);
    }

    private function getCategoriesData($data)
    {
        $order = 'asc';

        if (isset($data['order']) and $data['order'] == 'desc') {
            $order = 'desc';
        }

        $sort = 'id';

        if (isset($data['sort']) and in_array($data['sort'], ['name', 'category_id'])) {
            $sort = $data['sort'];
        }

        $categories = Categories::orderBy($sort, $order)->paginate(20);

        return $categories;

    }
    public function category($category_id)
    {
        $news = News::whereIn('id', function ($query) use ($category_id) {
            $query->select('news_id')->from('news_to_categories')->where('category_id', $category_id);
        })->paginate(20);
        $categories = Categories::paginate(20);

        return view('category_page', ['news' => $news, 'categories' => $categories]);
    }
}

