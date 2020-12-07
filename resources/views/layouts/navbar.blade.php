<nav class="navbar navbar-default navbar-trans navbar-expand-sm fixed-top">
  <a class="navbar-brand" href="{{ url('/') }}"><img src="/img/homelogo.png" class="homelogo"></a>
  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
    aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span></span>
    <span></span>
    <span></span>
  </button>

  {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">--}}

  <div class="collapse navbar-collapse justify-content-center" id="navbarDefault">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
      </li>
      
      <li class="nav-item dropdown mega-dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
        <div class="dropdown-menu mega-dropdown-menu bg-menu-position">
          <div class="row px-5">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>A</h4>
              <a href="{{ url('categories/antenna-services') }}" class="nav-text">Antenna Services</a>
              <a href="{{ url('categories/asbestos-removal') }}" class="nav-text">Asbestos Removal</a>
              <a href="{{ url('categories/appliance-installation') }}" class="nav-text">Appliance Installation</a>
              <a href="{{ url('categories/awning-suppliers') }}" class="nav-text">Awning Suppliers</a>
              <a href="{{ url('categories/appliance-repairs') }}" class="nav-text">Appliance Repairs</a>
              <a href="{{ url('categories/awnings') }}" class="nav-text">Awnings</a>
              <a href="{{ url('categories/architecture') }}" class="nav-text">Architecture</a>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>B</h4>
              <a href="{{ url('categories/balustrading') }}" class="nav-text">Balustrading</a>
              <a href="{{ url('categories/blinds') }}" class="nav-text">Blinds</a>
              <a href="{{ url('categories/building-designer') }}" class="nav-text">Building Designer</a>
              <a href="{{ url('categories/bamboo-flooring') }}" class="nav-text">Bamboo Flooring</a>
              <a href="{{ url('categories/bricklaying') }}" class="nav-text">Bricklaying</a>
              <a href="{{ url('categories/building-supplies') }}" class="nav-text">Building Supplies</a>
              <a href="{{ url('categories/bath-and-basin-resurfacing') }}" class="nav-text">Bath & Basin Resurfacing</a>
              <a href="{{ url('categories/building-certifiers') }}" class="nav-text">Building Certifiers</a>
              <a href="{{ url('categories/building-surveyors') }}" class="nav-text">Building Surveyors</a>
              <a href="{{ url('categories/bathroom-accessories') }}" class="nav-text">Bathroom Accessories</a>
              <a href="{{ url('categories/building-consultants') }}" class="nav-text">Building Consultants</a>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>C</h4>
              <a href="{{ url('categories/cabinet-making') }}" class="nav-text">Cabinet Making</a>
              <a href="{{ url('categories/ceilings') }}" class="nav-text">Ceilings</a>
              <a href="{{ url('categories/concrete-kerbs') }}" class="nav-text">Concrete Kerbs</a>
              <a href="{{ url('categories/carpet-repair-and-laying') }}" class="nav-text">Carpet Repair & Laying</a>
              <a href="{{ url('categories/chimney-sweepers') }}" class="nav-text">Chimney Sweepers</a>
              <a href="{{ url('categories/concrete-resurfacing') }}" class="nav-text">Concrete Resurfacing</a>
              <a href="{{ url('categories/carpets') }}" class="nav-text">Carpets</a>
              <a href="{{ url('categories/cladding') }}" class="nav-text">Cladding</a>
              <a href="{{ url('categories/curtains') }}" class="nav-text">Curtains</a>
              <a href="{{ url('categories/carports') }}" class="nav-text">Carports</a>
              <a href="{{ url('categories/cleaning-services-commercial') }}" class="nav-text">Cleaning Services - Commercial</a>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>D</h4>
              <a href="{{ url('categories/damp-proofing') }}" class="nav-text">Damp Proofing</a>
              <a href="{{ url('categories/demolition') }}" class="nav-text">Demolition</a>
              <a href="{{ url('categories/door-suppliers') }}" class="nav-text">Door Suppliers</a>
            </div>
          </div>

          <div class="dropdown-divider"></div>

          <div class="row px-5">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>E</h4>
              <a href="{{ url('categories/equipment-hire') }}" class="nav-text">Equipment Hire</a>
              <a href="{{ url('categories/excavation') }}" class="nav-text">Excavation</a>
              <a href="{{ url('categories/extensions-and-additions') }}" class="nav-text">Extensions & Additions</a>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>F</h4>
              <a href="{{ url('categories/feng-shui') }}" class="nav-text">Feng Shui</a>
              <a href="{{ url('categories/floor-coatings') }}" class="nav-text">Floor Coatings</a>
              <a href="{{ url('categories/flyscreens') }}" class="nav-text">Flyscreens</a>
              <a href="{{ url('categories/furniture-custom-design') }}" class="nav-text">Furniture - Custom Design</a>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>G</h4>
              <a href="{{ url('categories/garages') }}" class="nav-text">Garages</a>
              <a href="{{ url('categories/gates') }}" class="nav-text">Gates</a>
              <a href="{{ url('categories/gutter-protection') }}" class="nav-text">Gutter Protection</a>
              <a href="{{ url('categories/garden-designer') }}" class="nav-text">Garden Designer</a>
              <a href="{{ url('categories/gazebo') }}" class="nav-text">Gazebo</a>
              <a href="{{ url('categories/garden-maintenance') }}" class="nav-text">Garden Maintenance</a>
              <a href="{{ url('categories/gas-fitters') }}" class="nav-text">Gas Fitters</a>
              <a href="{{ url('categories/gutter-cleaning') }}" class="nav-text">Gutter Cleaning</a>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>H</h4>
              <a href="{{ url('categories/handrails') }}" class="nav-text">Handrails</a>
              <a href="{{ url('categories/home-security-products') }}" class="nav-text">Home Security Products</a>
              <a href="{{ url('categories/heaters') }}" class="nav-text">Heaters</a>
              <a href="{{ url('categories/home-theatre') }}" class="nav-text">Home Theatre</a>
              <a href="{{ url('categories/heating-systems') }}" class="nav-text">Heating Systems</a>
              <a href="{{ url('categories/homewares') }}" class="nav-text">Homewares</a>
              <a href="{{ url('categories/home-automation') }}" class="nav-text">Home Automation</a>
              <a href="{{ url('categories/hot-water-systems') }}" class="nav-text">Hot Water Systems</a>
            </div>
          </div>

          <div class="dropdown-divider"></div>

          <div class="row px-5">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>I</h4>
              <a href="{{ url('categories/ikea-bathrooms') }}" class="nav-text">IKEA Bathrooms</a>
              <a href="{{ url('categories/inspections-pest') }}" class="nav-text">Inspections - Pest</a>
              <a href="{{ url('categories/irrigation-systems') }}" class="nav-text">Irrigation Systems</a>
              <a href="{{ url('categories/ikea-kitchen-installers') }}" class="nav-text">IKEA Kitchen Installers</a>
              <a href="{{ url('categories/insulation') }}" class="nav-text">Insulation</a>
              <a href="{{ url('categories/ikea-lighting-installation-and-assembly') }}" class="nav-text">IKEA Lighting Installation and Assembly</a>
              <a href="{{ url('categories/interior-decorating') }}" class="nav-text">Interior Decorating</a>
              <a href="{{ url('categories/inspections-building') }}" class="nav-text">Inspections - Building</a>
              <a href="{{ url('categories/interior-designer') }}" class="nav-text">Interior Designer</a>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>J</h4>
              <a href="{{ url('categories/joinery') }}" class="nav-text">Joinery</a>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>K</h4>
              <a href="{{ url('categories/kitchen-design') }}" class="nav-text">Kitchen Design</a>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>L</h4>
              <a href="{{ url('categories/landscape-architecture') }}" class="nav-text">Landscape Architecture</a>
              <a href="{{ url('categories/limestone') }}" class="nav-text">Limestone</a>
              <a href="{{ url('categories/lawn-and-turf') }}" class="nav-text">Lawn & Turf</a>
              <a href="{{ url('categories/locksmiths') }}"class="nav-text">Locksmiths</a>
              <a href="{{ url('categories/lawn-mowing') }}" class="nav-text">Lawn Mowing</a>
              <a href="{{ url('categories/lighting') }}" class="nav-text">Lighting</a>
            </div>
          </div>

          <div class="dropdown-divider"></div>

          <div class="row px-5">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>M</h4>
              <a href="{{ url('categories/mirrors') }}" class="nav-text">Mirrors</a>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>P</h4>
              <a href="{{ url('categories/patios') }}" class="nav-text">Patios</a>
              <a href="{{ url('categories/pool-heating') }}" class="nav-text">Pool Heating</a>
              <a href="{{ url('categories/professional-organisers') }}" class="nav-text">Professional Organisers</a>
              <a href="{{ url('categories/pergolas') }}" class="nav-text">Pergolas</a>
              <a href="{{ url('categories/pool-maintenance') }}" class="nav-text">Pool Maintenance</a>
              <a href="{{ url('categories/project-management') }}" class="nav-text">Project Management</a>
              <a href="{{ url('categories/pool-builders') }}" class="nav-text">Pool Builders</a>
              <a href="{{ url('categories/pressure-cleaning') }}" class="nav-text">Pressure Cleaning</a>
              <a href="{{ url('categories/pool-fencing') }}" class="nav-text">Pool Fencing</a>
              <a href="{{ url('categories/privacy-screens') }}" class="nav-text">Privacy Screens</a>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>R</h4>
              <a href="{{ url('categories/rainwater-tanks') }}" class="nav-text">Rainwater Tanks</a>
              <a href="{{ url('categories/render') }}" class="nav-text">Render</a>
              <a href="{{ url('categories/roller-shutters') }}" class="nav-text">Roller Shutters</a>
              <a href="{{ url('categories/rubbish-removal') }}" class="nav-text">Rubbish Removal</a>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>S</h4>
              <a href="{{ url('categories/scaffolding') }}" class="nav-text">Scaffolding</a>
              <a href="{{ url('categories/shopfitters') }}" class="nav-text">Shopfitters</a>
              <a href="{{ url('categories/skylights') }}" class="nav-text">Skylights</a>
              <a href="{{ url('categories/staircases') }}" class="nav-text">Staircases</a>
              <a href="{{ url('categories/security') }}" class="nav-text">Security</a>
              <a href="{{ url('categories/shower-repairs') }}" class="nav-text">Shower Repairs</a>
              <a href="{{ url('categories/solar-power') }}" class="nav-text">Solar Power</a>
              <a href="{{ url('categories/stonemasonry') }}" class="nav-text">Stonemasonry</a>
              <a href="{{ url('categories/shades-and-sails') }}" class="nav-text">Shades & Sails</a>
              <a href="{{ url('categories/shower-screens') }}" class="nav-text">Shower Screens</a>
              <a href="{{ url('categories/splashbacks') }}" class="nav-text">Splashbacks</a>
              <a href="{{ url('categories/storage') }}" class="nav-text">Storage</a>
              <a href="{{ url('categories/sheds') }}" class="nav-text">Sheds</a>
              <a href="{{ url('categories/skip-and-truck-hire') }}" class="nav-text">Skip & Truck Hire</a>
              <a href="{{ url('categories/stained-glass') }}" class="nav-text">Stained Glass</a>
              <a href="{{ url('categories/surveyors') }}" class="nav-text">Surveyors</a>
            </div>
          </div>

          <div class="dropdown-divider"></div>

          <div class="row px-5">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>T</h4>
              <a href="{{ url('categories/timber-flooring') }}" class="nav-text">Timber Flooring</a>
              <a href="{{ url('categories/town-planning') }}" class="nav-text">Town Planning </a>
              <a href="{{ url('categories/tree-felling') }}" class="nav-text" class="nav_drop">Tree Felling</a>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>U</h4>
              <a href="{{ url('categories/underfloor-heating') }}" class="nav-text">Underfloor Heating</a>
              <a href="{{ url('categories/underpinning') }}" class="nav-text">Underpinning</a>
              <a href="{{ url('categories/upholstery-repair') }}" class="nav-text">Upholstery Repair</a>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>V</h4>
              <a href="{{ url('categories/ventilation') }}" class="nav-text">Ventilation</a>
              <a href="{{ url('categories/verandahs') }}" class="nav-text">Verandahs</a>
              <a href="{{ url('categories/vinyl-and-laminate') }}" class="nav-text">Vinyl & Laminate</a>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h4>W</h4>
              <a href="{{ url('categories/wallpapering') }}" class="nav-text">Wallpapering</a>
              <a href="{{ url('categories/window-repairs') }}" class="nav-text">Window Repairs</a>
              <a href="{{ url('categories/wardrobes') }}" class="nav-text">Wardrobes</a>
              <a href="{{ url('categories/window-shutters') }}" class="nav-text">Window Shutters</a>
              <a href="{{ url('categories/waterproofing') }}" class="nav-text">Waterproofing</a>
              <a href="{{ url('categories/window-tinting') }}" class="nav-text">Window Tinting</a>
              <a href="{{ url('categories/window-cleaning') }}" class="nav-text">Window Cleaning</a>
              <a href="{{ url('categories/windows') }}" class="nav-text">Windows</a>
            </div>
          </div>

        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('costguide')}}">Cost Guide</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('blog')}}">Blog</a>
      </li>

      @guest
      <li class="nav-item nav-account">
        <a class="nav-link" href="{{ route('login') }}">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a>
      </li>

      <li class="nav-item nav-account">
        <a class="nav-link" href="/user/signup">Signup <i class="fa fa-user-plus" aria-hidden="true"></i></a>
      </li>

      @else
      <li class="nav-item dropdown dropnav">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <img src="{{Auth::user()->avatar}}" class="navbar-circle"> 
          {{ Auth::user()->username }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu drop-menu-position" aria-labelledby="navbarDropdown">
          <div class="row pl-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
              @if(Auth::user()->role_id == 1)
                <a class="text-white" href="{{route('contractor.dashboard')}}">
              @elseif(Auth::user()->role_id == 2)
                <a class="text-white" href="{{route('homeowner.dashboard')}}">
              @elseif(Auth::user()->role_id == 3)
                <a class="text-white" href="{{route('marketer.dashboard')}}">
              @else
                <a class="text-white" href="{{route('trainer.dashboard')}}">
              @endif
              {{ __('My Dashboard') }}<i class="" aria-hidden="true"></i>
              </a>
            </div>
          </div>

          <div class="dropdown-divider"></div>
          
          <div class="row pl-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
              <a class="text-white" href="{{ route('logout') }}" 
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('Logout') }}<i class="fa fa-sign-out-alt" aria-hidden="true"></i>
              </a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf
            </form>
          </div>
        </div>
      </li>
      @endguest
    </ul>

    {{--<li class="nav-item dropdown dropnav">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>--}}
  </div>
</nav>
