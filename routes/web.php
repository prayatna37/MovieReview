<?php

use Illuminate\Support\Facades\Input;
use App\User;
use App\Review;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/terms', function () {
    return view('terms');
});
Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/faq', function () {
    return view('faq');
});
// Route::get('/test', function(){
// 	$test = Review::where('user_id', 1)->get();
// 	dd($test);
// });





route::get('/browse', 'BrowseController@index')->name('browse');
route::get('/details/{movieid}', 'BrowseController@show')->name('show.movie');//movie id is pulled which gets sent to browsecontroller
route::get('/search', 'BrowseController@search');
route::get('/reviewshow', 'BrowseController@reviewshow');


route::get('/details/{moviesid}', 'HomeController@show')->name('show.movie');

route::post('/review/store', 'ReviewController@store')->name('review.add');
route::DELETE('/details/{id}/destroy', 'ReviewController@destroy')->name('review.delete');

Route::post('/reply/store', 'ReviewController@replyStore')->name('reply.add');



Auth::routes();


Route::get('/', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/about','AboutController@index');
// Route::get('/details','DetailsController@getData');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



//Search Function

// Route::post('search', function(){
//     $q = Input::get('q');
//     if ($q != '') {
//         $user = User::where('name', 'LIKE', '%' . $q . '%')
//             ->orWhere('username', 'LIKE', '%' . $q . '%')
//             ->orWhere('email', 'LIKE', '%' . $q . '%')
//             ->get();
//         if (count($user) > 0) {
//             return view('dashboard.searches/search')->withDetails($user)->withQuery($q);
//         }
//     }

//     return view('dashboard.searches/search')->withMessage("No user found!");
//     // dd($q);
// });
