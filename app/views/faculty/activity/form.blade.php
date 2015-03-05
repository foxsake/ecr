@extends('master')
@section('title')
            @if(!isset($stud))
                Add Activity
            @else
                Edit Activity
            @endif
@stop
@section('content')
        <div class="form-horizontal">
        <h1>Activity</h1>
        @if(!isset($stud))
            {{ Form::open(array('route' => 'activity.store','class'=>'form-horizontal'))}}
        @else
            {{ Form::model($stud, ['route' => ['activity.update', $stud->id], 'method' => 'put']) }}
        @endif

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
            {{Form::label('score',"Default Score:")}}
            {{Form::text('score','0')}}
        </div>
        <div class="form-group">
            {{Form::label('term',"Term:")}}
            {{Form::select('term', array('first' => 'First Term', 'second' => 'Second Term', 'final' => 'Final Term'),Input::old('term'))}}
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
@stop