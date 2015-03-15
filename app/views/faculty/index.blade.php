@extends('master')
@section('title')
    Class
@stop
@section('content')
<div class="container">
    <h1>Manage Class</h1>
    <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Subject Code</th>
            <th>Catalogue Number</th>
            <th>Room</th>
            <th>Time</th>
            <th>Day</th>
            <th>Type</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    	@foreach($leads as $lead)
        	<tr>
                <td>{{$lead->subject_code}}</td>
                <td>{{$lead->catalogue_number}}</td>
                <td>{{$lead->room}}</td>
                <td>{{$lead->time}}</td>
                <td>{{$lead->day}}</td>
                <td>{{$lead->type}}</td>
                <td>
                    {{ Form::open(array('route' => array('class.show',$lead->id), 'method' => 'get', 'class' => 'nospace')) }}
                        <button type="submit" class="btn btn-success btn-xs">View</button>
                    {{ Form::close() }}
                </td>
                <td>
                   	{{ Form::open(array('route' => array('requirement.show',$lead->id), 'method' => 'get', 'class' => 'nospace')) }}
                       	<button type="submit" class="btn btn-warning btn-xs">Syllabus</button>
                   	{{ Form::close() }}
                </td>
            </tr>
    	 @endforeach
    </tbody>
	</table>
    </div>
@stop