<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.header')
  @include('layouts.navbar')
  <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
</head>

<body class="bg-links">
  <section class="roboto intro-banner">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
          <div class="border-right sidenav">
            @include('layouts.sidebar')
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
          <div class="container mb-5">
            <div class="row my-4">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="box-shadow bg-white">
                  <div class="py-1 px-3">
                    <h5 class="text-bold pt-2"> EDIT CONTRACTORS RECORD </h5>
                  </div>
                  <div class="border-warning" style="border-top: 5px solid"></div>
                </div>
              </div>
            </div>

            @include('inc.messages')
            <div class="row">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-2">
              {!! Form::model($contractors, ['route' => ['contractor.update', $contractors->id], 'method' => 'PUT', 'files' => true]) !!}

              <div class="form-group row">
                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Company Name:') }}</label>
                <div class="col-md-7">
                  <input id="company_name" type="text" class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}" name="company_name" value="{{ $contractors->company_name }}" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="slug" class="col-md-3 col-form-label text-md-right">{{ __('Slug:') }}</label>
                <div class="col-md-7">
                  <input id="slug" type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" value="{{ $contractors->slug }}">
                </div>
              </div>

              <div class="form-group row">
                <label for="categories" class="col-md-3 col-form-label text-md-right">{{ __('Categories:') }}</label>
                <div class="col-md-7">
                  <select class="form-control" name="category_id" readonly>
                      <option value="{{ $contractors->category->id }}">{{ $contractorCat->name }}</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="address" class="col-md-3 col-form-label text-md-right">{{ __('Address:') }}</label>
                <div class="col-md-7">
                  <textarea id="address" rows="4" cols="30" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" required>{{ $contractors->address }}</textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Phone Number:') }}</label>
                <div class="col-md-7">
                  <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $contractors->phone }}" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Upload Logo:') }}</label>
                <div class="col-md-7">
                  <input id="logo" type="file" accept="image/png, image/jpeg, image/gif" name="logo" value="{{ old('logo') }}">
                </div>
              </div>

              <div class="form-group row">
                <label for="description" class="col-md-3 col-form-label text-md-right">{{ __('Description:') }}</label>
                <div class="col-md-7">
                  <textarea id="description" rows="5" cols="30" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" placeholder="Write Short Description not more than 250 words..." required>{{ $contractors->description }}</textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="body" class="col-md-3 col-form-label text-md-right">{{ __('Body:') }}</label>
                <div class="col-md-7">
                  <textarea id="article-ckeditor" rows="7" cols="30" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body">{{ $contractors->body }}</textarea>
                </div>
              </div>

              <div class="form-group row mb-4">
                <div class="col-md-3 col-form-label text-md-right"></div>
                <div class="col-md-7">
                  <button type="submit" class="btn btn-orange">
                    {{ __('SAVE') }}
                  </button>
                </div>
              </div>
              {!! Form::close() !!}
              </div> <!-- end of col-12 -->
            </div> <!-- end of row -->
          </div> <!-- end of container -->
        </div> <!-- end of col-9 -->
      </div> <!-- end of row -->
    </div> <!-- end of container-fluid -->
  </section>
<!--/ footer Star /-->
  @include('layouts.footer-copyright')
<!--/ Footer End /-->

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'article-ckeditor' );
</script>

</body>
</html>

