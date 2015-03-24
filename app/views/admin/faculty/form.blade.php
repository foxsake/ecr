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
<div class="container">
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>Faculty</h1>
        </div>
        <div class="col-md-4 col-md-offset-4">
        @if(!isset($fac))
            {{ Form::open(array('route' => 'admin.faculty.store','class'=>'form-horizontal'))}}
        @else
            {{ Form::model($fac, ['route' => ['admin.faculty.update', $fac->id], 'method' => 'put']) }}
        @endif
        <div class="form-group">
            {{Form::label('id_number',"ID Number:")}}
            {{Form::text('id_number',Input::old('id_number'),['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('last_name',"Lastname:")}}
            {{Form::text('last_name',Input::old('last_name'),['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('first_name',"Firstname:")}}
            {{Form::text('first_name',Input::old('first_name'),['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('mi',"Middle Initial:")}}
            {{Form::text('mi',Input::old('mi'),['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('gender',"Gender:")}}
            {{Form::select('gender', array('1' => 'Male','2' => 'Female'),Input::old('gender'),['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('role',"Role:")}}
            {{Form::select('role', array('3' => 'Faculty','2' => 'Admin Faculty'),Input::old('role'),['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('password',"Password:")}}
            {{Form::password('password',['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('password2',"Retype Password:")}}
            {{Form::password('password2',['class'=>'form-control'])}}
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
        </div>
        </div>
@stop