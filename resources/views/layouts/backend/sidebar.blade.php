<aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
      <p class="centered"><a href="{{url('#')}}"><img src="{{Auth::user()->avatar}}" class="avatar"></a></p>
      <h5 class="centered">{{ Auth::user()->username }}</h5>

      @if(Auth::user()->role_id == 1)
        <li class="sidenav mt current">
          <a class="" href="{{route('contractor.dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="sidenav">
          <a href="{{route('contractor.profile')}}">
            <i class="fa fa-user"></i> <span>Profile</span>
          </a>
        </li>
        @if(Auth::user()->status == 1)
        <li class="sidenav">
          <a href="javascript:;">
            <i class="fa fa-building-o"></i> <span>Contractor</span> <i class="fa fa-caret-down down-arrow"></i>
          </a>
          <ul class="sub">
            <li class="sidenav"><a href="{{route('contractor.index')}}">
            Home</a></li>
            <li class="sidenav"><a href="{{route('plans')}}">
            Make Payment</a></li>
            <li class="sidenav"><a href="{{route('contractor.dashboard')}}">
            View Jobs</a></li>
            <li class="sidenav"><a href="{{url('#')}}">
            Reviews</a></li>
          </ul>
        </li>
        @endif
        <li class="sidenav">
          <a href="{{route('contractor.dashboard')}}">
            <i class="fa fa-users"></i> <span>Blog</span>
          </a>
        </li>
        <li class="sidenav">
          <a href="javascript:;">
            <i class="fa fa-money"></i> <span>Earnings</span> <i class="fa fa-caret-down down-arrow"></i>
          </a>
          <ul class="sub">
            <li><a href="{{route('contractor.dashboard')}}">Payment Request</a></li>
            <li><a href="{{route('contractor.dashboard')}}">Payment Made</a></li>
            <li><a href="{{route('contractor.dashboard')}}">Current Balance</a></li>
          </ul>
        </li>

      @elseif(Auth::user()->role_id == 2)
        <li class="sidenav mt">
          <a class="active" href="{{route('homeowner.dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="sidenav">
          <a href="{{route('homeowner.profile')}}">
            <i class="fa fa-user"></i> <span>Profile</span>
          </a>
        </li>
         @if(Auth::user()->status == 1)
        <li class="sidenav">
          <a href="javascript:;">
            <i class="fa fa-home"></i> <span>Home Owner</span> <i class="fa fa-caret-down down-arrow"></i>
          </a>
          <ul class="sub">
            <li class="sidenav"><a href="{{route('homeowner.index')}}">
            Home</a></li>
            <li class="sidenav"><a href="{{route('homeowner.rq')}}">
            Request Quote</a></li>
            <li class="sidenav"><a href="{{route('homeowner.properties')}}">
            Properties</a></li>
            <li class="sidenav"><a href="{{url('#')}}">
            Reviews</a></li>
          </ul>
        </li>
        @endif

      @elseif(Auth::user()->role_id == 3)
        <li class="sidenav mt">
          <a class="active" href="{{route('marketer.dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="sidenav">
          <a href="{{route('marketer.profile')}}">
            <i class="fa fa-user"></i> <span>Profile</span>
          </a>
        </li>
        @if(Auth::user()->status == 1)
        <li class="sidenav">
          <a href="javascript:;">
            <i class="fa fa-shopping-cart"></i> <span>Marketer</span> <i class="fa fa-caret-down down-arrow"></i>
          </a>
          <ul class="sub">
            <li class="sidenav"><a href="{{route('marketer.index')}}">
            Home</a></li>
            <li class="sidenav"><a href="{{route('marketer.gallery')}}">
            Upload Products</a></li>
            <li class="sidenav"><a href="{{url('#')}}">
            Reviews</a></li>
          </ul>
        </li>
        @endif

      @else
        <li class="sidenav mt">
          <a class="active" href="{{route('trainer.dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="sidenav">
          <a href="{{route('trainer.profile')}}">
            <i class="fa fa-user"></i> <span>Profile</span>
          </a>
        </li>
        @if(Auth::user()->status == 1)
        <li class="sidenav">
          <a href="javascript:;">
            <i class="fa fa-certificate"></i> <span>Trainer</span> <i class="fa fa-caret-down down-arrow"></i>
          </a>
          <ul class="sub">
            <li class="sidenav"><a href="{{route('trainer.index')}}">
            Home</a></li>
            <li class="sidenav"><a href="{{url('#')}}">
            Reviews</a></li>
          </ul>
        </li>
        @endif

      @endif   
    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>

<script>
$(document).ready(function() {
    $("#sidebar ul.sidebar-menu li.sidenav").on('click', function() {
      $(this).toggleClass(".current");
    });
  });
</script>

{{--<script>
  var toggId = document.getElementById("nav-accordion");

  var toggClass = toggId.getElementByClassName("sidenav");
  
  for (var i = 0; i < toggClass.length; i++) {
    toggClass[i].addEventListener("click", function() {
      var current = document.getElementByClassName("active");
      current[0].className = current[0].className.replace("active", "");
      this.className += " active";
    });
  }
</script>--}}

<!--ul.sidebar-menu li a.active-->
