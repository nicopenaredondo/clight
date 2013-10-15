@extends('login.layout.master')
@section('title')
	@parent
	Login Page
@stop
@section('container')
	<form class="form-signin">
    <h2 class="form-signin-heading">Please sign in</h2>
    <input type="text" name="username" class="form-control" placeholder="Username" autofocus autocomplete="off">
    <input type="password" name="password" class="form-control" placeholder="Password">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <a href="{{ URL::route('forgot-password') }}">Forgot Password ? </a>
	</form>
 {{ HTML::image('/assets/img/bg-login.png') }}
@stop