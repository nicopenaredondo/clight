<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>
   @yield('title')
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="{{ asset('assets/stylesheet/bootstrap.css') }}">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">

<body>
  <!--START_HEADER-->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
       <a class="navbar-brand" href="#">Citylight</a>
      </div>
      <div class="navbar-collapse collapse navbar-inverse-collapse">
        <ul class="nav navbar-nav">
          
          @if(Request::segment(1) == 'dashboard')
            <li class="active">
          @else
            <li>
          @endif
            <a href="{{ URL::route('dashboard') }}"><i class="icon-home" style="margin-right:5px;"></i>
              Dashboard
            </a>
          </li>

        
          @if(Request::segment(1) == 'website-content')
            <li class="active">
          @else
            <li>
          @endif            
            <a href="{{ URL::route('website-content') }}"><i class="icon-file" style="margin-right:5px;"></i>
              Website Content
            </a>
          </li>

          @if(Request::segment(1) == 'branch-management')
            <li class="active">
          @else
            <li>
          @endif    
            <a href="{{ URL::route('branch-management') }}"><i class="icon-group" style="margin-right:5px;"></i>
              Branch Management
            </a>
          </li>

          @if(Request::segment(1) == 'job-order')
            <li class="active">
          @else
            <li>
          @endif    
            <a href="{{ URL::route('job-order') }}"><i class="icon-list-alt" style="margin-right:5px;"></i>
              Job Order
            </a>
          </li>
          
          @if(Request::segment(1) == 'settings')
            <li class="active">
          @else
            <li>
          @endif    
            <a href="{{ URL::route('settings') }}"><i class="icon-cogs" style="margin-right:5px;"></i>
              Settings
            </a>
          </li>
        </ul>
        <div class="pull-right">
          <ul class="nav navbar-nav pull-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Hello, Main Branch <b class="caret"></b>
              </a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                <li><a href="{{ URL::route('logout') }}" tabindex="-1">
                  <i class="icon-off" style="margin-right:5px;"></i>Logout</a>
                </li>
              </ul>
            </li>
          </ul>     
        </div>
      </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
  </div>
  <!--END_HEADER-->

  <!--START_BODY-->
  <div class="container" style="margin-top:50px;">
    @yield('container')
  </div>
  <!--END_BODY-->
  
  <!--START_FOOTER-->
  
  <!--END_FOOTER-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js" type="text/javascript"></script>
  @yield('scripts')
</body>
</html>