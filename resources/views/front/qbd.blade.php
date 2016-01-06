@extends('template')

@section('main')

 @if(Session::has('errors'))
                @for($i=0;$i< count( Session::get('errors') ); $i++)
                    <div class="alert alert-danger">
                        {{Session::get('errors')[$i]}}
                    </div>
                @endfor
            @endif
            @if(Session::has('messages'))
                @for($i=0;$i< count( Session::get('messages') ); $i++)
                    <div class="alert alert-success">
                        {{Session::get('messages')[$i]}}
                    </div>
                @endfor
            @endif
            
<div class="col-xs-10">
<label for="name" class="col-sm-2 form-control-label">Initiation</label>
<div class="breadcrumb">
	@if(1>0)
	<li {!! Request::is('qtpp/create') ? 'class="active"' : '' !!}>
        {!! link_to('qtpp/create', trans('Add QTPP')) !!}

    </li>
	<li {!! Request::is('cqa/create') ? 'class="active"' : '' !!}>
        {!! link_to('cqa/create', trans('Add CQA')) !!}

    </li>
	<li {!! Request::is('riskAnalysis/create') ? 'class="active"' : '' !!}>
        {!! link_to('riskAnalysis/create', trans('Risk Analysis')) !!}
	</li>
	@endif 
</div>
</div>

<br>

<div class="col-xs-10">
<label for="name" class="col-sm-2 form-control-label">Preformulation</label>
<div class="breadcrumb">
	@if(1>0)
        <li {!! Request::is('parameters/create') ? 'class="active"' : '' !!}>
            {!! link_to('parameters/create', trans('Add MA, PP and other parameters')) !!}
		</li>

        <li {!! Request::is('ishikawa/create') ? 'class="active"' : '' !!}>
            {!! link_to('ishikawa/create', trans('Ishikawa Charts')) !!}
		</li>
                    

		<li {!! Request::is('riskAnalysis/create') ? 'class="active"' : '' !!}>
             {!! link_to('riskAnalysis/create', trans('Risk Analysis')) !!}
		</li>
    @endif 

<!--<li href="#">Ishikawa Charts</li>
	<li href="#">Risk analysis</li> -->
	
</div>
</div>

<br>

<div class="col-xs-10">
<label for="name" class="col-sm-2 form-control-label">Formulation and Process</label>
<div class="breadcrumb">
	<li href="#">Design of Experiment</li>
	<li href="#">First risk analysis</li>
	<li href="#">Second risk analysis</li>
</div>
</div>



<br>


<div class="col-xs-10">
<label for="name" class="col-sm-2 form-control-label">Optimisation</label>
<div class="breadcrumb">
	<li href="#">Step 1 {!! link_to('parameters/create', trans('Add MA, PP and other parameters')) !!}</a>
	<li href="#">Step 2</a>
	<li href="#">Step 3</a>
	<li href="#">Design Spaces</a>
</div>
</div>


@stop






