@extends('master')
@section('title')
    Login
@stop
@section('content')
        <div class="form-horizontal">
        <h1>Login</h1>
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

