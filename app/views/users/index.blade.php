@extends('master')
@section('title')
    Manage Users
@stop
@section('content')
    <h1>Manage Accounts</h1>
    <div><a href="{{URL::to('users/create')}}">Create Account</a></div>
@stop

