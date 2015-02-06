<?php

class PostsController extends BaseController {


	public function __construct() {
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		$query = Post::with('user');
		// $posts = Post::all();

		if (Input::has('search')) {
			$query->where('body', 'like', '%something%');
			$query->orWhere('title', 'like', '%something%');
			$query->whereHas('user', function($q){
				$q->where('email', 'like', '%something%');
			});
		}

		$posts = $query->orderBy('created_at', 'desc')->paginate(4);

		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();

		$post->user_id = Auth::id();
		return $this->savePost($post);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.show')->with('post', $post);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);
		return $this->savePost($post);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {

	try {
		$post = Post::findOrFail($id);

	} catch (ModelNotFoundException $e) {
		Log::warning("User made a bad request", array('id' => $id));
		App::abort(404);
	}	
		$post->delete();

		Session::flash('successMessage', "Your post was deleted");

		return Redirect::action('PostsController@index');
	}


	protected function savePost($post) {
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()) {
			Session::flash('errorMessage', 'Failed to save your post!');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$post->title = Input::get('title');
			$post->body = Input::get('body');

			$post->save();

			Session::flash('successMessage', 'Success, your post was saved!');
			return Redirect::action('PostsController@show', $post->id);
		}
	}

}
