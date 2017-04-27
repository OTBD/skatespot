<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>skatespot - @yield('pageTitle')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/b754616fa0.js"></script>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-transparent landingnav" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

                        <a class="navbar-brand" href="{{ url('/') }}">skatespot.</a>


        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @if (Auth::guest())

                <ul class="nav navbar-nav navbar navbar-center">
                    <li><a href="#community">Community</a></li>
                    <li><a href="#locations">Locations</a></li>
                    <li><a href="#skatecards">Skatecards</a></li>
                    <li><a href="#events">Events</a></li>
                </ul>


          @else

          <form class="navbar-form navbar-left" role="search">

           <div class="form-group">
             <input type="text" style="width:400px;margin-left:100px;" class="form-control" placeholder="Search">
           </div>

           <button type="submit" class="btn btn-default">Submit</button>
         </form>

          @endif

          <ul class="nav navbar-nav navbar-right">
              @if (Auth::guest())
            <li><p class="navbar-text">Already have an account?</p></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
    			<ul id="login-dp" class="dropdown-menu">
    				<li>
    					 <div class="row">
    							<div class="col-md-12">
                                    Login

                                         <form class="form" role="form" method="POST" action="{{ route('login') }}" accept-charset="UTF-8" id="login-nav">
                                             {{ csrf_field() }}
    										<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
    											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                 <input id="username" type="text" class="ss-form-control" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>

                                                 @if ($errors->has('username'))
                                                     <span class="help-block">
                                                         <strong>{{ $errors->first('username') }}</strong>
                                                     </span>
                                                 @endif

    										</div>
    										<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    											 <label class="sr-only" for="exampleInputPassword2">Password</label>



                                                 <input id="password" type="password" class="ss-form-control" name="password" placeholder="Password" required>

                                                 @if ($errors->has('password'))
                                                     <span class="help-block">
                                                         <strong>{{ $errors->first('password') }}</strong>
                                                     </span>
                                                 @endif


    										</div>
                                            <div class="checkbox">
                                                 <label>
                                                 <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                 </label>
                                            </div>
    										<div class="form-group">
    											 <button type="submit" class="btn btn-blue btn-block">Sign in</button>
    										</div>
                                            <div class="help-block text-center"><a href="{{ route('password.request') }}">Forget the password ?</a></div>
    								 </form>
    							</div>
    							<div class="bottom text-center">
    								New here ? <a href="{{ route('register') }}"><b>Join Us</b></a>
    							</div>
    					 </div>
    				</li>
    			</ul>
            </li>

            @else

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <img src="/uploads/profile_pictures/{{ Auth::user()->avatar }}" style="width:25px; height:25px;margin-right:10px;">

                    {{ Auth::user()->username }} <span class="caret"></span>

                </a>

                <ul class="dropdown-menu" role="menu">

                    <li>
                        <a href="{{ url('/profile') }}">Profile</a>
                    </li>

                    @if(Auth::check() && Auth::user()->type == "A")

                    <li>
                        <a href="{{ url('/admin') }}">Admin</a>
                    </li>

                    @endif

                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>

            @endif

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
