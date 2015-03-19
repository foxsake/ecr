@extends('master')
@section('title')
    Gradebook
@stop
@section('content')
<div class="mycontainer">
    <h1>{{$cl->catalogue_number}}</h1>
    <h3>{{ " Day: ".$cl->day." - Time: ".$cl->time." - Room: ".$cl->room }}</h3>
    <a href="{{URL::to('activity/create')}}" class="btn btn-info btn-xs">Add Activity</a>
    <div class="marbot table-responsive">
    <table class="table table-bordered table-hover table-striped table-condensed nospace gradebook-table">
    <thead>
        <!--<tr>
            <th class="tabletxt">Term</th>
            <th colspan={{ '3' }} class="tabletxt">First Term</th>
            <th colspan={{ '1' }} class="tabletxt">Second Term</th>
            <th colspan={{ '1' }} class="tabletxt">Final Term</th>
        </tr>-->
    	<!--<tr>
            <th class="tabletxt">Category</th>
            @foreach($cats as $cat)
            	<th colspan="3" class="tabletxt">{{ $cat->name }}</th>
            @endforeach
      
        </tr>-->
        <tr>
            <th>Students</th>
            @foreach($actnames as $actname)
            	<th>{{ HTML::linkRoute('activity.show', $actname['name']." (".$actname['max'].")", $actname['id']) }}</th><!--dito!!-->
            @endforeach
            @if(isset($leads[0]->lab_grade))
            <th>Lab Grade</th>
            @endif
            <th>Raw Score</th>
            <th>Final Grade</th>
            <th>Status</th>
        </tr>
        <tr>
            <th>Date</th>
            @foreach($actnames as $actname)
                <td>{{ $actname['date'] }}</td>
            @endforeach
            <td></td>
            <td></td>
            <td></td>
            @if(isset($leads[0]->lab_grade))
                <th></th>
            @endif
        </tr>
    </thead>
    <tbody>
    	@foreach($leads as $lead)
        	<tr>
                <td>{{$lead->name}}</td>
                {{-- */$n = 's1'; $i = 1;/* --}}
                @foreach($actnames as $actname)
                {{-- */$link = $n.'id'/* --}}
                	<td>{{HTML::linkRoute('grade.edit', $lead->$n, $lead->$link)}}</td>
                {{-- */$n = 's' . (++$i);/* --}}
                @endforeach
                @if(isset($lead->lab_grade))
                    <td>{{ $lead->lab_grade }}</td>
                @endif
                <td>{{$lead->subj_grade}}</td>
                <td>{{ $lead->subjpoint_grade }}</td>
                <td>{{ $lead->subj_grade > $cl->passing ? "Passed":"Failed" }}</td>
            </tr>
    	 @endforeach
    </tbody>
	</table>
    </div>
    <div class="row">
    <div class="col-md-1">
    {{ Form::open(array('route' => array('print.show',Session::get('classid')), 'method' => 'get')) }}
        <button type="submit" class="btn btn-success btn-xs">Generate Report</button>
    {{ Form::close() }}
    </div>
    <div class="col-md-1">
        {{ Form::open(array('route' => array('print3',Session::get('classid')), 'method' => 'get')) }}
        <button type="submit" class="btn btn-success btn-xs">Passed Report</button>
    {{ Form::close() }}
    </div>
    <div class="col-md-1">
        {{ Form::open(array('route' => array('print2',Session::get('classid')), 'method' => 'get')) }}
        <button type="submit" class="btn btn-success btn-xs">Failed Report</button>
    {{ Form::close() }}
    </div>
    
    
    </div>
	</div>
@stop