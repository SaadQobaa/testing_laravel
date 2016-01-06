@extends('front.template')

@section('panel') 
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
	<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(img/slides/1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Welcome to i-NanoDesign</h2>
                                    <br>
                                    <p class="animation animated-item-2">Aim to help you to develop properly your nanodrug</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(img/slides/2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1">Requirements and steps</h2>
                                    <br>
                                    <p class="animation animated-item-2">Respect all Quality by Design steps required by the authorities</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(img/slides/3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Project management platform</h2>
                                    <br>
                                    <p class="animation animated-item-2">Enable all participans to follow a project </p>			
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

<!-- Call to Action Bar -->
	    <div class="section section-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="calltoaction-wrapper"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Call to Action Bar -->


		<!-- Services -->
        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="icon-gears"></i>
		        			<h3>Objectives</h3>
		        			<p>This part is about all requirements and objectives for the project to reach</p>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="icon-link"></i>
		        			<h3>Development</h3>
		        			<p>This part consists in a state of the art of all scientists knowledge</p>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="icon-medkit"></i>
		        			<h3>Production</h3>
		        			<p>Blablabla</p>
		        			
		        		</div> 
	        		</div> 
	        	</div>
	        </div>
	    </div>
	    <!-- End Services -->

@stop