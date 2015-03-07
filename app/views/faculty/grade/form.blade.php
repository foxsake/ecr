@extends('master')
@section('title')
		Grade
@stop
@section('content')
        <div class="form-horizontal">
        <h1>{{$cl->catalogue_number}}</h1>
        <h3>{{ " Day: ".$cl->day." - Time: ".$cl->time." - Room: ".$cl->room }}</h3>
        <h3>{{ $act->name }}</h3>
        <h4>{{ $st->last_name.', '.$st->first_name.' '.$st->mi.'.' }}</h4>
        @if(!isset($stud))
            {{ Form::open(array('route' => 'grade.store','class'=>'form-horizontal'))}}
        @else
            {{ Form::model($stud, ['route' => ['grade.update', $stud->id], 'method' => 'put']) }}
        @endif

        <div class="form-group">
            {{Form::label('score',"Score:")}}
            {{Form::text('score', Input::old('score'),['class'=>'form-control','placeholder' => 'Student Score'])}}
        </div>
        <div class="form-group">
            {{Form::label('comment',"Comment:")}}
            {{Form::textarea('comment', Input::old('comment'), ['class'=>'form-control','placeholder' => 'Comment','rows' => '4'])}}
        </div>
        <div class="form-group">
            {{Form::submit('Save',array('class'=>'btn btn-default'))}}
        </div>
            {{Form::close()}}
        </div>
@stop