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
              <div class="profile-text">
                <h3>Start Selling</h3>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <!-- /tab-pane -->
                  <div id="edit" class="tab-pane active">
                    <div class="row site-min-height">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Upload Products</h4>
                        
                        @if($flash = session('success'))
                          <div class="alert alert-success" role="alert">
                            {{$flash}}
                          </div>
                        @endif

                        <form method="POST" action="{{route('marketer.products')}}" role="form" class="form-horizontal" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                          <input type="hidden" value="{{$marketer->marketer_id}}" class="form-control" name="marketer_id">
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label">Product name</label>
                          <div class="col-lg-7">
                            <input type="text" id="" class="form-control" name="name">
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label">Category:</label>
                          <div class="col-lg-7">
                            <select id="category" name="category" class="form-control" onclick="populate('category','sub_category')" readonly>
                              <option value="{{$marketer->category}}"> {{$marketer->category}} </option>
                            </select>
                            <small class="text-danger">{{ $errors->first('category') }}</small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label">Sub Category:</label>
                          <div class="col-lg-7">
                            <select id="sub_category" name="subcategory" class="form-control">
                              <option selected="selected">Click on the Category field above before Selecting</option>
                              {{--@foreach($categories as $category)
                                <option value="{{$category->sub_name}}">{{$category->sub_name}}</option>
                              @endforeach--}}
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label">Description</label>
                          <div class="col-lg-7">
                            <textarea name ="description" class ="form-control" rows="4" placeholder="Give us brief details about your products and also include damage policy, warranty"></textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label">Product Price</label>
                          <div class="col-lg-7">
                            <input type="text" id="" class="form-control" name="price">
                            <small class="text-danger">{{ $errors->first('price') }}</small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label">manufacturer</label>
                          <div class="col-lg-7">
                            <input type="text" id="" class="form-control" name="manufacturer">
                            <small class="text-danger">{{ $errors->first('manufacturer') }}</small>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-lg-3 control-label">return policy</label>
                          <div class="col-lg-7">
                            <input type="text" id="" class="form-control" name="policy">
                            <small class="text-danger">{{ $errors->first('policy') }}</small>
                          </div>
                        </div>

                         <div class="form-group">
                          <label class="col-lg-3 control-label">Number Available</label>
                          <div class="col-lg-7">
                            <input type="number" id="" class="form-control" name="available">
                            <small class="text-danger">{{ $errors->first('available') }}</small>
                          </div>
                        </div>
                          
                        <div class="form-group">
                          <label class="control-label col-lg-7 col-lg-offset-3 text-danger"><small>Upload Image with file size not more than 2MB</small></label>
                          <label class="col-lg-3 control-label">Product image:</label>
                          <div class="col-lg-7">
                            <input type="file" id="products1" class="file-pos" name="image_file">
                            <small class="text-danger">{{ $errors->first('image_file') }}</small>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-lg-offset-3 col-lg-7">
                            <button class="btn btn-theme" type="submit">Save</button>
                            <button class="btn btn-theme04" type="reset">Cancel</button>
                          </div>
                        </div>
                        </form>

                        <h4 class="mt-100">Display Products</h4>
                        
                        @if(count($products) > 0)
                        @foreach($products as $product)
                          <div class="col-lg-4 height-200 border-custom">
                            <img src="{{$product->image_file}}" class="img-responsive img-fluid">
                            <p>{{$product->name}}</p>
                          </div>
                        @endforeach
                        @endif
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

</body>

</html>
