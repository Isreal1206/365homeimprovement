@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
@endsection

@section('content')
  <section class="bg-links pb-5">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="banner-head mb-0">
            <img class="img-responsive img-fluid banner-bg" src="{{URL::to('/')}}/img/page-banner.jpg" alt="Page Banner"/>
            <div class="banner-overlay2">
              <h1 class="white text-title mb-1" style="margin-top: 4.5rem">Become a <span class="text-orange">Writer</span></h1>
              <pre class="text-center white mb-0">Publish articles, reviews, and guides and share them with the world.</pre> 
              <pre class="text-center white">Create and build a niche community.</pre>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mb-5">
      <div class="row p-3">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <span class="mr-2"><a href="{{url('/')}}">Home</a></span>
            <i class="fa fa-angle-double-right"></i>
            <span class="mx-2"><a href="{{url('/blog')}}">Blog</a></span>
            <i class="fa fa-angle-double-right"></i>
            <span class="mx-1 text-orange">Create Article</span>
         <div class="dropdown-divider"></div>
        </div>
      </div>

      <div class="row mb-5">
        <div class="col-lg-6 offset-lg-3 bg-white p-3">
          @include('inc.messages')
          <form action="{{route('create.article.submit')}}" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
            <h4  class ="text-subtitle mb-3">Section One: Personal Information</h4>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Full Names" name="fullnames">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email" name="email">
            </div>

            <div class="form-group">
              <p> <small> Please upload your picture: (Maximum Upload Size: 2MB)</small> </p>
              <div class="input-group">
                <input type="file" accept="image/png, image/jpeg, image/gif" name="avatar" class ="mb-3"/>
              </div>
            </div>
           
            <h4 class ="text-subtitle mb-3">Section Two: Article Information</h4>

            <div class="form-group">
              <select id="" class="form-control" name="category">
                <option value="">-- Select Category --</option>
                @foreach($categories as $category)
                <option value="{{$category->name}}">{{$category->name}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" placeholder="Title" name="title">
            </div>
            
            <div class="form-group">
              <textarea name="body" id="article-ckeditor" class="form-control" rows="7" placeholder="Start Writing"></textarea>
            </div>

            <div class="form-group">
              <p> <small>Upload Article Picture: (Maximum Upload Size: 2MB)</small> </p>
              <div class="input-group">
                <input type="file" accept="image/png, image/jpeg, image/gif" name="image_file"/>
              </div>
            </div>

            <button type="submit" class="btn btn-orange my-3">Submit Article</button>
          </form>
        </div>
      </div>
    </div>    
  </section>
 @include('layouts.footer-home')
@endsection

@section('footer')
  @include('layouts.footer')
@endsection






