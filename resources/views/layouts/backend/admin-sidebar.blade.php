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
     
       <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-desktop"></i>
          <span>Clients</span>
        </a>
        <ul class="sub admin">
          <li><a href="{{url('admin/all-contractors')}}">Contractors</a></li>
          <li><a href="{{url('/admin/all-homeowners')}}">Home owners</a></li>
          <li><a href="{{url('admin/all-marketers')}}">Marketers</a></li>
          <li><a href="{{url('admin/all-trainers')}}">Trainers</a></li>
        </ul>
      </li>
      <li class="sidenav">
        <a href="{{url('admin/categories')}}">
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
        <a href="{{url('admin/all-articles')}}">
          <i class="fa fa-cogs"></i>
          <span>Articles</span>
        </a>
        
      </li>
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-book"></i>
          <span>Jobs</span>
        </a>
        <ul class="sub admin">
          <li><a href="{{url('#')}}">All jobs</a></li>
          <li><a href="{{url('#')}}">Add jobs</a></li>
           </ul>
      </li>
      <li class="sidenav">
        <a href="{{url('/admin/cost-guide')}}">
          <i class="fa fa-list-alt"></i>
          <span>Cost guide</span>
        </a>
      </li>
      <li class="sidenav">
        <a href="{{url('/admin/admin-users')}}">
          <i class="fa fa-list-alt"></i>
          <span>Users</span>
        </a>
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