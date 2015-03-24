<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>My Report</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15">
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
.paddtop{
    margin-top: 20px;
}
.nomar{
	margin: 0;
	padding: 0;
}
.marbot{
	margin-bottom: 20px;
}
.ctxt{
	text-align: center;
}
</style>
</head>
<body>
	<div class="container">
	<center>
	<h3 class="nomar">Republic of the Philippines</h3>
	<h4 class="nomar">CENTRAL LUZON STATE UNIVERSITY</h4>
	<h5 class="nomar">Science City of Munoz, Nueva Ecija</h5>
	
	</center>
	<h6 class="nomar">{{"Catalogue Number: ".$cl->catalogue_number}}</h6>
    <h6 class="nomar marbot">{{ " Day: ".$cl->day." - Time: ".$cl->time." - Room: ".$cl->room }}</h6>
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
            <th class="ctxt">Students</th>
            <th class="ctxt">Final Grade</th>
            <th class="ctxt">Status</th>
        </tr>
    </thead>
    <tbody>
    	@foreach($leads as $lead)
    	@if($lead->subj_grade < $cl->passing)
        	<tr>
                <td>{{$lead->name}}</td>
                <td>{{ $lead->subjpoint_grade }}</td>
                <td>{{ $lead->subj_grade >= $cl->passing ? "Passed":"Failed" }}</td>
            </tr>
            @endif
    	 @endforeach
    </tbody>
	</table>
    @if ($faculty->gender==1)
        <center><h4 class="nomar paddtop">{{  'Mr. '.$faculty->name }}</h4></center>
    @else
        <center><h4 class="nomar paddtop">{{  'Ms. '.$faculty->name }}</h4></center>
    @endif
    <center><h5 class="nomar">Prepared By</h5></center>
	</div>
</body>
</html>
