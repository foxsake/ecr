@extends('master')
@section('title')
    Students
@stop
@section('content')
    <h1>{{$cl->subject_code." - ".$cl->catalogue_number}}</h1>
    <div><a href="{{URL::to('activity/create')}}">Add Activity</a></div>
    <div>
    <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Student</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    	@foreach($leads as $lead)
        	<tr>
                <td>{{$lead->last_name.", ".$lead->first_name." ".$lead->mi."."}}</td>
                <td></td>
                <td></td>
                <td>{{$lead->id_number}}</td>
                <td></td>
                <td>
                    {{ Form::open(array('route' => array('admin.student.edit',$lead->id), 'method' => 'get')) }}
                        <button type="submit" class="btn btn-warning btn-xs">Edit</button>
                    {{ Form::close() }}
                </td>
                <td>
                    {{ Form::open(array('route' => array('admin.student.destroy', $lead->id), 'method' => 'delete')) }}
                        <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                    {{ Form::close() }}
                </td>
            </tr>
    	 @endforeach
    </tbody>
	</table>
	</div>
    
@stop