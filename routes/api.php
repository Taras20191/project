<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('getCategory', [CategoryController::class, 'getCategory'])->name('api.getCategory');
Route::post('getCategoryTotal', [CategoryController::class, 'getCategoryTotal'])->name('api.getCategoryTotal');

//<a href="{{ route('tags_page', ['tag_id' => $element->id]) }}">{{$element->description}}</a>
//<div>
//<a href="{{ route('tags_page', ['tag_id' => $tag->id]) }}">{{$tag->description}}</a>
//</div>
