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
        <h1>Add Student to Class</h1>

        @if(!isset($stud))
            {{ Form::open(array('route' => 'admin.roster.store','class'=>'form-horizontal'))}}
        @else
            {{ Form::model($stud, ['route' => ['admin.roster.update', $stud->id], 'method' => 'put']) }}
        @endif

        <div class="form-group">
            {{Form::label('subject_code',"Subject Code:")}}
            {{Form::text('subject_code',Input::old('subject_code'))}}
        </div>
        <div class="form-group">
            {{Form::label('id_number',"ID Number:")}}
            {{Form::text('id_number',Input::old('id_number'))}}
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