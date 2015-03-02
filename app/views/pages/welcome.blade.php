@extends('master')
@section('title')
    Welcome
@stop
@section('content')
	<div class="content">
		<div class="title">phjbrpf</div><!--asd-->
		<div class="titlefoot">paul-hanna-jonathan-billy-roger-paulo-faye</div>
		<div class="quote"><a href="{{URL::to('/about')}}">About</a></div>
		<div><a href="{{URL::to('/logout')}}">logout</a></div>
	</div>
@stop