<!--login form for the main system-->
@extends('master')
@section('title')
    Create Account
@stop
@section('content')
        <div class="form-horizontal">
        <h1>Account Creation</h1>
        {{ Form::open(array('route' => 'users.store','class'=>'form-horizontal'))}}
        <div class="form-group">
            {{Form::label('username',"Username:")}}
            {{Form::text('username',Input::old('username'))}}
        </div>
        <div class="form-group">
            {{Form::label('password',"Password:")}}
            {{Form::password('password')}}
        </div>
        <div class="form-group">
            {{Form::label('password2',"Retype Password:")}}
            {{Form::password('password2')}}
        </div>
        <div class="form-group">
            {{Form::submit('Create Account',array('class'=>'btn btn-default'))}}
        </div>
        {{Form::close()}}
        </div>
@stop

