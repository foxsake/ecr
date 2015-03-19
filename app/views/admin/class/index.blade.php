@extends('master')
@section('title')
    Class
@stop
@section('content')
<div class="container">
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
            <th>Instructor</th>
            <th></th>
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
                <td>{{($lead->last_name . ", ".$lead->first_name." ".$lead->mi.".")}}</td>
                <td>
                    {{ Form::open(array('route' => array('admin.class.show',$lead->id), 'method' => 'get')) }}
                        <button type="submit" class="btn btn-success btn-xs">View</button>
                    {{ Form::close() }}
                </td>
                <td>
                    {{ Form::open(array('route' => array('admin.class.edit',$lead->id), 'method' => 'get')) }}
                        <button type="submit" class="btn btn-warning btn-xs">Edit</button>
                    {{ Form::close() }}
                </td>
                <td>
                    {{ Form::open(array('route' => array('admin.class.destroy', $lead->id), 'method' => 'delete')) }}
                        <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                    {{ Form::close() }}
                </td>
            </tr>
    	 @endforeach
    </tbody>
	</table>
	</div>
    </div>
@stop