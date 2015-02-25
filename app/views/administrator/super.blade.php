@extends('master')
@section('title')
    Administrator
@stop
@section('content')
	<h1>welcome admin</h1>
	<div><a href="{{URL::to('/faculty')}}">Manage Faculty</a></div>
	<div><a href="{{URL::to('/logout')}}">logout</a></div>
@stop