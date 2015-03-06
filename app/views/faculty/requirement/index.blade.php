@extends('master')
@section('title')
    Requirement
@stop
@section('content')
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
	</div>
    
@stop