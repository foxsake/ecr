@extends('master')
@section('title')
    Class
@stop
@section('content')
    <h1>Manage Class</h1>
    <div><a href="{{URL::to('admin/class/create')}}">Create Class</a></div>
    <div>
    <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Subject Code</th>
            <th>Catalogue Number</th>
            <th>Room</th>
            <th>Time</th>
            <th>Day</th>
            <th>Type</th>
            <th>Lec Subject Code</th>
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
                <td>{{$lead->lec_subject_code}}</td>
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