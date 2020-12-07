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
                    <span class="text-capitalize">{{$amarketer->fullnames}}</span></p>

                    <p><small><strong class="text-uppercase">Date Joined</strong></small><br>
                    <span class="text-capitalize">{{$amarketer->created_at->format ('M d, Y.')}}</span></p>
                  </div>
                </div>
                <div class="row">
                  <h4 class="text-left">Official Data</h4>
                  <div class="col-md-12">
                    <p><small><strong class="text-uppercase">Company Name</strong></small><br>
                    <span class="text-capitalize">{{$amarketer->company_name}}</span></p>

                    <p><small><strong class="text-uppercase">Phone</strong></small><br>
                    <span>{{$amarketer->mobile_no}}</span></p>

                    <p><small><strong class="text-uppercase">Address</strong></small><br>
                    <span class="text-capitalize">{{$amarketer->address}}</span></p>

                    <p><small><strong class="text-uppercase">Email</strong></small><br>
                    <span>{{$amarketer->email}}</span></p>

                    <p><small><strong class="text-uppercase">Website</strong></small><br>
                    <span>{{$amarketer->website}}</span></p>

                    <p><small><strong class="text-uppercase">Status</strong></small><br>
                    <span class="text-capitalize">{{$amarketer->status}}</span></p>

                    <div class="col-md-8 col-md-offset-2 mt"></div>
                     <p><button class="btn btn-theme"><i class="fa fa-envelope"></i> Send Message</button></p>
                  </div>
                </div>
              </div>
              <!-- /col-md-4 -->

              <div class="col-md-6 profile-text">
                <h4 class="text-center">MARKETER</h4>
                <div class="content-panel">
                  <h6 class="text-uppercase text-primary">Products</h6>
                  <div id="unseen table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>SN</th>
                          <th>Name</th>
                          <th class="numeric">Price</th>
                          <th class="numeric">Category</th>
                          <th class="numeric">Image</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($marketerpro as $key => $product)
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$product->name}}</td>
                          <td class="numeric">{{$product->price}}</td>
                          <td class="numeric">{{$product->category}}</td>
                          <td class="numeric"><img src="{{$product->image_file}}" width="75px" height="50px"></td>
                        </tr>
                        @endforeach
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td class="numeric">
                            <form method="POST" action ="{{route('market-detail.status')}}">
                            {{csrf_field()}}
                              <input type ="hidden" name ="marketer_id" value="{{$amarketer->id}}">
                              <button  class="btn btn-theme02" type="submit">
                                @if($amarketer->status =='approved')
                                UNAPPROVE 
                                @else
                                APPROVE
                                @endif
                              </button>
                            </form>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
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

  </section>

  <!-- js placed at the end of the document so the pages load faster -->
  @include('layouts.backend.footer')

</body>

</html>