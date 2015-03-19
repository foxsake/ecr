@extends('master')
@section('title')
    Administrator
@stop
@section('content')
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4">
	<h1>welcome admin</h1>
	<div class="container">
	<div><a href="{{URL::to('admin/faculty')}}">Manage Faculty</a></div>
	<div><a href="{{URL::to('admin/student')}}">Manage Students</a></div>
	<div><a href="{{URL::to('admin/class')}}">Manage Class</a></div>
	</div>
	</div>
	</div>
	</div>
@stop