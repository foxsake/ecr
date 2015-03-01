<!--login form for the main system-->
@extends('master')
@section('title')
    @if(!isset($fac))
            {{"Create Account"}}
        @else
            {{"Edit Account"}}
        @endif
@stop
@section('content')
        <div class="form-horizontal">
        <h1>Faculty</h1>

        @if(!isset($fac))
            {{ Form::open(array('route' => 'admin.faculty.store','class'=>'form-horizontal'))}}
        @else
            {{ Form::model($fac, ['route' => ['admin.faculty.update', $fac->id], 'method' => 'put']) }}
        @endif
        <div class="form-group">
            {{Form::label('id_number',"ID Number:")}}
            {{Form::text('id_number',Input::old('id_number'))}}
        </div>
        <div class="form-group">
            {{Form::label('last_name',"Lastname:")}}
            {{Form::text('last_name',Input::old('last_name'))}}
        </div>
        <div class="form-group">
            {{Form::label('first_name',"Firstname:")}}
            {{Form::text('first_name',Input::old('first_name'))}}
        </div>
        <div class="form-group">
            {{Form::label('mi',"Middle Initial:")}}
            {{Form::text('mi',Input::old('mi'))}}
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
        @if(!isset($fac))
            {{Form::submit('Create Account',array('class'=>'btn btn-default'))}}
        @else
            {{Form::submit('Edit Account',array('class'=>'btn btn-default'))}}
        @endif
        </div>
        {{Form::close()}}
        </div>
@stop