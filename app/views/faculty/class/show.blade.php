@extends('master')
@section('title')
    Gradebook
@stop
@section('content')
    <h1>{{$cl->catalogue_number}}</h1>
    <h3>{{ " Day: ".$cl->day." - Time: ".$cl->time." - Room: ".$cl->room }}</h3>
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
            <th>Raw Score</th>
            @foreach($actnames as $actname)
            	<th>{{ $actname['name']." (".$actname['max'].")" }}</th>
            @endforeach
            @if(isset($leads[0]->lab_grade))
            <th>Lab Grade</th>
            @endif
        </tr>
        <tr>
            <th>Date</th>
            <td></td>
            @foreach($actnames as $actname)
                <td>{{ $actname['date'] }}</td>
            @endforeach
            @if(isset($leads[0]->lab_grade))
                <th></th>
            @endif
        </tr>
    </thead>
    <tbody>
    	@foreach($leads as $lead)
        	<tr>
                <td>{{$lead->name}}</td>
                <td>{{$lead->subj_grade}}</td>
                {{-- */$n = 's1'; $i = 1;/* --}}
                @foreach($actnames as $actname)
                {{-- */$link = $n.'id'/* --}}
                	<td>{{HTML::linkRoute('grade.edit', $lead->$n, $lead->$link)}}</a></td>
                {{-- */$n = 's' . (++$i);/* --}}
                @endforeach
                @if(isset($lead->lab_grade))
                    <td>{{ $lead->lab_grade }}</td>
                @endif
            </tr>
    	 @endforeach
    </tbody>
	</table>
	</div>
    
@stop