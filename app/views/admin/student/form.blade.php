<!--login form for the main system-->
@extends('master')
@section('title')
    @if(!isset($stud))
            {{"Create Account"}}
        @else
            {{"Edit Account"}}
        @endif
@stop
@section('content')
        <div class="container">
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <h1>Student</h1>
        </div>
        <div class="col-md-4 col-md-offset-4">
        @if(!isset($stud))
            {{ Form::open(array('route' => 'admin.student.store','class'=>'form-horizontal'))}}
        @else
            {{ Form::model($stud, ['route' => ['admin.student.update', $stud->id], 'method' => 'put']) }}
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
            {{Form::label('section',"Section")}}
            {{Form::text('section',Input::old('section'),['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::submit('Save',array('class'=>'btn btn-default'))}}
        </div>
        {{Form::close()}}
        </div>
        </div>
        </div>
@stop