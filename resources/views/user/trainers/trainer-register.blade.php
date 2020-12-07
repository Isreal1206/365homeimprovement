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
              <!--/ col-md-12 -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb">
                @if(Auth::user()->status == 0)
                <div class="profile-text mb">
                  <h3>Trainer Registration</h3>
                  <p>In order to become a training provider on our platform, please do provide us with the following details.</p>
                </div>
                <form method="POST" action="{{route('trainer.store')}}" role="form" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}

                <input id="trainer_id" class="form-control" placeholder="365HIT{{rand(111000,900000)}}" value="365HIT{{rand(111000,900000)}}" type="hidden" name="trainer_id" readonly>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Title:</label>
                  <div class="col-lg-7">
                    <select name="title" class="form-control">
                      <option value="">-- Select a title --</option> 
                      <option>Mr</option>
                      <option>Mrs</option>
                      <option>Miss</option>
                    </select>
                    <small class="text-danger">{{ $errors->first('title') }}</small>
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
                    <input id="organization" class="form-control" placeholder="" type="text" name="organization">
                    <small class="text-danger">{{ $errors->first('organization') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Job Title:</label>
                  <div class="col-lg-7">
                    <select name="job_title" class="form-control">
                      <option value="">-- Select a Job Title --</option> 
                      @foreach($categories as $category)
                        <option value="{{$category->name}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                    <small class="text-danger">{{ $errors->first('job_title') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Training Description:</label>
                  <div class="col-lg-7">
                    <textarea rows="5" cols="30" name="description" class="form-control" placeholder="Give us brief details about your training..."></textarea>
                    <small class="text-danger">{{ $errors->first('description') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-7 col-lg-offset-3 text-danger"><small>Upload Banner of your training with file size not more than 2MB</small></label>
                  <label class="col-lg-3 control-label">Upload Image:</label>
                  <div class="col-lg-7">
                    <input id="image_file" class="form-control-file" placeholder="" type="file" accept="image/png, image/jpeg, image/gif" name="image_file">
                    <small class="text-danger">{{ $errors->first('image_file') }}</small>
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
                  <label class="col-lg-3 control-label">Street Address:</label>
                  <div class="col-lg-7">
                    <input id="address" class="form-control" placeholder="" type="text" name="address">
                    <small class="text-danger">{{ $errors->first('address') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">City:</label>
                  <div class="col-lg-7">
                    <input id="city" class="form-control" placeholder="" type="text" name="city">
                    <small class="text-danger">{{ $errors->first('city') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Country:</label>
                  <div class="col-lg-7">
                    <select name="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" required>
                    <option>-- Select your Country --</option>
                    <option>Afghanistan</option>
                    <option>Albania</option>
                    <option>Algeria</option>
                    <option>Andorra</option>
                    <option>Angola</option>
                    <option>Antigua and Barbuda</option>
                    <option>Argentina</option>
                    <option>Armenia</option>
                    <option>Australia</option>
                    <option>Austria</option>
                    <option>Azerbaijan</option>
                    <option>The Bahamas</option>
                    <option>Bahrain</option>
                    <option>Bangladesh</option>
                    <option>Barbados</option>
                    <option>Belarus</option>
                    <option>Belgium</option>
                    <option>Belize</option>
                    <option>Bhutan</option>
                    <option>Bolivia</option>
                    <option>Bosnia and Herzegovina</option>
                    <option>Botswana</option>
                    <option>Brunei</option>
                    <option>Bulgaria</option>
                    <option>Burkina Faso</option>
                    <option>Burundi</option>
                    <option>Cabo Verde</option>
                    <option>Cambodia</option>
                    <option>Cameroon</option>
                    <option>Canada</option>
                    <option>Central African Republic</option>
                    <option>Chad</option>
                    <option>Chile</option>
                    <option>China</option>
                    <option>Colombia</option>
                    <option>Comoros</option>
                    <option>Congo Democratic Republic</option>
                    <option>Congo</option>
                    <option>Costa Rica</option>
                    <option>Côte d’Ivoire</option>
                    <option>Croatia</option>
                    <option>Cuba</option>
                    <option>Cyprus</option>
                    <option>Czech Republic</option>
                    <option>Denmark</option>
                    <option>Djibouti</option>
                    <option>Dominica</option>
                    <option>Dominican Republic</option>
                    <option>Ecuador</option>
                    <option>Egypt</option>
                    <option>El Salvador</option>
                    <option>England</option>
                    <option>Equatorial Guinea</option>
                    <option>Eritrea</option>
                    <option>Estonia</option>
                    <option>Eswatini</option>
                    <option>Ethiopia</option>
                    <option>Fiji</option>
                    <option>Finland</option>
                    <option>France</option>
                    <option>Gabon</option>
                    <option>Gambia</option>
                    <option>Georgia</option>
                    <option>Germany</option>
                    <option>Ghana</option>
                    <option>Greece</option>
                    <option>Grenada</option>
                    <option>Guatemala</option>
                    <option>Guinea</option>
                    <option>Guinea-Bissau</option>
                    <option>Guyana</option>
                    <option>Haiti</option>
                    <option>Honduras</option>
                    <option>Hungary</option>
                    <option>Iceland</option>
                    <option>India</option>
                    <option>Indonesia</option>
                    <option>Iran</option>
                    <option>Iraq</option>
                    <option>Ireland</option>
                    <option>Israel</option>
                    <option>Italy</option>
                    <option>Jamaica</option>
                    <option>Japan</option>
                    <option>Jordan</option>
                    <option>Kazakhstan</option>
                    <option>Kenya</option>
                    <option>Kiribati</option>
                    <option>North-Korea</option>
                    <option>Kosovo</option>
                    <option>Kuwait</option>
                    <option>Kyrgyzstan</option>
                    <option>Latvia</option>
                    <option>Lebanon</option>
                    <option>Lesotho</option>
                    <option>Liberia</option>
                    <option>Libya</option>
                    <option>Liechtenstein</option>
                    <option>Lithuania</option>
                    <option>Luxembourg</option>
                    <option>Madagascar</option>
                    <option>Malawi</option>
                    <option>Malaysia</option>
                    <option>Maldives</option>
                    <option>Mali</option>
                    <option>Malta</option>
                    <option>Marshall Islands</option>
                    <option>Mauritania</option>
                    <option>Mauritius</option>
                    <option>Mexico</option>
                    <option>Moldova</option>
                    <option>Mongolia</option>
                    <option>Montenegro</option>
                    <option>Morocco</option>
                    <option>Mozambique</option>
                    <option>Myanmar</option>
                    <option>Namibia</option>
                    <option>Nauru</option>
                    <option>Nepal</option>
                    <option>Netherlands</option>
                    <option>New Zealand</option>
                    <option>Nicaragua</option>
                    <option>Niger</option>
                    <option selected>Nigeria</option>
                    <option>North Macedonia</option>
                    <option>Northern Ireland</option>
                    <option>Norway</option>
                    <option>Oman</option>
                    <option>Pakistan</option>
                    <option>Palau</option>
                    <option>Panama</option>
                    <option>Papua New Guinea</option>
                    <option>Paraguay</option>
                    <option>Peru</option>
                    <option>Philippines</option>
                    <option>Poland</option>
                    <option>Portugal</option>
                    <option>Qatar</option>
                    <option>Romania</option>
                    <option>Russia</option>
                    <option>Rwanda</option>
                    <option>Samoa</option>
                    <option>San Marino</option>
                    <option>Saudi Arabia</option>
                    <option>Scotland</option>
                    <option>Senegal</option>
                    <option>Serbia</option>
                    <option>Seychelles</option>
                    <option>Sierra Leone</option>
                    <option>Singapore</option>
                    <option>Slovakia</option>
                    <option>Slovenia</option>
                    <option>Solomon Islands</option>
                    <option>Somalia</option>
                    <option>South Africa</option>
                    <option>South-Korea</option>
                    <option>South-Sudan</option>
                    <option>Spain</option>
                    <option>Sri Lanka</option>
                    <option>Sudan</option>
                    <option>Sweden</option>
                    <option>Switzerland</option>
                    <option>Syria</option>
                    <option>Taiwan</option>
                    <option>Tajikistan</option>
                    <option>Tanzania</option>
                    <option>Thailand</option>
                    <option>Togo</option>
                    <option>Tonga</option>
                    <option>Trinidad and Tobago</option>
                    <option>Tunisia</option>
                    <option>Turkey</option>
                    <option>Turkmenistan</option>
                    <option>Tuvalu</option>
                    <option>Uganda</option>
                    <option>Ukraine</option>
                    <option>United Arab Emirates</option>
                    <option>United Kingdom</option>
                    <option>United States</option>
                    <option>Uruguay</option>
                    <option>Uzbekistan</option>
                    <option>Vanuatu</option>
                    <option>Vatican City</option>
                    <option>Venezuela</option>
                    <option>Vietnam</option>
                    <option>Wales</option>
                    <option>Yemen</option>
                    <option>Zambia</option>
                    <option>Zimbabwe</option>
                    </select>
                    <small class="text-danger">{{ $errors->first('country') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Post Code:</label>
                  <div class="col-lg-7">
                    <input id="post_code" class="form-control" placeholder="Enter a Valid Post Code" type="text" name="post_code">
                    <small class="text-danger">{{ $errors->first('post_code') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Fax:</label>
                  <div class="col-lg-7">
                    <input id="fax" class="form-control" placeholder="Fax Number" type="text" name="fax">
                    <small class="text-danger">{{ $errors->first('fax') }}</small>
                  </div>
                </div>

                <input id="url" class="form-control" placeholder="365homeimprovement.com/trainer" value="365homeimprovement.com/trainer" type="hidden" name="url" readonly>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Price Range:</label>
                  <div class="col-lg-7">
                    <select name="price_range" class="form-control">
                      <option value="">-- What is the price range of your trainings? --</option> 
                      <option>Up to N 5,000</option>
                      <option>N 5,000 - N 50,000</option>
                      <option>N 50,000 - N 150,000</option>
                      <option>N 150,000 and above</option>
                    </select>
                    <small class="text-danger">{{ $errors->first('price_range') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Language:</label>
                  <div class="col-lg-7">
                    <select name="language" class="form-control">
                      <option value="">-- In what language is your trainings delivered? --</option> 
                      <option>English</option>
                      <option>French</option>
                      <option>Hausa</option>
                      <option>Igbo</option>
                      <option>Spanish</option>
                      <option>Yoruba</option>
                    </select>
                    <small class="text-danger">{{ $errors->first('language') }}</small>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-lg-offset-3 col-lg-7">
                    <button class="btn btn-theme" type="submit">Next</button>
                    <button class="btn btn-theme04" type="reset">Reset</button>
                  </div>
                </div>
                </form>
                @else

                <p>You're already a Registered Member. Click <a href="{{route('trainer.index')}}">here</a> to edit your Profile.</p>

                @endif
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
