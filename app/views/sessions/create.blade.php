<!--login form for the main system-->
@extends('master')
@section('title')
    Login
@stop
@section('content')
        <div class="center-block">
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
        @if ($errors->has())
            {{ Alert::error("Username or password incorrect.") }}
        @endif
        {{ Form::open(array('route' => 'sessions.store','class'=>'form-horizontal'))}}
        <div class="form-group">
            {{Form::label('username',"Username:")}}
            {{Form::text('username',Input::old('username'),['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('password',"Password:")}}
            {{Form::password('password',['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::submit('Login',array('class'=>'btn btn-default'))}}
        </div>
        {{Form::close()}}
        </div>
        </div>
        </div>
@stop

