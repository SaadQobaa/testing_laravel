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
                            <label class="col-md-4 control-label">Dosage form</label>

                            <div class="col-md-6">
                                <input type="dosage_form" class="form-control" name="dosage_form" placeholder="Tablet" value="">
                            </div>


                        </div>

                     <div class="form-group">
                            <label class="col-md-4 control-label">Dosage form</label>

                            <div class="col-md-6">
                                <input type="dosage_form" class="form-control" name="dosage_form" placeholder="Tablet" value="">
                            </div>


                        </div>
<div class="form-group">
                            <label class="col-md-4 control-label">Dosage form</label>

                            <div class="col-md-6">
                                <input type="dosage_form" class="form-control" name="dosage_form" placeholder="Tablet" value="">
                            </div>


                        </div>

<div class="form-group">
                            <label class="col-md-4 control-label">Dosage form</label>

                            <div class="col-md-6">
                                <input type="dosage_form" class="form-control" name="dosage_form" placeholder="Tablet" value="">
                            </div>


                        </div>

<div class="form-group">
                            <label class="col-md-4 control-label">Dosage form</label>

                            <div class="col-md-6">
                                <input type="dosage_form" class="form-control" name="dosage_form" placeholder="Tablet" value="">
                            </div>


                        </div>

<div class="form-group">
                            <label class="col-md-4 control-label">Dosage form</label>

                            <div class="col-md-6">
                                <input type="dosage_form" class="form-control" name="dosage_form" placeholder="Tablet" value="">
                            </div>


                        </div>

<div class="form-group">
                            <label class="col-md-4 control-label">Dosage form</label>

                            <div class="col-md-6">
                                <input type="dosage_form" class="form-control" name="dosage_form" placeholder="Tablet" value="">
                            </div>


                        </div>

<div class="form-group">
                            <label class="col-md-4 control-label">Dosage form</label>

                            <div class="col-md-6">
                                <input type="dosage_form" class="form-control" name="dosage_form" placeholder="Tablet" value="">
                            </div>


                        </div>

<div class="form-group">
                            <label class="col-md-4 control-label">Dosage form</label>

                            <div class="col-md-6">
                                <input type="dosage_form" class="form-control" name="dosage_form" placeholder="Tablet" value="">
                            </div>


                        </div>

<div class="form-group">
                            <label class="col-md-4 control-label">Dosage form</label>

                            <div class="col-md-6">
                                <input type="dosage_form" class="form-control" name="dosage_form" placeholder="Tablet" value="">
                            </div>


                        </div>


<div class="form-group">
                            <label class="col-md-4 control-label">Dosage form</label>

                            <div class="col-md-6">
                                <input type="dosage_form" class="form-control" name="dosage_form" placeholder="Tablet" value="">
                            </div>


                        </div>


<div class="form-group">
                            <label class="col-md-4 control-label">Dosage form</label>

                            <div class="col-md-6">
                                <input type="dosage_form" class="form-control" name="dosage_form" placeholder="Tablet" value="">
                            </div>


                        </div>


<div class="form-group">
                            <label class="col-md-4 control-label">Dosage form</label>

                            <div class="col-md-6">
                                <input type="dosage_form" class="form-control" name="dosage_form" placeholder="Tablet" value="">
                            </div>


                        </div>
			<div class="form-group">
                            <label class="col-md-4 control-label">Dosage form</label>

                            <div class="col-md-6">
                                <input type="dosage_form" class="form-control" name="dosage_form" placeholder="Tablet" value="">
                            </div>


                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>


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
