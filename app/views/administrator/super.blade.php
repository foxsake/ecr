@extends('master')
@section('title')
    Administrator
@stop
@section('content')
	<h1>welcome admin</h1>
	<div><a href="{{URL::to('/users')}}">Manage Users</a></div>
	<div><a href="{{URL::to('/logout')}}">logout</a></div>
@stop