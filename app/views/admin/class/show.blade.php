@extends('master')
@section('title')
    Class Students
@stop
@section('content')
    <h1>Manage Roster</h1>
    <div><a href="{{URL::to('admin/roster/create')}}">Add Student</a></div>
    <div>
    <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID Number</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Initial</th>
            <th>Section</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    	@foreach($leads as $lead)
        	<tr>
                <td>{{$lead->id_number}}</td>
                <td>{{$lead->last_name}}</td>
                <td>{{$lead->first_name}}</td>
                <td>{{$lead->mi}}</td>
                <td>{{$lead->section}}</td>
                <td>
                    {{ Form::open(array('route' => array('admin.roster.destroy', $lead->id), 'method' => 'delete')) }}
                        <button type="submit" class="btn btn-danger btn-xs">Remove</button>
                    {{ Form::close() }}
                </td>
            </tr>
    	 @endforeach
    </tbody>
	</table>
	</div>
    
@stop