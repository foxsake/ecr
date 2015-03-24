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
        <div class="container">
        <div class="form-horizontal">
        <h1>Add Student to Class</h1>

        @if(!isset($stud))
            {{ Form::open(array('route' => 'admin.roster.store','class'=>'form-horizontal'))}}
        @else
            {{ Form::model($stud, ['route' => ['admin.roster.update', $stud->id], 'method' => 'put']) }}
        @endif
        
        <div class="form-group">
            {{Form::label('id_number',"ID Number:")}}
            {{Form::text('id_number',Input::old('id_number'),['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::submit('Save',array('class'=>'btn btn-default'))}}
        </div>
        {{Form::close()}}
        </div>
        </div>
@stop