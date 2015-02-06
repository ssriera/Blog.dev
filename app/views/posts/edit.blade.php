@extends ('layouts.master')

@section('content')

	<h3><span class="glyphicon glyphicon-plus-sign"></span> Update Post</h3>

{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'put')) }}
	@include('posts.form')

	{{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop