@extends('template')

@section('main')

  <!--  <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center"><strong>Define the QTPP of the nanodrug</strong></h2>
                <hr> -->
<meta charset="UTF-8">
<div class="section section-breadcrumbs">
  <div class="row"> 
    <div class="col-md-12"> 
      <h1>Quality Target Product Profile</h1>
    </div>
  </div>
</div>



<?php 
  //<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
?> 

<form class="form-horizontal" role="form" method="POST" action=" {{ url('/qtpp') }}">

{!! csrf_field() !!}


	<div class="form-group">
                            <label class="col-md-4 control-label">Name </label>

                            <div class="col-md-6">
                                <input type="name" class="form-control" name="name" placeholder="Name" value="">
                            </div>


                        </div>

                     <div class="form-group">
                            <label class="col-md-4 control-label">Dosage form</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="dosage_form" placeholder="Tablet" value="">
                            </div>


                        </div>
<div class="form-group">
                            <label class="col-md-4 control-label">Route of administration</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Route of administration" placeholder="Oral" value="">
                            </div>


                        </div>

<div class="form-group">
                            <label class="col-md-4 control-label"> Dosage strength</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Dosage strength" placeholder="20 mg" value="">
                            </div>


                        </div>

<div class="form-group">
                            <label class="col-md-4 control-label">Pharmacokinetics</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Pharmacokinetics" placeholder="Immediate release" value="">
                            </div>


                        </div>

<div class="form-group">
                            <label class="col-md-4 control-label">Stability </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Stability" placeholder="At least 24 months shelf-life at room temperature" value="">
                            </div>


                        </div>

<div class="form-group">
                            <label class="col-md-4 control-label">Assay</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Assay" placeholder="95 - 105%" value="">
                            </div>


                        </div>

<div class="form-group">
                            <label class="col-md-4 control-label">Water content</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Water content" placeholder="NMT 1%" value="">
                            </div>


                        </div>

<div class="form-group">
                            <label class="col-md-4 control-label">Content uniformity</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Content uniformity" placeholder="Meets USP" value="">
                            </div>


                        </div>

<div class="form-group">
                            <label class="col-md-4 control-label">Dissolution </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Dissolution" placeholder="NLT 75% at 30 mins" value="">
                            </div>


                        </div>


<div class="form-group">
                            <label class="col-md-4 control-label">Disintegration </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Disintegration" placeholder="NMT 15 mins" value="">
                            </div>


                        </div>


<div class="form-group">
                            <label class="col-md-4 control-label">Purity</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Purity" placeholder="99%" value="">
                            </div>


                        </div>




                      
			<div class="form-group">
                            <label class="col-md-4 control-label">Container closure system</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Container closure system" placeholder="Qualified as suitable for this drug product" value="">
                            </div>


                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Friability </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Friability" placeholder="NMT 1%" value="">
                            </div>


</div>
                   <!--     <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Submit
                                </button>
                    --> 

		 <div class="container">
    <div class="col-lg-3">
      <button id="back_menu" name="back" class="btn btn-violet"><a class="glyphicon glyphicon-arrow-left"> QbD menu </a> </button>
    </div>
    <div class="col-lg-3">
      <input type="reset" name="reset" value="Erase all" class="btn btn-grey">
    </div>
    <div class="col-lg-3">
      <button type="button" id="next" name="next" class="btn" href="">CQA <a class="glyphicon glyphicon-arrow-right"> </a> </button>
    </div>
    <div class="col-lg-3">
      <input type="submit" class="btn btn-blue" value="Submit">
    </div>
   <?php  // don't forget to add download button ?> 
 

 </div>



</form> 






@stop
