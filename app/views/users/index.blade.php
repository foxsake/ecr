@extends('master')
@section('title')
    Manage Users
@stop
@section('content')
    <h1>Manage Accounts</h1>
    <div>
    <table>
    	@foreach($leads as $lead)
        	<tr><td>{{$lead->username}}</td></tr>
    	 @endforeach
	</table>
	</div>

    <div><a href="{{URL::to('users/create')}}">Create Account</a></div>
@stop