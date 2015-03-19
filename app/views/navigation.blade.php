<nav class="navbar navbar-default navbar-fixed-top">
  <!--<div class="container">
    <a href="{{ URL::route('home') }}">Home</a>
    <a href="#">Profile</a>
    <a href="">Logout</a>-->
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::route('home') }}">ECR-Electronic Class Record for the IT Department</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="{{ URL::route('home') }}">Home <span class="sr-only">(Current)</span></a></li>-->
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->username }} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <!--<li><a href="#">Another action</a></li>-->
            <li><a href="{{ URL::route('profile.index') }}">My Account</a></li>
            <li class="divider"></li>
            <li><a href="{{ URL::route('logout') }}">Logout</a></li>
          </ul>
        </li>
      </ul>
      @if(Auth::user()->role == '2')
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ADMINISTRATOR <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{URL::to('admin/faculty')}}">Manage Faculty</a></li>
            <li><a href="{{URL::to('admin/student')}}">Manage Students</a></li>
            <li><a href="{{URL::to('admin/class')}}">Manage Class</a></li>
          </ul>
        </li>
      </ul>
      @endif

    </div><!-- /.navbar-collapse -->
  </div>
</nav>