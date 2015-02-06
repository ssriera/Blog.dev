@extends ('layouts.master')

@section('content')

	<h3><span class="glyphicon glyphicon-plus-sign"></span> Make a Blog Post</h3>

{{ Form::open(array('action' => 'PostsController@store', 'files' => true)) }}
	@include('posts.form')

	<a href="{{{ action('PostsController@index') }}}" class="btn btn-default">Nevermind</a>

	{{ Form::submit('Create Post', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

@stop