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
    <section id ="main-content">
      <section class ="wrapper">
        <div class ="row">
          <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 main-chart">
            <div class="row mt">
              <!--/ col-md-6 -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb">
                <h4 class="text-center">ALL HOMEOWNERS</h4>
                <div class="row p-3 text-center mb">
                  <div class="col-lg-2 col-lg-offset-2">
                    <a href="{{url('admin/all-contractors')}}" class="">CONTRACTORS</a>
                  </div>
                  
                  <div class="col-lg-2">
                    <a href="{{url('admin/all-homeowners')}}" class="">HOMEOWNERS</a>
                    <div class="bottom_line"></div>
                  </div>
                  
                  <div class="col-lg-2">
                    <a href="{{url('admin/all-marketers')}}" class="">MARKETERS</a>
                  </div>
                  
                  <div class="col-lg-2">
                    <a href="{{url('admin/all-trainers')}}"class="">TRAINERS</a>
                  </div>
                </div>
              </div>
            </div>

            @if(count($homeowners) > 0)
            <div style="overflow-x:auto;" class="shadow p-1">
              <table class ="table">
                <tr class="t-head">
                  <th>S/N</th>
                  <th>Full&nbsp;Name</th>
                  <th>Address</th>
                  <th>Phone&nbsp;Number</th>
                  <th>Date&nbsp;Joined</th>
                  <th class="text-center">Action</th>
                </tr>
                @foreach($homeowners as $key => $homeowner)
                <tr>
                  <td>{{$key+1}}</td>
                  <td class="text-capitalize">{{$homeowner->fullnames}}</td>
                  <td class="text-capitalize">{{$homeowner->address}}</td>
                  <td>{{$homeowner->mobile_no}}</td>
                  <td>{{$homeowner->created_at}}</td>
                  <td class="text-center"><a href="{{url('admin/homeowner-details/'.$homeowner->homeowner_id)}}" class="btn btn-md btn-info">More</a>&nbsp;<a href="{{url('delete-contractor/'.$homeowner->id)}}" class="btn btn-md btn-danger" onclick="return confirm('Are you sure you wana delete this item?')">Delete</a></td>
                </tr>
                @endforeach
              </table>

              <div class="mt-3">{{$homeowners->links()}}</div>
            </div>
            
            @else
            <p class="text-center text-danger h2">No Record Available</p>
            @endif
          </div>

          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ds">
            <!--COMPLETED ACTIONS DONUTS CHART-->
            <div class="donut-main donut-chart">
              <h4>COMPLETED ACTIONS & PROGRESS</h4>
              <canvas id="newchart" height="130" width="130"></canvas>
              <script>
                var doughnutData = [{
                    value: 55,
                    color: "#fd7e14"
                  },
                  {
                    value: 45,
                    color: "#fdfdfd"
                  }
                ];
                var myDoughnut = new Chart(document.getElementById("newchart").getContext("2d")).Doughnut(doughnutData);
              </script>
              <h2>55%</h2>
            </div>
                
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

  </section>

  <!-- js placed at the end of the document so the pages load faster -->
  @include('layouts.backend.footer')

</body>

</html>













