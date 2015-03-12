@extends('master')
@section('title')
    Requirement
@stop
@section('content')
    <h1>Class Requirement</h1>
            {{ Form::open(array('route' => 'requirement.store','class'=>'form-inline'))}}
        <div class="form-group">
            {{Form::label('category_id',"Category:")}}
            {{Form::select('category_id', $categ, Input::old('category_id'),['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('percentage',"Percentage:")}}
            {{Form::text('percentage',Input::old('percentage'),['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::submit('Add',array('class'=>'btn btn-default'))}}
        </div>
        <div class="row"><a href="{{ URL::to('category/create') }}">Add Category</a></div>
        {{Form::close()}}

    <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Category</th>
            <th>Percentage</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($leads as $lead)
            <tr>
                <td>{{$lead->name}}</td>
                <td>{{$lead->percentage}}</td>
                <!--<td>
                    {{ Form::open(array('route' => array('requirement.edit',$lead->id), 'method' => 'get')) }}
                        <button type="submit" class="btn btn-warning btn-xs">Edit</button>
                    {{ Form::close() }}
                </td>-->
                <td>
                    {{ Form::open(array('route' => array('requirement.destroy',$lead->id), 'method' => 'delete')) }}
                        <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                    {{ Form::close() }}
                </td>
            </tr>
         @endforeach
    </tbody>
    </table>
@stop