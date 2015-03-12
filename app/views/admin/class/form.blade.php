<!--login form for the main system-->
@extends('master')
@section('title')
    @if(!isset($stud))
            {{"Create Class"}}
        @else
            {{"Edit Class"}}
        @endif
@stop
@section('content')
        <div>
        <div class="form-horizontal">
        <h1>Class</h1>

        @if(!isset($stud))
            {{ Form::open(array('route' => 'admin.class.store','class'=>'form-horizontal'))}}
        @else
            {{ Form::model($stud, ['route' => ['admin.class.update', $stud->id], 'method' => 'put']) }}
        @endif

        <div class="form-group">
            {{Form::label('subject_code',"Subject Code:")}}
            {{Form::text('subject_code',Input::old('subject_code'),['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('catalogue_number',"Catalogue Number:")}}
            {{Form::text('catalogue_number',Input::old('catalogue_number'),['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('room',"Room:")}}
            {{Form::text('room',Input::old('room'),['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('time',"Time:")}}
            {{Form::text('time',Input::old('time'),['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('day',"Day:")}}
            {{Form::text('day',Input::old('day'),['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('type',"Type: ")}}
            {{Form::text('type',Input::old('type'),['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('lec_subject_code',"Lecture Subject Code: ")}}
            {{Form::text('lec_subject_code',Input::old('lec_subject_code'),['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('faculty_id_number',"Faculty:")}}
            {{Form::select('faculty_id_number', $fac, Input::old('faculty_id_number'),['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('requirement_id',"Requirement Id: ")}}
            {{Form::text('requirement_id',Input::old('requirement_id'),['class'=>'form-control'])}}
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