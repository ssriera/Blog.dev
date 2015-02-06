@extends ('layouts.master')

@section('content')

	<a href="{{ action('HomeController@showResume') }}">Click to view my resume</a>

	<a href="{{ action('HomeController@showGame') }}">Check out my game</a>

@stop
