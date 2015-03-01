@extends('master')
@section('title')
    Administrator
@stop
@section('content')
	<h1>welcome admin</h1>
	<div><a href="{{URL::to('admin/faculty')}}">Manage Faculty</a></div>
	<div><a href="{{URL::to('admin/student')}}">Manage Students</a></div>
	<div><a href="{{URL::to('admin/class')}}">Manage Class</a></div>
	<div><a href="{{URL::to('/logout')}}">logout</a></div>
@stop