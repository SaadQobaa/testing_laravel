<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="/"><img src="{!! asset('img/logo.png') !!}" alt="Basica"></a> 
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
                  
                    
                   
                    @if(Auth::check())
                     <li {!! Request::is('logout') ? 'class="active"' : '' !!}>
                        {!! link_to('/logout', trans('Logout')) !!}
                    </li>
                    @else
                    <li {!! Request::is('login') ? 'class="active"' : '' !!}>
                        {!! link_to('/login', trans('Login')) !!}
                    </li>
                    @endif

                    @if(1>0)
                    <li {!! Request::is('contact/create') ? 'class="active"' : '' !!}>
                        {!! link_to('contact/create', trans('Contact us')) !!}

                    </li>
                    @endif                
                </ul>
            </div>
        </div>
    </header><!--/header-->