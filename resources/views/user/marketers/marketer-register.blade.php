<!DOCTYPE html>
<html lang="en">

<head>
  <!--header start-->
  @include('layouts.backend.header')
  <!--header end-->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--navbar start-->
    @include('layouts.backend.navbar')
    <!--navbar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    @include('layouts.backend.sidebar')
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 main-chart">
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">
              <ul>
                <li>{{ $error }}</li>
              </ul>
            </div>
            @endforeach            
            <div class="row">
              <!--/ col-md-12 -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb">
                <div class="profile-text mb">
                  <h3>Marketer Registration</h3>
                  <p>In order to become a marketer on our platform, please do provide us with the following details.</p>
                </div>
                <form method="POST" action="{{route('marketer.store')}}" role="form" class="form-horizontal">
                {{csrf_field()}}
                <div class="form-group">
                  <input type="hidden" name="marketer_id" placeholder="365HIM{{rand(111000,900000)}}" value="365HIM{{rand(111000,900000)}}" class="form-control">
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Fullnames:</label>
                  <div class="col-lg-7">
                    <input type="text" name="fullnames" placeholder="" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Email Address:</label>
                  <div class="col-lg-7">
                    <input id="email" class="form-control" placeholder="{{Auth::user()->email}}" type="text" name="email" value="{{Auth::user()->email}}" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Organization:</label>
                  <div class="col-lg-7">
                    <input id="company_name" class="form-control" placeholder="" type="text" name="company_name">
                    <small class="text-danger">{{ $errors->first('company_name') }}</small>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Category:</label>
                  <div class="col-lg-7">
                    <select id="category" name="category" class="form-control">
                      <option value="">-- Select a Category --</option>
                      <option value="Bath Products">Bath Products</option>
                      <option value="Bedroom Products">Bedroom Products</option>
                      <option value="Furniture">Furniture</option>
                      <option value="Holiday Decor">Holiday Decor</option>
                      <option value="Home Decor">Home Decor</option>
                      <option value="Home Improvement">Home Improvement</option>
                      <option value="Housekeeping and Laundry">Housekeeping and Laundry</option>
                      <option value="Kitchen and Dining">Kitchen and Dining</option>
                      <option value="Living Products">Living Products</option>
                      <option value="Lighting">Lighting</option>
                      <option value="Outdoor Products">Outdoor Products</option>
                      <option value="Storage and Organization">Storage and Organization</option>
                    </select>
                    <small class="text-danger">{{ $errors->first('category') }}</small>
                  </div>
                </div>
                {{--<div class="form-group">
                  <label class="col-lg-3 control-label">Sub Category:</label>
                  <div class="col-lg-7">
                    <select id="sub_category" name="sub_category" class="form-control">
                      <option selected="selected">-- Select Sub Category --</option>
                      @foreach($categories as $category)
                        <option value="{{$category->sub_name}}">{{$category->sub_name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>--}}
                <div class="form-group">
                  <label class="col-lg-3 control-label">Address:</label>
                  <div class="col-lg-7">
                    <input type="text" name="address" placeholder="" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Mobile Number:</label>
                  <div class="col-lg-7">
                    <input type="text" name="mobile_no" placeholder="" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <input type="hidden" name="website" placeholder="365homeimprovement.com/marketer" value="365homeimprovement/marketer" class="form-control">
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-3 col-lg-7">
                    <button class="btn btn-theme" type="submit">Submit</button>
                    <button class="btn btn-theme04" type="reset">Reset</button>
                  </div>
                </div>
                </form>
              </div>
              <!-- /col-md-12 -->
            </div>
            <!-- /row -->
            
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ds">
            <!-- RECENT ACTIVITIES SECTION -->
            <h4 class="centered mt">RECENT ACTIVITY</h4>
            <!-- First Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-info"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>Just Now</muted>
                  <br/>
                  <a href="#">Paul Rudd</a> purchased an item.<br/>
                </p>
              </div>
            </div>
            <!-- Second Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-info"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>2 Minutes Ago</muted>
                  <br/>
                  <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                </p>
              </div>
            </div>
            <!-- Third Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-info"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>3 Hours Ago</muted>
                  <br/>
                  <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                </p>
              </div>
            </div>

            <!-- CALENDAR-->
            <div id="calendar">
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>
            </div>
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->

    <!--footer start-->
    @include('layouts.backend.footer-copyright')
    <!--footer end-->
  </section>

  <!-- js placed at the end of the document so the pages load faster -->
  @include('layouts.backend.footer')

</body>

</html>
