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
            	<th>{{ $actname }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
    	@foreach($leads as $lead)
        	<tr>
                <td>{{$lead->name}}</td>
                {{-- */$n = 's1'; $i = 1;/* --}}
                @foreach($actnames as $actname)
                {{-- */$link = $n.'id'/* --}}
                	<td>{{HTML::linkRoute('grade.edit', $lead->$n, $lead->$link)}}</a></td>
                {{-- */$n = 's' . (++$i);/* --}}
                @endforeach
            </tr>
    	 @endforeach
    </tbody>
	</table>
	</div>
    
@stop