<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>i-NanoDesign service</title>

    <!-- Bootstrap Core CSS -->
    {!! Html::style('css/bootstrap.css') !!}


    <!-- Custom CSS -->
    {!! Html::style('css/main.css') !!}
    {!! Html::style('css/custom.css') !!}

    {!! Html::script('//use.edgefonts.net/bebas-neue.js') !!}

    <!-- Custom Fonts & Icons -->
    {!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') !!}
    {!! Html::style('http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic') !!}
    {!! Html::style('css/icomoon-social.css') !!}
    {!! Html::style('css/font-awesome.min.css') !!}

    
       {!! Html::script('js/modernizr-2.6.2-respond-1.1.0.min.js') !!}
     <!-- Javascripts -->
        {!! Html::script('http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js') !!}
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        {!! Html::script('js/bootstrap.min.js') !!}
        
        <!-- Scrolling Nav JavaScript -->
        {!! Html::script('js/jquery.easing.min.js') !!}
        {!! Html::script('js/scrolling-nav.js') !!}
         {!! Html::script('js/table.js') !!}

 
</head>



<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
       

    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="index.html"><img src="{!! asset('img/logo.png') !!}" alt="Basica"></a> 
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    
                	 <li {!! classActivePath('/') !!}>                  
                        {!! link_to('/',trans('Home')) !!}                                          
                </li>
	
	
                    <li><a href="about-us.html">About Us</a></li>


                    
                    <li {!! Request::is('qbd/services') ? 'class="active"' : '' !!}>
                        {!! link_to('qbd/services', trans('Quality by Design services')) !!}

                    </li>
                  
                    
                   
                    
                    <li {!! Request::is('auth/login') ? 'class="active"' : '' !!}>
                        {!! link_to('auth/login', trans('Login')) !!}

                    </li>

                    @if(1>0)
                    <li {!! Request::is('contact/create') ? 'class="active"' : '' !!}>
                        {!! link_to('contact/create', trans('Contact us')) !!}

                    </li>
                    @endif                
                </ul>
            </div>
        </div>
        @yield('header')  
    </header><!--/header-->


<div class="page-header">
<main role="panel" class="no-margin">
        @if(session()->has('ok'))
            @include('partials/error', ['type' => 'success', 'message' => session('ok')])
        @endif  
        @if(isset($info))
            @include('partials/error', ['type' => 'info', 'message' => $info])
        @endif
        @yield('panel')
</main>
</div>

    <main role="main" class="container">
        
        @if(session()->has('ok'))
        
            @include('partials/error', ['type' => 'success', 'message' => session('ok')])
        @endif  
        @if(isset($info))
            @include('partials/error', ['type' => 'info', 'message' => $info])
        @endif
        @yield('main')
    </main>

<?php 
// Test area 

 //echo "coucou";
  

?> 
  

     <!-- Footer -->
        <div class="footer">
            @yield('footer')
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-copyright">&copy; 2016 <a href="http://www.http://cybernano.eu/aboutus">Cybernano</a> Bootstrap HTML Template. By <a href="http://www.vactualart.com">Vactual Art</a>.</div>
                    </div>
                </div>
            </div>
        </div>



</body>
</html>
