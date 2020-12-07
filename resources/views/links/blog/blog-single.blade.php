@extends('layouts.app-custom')

@section('heading')
  @include('layouts.header')
  @include('layouts.navbar')
@endsection

@section('content')

  <section class="bg-links mt-2">
      <div class="container  mt-5" >
        <div class="row p-3">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="my-3">
            <span class="mr-1"><a href="{{url('/blog')}}">Blog</a></span>
            <i class="fa fa-angle-double-right"></i>
            <span class="mx-1 text-orange">Single blog</span>
          </div>
          </div>
        </div>
      </div>
    <div class="container p-0">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 offset-1  card mt-3 ">
         <div class="row  p-3">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                <h2 class="text-justify text-black mt-3">{{$post->title}}</h2>
                <span class="text-muted"></span>
                 <p class="text-muted"><a href =""><i class ="fa fa-facebook"></i></a> <a href =""><i class ="fa fa-google"></i></a></p>
               </div>
            </div>

          
            <div class="row p-3">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                <img src="{{$post->avatar}}" class="img-responsive img-fluid height-150 border-radius-custom" alt="Image">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                <a href="#"><h5 class="text-bold text-orange mb-0">{{$post->title}}.</h5></a>
                <span class="text-muted"> {{$post->fullname}} {{$post->created_at->format ('M, d Y.')}}</span>
                <p class="text-justify text-black mt-3">Want to know how much it will cost you to remove your asbestos? You are currently at the right place because we deliver the best services...</p>
                <a href="#"><i class="text-muted fa fa-tags"></i> <span class="text-orange">{{$post->category}}</span></a>
              </div>
            </div>


            <div class="row p-3">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="{{$post->image_file}}" class="" alt="Image">
              </div>
              
            </div>
           <div class="row p-3 ">
             
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3 class="text-justify text-black mt-3">{{$post->title}}</h3>
                <p class ="pre-font">
                {{$post->body}}

This agreement would last for sixty (60) months and would be automatically renewed thereafter. To terminate this agreement, the training company shall give at least thirty (30) days’ notice and on the termination of the agreement, Hausworth Nigeria Limited would stop the marketing and sales of the training services.

General:
Force Majeure
Neither party to this agreement shall be held responsible for breach of contract caused by an act of God, Insurrection, Civil War, Military Operations or Local Emergency. The parties do hereby accept the international provision of “Force Majeure” as published by the International Chamber of Commerce.
6.  Governing Law

This agreement shall be governed and construed in accordance with the law of the federal republic of Nigeria. The parties hereby accept the court of jurisdiction to be in Nigeria in case of disputes, claims or matters which may arise in connection with this agreement.

7.  Dispute Resolution
Hausworth Nigeria Limited is only an intermediary offering its platform to facilitate the transactions between trainers / training company (sellers) and trainee/customer/buyer/user and is not and cannot be a party to or control in any manner any transactions between the trainers / training company (sellers) and trainee, customer/buyer/user. 
Hausworth Nigeria Limited shall neither be responsible nor liable to mediate or resolve any disputes or disagreements between the trainers / training company (sellers) and trainee, customer/buyer/user shall settle all such disputes without involving Hausworth Nigeria Limited in any manner.
CONTRACT SIGNATORIES:
IN WITNESS THEREOF, THE PARTIES HAVE SIGNED BELOW AND BY DOING SO HAVE ACCEPTED AND APPROVED ALL THE TERMS 
 </p>
 </div>
</div>
        
    <div class="row card p-3 ">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 @if($flash = session('success'))
                          <div class="alert alert-success" role="alert">
                            {{$flash}}
                          </div>
                        @endif
                 <div class="bg-white box-shadow-custom border-radius-custom p-2">
                   @if(count($post->comments)>0)
            <p class="text-bold text-center mb-0 text-uppercase">Comments ({{count($post->comments)}})</p>
            @endif
            <div class="dropdown-divider"></div>
            <form method="post" action="{{route('comment.submit',$post->id)}}" role="form">
              {{csrf_field()}}
              <div class="pt-2">
                <input type="text" name="username" placeholder="Username" class="form-control">
                <small class="text-danger">{{ $errors->first('username') }}</small>
              </div>
              <div class="pt-2 pb-3">
              <textarea class="form-control" placeholder="Add your comment" name="comment"></textarea>
              </div>
              <input type="submit" class="btn btn-block btn-orange text-uppercase" value="post comment">

           </form>
            <div class="dropdown-divider"></div>
            <!-- @foreach($post->comments as $comment)  
            {{$comment->comment}}
            <div class="dropdown-divider"></div>
            @endforeach -->
           

             @foreach($post->comments as $comment)
            <div class = "row">
              
              <div class="col-lg-3">
               <img src ="/img/avatar/avatar.png" width="90px" height="90px">
              </div>
              <div class="col-lg-9">
               
                <p>{{$comment->comment}}</p>
                <h6 class = "text-muted">By: {{$comment->username}}</h6>
              </div>
           </div>
            <div class="dropdown-divider"></div>
            @endforeach
         </div>
          
        </div>
      </div> 
   </div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 my-5">
  <div class="bg-white box-shadow-custom border-radius-custom p-2 mb-5">
            <p class="text-bold text-center mb-0">Related Article</p>
            <div class="dropdown-divider"></div>
            <div class="row p-1">
              @foreach($allposts as $rltpost)
              @if($rltpost->category == $post->category)
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <a href =""><img src="{{$rltpost->image_file}}" class="" width="100px" height="100px" alt="Image"></a>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <a href =""><p class="">{{$rltpost->title}}</p></a>
                <span class="text-muted">{{$rltpost->fullname}}</span>
                <i class="text-muted fa fa-building-o "></i>
              </div>
            </div>
            <div class="dropdown-divider"></div>
            @endif
            @endforeach
            <div class="row p-1">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <img src="/img/kitchen-design.jpg" class="" width="100px" height="100px" alt="Image">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <p class=""> benefits of concrete resurfacing.</p>
                <span class="text-muted">By Daniel Wilson</span>
                <i class="text-muted fa fa-building-o "></i>
              </div>
            </div>

           </div>

          @if($flash = session('newsletter'))
          <div class="alert alert-success" role="alert">
            {{$flash}}
          </div>
          @endif
          <div class="bg-white box-shadow-custom border-radius-custom p-2">
            <p class="text-bold text-center mb-0">Newsletter Subscription</p>
            <div class="dropdown-divider"></div>
            <form method="post" action="{{route('newsletter.store')}}" role="form">
              {{csrf_field()}}
              <div class="pt-2">
                <input type="text" name="name" placeholder="Name" class="form-control">
                <small class="text-danger">{{ $errors->first('name') }}</small>
              </div>

              <div class="py-3">
                <input type="text" name="mobile" placeholder="Telephone" class="form-control">
                <small class="text-danger">{{ $errors->first('mobile') }}</small>
              </div>

              <div class="pb-3">
                <input type="email" name="email" placeholder="Email Address" class="form-control">
                <small class="text-danger">{{ $errors->first('email') }}</small>
              </div>

              <input type="submit" class="btn btn-block btn-orange text-uppercase" value="Subscribe">

              <small class="text-justify">
              I agree to the <a class="text-primary" target="_blank" href="{{route('tos')}}">Terms of Use</a> and <a class="text-primary" target="_blank" href="{{route('privacy')}}">Privacy Policy.</a></small>
            </form>
          </div>
        </div>
      </div>


</div>
</section>
  @include('layouts.footer-home')
@endsection

@section('footer')
  @include('layouts.footer')
@endsection
