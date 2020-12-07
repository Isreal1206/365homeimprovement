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
        <div class="row site-min-height">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            @foreach($trainers as $trainer)
              @if(Auth::user()->email == $trainer->email)
              <div class="row content-panel">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel-heading">
                  <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                      <a data-toggle="tab" href="#overview">Overview</a>
                    </li>
                    <li>
                      <a data-toggle="tab" href="#contact" class="contact-map">Contact</a>
                    </li>
                    <li>
                      <a data-toggle="tab" href="#edit">Edit</a>
                    </li>
                  </ul>
                </div>
                <!-- /panel-heading -->
                <div class="panel-body">
                  <div class="tab-content">
                    <div id="overview" class="tab-pane active">
                      <div class="row site-min-height">
                        <div class="col-md-10 col-md-offset-1 detailed">
                          @if($flash = session('trainer_update'))
                            <div class="alert alert-success text-center" role="alert">
                              <i class="fa fa-check"></i> {{$flash}}
                            </div>
                          @endif
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 pull-right mt">
                            <img src="{{$trainer->image_file}}" alt="Logo" class="img-responsive img-fluid border-custom border-radius-custom height-200">
                          </div>
                          <!-- detailed -->
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive mt-100">
                            <table class="table table-striped box-shadow">
                            <tr>
                              <th>TRAINER ID:</th>
                              <td>{{$trainer->trainer_id}}</td>
                            </tr>

                            <tr>
                              <th width="30%">TRAINER NAME:</th>
                              <td width="70%">{{$trainer->title}} {{$trainer->fullnames}}</td>
                            </tr>

                            <tr>
                              <th>ORGANIZATION:</th>
                              <td>{{$trainer->organization}}</td>
                            </tr>

                            <tr>
                              <th>JOB TITLE:</th>
                              <td>{{$trainer->job_title}}</td>
                            </tr>

                            <tr>
                              <th>TRAINING DESCRIPTION:</th>
                              <td>{{$trainer->description}}</td>
                            </tr>

                            <tr>
                              <th>TRAINING PRICE RANGE:</th>
                              <td>{{$trainer->price_range}}</td>
                            </tr>
                            
                            <tr>
                              <th>LANGUAGE USED:</th>
                              <td>{{$trainer->language}}</td>
                            </tr>

                            <tr>
                              <th>URL:</th>
                              <td>{{$trainer->url}}</td>
                            </tr>
                            </table>
                          </div>
                          <!-- /detailed -->
                        </div>
                        <!-- /col-md-12 -->
                      </div>
                      <!-- row -->
                    </div>
                    <!-- /tab-pane -> OVERVIEW -->

                    <div id="contact" class="tab-pane">
                      <div class="row site-min-height">
                        <div class="col-md-6">
                          <div id="map"></div>
                        </div>
                        <!-- /col-md-6 -->
                        <div class="col-md-6 detailed">
                          <h4>Location</h4>
                          <div class="col-md-8 col-md-offset-2 mt mb">
                            <p><strong>Address:</strong> {{$trainer->address}}</p>
                            <p><strong>Post Code:</strong> {{$trainer->post_code}}</p>
                            <p><strong>City:</strong> {{$trainer->city}}</p>
                            <p><strong>Country:</strong> {{$trainer->country}}</p>
                          </div>
                          <h4>Contacts</h4>
                          <div class="col-md-8 col-md-offset-2 mt">
                            <p><strong>Mobile Number:</strong> {{$trainer->mobile_no}}</p>
                            <p><strong>Fax Number:</strong> {{$trainer->fax}}</p>
                            <p><strong>Email:</strong> {{$trainer->email}}</p>
                          </div>
                        </div>
                        <!-- /col-md-6 -->
                      </div>
                      <!-- /row -->
                    </div>
                    <!-- /tab-pane -> CONTACT-->

                    <div id="edit" class="tab-pane">
                      <div class="row site-min-height">
                        <div class="col-md-10 col-md-offset-1 detailed mt">
                          <form method="POST" action="{{route('trainer.update')}}" role="form" enctype="multipart/form-data" class="form-horizontal col-md-12">
                          {{csrf_field()}}
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Name of Organization:</label>
                            <div class="col-lg-7">
                              <input id="organization" class="form-control" placeholder="{{$trainer->organization}}" type="text" name="organization">
                              <small class="text-danger">{{ $errors->first('organization') }}</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Job Title:</label>
                            <div class="col-lg-7">
                              <input id="job_title" class="form-control" placeholder="{{$trainer->job_title}}" type="text" name="job_title" readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Training Description:</label>
                            <div class="col-lg-7">
                              <textarea rows="5" cols="30" name="description" class="form-control" placeholder="">{{$trainer->description}}</textarea>
                              <small class="text-danger">{{ $errors->first('description') }}</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Upload Image:</label>
                            <div class="col-lg-7">
                              <input id="image_file" class="form-control-file" type="file" accept="image/png, image/jpeg, image/gif" name="image_file">
                              <small class="text-danger">{{ $errors->first('image_file') }}</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Mobile Number:</label>
                            <div class="col-lg-7">
                              <input id="mobile_no" class="form-control" placeholder="{{$trainer->mobile_no}}" type="text" name="mobile_no">
                              <small class="text-danger">{{ $errors->first('mobile_no') }}</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Street Address:</label>
                            <div class="col-lg-7">
                              <input id="address" class="form-control" placeholder="{{$trainer->address}}" type="text" name="address">
                              <small class="text-danger">{{ $errors->first('address') }}</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">City:</label>
                            <div class="col-lg-7">
                              <input id="city" class="form-control" placeholder="{{$trainer->city}}" type="text" name="city" readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Country:</label>
                            <div class="col-lg-7">
                              <input id="country" class="form-control" placeholder="{{$trainer->country}}" type="text" name="country" readonly>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Post Code:</label>
                            <div class="col-lg-7">
                              <input id="post_code" class="form-control" placeholder="{{$trainer->post_code}}" type="text" name="post_code">
                              <small class="text-danger">{{ $errors->first('post_code') }}</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Fax:</label>
                            <div class="col-lg-7">
                              <input id="fax" class="form-control" placeholder="{{$trainer->fax}}" type="text" name="fax">
                              <small class="text-danger">{{ $errors->first('fax') }}</small>
                            </div>
                          </div>
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
                            <div class="col-lg-offset-4 col-lg-8">
                              <button class="btn btn-theme" type="submit">Save</button>
                              <button class="btn btn-theme04" type="reset">Reset</button>
                            </div>
                          </div>
                          </form>
                        </div>
                        <!-- /col-lg-8 -->
                      </div>
                      <!-- /row -->
                    </div>
                    <!-- /tab-pane -> EDIT -->
                  </div>
                  <!-- /tab-content -->
                </div>
                <!-- /panel-body -->
                </div>
                <!-- /col-12 -->
              </div>
              <!-- /row content-panel -->
              @endif
            @endforeach
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->

    <!--footer start-->
    @include('layouts.backend.footer-copyright')
    <!--footer end-->
  </section>

  <!-- js placed at the end of the document so the pages load faster -->
  @include('layouts.backend.footer')
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace( 'article-ckeditor' );
  </script>

</body>

</html>
