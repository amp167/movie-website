<?php

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $movies=Movie::latest();
    if(request('search')){
        $movies= $movies->where('name','LIKE','%'.request('search').'%');
    }
    return view('movies',[
        'movies'=>$movies->get(),
        'categories'=>Category::all()
        
    ]);
});
Route::get('/category/{slug:slug}', function (Category $slug) {
    return view('movies',[
        'movies'=>$slug->movies,
        'categories'=>Category::all(),
        'currentCategory' => $slug

        
    ]);
});
