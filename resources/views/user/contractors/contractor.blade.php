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
                        @if($flash = session('contractor_update'))
                          <div class="alert alert-success text-center" role="alert">
                            <i class="fa fa-check"></i> {{$flash}}
                          </div>
                        @endif
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 pull-right mt">
                          <img src="{{$contractors->banner}}" alt="Banner" class="img-responsive img-fluid border-custom border-radius-custom height-200">
                        </div>
                        <!-- detailed -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive mt">
                          <table class="table table-striped">
                          <tr>
                            <th>CONTRACTOR ID:</th>
                            <td>{{$contractors->contractor_id}}</td>
                          </tr>

                          <tr>
                            <th width="30%">FULLNAMES:</th>
                            <td width="70%">{{$contractors->fullnames}}</td>
                          </tr>

                          <tr>
                            <th width="30%">PLAN:</th>
                            <td width="70%">{{$contractors->plan}}</td>
                          </tr>

                          <tr>
                            <th>COMPANY NAME:</th>
                            <td>{{$contractors->company_name}}</td>
                          </tr>

                          <tr>
                            <th>JOB CATEGORY:</th>
                            <td>{{$contractors->job_category}}</td>
                          </tr>

                          <tr>
                            <th>Description:</th>
                            <td>{!!$contractors->description!!}</td>
                          </tr>

                          <tr>
                            <th width="30%">URL:</th>
                            <td width="70%">{{$contractors->url}}</td>
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
                          <p><strong>Address:</strong> {{$contractors->address}}</p>
                          <p><strong>LGA:</strong> {{$contractors->lga}}</p>
                          <p><strong>State:</strong> {{$contractors->state}}</p>
                        </div>
                        <h4>Contacts</h4>
                        <div class="col-md-8 col-md-offset-2 mt">
                          <p><strong>Mobile Number:</strong> {{$contractors->mobile_no}}</p>
                          <p><strong>Email:</strong> {{$contractors->email}}</p>
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
                        <form method="POST" action="{{route('contractor.update')}}" role="form" enctype="multipart/form-data" class="form-horizontal col-md-12">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label class="control-label col-lg-7 col-lg-offset-3 text-danger"><small>Upload Image of your business with file size not more than 2KB</small></label>
                          <label class="col-lg-3 control-label">Change Photo:</label>
                          <div class="col-lg-9">
                            <input type="file" id="banner" class="file-pos" name="banner">
                            <small class="text-danger">{{ $errors->first('banner') }}</small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label">Fullnames:</label>
                          <div class="col-lg-9">
                            <input id="fullnames" class="form-control" placeholder="{{$contractors->fullnames}}" type="text" name="fullnames" readonly>
                            <small class="text-danger">{{ $errors->first('fullnames') }}</small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label">Email:</label>
                          <div class="col-lg-9">
                            <input id="email" class="form-control" placeholder="{{$contractors->email}}" type="text" name="email" readonly>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label">Name of Organization:</label>
                          <div class="col-lg-9">
                            <input id="company_name" class="form-control" placeholder="{{$contractors->company_name}}" type="text" name="company_name">
                            <small class="text-danger">{{ $errors->first('company_name') }}</small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label">Job Category:</label>
                          <div class="col-lg-9">
                            <input id="job_category" class="form-control" placeholder="{{$contractors->job_category}}" type="text" name="job_category" readonly>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label">Mobile Number:</label>
                          <div class="col-lg-9">
                            <input id="mobile_no" class="form-control" placeholder="{{$contractors->mobile_no}}" type="text" name="mobile_no">
                            <small class="text-danger">{{ $errors->first('mobile_no') }}</small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label">Address:</label>
                          <div class="col-lg-9">
                            <input id="address" class="form-control" placeholder="{{$contractors->address}}" type="text" name="address">
                            <small class="text-danger">{{ $errors->first('address') }}</small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label">State:</label>
                          <div class="col-lg-9">
                            <select id="cstate" name="state" onclick="state_lga('cstate','clga')" class="form-control">
                              <option selected="selected" value="{{$contractors->state}}">-- {{$contractors->state}} --</option>
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
                          <div class="col-lg-9">
                            <select id="clga" name="lga" class="form-control">
                              <option selected="selected" value="{{$contractors->lga}}">-- {{$contractors->lga}} --</option>
                            </select>
                            <small class="text-danger">{{ $errors->first('lga') }}</small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label">Descripiton:</label>
                          <div class="col-lg-9">
                            <textarea rows="7" cols="20" id="article-ckeditor" class="form-control" name="description">{!!$contractors->description!!}</textarea>
                            <small class="text-danger">{{ $errors->first('description') }}</small>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-lg-offset-3 col-lg-9">
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
