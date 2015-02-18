@extends('master')
@section('title')
    Manage Users
@stop
@section('content')
    <h1>Manage Accounts</h1>
    <table>
    	@foreach($leads as $lead)
        	<tr><td>{{$lead->name}} - {{$lead->created_at}}</td></tr>
    	 @endforeach
	</table>
    <div><a href="{{URL::to('users/create')}}">Create Account</a></div>
@stop

