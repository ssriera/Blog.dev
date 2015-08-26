<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



//Dice Guess Game
Route::get('/rolldice/{guess}', function($guess) {
	$roll = rand(1,6);
	$guess = "$guess";

	return View::make('roll-dice')->with('guess', $guess)->with('roll', $roll);
});


// Main Home Page
Route::get('/', 'HomeController@showHome');

Route::get('login', 'HomeController@showLogin');

Route::post('login', 'HomeController@doLogin');

Route::get('logout', 'HomeController@doLogout');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

//Whack a Mole Game
Route::get('/game', 'HomeController@showGame');

//National Parks
Route::get('/parks', 'HomeController@showParks');

//HomespunBlog
// Route::get('/blog', 'HomeController@showBlog');

//Bloguettes
Route::get('/bloguettes', 'HomeController@showBlog');

//Filepicker
Route::get('/filepickers', 'HomeController@showFilepicker');

//Posts Resource
Route::resource('posts', 'PostsController');





// Route::get('search', function() {
// 	$search = Input::get('search');

// 	$query = Post::with('user')

// 	$query->where('title', 'like', '%' . $search . '%');
// 	$query->orWhere('created_at', 'like', '%' . $search . '%');

// 	$query->orWhereHas('user', function($q) {
// 		$search = Input::get('search');

// 		$q->where('email', 'like', '%' . $search . '%');
// 	});


// 	$posts = $query->orderBy('created_at', 'desc')->paginate(4);

// 	foreach ($posts as $post) {
// 		echo $post->title;
// 	}
// });
