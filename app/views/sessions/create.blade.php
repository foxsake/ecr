<!--login form for the main system-->
@extends('master')
@section('title')
    Login
@stop
@section('content')
        <div class="container top-buffer">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <h2>Electronic Class Record<small><br>for It Department</small></h1>
            </div>    
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                {{ Form::open(array('route' => 'sessions.store','class'=>'form-horizontal'))}}
            <div class="form-group">
                {{Form::label('username',"ID Number:")}}
                {{Form::text('username',Input::old('username'),['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('password',"Password:")}}
                {{Form::password('password',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::submit('Login',array('class'=>'btn btn-default'))}}
            </div>
            <div class="form-group">
                @if ($errors->has())
                    @if ($errors->has('username') && $errors->has('password'))
                        <div class="alert alert-danger" role="alert"><p>ID Number and Password is required</p></div>
                    @elseif ($errors->has('username'))
                        <div class="alert alert-danger" role="alert"><p>{{ $errors->first('username') }}</p></div>
                    @else
                        <div class="alert alert-danger" role="alert"><p>{{ $errors->first('password') }}</p></div>
                    @endif
                @endif
                
                @if(isset($warn))
                    <div class="alert alert-danger" role="alert"><p>{{ $warn }}</p></div>
                @endif
            </div>
            {{ Form::token() }}
            {{Form::close()}}
            </div>
            </div>
        </div>        
@stop

