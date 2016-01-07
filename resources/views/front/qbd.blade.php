@extends('front.template')

@section('main')

<div class="section section-breadcrumbs">
    <div class="row"> 
      <div class="col-md-12"> 
        <h1>Quality by Design steps</h1>
      </div>
    </div>
</div>

<table class="table">
<tr>
	<td>
<label class="text-center"><h3 color="#555555;">Step 1 - Initiation </h3></label>
	</td>

	<td>
	<div class="breadcrumb">
	@if(1>0)
	<li {!! Request::is('qtpp/create') ? 'class="active"' : '' !!}>
        {!! link_to('qtpp/create', trans('Profile your Nano')) !!}
    </li>
	<li {!! Request::is('cqa/create') ? 'class="active"' : '' !!}>
        {!! link_to('cqa/create', trans('Define Quality Attributes')) !!}
    </li>
	<li {!! Request::is('riskAnalysis/create') ? 'class="active"' : '' !!}>
        {!! link_to('riskAnalysis/create', trans('Analyse Attribute Risks')) !!}
	</li>
	@endif 
	</div>
	</td>
</tr>

<tr>
	<td>
<label for="name"><h3>Step 2 - Preformulation</h3></label>
	</td>

	<td>
		<div class="breadcrumb">
	@if(1>0)
        <li {!! Request::is('parameters/create') ? 'class="active"' : '' !!}>
            {!! link_to('parameters/create', trans('Define Risk Factors')) !!}
		</li>
        <li {!! Request::is('ishikawa/create') ? 'class="active"' : '' !!}>
            {!! link_to('ishikawa/create', trans('Plot Ishikawa Charts')) !!}
		</li>                   
		<li {!! Request::is('riskAnalysis/create') ? 'class="active"' : '' !!}>
             {!! link_to('riskAnalysis/create', trans('Classify Risk Factors')) !!}
		</li>
    @endif 
		</div>
	</td>	
</tr>

<tr>
	<td>
		<label for="name"><h3>Step 3 - Formulation and Process</h3></label>
	</td>

	<td>
		<div class="breadcrumb">
		<li {!! Request::is('designOfExperiment/create') ? 'class="active"' : '' !!}>
            {!! link_to('designOfExperiment/create', trans('Screen Risk Factors')) !!}
		</li>
        <li {!! Request::is('riskAnalysis/create') ? 'class="active"' : '' !!}>
            {!! link_to('riskAnalysis/create', trans('Estimate Critical Parameters')) !!}
		</li>
		</div>
	</td>
</tr>

<tr>
<td>
<label for="name"><h3>Step 4 - Optimisation</h3></label>
</td>
<td>
<div class="breadcrumb">
	<li {!! Request::is('Step1/display') ? 'class="active"' : '' !!}>
            {!! link_to('Step1/display', trans('Optimize Critical Parameters')) !!}
		</li>

        <li {!! Request::is('Step1/display') ? 'class="active"' : '' !!}>
            {!! link_to('Step1/display', trans('Estimate Design Space')) !!}
		</li>        
</div>
</td>
</tr>

</table>



@stop






