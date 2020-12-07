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
            <h4 class="h1 text-center p-4">All ADMINS</h4>
            <div  class=" p-3 text-center mb">
              <a  href="#"class="btn btn-sm  p-2 mx-2 mb-2 btn-info"  data-toggle = "modal" data-target ="#clsmymodal"><i class ="fa fa-plus mr-1"></i>Add Admin</a>      
            </div>
        
            @if(count($admins) > 0)
            <div style="overflow-x:auto;" class="shadow p-1">
              <table class ="table">
                <tr class="t-head">
                  <th>S/N</th>
                  <th>Username</th>
                   <th>email</th>
                   <th>Date Added</th>
                  <th class="text-center">Action</th>
                </tr>
                @foreach($admins as $key => $admin)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$admin->username}}</td>
                  <td>{{$admin->email}}</td>
                  <td>{{$admin->created_at}}</td>
                  <td class="text-center"><a href="{{url('admin/user/'.$admin->id)}}" class="btn btn-md btn-info">Edit</a>&nbsp;<a href="javascript:void(0);" value="{{url('admin/delete_user/'.$admin->id)}}" class="btn btn-md btn-danger delete_user">Delete</a></td>
                </tr>
                @endforeach
              </table>

              <div class="mt-3">{{$admins->links()}}</div>
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
          </div>

          <!-- CREATE CATEGORY MODAL -->
          <div id = "clsmymodal" class ="modal fade" role ="dialog" name ="class">
            <div class ="modal-dialog">
              <div class = "modal-content">
                @include('inc.messages')
                <div class= "modal-header"> ADD ADMIN</div>

                <div class= "modal-body">
                  <div class ="row">
                    <div class ="col-md-12">
                      <form action="{{route('admin.add')}}" method="POST">
                      @csrf
                      <div id ="form">
                        <input type="text" class="form-control" placeholder="Enter Name" name ="name">
                        <br>
                        <input type="text" class="form-control" placeholder="Enter Email" name ="email">
                        <label for ="Super Admin">super admin</label>
                        <input type="checkbox" class="" value="" name ="role">
                        <label for ="Super Admin">admin</label>
                        <input type="checkbox" class="" value="Admin" name ="role"> <br>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                          
                <div class= "modal-footer"> 
                  <button type = "submit"class="btn btn-sm  p-2 mx-2 mb-2 btn-default" name ="save">Add</button>
                  <button type = "button" class="btn btn-sm  p-2 mx-2 mb-2 btn-default" data-dismiss = "modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    
  <!-- js placed at the end of the document so the pages load faster -->
  @include('layouts.backend.footer')

</body>

</html>