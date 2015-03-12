<!--FIX THIS!-->
@extends('master')
@section('title')
        Activity
@stop
@section('addcss')
    {{ HTML::style('css/bootstrap-datetimepicker.min.css') }}
@stop
@section('content')
        <div class="row">
        <div class="form-horizontal col-md-4">
        <h1>Activity</h1>
            {{ Form::model($act, ['route' => ['activity.update', $act->id], 'method' => 'put']) }}
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
        <div class="form-group">
            {{Form::submit('Save',array('class'=>'btn btn-default'))}}
        </div>
            {{Form::close()}}
        </div>
        </div>
        {{ HTML::script('bootstrap/js/transition.js') }}
        {{ HTML::script('bootstrap/js/collapse.js') }}
        {{ HTML::script('js/moment.js') }}
        {{ HTML::script('js/bootstrap-datetimepicker.min.js') }}
@stop