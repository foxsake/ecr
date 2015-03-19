<!--FIX THIS!-->
@extends('master')
@section('title')
        Activity
@stop
@section('addcss')
    {{ HTML::style('css/bootstrap-datetimepicker.min.css') }}
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
            <h1>Activity</h1>
            {{ Form::model($act, ['route' => ['activity.update', $act->id], 'method' => 'put','class'=>'form-horizontal']) }}
            <div class="form-group">
                {{Form::label('requirement_id',"Category:")}}
                {{Form::select('requirement_id', $categ, Input::old('requirement_id'),['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('name',"Name:")}}
                {{Form::text('name',Input::old('name'),['class'=>'form-control','placeholder' => 'Activity Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('max_score',"Over:")}}
                {{Form::text('max_score',Input::old('max_score'),['class'=>'form-control','placeholder' => 'Maximun Score'])}}
            </div>
            <div class="form-group">
                {{Form::label('term',"Term:")}}
                {{Form::select('term', array('first' => 'First Term', 'second' => 'Second Term', 'final' => 'Final Term'),Input::old('term'),['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('date',"Date:")}}
                <div class='input-group date' id='datetimepicker'>
                    {{ Form::text('date', Input::old('date') , array('class' => 'form-control','placeholder' => 'YYYY-MM-DD','data-datepicker' => 'datepicker')) }}
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
                </div>
            </div>
        <div class="form-group">
            {{Form::submit('Save',array('class'=>'btn btn-default'))}}
        </div>
        {{Form::close()}}
        </div>
        
        
        <div class="col-md-4">
        <h1>Student's Grades</h1>
            <div class="container">
            {{ Form::open(array('route' => array('grade.update2', $act->id),'class'=>'form-horizontal col-md-4','method'=>'put'))}}
            @foreach ($stud as $student)
                <div class="form-group">
                    {{Form::label('scores[]',$student->name . ':')}}
                    {{Form::text('scores[]',$student->score,['class'=>'form-control','placeholder' => 'Score'])}}
                </div>
        @endforeach
        <div class="form-group">
            {{Form::submit('Save',array('class'=>'btn btn-default'))}}
        </div>
        {{ Form::close() }}
        </div>
        </div>
        </div>
        </div>
        <script type="text/javascript">
                    $(function () {
                    $('#datetimepicker').datetimepicker({
                    viewMode: 'days',
                    format: 'YYYY-MM-DD'
                });
            });
        </script>

        {{ HTML::script('bootstrap/js/transition.js') }}
        {{ HTML::script('bootstrap/js/collapse.js') }}
        {{ HTML::script('js/moment.js') }}
        {{ HTML::script('js/bootstrap-datetimepicker.min.js') }}
@stop