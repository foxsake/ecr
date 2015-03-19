@extends('master')
@section('title')
    Requirement
@stop
@section('content')
<div class="container">
<div class="form-horizontal">
        <h1>Category</h1>
        @if(!isset($stud))
            {{ Form::open(array('route' => 'category.store','class'=>'form-horizontal'))}}
        @else
            {{ Form::model($stud, ['route' => ['category.update', $stud->id], 'method' => 'put']) }}
        @endif
        <div class="form-group">
            {{Form::label('name',"Name:")}}
            {{Form::text('name',Input::old('name'),['class'=>'form-control','placeholder' => 'Activity Name'])}}
        </div>
        <div class="form-group">
        @if(!isset($stud))
            {{Form::submit('Create Activity',array('class'=>'btn btn-default'))}}
        @else
            {{Form::submit('Edit Activity',array('class'=>'btn btn-default'))}}
        @endif
        </div>
            {{Form::close()}}
</div>
</div>
@stop