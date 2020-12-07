<!DOCTYPE html>
<html lang="en">

<head>
  <!--header start-->
  @include('layouts.backend.admin-header')
  <!--header end-->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--navbar start-->
    @include('layouts.backend.admin-navbar')
    <!--navbar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    @include('layouts.backend.admin-sidebar')
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li  class="active">
                    <a data-toggle="tab" href="#contractors" class="contact-map">All Contractors</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#edit">Edit Contractor</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#overview">Overview</a>
                  </li>
                </ul>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <div id="contractors" class="tab-pane active">
                    <div class="row site-min-height">
                      <div class="col-md-10 col-md-offset-1 detailed">
                        <h4>List of 365Homeimprovement Contractors</h4>
                        <div class="mt">
                          <h3 class="text-danger">List not found.</h3>
                        </div>
                        
                      </div>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->

                  <div id="edit" class="tab-pane">
                    <div class="row site-min-height">
                      <div class="col-md-10 col-md-offset-1 detailed mt">
                        @if($flash = session('success'))
                          <div class="alert alert-success" role="alert">
                            {{$flash}}
                          </div>
                        @endif
                        <form method="POST" action="" role="form" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Company Logo:</label>
                          <div class="col-lg-7">
                            <input type="file" id="company_logo" class="file-pos" name="logo">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Company Name:</label>
                          <div class="col-lg-7">
                            <input type="text" placeholder="" id="company_name" class="form-control" name="company_name">
                            <small class="text-danger">{{ $errors->first('company_name') }}</small>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Job Category:</label>
                          <div class="col-lg-7">
                            <select name="category_id" class="form-control">
                            @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Phone Number:</label>
                          <div class="col-lg-7">
                            <input type="text" placeholder="" id="phone" class="form-control" name="phone">
                            <small class="text-danger">{{ $errors->first('phone') }}</small>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Company Address:</label>
                          <div class="col-lg-7">
                            <input type="text" placeholder="" id="address" class="form-control" name="address">
                            <small class="text-danger">{{ $errors->first('address') }}</small>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Description:</label>
                          <div class="col-lg-7">
                            <textarea rows="7" cols="20" class="form-control" id="description" name="description"></textarea>
                            <small class="text-danger">{{ $errors->first('description') }}</small>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-offset-3 col-lg-7">
                            <button class="btn btn-theme" type="submit">Save</button>
                            <button class="btn btn-theme04" type="button">Cancel</button>
                          </div>
                        </div>
                        </form>
                      </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->

                  <div id="overview" class="tab-pane">
                    <div class="row site-min-height">

                      <div class="col-md-10 col-md-offset-1 detailed">
                        <div class="col-md-3 pull-right mt">
                          <img src="" alt="Company Logo" class="custom-circle">
                        </div>
                        <!-- detailed -->
                        <div class="col-md-12 table-responsive mt">

                          <table class="table table-striped">
                          <tr>
                            <th>COMPANY NAME:</th>
                            <td>{{Auth::user()->company}}</td>
                          </tr>
                          
                          <tr>
                            <th>JOB CATEGORY:</th>
                            <td>{{Auth::user()->category}}</td>
                          </tr>

                          <tr>
                            <th>PHONE NUMBER:</th>
                            <td>{{Auth::user()->phone}}</td>
                          </tr>

                          <tr>
                            <th>COMPANY ADDRESS:</th>
                            <td>{{Auth::user()->address}}</td>
                          </tr>

                          <tr>
                            <th>DESCRIPTION:</th>
                            <td>{{Auth::user()->description}}</td>
                          </tr>
                          </table>
                          <!-- /recent-activity -->
                        </div>
                        <!-- /detailed -->

                      </div>

                      <!-- /col-md-12 -->

                    </div>
                    <!-- /OVERVIEW -->
                  </div>
                  <!-- /tab-pane -->

                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
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

</body>

</html>
