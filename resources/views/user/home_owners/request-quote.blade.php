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
                      
            <div class="row">
              @foreach($errors->all() as $error)
              <div class="alert alert-danger">
                <ul>
                  <li>{{ $error }}</li>
                </ul>
              </div>
              @endforeach
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb">
                <div class="profile-text mb">
                  <h3>Request Quote</h3>
                  <h5 class="text-center">Please do provide us with the following details.</h5>
                  <p class="text-center text-primary">Note: User Mobile Number & Email are used to provide free estimates</p>
                </div>

                <!--form begin-->
                <form method="POST" action="{{route('homeowner.rq_store')}}" role="form" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group my-3">
                  <label for="" class="col-lg-5 control-label">Homeowner ID:</label>
                  <div class="col-lg-7">
                    <input type="text" class="form-control" name ="homeowner_id" placeholder="{{$homeowner->homeowner_id}}" value="{{$homeowner->homeowner_id}}">
                  </div>
                </div>

                <div class="form-group my-3">
                  <label for="" class="col-lg-5 control-label">Email:</label>
                  <div class="col-lg-7">
                    <input type="text" name="email" class="form-control" value="{{$homeowner->email}}" readonly >
                  </div>
                </div>

                <div class="form-group my-3">
                  <label for="category"class="col-lg-5 control-label" >Category:</label>
                  <div class="col-lg-7">
                    <select id="category" name="category" onchange="getSelectValue();" class="form-control" >
                      <option selected="selected">-- Select Caegory --</option>
                      @foreach($categories as $category)
                      <option value="{{$category->name}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                    <small class="text-danger">{{ $errors->first('category') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-5 control-label">State:</label>
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
                  <label class="col-lg-5 control-label">LGA:</label>
                  <div class="col-lg-7">
                    <select id="clga" name="lga" class="form-control" required>
                      <option selected="selected" value="">-- Select Local Government Area --</option>
                    </select>
                    <small class="text-danger">{{ $errors->first('lga') }}</small>
                  </div>
                </div>

                <div class="form-group my-3">
                  <label for="" class="col-lg-5 control-label">When do work start:</label>
                  <div class="col-lg-7">
                    <input type="date" name="start_work"class="form-control"> 
                  </div>
                </div>

                <div class="form-group my-3">
                  <label for="" class="col-lg-5 control-label">What type of property is this?</label>
                  <div class="col-lg-7">
                    <select id="" class="form-control" name ="property_type">
                      <option value="residential">Residential</option>
                      <option value="commercial">Commercial</option>
                    </select>
                  </div>
                </div>

                <div class="form-group my-3">
                  <label for="" class="col-lg-5 control-label">Type of work:</label>
                  <div class ="col-lg-7">
                    <select id="" class="form-control" name ="work_type">
                      <option value="new building">New Building</option>
                      <option value="renovations">Renovations</option>
                      <option value="repairs">Repairs</option>
                      <option value="installation">Installation</option>
                      <option value="maintenance">Maintenance</option>
                      <option value="other">Other</option>
                    </select>
                  </div>
                </div>

                <div class="form-group my-3">
                  <label for="budget" class="col-lg-5 control-label">Budget:</label>
                  <div class ="col-lg-7">
                    <select id="" class="form-control" name ="budget">
                      <option value="under ₦50,000">Under ₦50,000</option>
                      <option value="₦50,000-₦500,000">₦50,000 - ₦500,000</option>
                      <option value="₦500,000-₦5,000,000">₦500,000 - ₦5,000,000</option>
                      <option value="₦5,000,000-₦10,000,000">₦5,000,000 - ₦10,000,000</option>
                      <option value="₦10,000,000-₦100,000,000">₦10,000,000 - ₦100,000,000</option>
                      <option value="over₦100,000,000">More than ₦100,000,000</option>
                      <option value="not-sure">Not Sure</option>
                    </select>
                  </div>
                </div>

                <div class="form-group my-3">
                  <label for="" class="col-lg-5 control-label">What is the status of your job?</label>
                  <div class ="c col-lg-7">
                    <select id="" class="form-control" name ="job_status">
                      <option value="ready-to-hire">Ready to hire</option>
                      <option value="planning&budgeting">Planning & Budgeting</option>
                    </select>
                  </div>
                </div>

                <div class="form-group my-3">
                  <label for="" class="col-lg-5 control-label">What is Your Relationship With This Property?</label>
                  <div class ="col-lg-7">
                    <select id="" class="form-control" name ="property_relation">
                      <option value="i own it">I Own It</option>
                      <option value="i rent it">I Rented It</option>
                      <option value="i am considering buying it">I am considering Buying It</option>
                    </select>
                  </div>
                </div>

                <div class="form-group my-3">
                  <label for="" class="col-lg-5 control-label">Describe what you need done</label>
                  <div class ="col-lg-7">
                    <textarea name='description' id="" class="form-control" rows= "6"></textarea>
                  </div>
                </div>

                <div class="form-group my-3">
                  <label class="control-label col-lg-7 col-lg-offset-5 text-danger"><small>Upload Image with file size not more than 2MB</small></label>
                  <label for="photo" class="col-lg-5 control-label">ATTACH A PLAN, PHOTO ETC:</label>
                  <div class ="col-lg-7">
                    <input type="file" class="form-control-file" name="image_file" aria-describedby="fileHelpId">
                  </div>
                </div>

                <div class="form-group my-3">
                  <label for=""class="col-lg-5 control-label">Select Number of Bids:</label>
                  <div class ="col-lg-7">
                    <select id="" class="form-control" name ="bid_no">
                      <option value="3">How Many Bids / Expression of interest Do You Want From Contractors?</option>
                      <option value="3">3</option>
                      <option value="7">7</option>
                      <option value="10">10</option>
                    </select>
                  </div>
                </div>

                <div class="form-group my-2">
                  <label for="time" class="col-lg-5 control-label">Best Time to Contact You:</label>
                  <div class ="col-lg-7">
                    <select id="time" name="contact_time" class="form-control">
                      <option value="morning">Morning</option>
                      <option value="afternoon">Afternoon</option>
                      <option value="evening">Evening</option>
                      <option value="night">Night</option>        
                    </select>
                  </div>
                </div>
                
                <div class="form-group my-3">
                  <div class ="col-lg-7 col-lg-offset-5">
                    <button type="submit" name="getQuote" class="btn btn-orange my-3">Get Quotes</button>
                  </div>  
                </div>
                
                </form> 
                <!--form end-->

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
  <script type="text/javascript">
  document.getElementById("resulta").value = localStorage.getItem('catQuote');
  document.getElementById("resultb").value = localStorage.getItem('stateQuote');
  document.getElementById("resultc").value = localStorage.getItem('lgaQuote');
</script>
</body>

</html>
