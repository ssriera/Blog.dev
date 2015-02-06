<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/



	public function showHome() {
		return View::make('landing');
	}

	public function showLogin() {
		return View::make('login');
	}
	public function showResume() {
		return View::make('resume');
	}

	public function showPortfolio() {
		return View::make('portfolio');
	}

	public function showGame() {
		return View::make('game');
	}

	// public function showIndex() {
	// 	return View::make('index');
	// }

	public function showParks() {
		return View::make('parks');
	}

	public function doLogin() {

		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
			Session::flash('successMessage', "You've logged in! Welcome");
		    return Redirect::intended('/');
		} else {
			Session::flash('errorMessage', 'Failed to log in!');
			return Redirect::action('HomeController@showLogin');
		}
	}

	public function doLogout() {
		Auth::logout();
		Session::flash('successMessage', "You've been logged out");
		return Redirect::action('HomeController@showHome');
	}
}
