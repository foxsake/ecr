@extends('master')
@section('title')
		Grade
@stop
@section('content')
        <div class="form-horizontal">
        <h1>Grade</h1>
        <h3>{{ $act->name }}</h3>
        <h4>{{ $st->last_name.', '.$st->first_name.' '.$st->mi.'.' }}</h4>
        @if(!isset($stud))
            {{ Form::open(array('route' => 'grade.store','class'=>'form-horizontal'))}}
        @else
            {{ Form::model($stud, ['route' => ['grade.update', $stud->id], 'method' => 'put']) }}
        @endif

        <div class="form-group">
            {{Form::label('score',"Score:")}}
            {{Form::text('score', Input::old('score'))}}
        </div>
        <div class="form-group">
            {{Form::submit('Save',array('class'=>'btn btn-default'))}}
        </div>
            {{Form::close()}}
        </div>
@stop