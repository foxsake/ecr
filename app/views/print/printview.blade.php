<html>
<head>
	<title>My Report</title>	
	<style type="text/css">
	body{
		width: 100%;
		height: 100%;
		margin: 0;
	}
.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: 0;
  margin-left: 0;
}
table {
	margin: 0 auto;
    border-spacing: 0;
    border-collapse: collapse;
}	
table, th, td {
   border: 1px solid black;
} 
th,td{
	text-align: right;
	padding: 0 5px;
}
.nomar{
	margin: 0;
	padding: 0;
}
.marbot{
	margin-bottom: 20px;
}
#ctxt{
	text-align: center;
}
</style>
</head>
<body>
	<div class="container">
	<!--<center>
	<h3 class="nomar">Electronic Class Record</h3>
	<h4 class="nomar marbot">for the IT Department</h4>
	</center>-->
	<h5 class="nomar">{{"Catalogue Number: ".$cl->catalogue_number}}</h5>
    <h5 class="nomar marbot">{{ " Day: ".$cl->day." - Time: ".$cl->time." - Room: ".$cl->room }}</h5>
	<table>
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
            <th id="ctxt">Students</th>
            <th id="ctxt">Raw Score</th>
            @foreach($actnames as $actname)
            	<th id="ctxt">{{ $actname['name']." (".$actname['max'].")" }}</th><!--dito!!-->
            @endforeach
            @if(isset($leads[0]->lab_grade))
            <th>Lab Grade</th>
            @endif
        </tr>
        <tr>
            <th id="ctxt">Date</th>
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
                	<td>{{ $lead->$n }}</td>
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
</body>
</html>
