@extends('master')
@section('title')
            {{"Create Activity"}}
@stop
@section('content')
        <div class="form-horizontal">
        <h1>Activity</h1>
        {{ Form::open(array('route' => 'activity.store','class'=>'form-horizontal'))}}
        <div class="form-group">
            {{Form::label('category_id',"Category:")}}
            {{Form::select('category_id', $categ, Input::old('category_id'))}}
        </div>
        <div class="form-group">
            {{Form::label('name',"Name:")}}
            {{Form::text('name',Input::old('name'))}}
        </div>
        <div class="form-group">
            {{Form::label('max_score',"Over:")}}
            {{Form::text('max_score',Input::old('max_score'))}}
        </div>
        <div class="form-group">
            {{Form::label('term',"Term:")}}
            {{Form::select('term', array('first' => 'First Term', 'second' => 'Second Term', 'final' => 'Final Term'),Input::old('term'))}}
        </div>
        <div class="form-group">
        {{Form::submit('Create Activity',array('class'=>'btn btn-default'))}}
        </div>
        {{Form::close()}}
        </div>
@stop