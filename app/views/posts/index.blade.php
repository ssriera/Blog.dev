@extends('layouts.master')

@section('content')


<div><h2 class="text-center">Blog Posts:</h2></div>
<hr>

@foreach ($posts as $post) 
	<h3>{{{$post->title}}}</h3>	
	<div class="pull-right">
		<p>Posted {{{ $post->created_at->diffForHumans() }}}</p>
		<p>Updated {{{ $post->updated_at->diffForHumans() }}}</p>
	</div>
	<h5>by {{{ $post->user->email }}}</h5>
	<!-- <h4>{{{$post->body}}}</h4> -->
		<a class="btn btn-info" href="{{{ action('PostsController@show', $post->id) }}}">Read More</a>
		
	@unless(empty($post->img_url))
		<img src="{{{ $post->img_url}}}" alt="{{{ $post->title }}}">
	@endunless


@endforeach


@stop