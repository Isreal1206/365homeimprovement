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

    <div class="content-wrapper">
     <h2 class="h1 text-center p-4">All Admins</h2>
      <div  class=" p-3 text-center mb-4">
        <a  href="#"class="btn btn-sm  p-2 mx-2 mb-2 btn-info"  data-toggle = "modal" data-target ="#clsmymodal"><i class ="fa fa-plus"></i>Add Admin</a>      
      </div>
      
      @if(count($categories)>0)
      <div style="overflow-x:auto;" class="shadow p-1">
        <table>
          <tr class="t-head">
            <th>S/N</th>
            <th>Name</th>
            <th>Email</th>
             <th>Role</th>
             <th>Date Added</th>
            <th class="text-center">Action</th>
          </tr>
          @foreach($categories as $key=>$category)
          <tr>
              <td>{{$key+1}}</td>
              <td>{{$category->name}}</td>
              <td>{{$category->slug}}</td>
              <td>{{$category->created_at}}</td>
              <td class="text-center"><a href="{{url('admin/user/'.$category->id)}}" class="btn btn-md btn-info">Edit</a>&nbsp;<a href="javascript:void(0);" value="{{url('admin/delete_user/'.$category->id)}}" class="btn btn-md btn-danger delete_user">Delete</a></td>
          </tr>
          @endforeach
        </table>
      </div>

      <div class="mt-2"></div>

      @else
      <p class="text-center text-danger h2">No Record Available</p>
      @endif

      <div class="mt-3">{{$categories->links()}}</div>

      <!-- CREATE CATEGORY MODAL -->
      <div id = "clsmymodal" class ="modal fade" role ="dialog" name ="class">
        <div class ="modal-dialog">
          <div class = "modal-content">
            @include('inc.messages')
            <div class= "modal-header"> ADD CATEGORY</div>
            <div class= "modal-body">
              <div class ="row">
                <div class ="col-md-12">
                  <form action ="" method = "POST">
                    @csrf
                    <div id ="form">
                      <input type="text" class="form-control" placeholder="Enter Name" name ="name">
                      <br>
                      <input type="text" class="form-control" placeholder="Enter Slug" name ="email">
                      <br>
                      <div class= "modal-footer"> 
                        <button type = "submit"class="btn btn-sm  p-2 mx-2 mb-2 btn-default" name ="save">Add</button>
                        <button type = "button" class="btn btn-sm  p-2 mx-2 mb-2 btn-default" data-dismiss = "modal">Close</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--footer start-->
    @include('layouts.backend.footer-copyright')
    <!--footer end-->
  </section>

  <!-- js placed at the end of the document so the pages load faster -->
  @include('layouts.backend.footer')

</body>

</html>
