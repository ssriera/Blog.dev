<?php

class Post extends BaseModel {
	protected $table = 'posts';

	public static $rules = array(
    'title'      => 'required|max:100',
    'body'       => 'required|max:10000'
	);

	public function user() {
		return $this->belongsTo('User');
	}
	

	public function uploadFile($file){
		$uploadPath = public_path() . '/uploads';
		$fileName = $post->id . '-' . $file->getClientOriginalName();

		Input::file('image')->move($uploadPath, $fileName);

		$this->img_url = '/uploads' . $fileName;

		$this-save();
	}
}

