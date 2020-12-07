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
                <h4 class="text-center">ALL CONTRACTORS</h4>
                <div class="row p-3 text-center mb">
                  <div class="col-lg-2 col-lg-offset-2">
                    <a href="{{url('admin/all-contractors')}}" class="">CONTRACTORS</a>
                    <div class="bottom_line"></div>
                  </div>
                  
                  <div class="col-lg-2">
                    <a href="{{url('admin/all-homeowners')}}" class="">HOMEOWNERS</a>
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

            @if(count($contractors) > 0)
            <div style="overflow-x:auto;" class="shadow p-1">
              <table class ="table">
                <tr class="t-head">
                  <th>S/N</th>
                  <th>Full&nbsp;Name</th>
                   <th>Category</th>
                  <th>Address</th>
                  <th>Phone&nbsp;Number</th>
                  <th>Date&nbsp;Joined</th>
                  <th class="text-center">Action</th>
                </tr>
                @foreach($contractors as $key => $contractor)
                <tr>
                  <td>{{$key+1}}</td>
                  <td class="text-capitalize">{{$contractor->fullnames}}</td>
                  <td class="text-capitalize">{{$contractor->job_category}}</td>
                  <td class="text-capitalize">{{$contractor->address}}</td>
                  <td>{{$contractor->mobile_no}}</td>
                  <td>{{$contractor->created_at}}</td>
                  <td class="text-center"><a href="{{url('admin/contractor-details/'.$contractor->contractor_id)}}"> <i class="fa fa-2x fa-eye fa-primary"></i></a>&nbsp;<a href="{{url('admin/delete-contractor/'.$contractor->id)}}" onclick="return confirm('Are you sure you want to delete this item?')"><i class="fa fa-2x fa-trash fa-danger"></i></a></td>
                </tr>
                @endforeach
              </table>

              <div class="mt-3">{{$contractors->links()}}</div>
            </div>
            
            @else
            <p class="text-center text-danger h2">No Record Available</p>
            @endif
          </div>

          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ds">
            <!--COMPLETED ACTIONS DONUTS CHART-->
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