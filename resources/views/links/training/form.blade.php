<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.header') 
  @include('layouts.navbar') 
</head>

<body class="bg-links">
	<section class="mb-5">
		<div class="container-fluid p-0">
	      <div class="row">
	        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
	          <div class="banner-head mb-0">
	            <img class="img-responsive img-fluid banner-bg" src="{{URL::to('/')}}/img/page-banner.jpg" alt="Page Banner"/>
	            <div class="banner-overlay2">
	              <h1 class="text-white text-center" style="font-family: roboto; font-size: 1.4rem; font-weight: 900; margin-top: 6rem">BECOME A <span class="text-orange">TRAINER</span></h1>
              	  <h5 class="text-center text-white">@</h5>
              	  <p class="text-center text-primary">Hausworth Nigeria Limited</p>
	              <p class="text-center text-white" style="font-weight: 600;">SIGNUP NOW</p>
	            </div>
	          </div>
	        </div>
	      </div>
	  	</div>

		<div class="container-fluid bg-black roboto">
	  		<div class="row ml-5">
			  <div class="col-12 col-sm-12 col-md-12 col-lg-12 py-2">
			  	<span class="mr-2"><a href="{{route('training')}}" class="text-footer"><i class="fa fa-home"></i> Home</a></span>
		  		<i class="fa fa-angle-double-right text-footer"></i>
	            <span class="mx-2 text-bold"><a href="{{url('training/become-a-trainer')}}" class="text-footer">Register</a></span>
		      </div>
		    </div>
		</div>

		<div class="container roboto mt-5">
	      <div class="row py-4 border border-links mx-0">
	      	<div class="col-12">
	      		<h4 class="text-center">Personal Information</h4>
	      	</div>
	      	<div class="col-md-10 py-3 offset-md-1">
		      <form action="{{route('training.store')}}" method="POST">
		      	@csrf
		      	<div class="form-group row">
		      		<label for="title" class="col-12 col-sm-12 col-md-12 col-lg-5 col-form-label text-md-right">Title:</label>
		      		<div class="col-12 col-sm-12 col-md-12 col-lg-7">
			      	  <select name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ old('title')}}">
			      		<option>Mr</option>
			      		<option>Mrs</option>
			      		<option>Miss</option>
			      	  </select>
			      	</div>
		      	</div>
		      	<div class="form-group row">
		      		<label for="firstname" class="col-12 col-sm-12 col-md-12 col-lg-5 col-form-label text-md-right">First Name:</label>
		      		<div class="col-12 col-sm-12 col-md-12 col-lg-7">
			      	  <input type="text" name="firstname" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" value="{{ old('name') }}">
			      	  <small class="text-danger">{{ $errors->first('firstname') }}</small>  
			      	</div>
		      	</div>
		      	<div class="form-group row">
		      		<label for="lastname" class="col-12 col-sm-12 col-md-12 col-lg-5 col-form-label text-md-right">Last Name:</label>
		      		<div class="col-12 col-sm-12 col-md-12 col-lg-7">
			      	  <input type="text" name="lastname" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}">
			      	  <small class="text-danger">{{ $errors->first('lastname') }}</small>  
			      	</div>
		      	</div>
		      	<div class="form-group row">
		      		<label for="email" class="col-12 col-sm-12 col-md-12 col-lg-5 col-form-label text-md-right">Email:</label>
		      		<div class="col-12 col-sm-12 col-md-12 col-lg-7">
			      	  <input type="email" name="email" placeholder="myname@gmail.com" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">
			      	  <small class="text-danger">{{ $errors->first('email') }}</small>  
			      	</div>
		      	</div>
		      	<div class="form-group row">
		      		<label for="password" class="col-12 col-sm-12 col-md-12 col-lg-5 col-form-label text-md-right">Password:</label>
		      		<div class="col-12 col-sm-12 col-md-12 col-lg-7">
			      	  <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
			      	  <small class="text-danger">{{ $errors->first('password') }}</small>  
			      	</div>
		      	</div>
		      	<div class="form-group row">
		            <label for="password-confirm" class="col-12 col-sm-12 col-md-12 col-lg-5 col-form-label text-md-right">{{ __('Confirm Password:') }}</label>
		            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
		                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
		            </div>
		        </div>

		      	<div class="form-group row">
		      		<label for="organization" class="col-12 col-sm-12 col-md-12 col-lg-5 col-form-label text-md-right">Organization:</label>
		      		<div class="col-12 col-sm-12 col-md-12 col-lg-7">
			      	  <input type="text" name="organization" class="form-control{{ $errors->has('organization') ? ' is-invalid' : '' }}">
			      	  <small class="text-danger">{{ $errors->first('organization') }}</small>  
			      	</div>
		      	</div>
		      	<div class="form-group row">
		      		<label for="job_title" class="col-12 col-sm-12 col-md-12 col-lg-5 col-form-label text-md-right">Job Title:</label>
		      		<div class="col-12 col-sm-12 col-md-12 col-lg-7">
	                  <select class="form-control{{ $errors->has('job_title') ? ' is-invalid' : '' }}" name="job_title">
	                    @foreach($categories as $category)
	                      <option value="{{$category->id}}">{{$category->name}}</option>
	                    @endforeach
	                  </select>
	                </div>
		      	</div>
		      	<div class="form-group row">
	                <label for="job_description" class="col-12 col-sm-12 col-md-12 col-lg-5 col-form-label text-md-right">{{ __('Job Description:') }}</label>
	                <div class="col-12 col-sm-12 col-md-12 col-lg-7">
	                  <textarea id="job_description" rows="5" cols="30" class="form-control{{ $errors->has('job_description') ? ' is-invalid' : '' }}" name="job_description" value="{{ old('job_description') }}"></textarea>
	                  <small class="text-danger">{{ $errors->first('job_description') }}</small>  
	                </div>
	              </div>
		      	<div class="form-group row">
		      		<label for="address" class="col-12 col-sm-12 col-md-12 col-lg-5 col-form-label text-md-right">Street Address:</label>
		      		<div class="col-12 col-sm-12 col-md-12 col-lg-7">
			      	  <input type="text" name="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}">
			      	  <small class="text-danger">{{ $errors->first('address') }}</small>  
			      	</div>
		      	</div>
		      	<div class="form-group row">
		      		<label for="city" class="col-12 col-sm-12 col-md-12 col-lg-5 col-form-label text-md-right">City:</label>
		      		<div class="col-12 col-sm-12 col-md-12 col-lg-7">
			      	  <input type="text" name="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}">
			      	  <small class="text-danger">{{ $errors->first('city') }}</small>  
			      	</div>
		      	</div>
		      	<div class="form-group row">
		      		<label for="post_code" class="col-12 col-sm-12 col-md-12 col-lg-5 col-form-label text-md-right">Post Code:</label>
		      		<div class="col-12 col-sm-12 col-md-12 col-lg-7">
			      	  <input type="text" name="post_code" placeholder="202102" class="form-control{{ $errors->has('post_code') ? ' is-invalid' : '' }}">
			      	  <small class="text-danger">{{ $errors->first('post_code') }}</small>  
			      	</div>
		      	</div>
		      	<div class="form-group row">
		      		<label for="country" class="col-12 col-sm-12 col-md-12 col-lg-5 col-form-label text-md-right">Country:</label>
		      		<div class="col-12 col-sm-12 col-md-12 col-lg-7">
			      	  <select name="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}">
			      		<option>Afghanistan</option>
			      		<option>Albania</option>
			      		<option>Algeria</option>
			      		<option>Andorra</option>
			      		<option>Angola</option>
			      		<option>Antigua and Barbuda</option>
			      		<option>Argentina</option>
			      		<option>Armenia</option>
			      		<option>Australia</option>
			      		<option>Austria</option>
			      		<option>Azerbaijan</option>
			      		<option>The Bahamas</option>
			      		<option>Bahrain</option>
			      		<option>Bangladesh</option>
			      		<option>Barbados</option>
			      		<option>Belarus</option>
			      		<option>Belgium</option>
			      		<option>Belize</option>
			      		<option>Bhutan</option>
			      		<option>Bolivia</option>
			      		<option>Bosnia and Herzegovina</option>
			      		<option>Botswana</option>
			      		<option>Brunei</option>
			      		<option>Bulgaria</option>
			      		<option>Burkina Faso</option>
			      		<option>Burundi</option>
			      		<option>Cabo Verde</option>
			      		<option>Cambodia</option>
			      		<option>Cameroon</option>
			      		<option>Canada</option>
			      		<option>Central African Republic</option>
			      		<option>Chad</option>
			      		<option>Chile</option>
			      		<option>China</option>
			      		<option>Colombia</option>
			      		<option>Comoros</option>
			      		<option>Congo Democratic Republic</option>
			      		<option>Congo</option>
			      		<option>Costa Rica</option>
			      		<option>Côte d’Ivoire</option>
			      		<option>Croatia</option>
			      		<option>Cuba</option>
			      		<option>Cyprus</option>
			      		<option>Czech Republic</option>
			      		<option>Denmark</option>
			      		<option>Djibouti</option>
			      		<option>Dominica</option>
			      		<option>Dominican Republic</option>
			      		<option>Ecuador</option>
			      		<option>Egypt</option>
			      		<option>El Salvador</option>
			      		<option>England</option>
			      		<option>Equatorial Guinea</option>
			      		<option>Eritrea</option>
			      		<option>Estonia</option>
			      		<option>Eswatini</option>
			      		<option>Ethiopia</option>
			      		<option>Fiji</option>
			      		<option>Finland</option>
			      		<option>France</option>
			      		<option>Gabon</option>
			      		<option>Gambia</option>
			      		<option>Georgia</option>
			      		<option>Germany</option>
			      		<option>Ghana</option>
			      		<option>Greece</option>
			      		<option>Grenada</option>
			      		<option>Guatemala</option>
			      		<option>Guinea</option>
			      		<option>Guinea-Bissau</option>
			      		<option>Guyana</option>
			      		<option>Haiti</option>
			      		<option>Honduras</option>
			      		<option>Hungary</option>
			      		<option>Iceland</option>
			      		<option>India</option>
			      		<option>Indonesia</option>
			      		<option>Iran</option>
			      		<option>Iraq</option>
			      		<option>Ireland</option>
			      		<option>Israel</option>
			      		<option>Italy</option>
			      		<option>Jamaica</option>
			      		<option>Japan</option>
			      		<option>Jordan</option>
			      		<option>Kazakhstan</option>
			      		<option>Kenya</option>
			      		<option>Kiribati</option>
			      		<option>North-Korea</option>
			      		<option>Kosovo</option>
			      		<option>Kuwait</option>
			      		<option>Kyrgyzstan</option>
			      		<option>Latvia</option>
			      		<option>Lebanon</option>
			      		<option>Lesotho</option>
			      		<option>Liberia</option>
			      		<option>Libya</option>
			      		<option>Liechtenstein</option>
			      		<option>Lithuania</option>
			      		<option>Luxembourg</option>
			      		<option>Madagascar</option>
			      		<option>Malawi</option>
			      		<option>Malaysia</option>
			      		<option>Maldives</option>
			      		<option>Mali</option>
			      		<option>Malta</option>
			      		<option>Marshall Islands</option>
			      		<option>Mauritania</option>
			      		<option>Mauritius</option>
			      		<option>Mexico</option>
			      		<option>Moldova</option>
			      		<option>Mongolia</option>
			      		<option>Montenegro</option>
			      		<option>Morocco</option>
			      		<option>Mozambique</option>
			      		<option>Myanmar</option>
			      		<option>Namibia</option>
			      		<option>Nauru</option>
			      		<option>Nepal</option>
			      		<option>Netherlands</option>
			      		<option>New Zealand</option>
			      		<option>Nicaragua</option>
			      		<option>Niger</option>
			      		<option selected>Nigeria</option>
			      		<option>North Macedonia</option>
			      		<option>Northern Ireland</option>
			      		<option>Norway</option>
			      		<option>Oman</option>
			      		<option>Pakistan</option>
			      		<option>Palau</option>
			      		<option>Panama</option>
			      		<option>Papua New Guinea</option>
			      		<option>Paraguay</option>
			      		<option>Peru</option>
			      		<option>Philippines</option>
			      		<option>Poland</option>
			      		<option>Portugal</option>
			      		<option>Qatar</option>
			      		<option>Romania</option>
			      		<option>Russia</option>
			      		<option>Rwanda</option>
			      		<option>Samoa</option>
			      		<option>San Marino</option>
			      		<option>Saudi Arabia</option>
			      		<option>Scotland</option>
			      		<option>Senegal</option>
			      		<option>Serbia</option>
			      		<option>Seychelles</option>
			      		<option>Sierra Leone</option>
			      		<option>Singapore</option>
			      		<option>Slovakia</option>
			      		<option>Slovenia</option>
			      		<option>Solomon Islands</option>
			      		<option>Somalia</option>
			      		<option>South Africa</option>
			      		<option>South-Korea</option>
			      		<option>South-Sudan</option>
			      		<option>Spain</option>
			      		<option>Sri Lanka</option>
			      		<option>Sudan</option>
			      		<option>Sweden</option>
			      		<option>Switzerland</option>
			      		<option>Syria</option>
			      		<option>Taiwan</option>
			      		<option>Tajikistan</option>
			      		<option>Tanzania</option>
			      		<option>Thailand</option>
			      		<option>Togo</option>
			      		<option>Tonga</option>
			      		<option>Trinidad and Tobago</option>
			      		<option>Tunisia</option>
			      		<option>Turkey</option>
			      		<option>Turkmenistan</option>
			      		<option>Tuvalu</option>
			      		<option>Uganda</option>
			      		<option>Ukraine</option>
			      		<option>United Arab Emirates</option>
			      		<option>United Kingdom</option>
			      		<option>United States</option>
			      		<option>Uruguay</option>
			      		<option>Uzbekistan</option>
			      		<option>Vanuatu</option>
			      		<option>Vatican City</option>
			      		<option>Venezuela</option>
			      		<option>Vietnam</option>
			      		<option>Wales</option>
			      		<option>Yemen</option>
			      		<option>Zambia</option>
			      		<option>Zimbabwe</option>
			      	  </select>  
			      	</div>
		      	</div>
		      	<div class="form-group row">
		      		<label for="phone_number" class="col-12 col-sm-12 col-md-12 col-lg-5 col-form-label text-md-right">Phone Number:</label>
		      		<div class="col-12 col-sm-12 col-md-12 col-lg-7">
			      	  <input type="text" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}">
			      	  <small class="text-danger">{{ $errors->first('phone') }}</small>  
			      	</div>
		      	</div>
		      	<div class="form-group row">
		      		<label for="fax" class="col-12 col-sm-12 col-md-12 col-lg-5 col-form-label text-md-right">Fax Number:</label>
		      		<div class="col-12 col-sm-12 col-md-12 col-lg-7">
			      	  <input type="text" name="fax" class="form-control{{ $errors->has('fax') ? ' is-invalid' : '' }}">
			      	  <small class="text-danger">{{ $errors->first('fax') }}</small>  
			      	</div>
		      	</div>
		      	<div class="form-group row">
		      		<label for="url" class="col-12 col-sm-12 col-md-12 col-lg-5 col-form-label text-md-right">URL:</label>
		      		<div class="col-12 col-sm-12 col-md-12 col-lg-7">
			      	  <input type="text" name="url" value="www.365homeimprovement.ng/trainer/{{time()}}" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" readonly>
			      	  <small class="text-danger">{{ $errors->first('url') }}</small>  
			      	</div>
		      	</div>
		      	<div class="form-group row">
		      		<label for="price_range" class="col-12 col-sm-12 col-md-12 col-lg-5 col-form-label text-md-right">What is the price range of your trainings?</label>
		      		<div class="col-12 col-sm-12 col-md-12 col-lg-7">
			      	  <select name="price_range" class="form-control{{ $errors->has('price_range') ? ' is-invalid' : '' }}">
			      	  	<option>Up to N 5,000</option>
			      		<option>N 5,000 - N 50,000</option>
			      		<option>N 50,000 - N 150,000</option>
			      		<option>N 150,000 and above</option>
			      	  </select>
			      	  <small class="text-danger">{{ $errors->first('price_range') }}</small>  
			      	</div>
		      	</div>
		      	<div class="form-group row">
		      		<label for="language" class="col-12 col-sm-12 col-md-12 col-lg-5 col-form-label text-md-right">In what language is your trainings delivered?</label>
		      		<div class="col-12 col-sm-12 col-md-12 col-lg-7">
		      		  <select name="language" class="form-control{{ $errors->has('language') ? ' is-invalid' : '' }}">
		      		  	<option>English</option>
		      		  	<option>French</option>
		      		  	<option>Hausa</option>
		      		  	<option>Igbo</option>
		      		  	<option>Spanish</option>
		      		  	<option>Yoruba</option>
		      		  </select>
			      	  <small class="text-danger">{{ $errors->first('language') }}</small>  
			      	</div>
		      	</div>

		      	<div class="form-group row">
		      	  <div class="col-12 col-sm-12 col-md-12 col-lg-7 offset-md-5">
		      	  	<button type="submit" class="btn btn-orange">{{ __('Submit')}}</button>
		      	  </div>
		      	</div>
		      </form>
		    </div>
	      </div>
	  	</div>
	</section>
<!--/ footer Star /-->
  @include('layouts.footer-copyright')
<!--/ Footer End /-->

</body>
</html>