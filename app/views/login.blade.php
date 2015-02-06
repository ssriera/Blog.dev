@extends('layouts.master')

@section('content')

<h1 class="page-header">Please Login</h1>

{{ Form::open(array('action'=> 'HomeController@doLogin')) }}

<div class="form-group">
	{{ Form::label('email', 'Email Address') }}
	{{ Form::email('email', Input::old('email'), array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('password', 'Password') }}
	{{ Form::password('password', array('class'=> 'form-control')) }}
</div>

<div class="form-group">
	{{Form::submit('Login', array('class'=> 'btn btn-primary')) }}
</div>

{{ Form::close() }}

@stop