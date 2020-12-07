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
                  <h3>Contractor Registration</h3>
                  <p>In order to become a contractor on our platform, please do provide us with the following details.</p>
                </div>
                
                <form method="POST" action="{{route('contractor.store')}}" role="form" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                  <div class="col-lg-7 col-lg-offset-3">
                    <input id="contractor_id" class="form-control" value="365HIC{{rand(111000,900000)}}" placeholder="365HIC{{rand(111000,900000)}}" type="hidden" name="contractor_id">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Fullnames:</label>
                  <div class="col-lg-7">
                    <input id="fullnames" class="form-control" placeholder="" type="text" name="fullnames">
                    <small class="text-danger">{{ $errors->first('fullnames') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Email Address:</label>
                  <div class="col-lg-7">
                    <input id="email" class="form-control" placeholder="{{Auth::user()->email}}" type="text" name="email" value="{{Auth::user()->email}}" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Name of Organization:</label>
                  <div class="col-lg-7">
                    <input id="company_name" class="form-control" placeholder="" type="text" name="company_name">
                    <small class="text-danger">{{ $errors->first('company_name') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Job Category:</label>
                  <div class="col-lg-7">
                    <select name="job_category" class="form-control">
                      <option value="">-- Select Category --</option> 
                      @foreach($categories as $category)
                        <option value="{{$category->name}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                    <small class="text-danger">{{ $errors->first('job_category') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Mobile Number:</label>
                  <div class="col-lg-7">
                    <input id="mobile_no" class="form-control" placeholder="" type="text" name="mobile_no">
                    <small class="text-danger">{{ $errors->first('mobile_no') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Address:</label>
                  <div class="col-lg-7">
                    <input id="address" class="form-control" placeholder="" type="text" name="address">
                    <small class="text-danger">{{ $errors->first('address') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">State:</label>
                  <div class="col-lg-7">
                    <select id="cstate" name="state" onclick="state_lga('cstate','clga')" class="form-control"  required>
                      <option selected="selected" value="">-- Select State --</option>
                      <option value='Abia'>Abia</option>
                      <option value='Adamawa'>Adamawa</option>
                      <option value='AkwaIbom'>Akwa Ibom</option>
                      <option value='Anambra'>Anambra</option>
                      <option value='Bauchi'>Bauchi</option>
                      <option value='Bayelsa'>Bayelsa</option>
                      <option value='Benue'>Benue</option>
                      <option value='Borno'>Borno</option>
                      <option value='CrossRivers'>Cross Rivers</option>
                      <option value='Delta'>Delta</option>
                      <option value='Ebonyi'>Ebonyi</option>
                      <option value='Edo'>Edo</option>
                      <option value='Ekiti'>Ekiti</option>
                      <option value='Enugu'>Enugu</option>
                      <option value='Gombe'>Gombe</option>
                      <option value='Imo'>Imo</option>
                      <option value='Jigawa'>Jigawa</option>
                      <option value='Kaduna'>Kaduna</option>
                      <option value='Kano'>Kano</option>
                      <option value='Katsina'>Katsina</option>
                      <option value='Kebbi'>Kebbi</option>
                      <option value='Kogi'>Kogi</option>
                      <option value='Kwara'>Kwara</option>
                      <option value='Lagos'>Lagos</option>
                      <option value='Nasarawa'>Nasarawa</option>
                      <option value='Niger'>Niger</option>
                      <option value='Ogun'>Ogun</option>
                      <option value='Ondo'>Ondo</option>
                      <option value='Osun'>Osun</option>
                      <option value='Oyo'>Oyo</option>
                      <option value='Plateau'>Plateau</option>
                      <option value='Rivers'>Rivers</option>
                      <option value='Sokoto'>Sokoto</option>
                      <option value='Taraba'>Taraba</option>
                      <option value='Yobe'>Yobe</option>
                      <option value='Zamfara'>Zamafara</option>
                    </select>
                    <small class="text-danger">{{ $errors->first('state') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">LGA:</label>
                  <div class="col-lg-7">
                    <select id="clga" name="lga" class="form-control" required>
                      <option selected="selected" value="">-- Select Local Government Area --</option>
                    </select>
                    <small class="text-danger">{{ $errors->first('lga') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Descripiton:</label>
                  <div class="col-lg-7">
                    <textarea rows="7" cols="20" id="article-ckeditor" class="form-control" name="description" placeholder="Give us brief details about your work..."></textarea>
                    <small class="text-danger">{{ $errors->first('description') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-7 col-lg-offset-3 text-danger"><small>Upload Image of your business with file size not more than 2MB</small></label>
                  <label class="col-lg-3 control-label">Upload Photo:</label>
                  <div class="col-lg-7">
                    <input type="file" id="banner" class="file-pos" name="banner">
                    <small class="text-danger">{{ $errors->first('banner') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-lg-7 col-lg-offset-3">
                    <input type="hidden" name="url" placeholder="365homeimprovement.com/contractor" value="365homeimprovement.com/contractor" class="form-control">
                  </div>
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
