<!--FIX THIS!-->
@extends('master')
@section('title')
            @if(!isset($stud))
                Add Activity
            @else
                Edit Activity
            @endif
@stop
@section('addcss')
    {{ HTML::style('css/bootstrap-datetimepicker.min.css') }}
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
            {{Form::select('category_id', $categ, Input::old('category_id'),['class'=>'form-control'])}}
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
            {{Form::label('score',"Default Score:")}}
            {{Form::text('score','0',['class'=>'form-control','placeholder' => 'Default Score'])}}
        </div>
        <div class="form-group">
            {{Form::label('term',"Term:")}}
            {{Form::select('term', array('first' => 'First Term', 'second' => 'Second Term', 'final' => 'Final Term'),Input::old('term'),['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('date',"Date:")}}
            <div class="container">
                <div class="row">
                    <div class='col-sm-6'>
                        <div class='input-group date' id='datetimepicker'>
                            {{ Form::text('date', Input::old('date') , array('class' => 'form-control','placeholder' => 'YYYY-MM-DD','data-datepicker' => 'datepicker')) }}
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
                        </div>
                        <script type="text/javascript">
                            $(function () {
                                $('#datetimepicker').datetimepicker({
                                    viewMode: 'days',
                                    format: 'YYYY-MM-DD'
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
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
        {{ HTML::script('bootstrap/js/transition.js') }}
        {{ HTML::script('bootstrap/js/collapse.js') }}
        {{ HTML::script('js/moment.js') }}
        {{ HTML::script('js/bootstrap-datetimepicker.min.js') }}
@stop