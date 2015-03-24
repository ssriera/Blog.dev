@extends('layouts.master')

@section('css-script')
<style type="text/css">
.img {
	width:100%;
}
.container .jumbotron {
padding-right: 0;
padding-left: 0;
padding: 0;
margin-top: 0;
padding-bottom:0;
}

#pagination {
	clear:both;
	position: relative;
	text-align: center;
}

body {
	background-color: #8E8F91;
	
}

h1, h2, h3, h4, h5 {
	color: #DBAECD;
	font-family: 'Bad Script', cursive;
}

</style>
@stop

@section('content')
<div class="jumbotron">
  <h1 class="text-center">Welcome to the Homespun blog!</h1>
  <img class="img" src="images/kitten.jpg">
</div>

<div><h1 class="text-center">Current Blog Posts:</h1></div>
<hr>

@foreach ($posts as $post) 
	<h2>{{{$post->title}}}</h2>	
	<div class="pull-right">
		<p>Posted {{{ $post->created_at->diffForHumans() }}}</p>
		<p>Updated {{{ $post->updated_at->diffForHumans() }}}</p>
	</div>
	<h4>by {{{ $post->user->email }}}</h4>
	<!-- <h4>{{{$post->body}}}</h4> -->
		<a class="btn btn-default" href="{{{ action('PostsController@show', $post->id) }}}">Read More</a>

	@unless(empty($post->img_url))
		<img src="{{{ $post->img_url}}}" alt="{{{ $post->title }}}">
	@endunless


@endforeach

<div id="pagination">{{ $posts->links() }}</div>

 <footer class="text-center">
 	Copyright &copy; Riera 2015
 </footer>

@stop