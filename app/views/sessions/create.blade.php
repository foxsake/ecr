<!--login form for the main system-->
@extends('master')
@section('title')
    Login
@stop
@section('content')
        <div class="container-center">
        <h1>Login</h1>
        @if ($errors->has())
            {{ Alert::error("Username or password incorrect.") }}
        @endif
        {{ Form::open(array('route' => 'sessions.store','class'=>'form-horizontal'))}}
        <div class="form-group">
            {{Form::label('username',"Username:")}}
            {{Form::text('username',Input::old('username'))}}
        </div>
        <div class="form-group">
            {{Form::label('password',"Password:")}}
            {{Form::password('password')}}
        </div>
        <div class="form-group">
            {{Form::submit('Login',array('class'=>'btn btn-default'))}}
        </div>
        {{Form::close()}}
        </div>
@stop

