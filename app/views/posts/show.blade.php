@extends ('layouts.master')

@section('content')
	<!-- <p>{{$post->title}}</p>
	<p>{{$post->body}}</p>
	<p>{{{$post->created_at->diffForHumans()}}}</p> -->

	<div class="blog-box img-rounded">
		<h1 class="page-header"> {{{$post->title}}}</h1>
		<h5>by {{{ $post->user->email }}}</h5>
		<p class="text-muted pull-right"> Posted {{{ $post->updated_at->diffForHumans() }}}</p>
	</div>

	<div class="post-body">
		<p>{{{ $post->body }}}</p>
		@if (Auth::check())
			{{{ Auth::user() }}}
			<a href="{{{ action('PostsController@edit', $post->id) }}}" class="btn btn-warning"> Edit Post</a>

		{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete')) }}
			{{ Form::submit('Delete Post', array('class' => 'btn btn-danger')) }}
		{{ Form::close() }}
	</div> 
	@endif
@stop