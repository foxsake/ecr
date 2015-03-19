@extends('master')
@section('title')
    Requirement
@stop
@section('content')
<div class="container">
    <h1>Class Requirement</h1>
    <div><a href="{{URL::to('admin/class/create')}}">Create Class</a></div>
    <div>
    <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Category</th>
            <th>Percentage</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    	@foreach($leads as $lead)
        	<tr>
                <td>{{$lead->name}}</td>
                <td>{{$lead->percentage}}</td>
                <td>
                    {{ Form::open(array('route' => array('requirement.index',$lead->id), 'method' => 'get')) }}
                        <button type="submit" class="btn btn-success btn-xs">View</button>
                    {{ Form::close() }}
                </td>
                <td>
                    {{ Form::open(array('route' => array('requirement.show',$lead->id), 'method' => 'get')) }}
                        <button type="submit" class="btn btn-warning btn-xs">Syllabus</button>
                    {{ Form::close() }}
                </td>
            </tr>
    	 @endforeach
    </tbody>
	</table>
	</div>

        {{ Form::open(array('route' => 'category.store','class'=>'form-horizontal'))}}
        <div class="form-group">
            {{Form::label('name',"Name:")}}
            {{Form::text('name',Input::old('name'))}}
        </div>
        <div class="form-group">
            {{Form::label('percentage',"Percentage:")}}
            {{Form::text('percentage',Input::old('percentage'))}}
        </div>
        <div class="form-group">
            {{Form::submit('Add',array('class'=>'btn btn-default'))}}
        </div>
        {{Form::close()}}
    </div>
@stop