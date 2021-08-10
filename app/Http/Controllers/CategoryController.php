<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    private $categories;

    public function __construct(Request $request)
    {
        $this->categories = $this->getCategoriesData($request->all());
    }

    public function home()
    {
        $news = News::paginate(10);

        return view('home', ['categories' => $this->categories, 'news' => $news]);
    }

    public function index(Request $request)
    {

        return view('category', [
            'categories' => $this->categories,

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

        $categories = Categories::orderBy($sort, $order)->paginate(10);

        return $categories;

    }

    public function data()
    {
        DB::table('categories')
            ->select('id', 'name')
            ->join('news', 'id', '=', 'news_description')
            ->orderBy('name', 'asc')
            ->get();
        return view('category');
    }

}
