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
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-3 detailed">
                <div class="row">
                  <h4>Personal Data</h4>
                  <div class="col-md-12 mt mb">
                    <p><small><strong class="text-uppercase">Full Name</strong></small><br>
                    <span class="text-capitalize">{{$ahomeowner->fullnames}}</span></p>

                    <p><small><strong class="text-uppercase">Date Joined</strong></small><br>
                    <span class="text-capitalize">{{$ahomeowner->created_at->format ('M d, Y.')}}</span></p>
                  </div>
                </div>
                <div class="row">
                  <h4 class="text-left">Official Data</h4>
                  <div class="col-md-12">
                    <p><small><strong class="text-uppercase">Phone</strong></small><br>
                    <span>{{$ahomeowner->mobile_no}}</span></p>

                    <p><small><strong class="text-uppercase">Address</strong></small><br>
                    <span class="text-capitalize">{{$ahomeowner->address}}</span></p>

                    <p><small><strong class="text-uppercase">Email</strong></small><br>
                    <span>{{$ahomeowner->email}}</span></p>

                    <p><small><strong class="text-uppercase">Status</strong></small><br>
                    <span class="text-capitalize">None</span></p>

                    <div class="col-md-8 col-md-offset-2 mt"></div>
                     <p><button class="btn btn-theme"><i class="fa fa-envelope"></i> Send Message</button></p>
                  </div>
                </div>
              </div>
              <!-- /col-md-3 -->
             
              <div class="col-md-6 profile-text">
                <h4 class="text-center">HOMEOWNER</h4>
                <div class="content-panel">
                  <h6 class="text-uppercase text-primary">Request Quote</h6>
                  <div id="unseen table-responsive">
                    @if(count($requests) > 0)
                      <table class="table">
                        <thead>
                          <tr>
                            <th>SN</th>
                            <th>Category</th>
                            <th class="numeric">Description</th>
                            <th class="numeric">Bids</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($requests as $key => $request)
                          <tr>
                            <td>{{$key+1}}</td>
                            <td class="numeric">{{$request->category}}</td>
                            <td class="numeric">{{$request->description}}</td>
                            <td class="numeric">{{$request->bid_no}}</td>
                            <td class="numeric text-center"></td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    @else
                      <h2>No request from this homeowner</h2>
                    @endif 
                  </div>
                </div>

                <!--  list of contractors assignable begin  -->
                <div class="content-panel table-responsive">
                  <h6 class="text-uppercase text-primary">Assignable Contractors</h6>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>SN</th>
                        <th>Contractors&nbsp;Name</th>
                        <th class="numeric">Phone&nbsp;No.</th>
                        <th class="numeric">Email</th>
                        <th class="numeric">State</th>
                        <th class="numeric">Description</th>
                        <th class="numeric">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($contractors as $asscontractor)
                    @if($asscontractor->job_category == $request->category)
                      <tr>
                        <td></td>
                        <td>{{$asscontractor->fullname}}</td>
                        <td class="numeric">{{$asscontractor->mobile_no}}</td>
                        <td class="numeric">{{$asscontractor->email}}</td>
                        <td class="numeric">{{$asscontractor->state}}</td>
                        <td class="numeric">desc</td>
                        <td class="numeric text-center"><input type="checkbox" id="inlineCheckbox1" value="option1"> </td>
                      </tr>
                    @endif
                    @endforeach
                      <tr>
                        <td></td>
                        <td></td>
                        <td class="numeric"></td>
                        <td class="numeric"></td>
                        <td class="numeric"></td>
                        <td class="numeric"></td>
                        <td class="numeric text-center">
                          <form method="POST" action ="{{route('homeowner-detail.sendbids')}}">
                          {{csrf_field()}}
                            {{--<input type ="text" name ="homeowner_id" value="{{$ahomeowner->id}}">--}}
                            <button class="btn btn-theme" type="submit"><i class="fa fa-add"></i> SEND BIDS</button>
                          </form>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /col-md-6 -->
              
              <div class="col-md-3 centered">
                <div class="profile-pic">
                  <p><img src="{{asset('img/mot2.jpg')}}" class="img-circle"></p>
                  <p>
                    <button class="btn btn-theme"><i class="fa fa-check"></i> Activate</button>
                    <button class="btn btn-theme02">Suspend</button>
                  </p>
                </div>

                <textarea rows="3" class="form-control" placeholder="Write Notification"></textarea>
                <div class="grey-style">
                  <div class="pull-right">
                    <button class="btn btn-sm btn-theme03">SEND NOTIFICATION </button>
                  </div>
                </div>
              </div>
              <!-- /col-md-3 -->
            </div>
            <!-- /row -->
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

</body>

</html>






