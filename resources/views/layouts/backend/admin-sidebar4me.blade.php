<aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
      <p class="centered"><a href="{{url('#')}}"><img src="{{Auth::user()->avatar}}" class="avatar"></a></p>
      <h5 class="centered">{{ Auth::user()->username }}</h5>
      <li class="mt">
        <a class="active" href="{{route('admin.dashboard')}}">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="{{route('admin.profile')}}">
          <i class="fa fa-user"></i>
          <span>Profile</span>
        </a>
      </li>
      <li class="sidenav">
        <a href="{{route('admin.contractor')}}">
          <i class="fa fa-building-o"></i>
          <span>Contractors</span>
        </a>
      </li>
      <li class="sidenav">
        <a href="{{url('#')}}">
          <i class="fa fa-home"></i>
          <span>Homeowners</span>
        </a>
      </li>
      <li class="sidenav">
        <a href="{{url('#')}}">
          <i class="fa fa-shopping-cart"></i>
          <span>Marketers</span>
        </a>
      </li>
      <li class="sidenav">
        <a href="{{url('#')}}">
          <i class="fa fa-certificate"></i>
          <span>Trainers</span>
        </a>
      </li>
      <li class="sidenav">
        <a href="{{route('admin.category')}}">
          <i class="fa fa-list-alt"></i>
          <span>Categories</span>
        </a>
      </li>
      <li class="sidenav">
        <a href="{{route('admin.marketcategory')}}">
          <i class="fa fa-list-alt"></i>
          <span>Market Categories</span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-desktop"></i> <span>UI Elements</span> <i class="fa fa-caret-down down-arrow"></i>
        </a>
        <ul class="sub admin">
          <li><a href="{{url('#')}}">General</a></li>
          <li><a href="{{url('#')}}">Buttons</a></li>
          <li><a href="{{url('#')}}">Panels</a></li>
          <li><a href="{{url('#')}}">Font Awesome</a></li>
        </ul>
      </li>
    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>

{{--<script type="text/javascript">
  $(document).ready(function(){
    $('ul li a').click(function(){
      $('li a').removeClass("active");
      $(this).addClass("active");
    });
  });
</script>--}}

<!--<script>
  $('a').click(function(){
    $('a.active').each(function(){
      $(this).removeClass('active');
    });
    $(this).addClass('active');
  });
</script>-->