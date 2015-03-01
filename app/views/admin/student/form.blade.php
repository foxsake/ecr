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
        <div>
        <div class="form-horizontal">
        <h1>Student</h1>

        @if(!isset($stud))
            {{ Form::open(array('route' => 'admin.student.store','class'=>'form-horizontal'))}}
        @else
            {{ Form::model($stud, ['route' => ['admin.student.update', $stud->id], 'method' => 'put']) }}
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
            {{Form::label('section',"Section")}}
            {{Form::text('section',Input::old('section'))}}
        </div>
        <div class="form-group">
        @if(!isset($stud))
            {{Form::submit('Create Account',array('class'=>'btn btn-default'))}}
        @else
            {{Form::submit('Edit Account',array('class'=>'btn btn-default'))}}
        @endif
        </div>
        {{Form::close()}}
        </div>
        </div>
@stop