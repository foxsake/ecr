@extends('master')
@section('title')
    Requirement
@stop
@section('content')
    <h1>Class Requirement</h1>
    <div><a href="{{URL::to('requirement/create')}}">Create Requirement</a></div>
    <div>
    <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Catalogue Number</th>
            <th>Time</th>
            <th>Day</th>
            <th>Room</th>
            <th>Created By</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    	@foreach($leads as $lead)
        	<tr>
                <td>{{$lead->catalogue_number}}</td>
                <td>{{$lead->time}}</td>
                <td>{{$lead->day}}</td>
                <td>{{$lead->room}}</td>
                <td>{{$lead->created_by}}</td>
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
@stop