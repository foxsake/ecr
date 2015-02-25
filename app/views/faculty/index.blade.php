@extends('master')
@section('title')
    Manage Users
@stop
@section('content')
    <h1>Manage Accounts</h1>
    <div>
    <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID Number</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Initial</th>
            <th></th>
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
                <td>
                    {{ Form::open(array('route' => array('faculty.edit',$lead->id), 'method' => 'get')) }}
                        <button type="submit" class="btn btn-warning btn-xs">Edit</button>
                    {{ Form::close() }}
                </td>
                <td>
                    {{ Form::open(array('route' => array('faculty.destroy', $lead->id), 'method' => 'delete')) }}
                        <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                    {{ Form::close() }}
                </td>
            </tr>
    	 @endforeach
    </tbody>
	</table>
	</div>
    <div><a href="{{URL::to('faculty/create')}}">Create Account</a></div>
@stop