@extends('master')
@section('title')
    Requirement
@stop
@section('content')
<div class="container">
    <h1>Class Requirements</h1>
    <!--<div><a href="{{URL::to('admin/class/create')}}">Create Class</a></div>-->
    <div>
    <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Category</th>
            <th>Percentage</th>
            <!--ilagay din yung mga activity dito sana.. para sa pag view ng activities?-->
        </tr>
    </thead>
    <tbody>
    	@foreach($leads as $lead)
        	<tr>
                <td>{{$lead->name}}</td>
                <td>{{$lead->percentage}}</td>
            </tr>
    	 @endforeach
    </tbody>
	</table>
    <div class="row">
    <div class="col-md-4">
    {{ Form::open(array('route' => array('requirement.edit',Session::get('classid')), 'method' => 'get', 'class' => 'nospace')) }}
        <button type="submit" class="btn btn-warning btn-xs">Edit Requirements</button>
    {{ Form::close() }}</div></div>
    <div class="row">
    <div class="col-md-2">
    {{ Form::model($stud, ['route' => ['class.passing', $stud->id], 'method' => 'post']) }}
        <div class="form-group">
            {{Form::label('passing',"Class Passing: ")}}
            {{Form::text('passing',Input::old('passing'),['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::submit('Save',array('class'=>'btn btn-default'))}}
        </div>
        {{Form::close()}}
        </div>
    </div>
    <a href="{{URL::action('FacultyClassController@show',Session::get('classid'))}}">Show Class</a>
	</div>
</div>
@stop