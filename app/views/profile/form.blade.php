@extends('master')
@section('title')
            {{"Edit Account"}}
@stop
@section('content')
<div class="container">
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
        @if(Auth::user()->role=='1')
            <h1>Admin</h1>
        @else
            <h1>Faculty</h1>
        @endif
        </div>
        <div class="col-md-4 col-md-offset-4">
            @if(Auth::user()->role == '2'||Auth::user()->role=='3')
                {{ Form::model($fac, ['route' => 'profile.store', 'method' => 'post']) }}
            @else
                {{ Form::open(array('route' => 'profile.store','class'=>'form-horizontal'))}}
            @endif

            @if(Auth::user()->role == '2'||Auth::user()->role=='3')
        <div class="form-group">
            {{Form::label('id_number',"ID Number:")}}
            {{--Form::text('id_number',Input::old('id_number'),['class'=>'form-control'])--}}
            <p class="form-control-static">{{ $fac->id_number }}</p>
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
        @endif

        <div class="form-group">
            {{Form::label('password',"Password:")}}
            {{Form::password('password',['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('password2',"Retype Password:")}}
            {{Form::password('password2',['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::submit('Edit Account',array('class'=>'btn btn-default'))}}
        </div>
        {{Form::close()}}
        </div>
        </div>
        </div>
@stop