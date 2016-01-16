
@extends('template')


@section('main')
<div class="container" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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
            <div class="panel panel-default" style="margin-top:30px">

                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="">
                               
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">

                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                              <!--  <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
		             --> 
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                              <!--  <a class="btn btn-link" href="/password/reset">Forgot Your Password?</a>
                            
					--> 
			</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
