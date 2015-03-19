@extends('master')
@section('title')
    Requirement
@stop
@section('content')
<div class="container">
    <h1>Class Requirement</h1>
    <div class="row"><a href="{{ URL::to('category/create') }}">Add Category</a></div>
            {{ Form::open(array('route' => 'requirement.store','class'=>'form-inline','id'=>'check'))}}
        <div id="p_scents">
        <div class="form-group">
            {{Form::select('categories[]', $categ, Input::old('category_ids[]'),['class'=>'form-control input-sm'])}}
            {{Form::text('percentages[]',Input::old('percentages[]'),['class'=>'form-control input-sm',"placeholder" => "Percentage"])}}
        </div>
        </div>
            <a id="addScnt" href="#" class="btn btn-info btn-xs">Add Requirement</a>
        <div class="form-group">
            {{  Form::submit('Save',array('class'=>'btn btn-default'))   }}
        </div>
        {{Form::close()}}
    
    </div>
    {{ HTML::script('js/ajaxform.js') }}
    <script type="text/javascript">
        $(function() {
        
        $('#addScnt').on('click', function() {
                $('<div class="form-group">'+
                '{{Form::select("categories[]", $categ, Input::old("category_ids[]"),["class"=>"form-control input-sm"])}}'+
                '{{Form::text("percentages[]",Input::old("percentages[]"),["class"=>"form-control input-sm","placeholder" => "Percentage"])}}'+
                '<a href="#" id="remScnt" class="btn btn-xs btn-danger">Remove</a>'+
                '</div>').appendTo('#p_scents');
                return false;
        });

        $(document).on('click','#remScnt',function() { 
               $(this).parents('.form-group').remove();
                return false;
        });
        });

        $('#check').on('submit',function(){
            var that = $(this),
            total = 0;

            that.find('[name]').each(function(index,value){
            var that = $(this),
            name = that.attr('name'),
            val = that.val();
            if(that.attr('type')=='text')
                total += parseInt(val);
            });

            if(total != 100){
                alert("total percentage should be 100");
                return false;
            }
            return true;
        });

    </script>
@stop