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
          
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row content-panel">
             
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <!-- /tab-pane -->
                  <div id="edit" class="tab-pane active">
                    <div class="row site-min-height">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">All Properties</h4>
                        @if($flash = session('success'))
                          <div class="alert alert-success" role="alert">
                            {{$flash}}
                          </div>
                        @endif
                        <div class="panel-heading">
                        <div class="row mb-100">
                        @foreach($requestQuote as $request)
                        <div class="col-lg-3 height-50">
                          <a data-toggle="tab" href="#{{$request->id}}">
                          <div class="padx-1 pady-1 border-custom">
                            <img src="{{$request->image_file}}" class="img-responsive w-100 height-150">
                          </div>
                          </a>
                        </div>
                        @endforeach
                        </div>
                        </div>

                        <div class="row">
                          <h4 class="mt-100">Display Property Information</h4>
                          @foreach($requestQuote as $request)
                          <div class="panel-body">
                          <div class="tab-content">
                          <div id="{{$request->id}}" class="tab-pane">
                            <div class="col-lg-5 height-350">
                              <div class="padx-2 pady-2 border-custom">
                                <img src="{{$request->image_file}}" class="img-responsive w-100 height-300">
                                <p class="text-center text-capitalize mt-15">{{$request->created_at->format ('M, d Y.')}}</p>
                              </div>
                            </div>

                            <div class="col-lg-6 col-lg-offset-1">
                              <p class="text-capitalize"><strong>Category:</strong> {{$request->category}}</p>
                              <p class="text-capitalize"><strong>State:</strong> {{$request->state}}</p>
                              <p class="text-capitalize"><strong>LGA:</strong> {{$request->lga}}</p>
                              <p class="text-capitalize"><strong>Start Date:</strong> {{$request->start_work}}</p>
                              <p class="text-capitalize"><strong>Type of Property:</strong> {{$request->property_type}}</p>
                              <p class="text-capitalize"><strong>Type of Work:</strong> {{$request->work_type}}</p>
                              <p class="text-capitalize"><strong>Budget:</strong> {{$request->budget}}</p>
                              <p class="text-capitalize"><strong>Job Status:</strong> {{$request->job_status}}</p>
                              <p class="text-capitalize"><strong>Property Relationship:</strong> {{$request->property_relation}}</p>
                              <p class="text-capitalize"><strong>No. of Bids:</strong> {{$request->bid_no}}</p>
                              <p class="text-capitalize"><strong>Best Time of Contact:</strong> {{$request->contact_time}}</p>
                              <p class="text-capitalize text-justify"><strong>Description:</strong> {{$request->description}}</p>
                            </div>
                          </div>
                          </div>
                          </div>
                          @endforeach
                        </div>

                      </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
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
    <!--main content end-->
    
    <!--footer start-->
    @include('layouts.backend.footer-copyright')
    <!--footer end-->
  </section>

  <!-- js placed at the end of the document so the pages load faster -->
  @include('layouts.backend.footer')
  <script>
    function myFunction() {
      document.getElementById("demo").innerHTML = "Hello World";
    }
    
    document.getElementById("myBtn").addEventListener("click", displayDate);

    function displayDate() {
      document.getElementById("demo").innerHTML = Date();
    }
  </script>

</body>

</html>
