@extends('layouts.layout')
@section('title',pageTitle('messages.Navigation.Profile'))
@section('content')

<div class="content-wrapper configuration-settings">
  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h2 class="content-header-title float-left mb-0">@lang('messages.Navigation.Profile')</h2>
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{route('/')}}">@lang('messages.Admin.Dashboard')</a>
              </li>
              <li class="breadcrumb-item active">@lang('messages.Navigation.Profile')
              </li>
            </ol>
          </div>
        </div>
      </div>
   
   </div>
   <div class="content-body">
      <div id="user-profile">
         <!-- Nav Justified Starts -->
         <section id="nav-justified">
               <div class="col-sm-12">
                  <div class="card overflow-hidden">
                     <div class="relative">
                        <div class="cover-container">
                           <img class="img-fluid bg-cover rounded-0 w-100" src="/packa/images/profile/user-uploads/cover.jpg" alt="User Profile Image">
                        </div>
                        <div class="profile-img-container d-flex align-items-center">
                           <img src="{{userimage()}}" class="rounded-circle img-border box-shadow-1" alt="Card image">
                        </div>
                     </div>
                     <div class="card-content">
                        <div class="card-body">
                         
                           
                           <div class="tab-content pt-1">
                              
                              <div class="tab-pane active" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-justified">
                                 <form method="POST" action="{{route('profile.update',$user)}}" class="form form-vertical" autocomplete="off" enctype="multipart/form-data">                                    
                                    @method('PUT')
                                    {{csrf_field()}}
                                    <div class="form-body">
                                       <div class="row">
                                          <div class="col-12">
                                             <h5 class="mb-2">@lang('messages.Admin.Profile Details')</h5>
                                          </div>
                                          <div class="col-4">
                                             <div class="form-group">
                                                <label for="first_name" class="required">@lang('messages.Admin.First Name')</label>
                                                <div class="position-relative has-icon-left">
                                                   <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="name" placeholder="@lang('messages.Admin.First Name')" value="{{old('first_name',$user->name)}}" id="first_name">
                                                   <div class="form-control-position">
                                                      <i class="feather icon-user"></i>
                                                   </div>
                                                   @error('first_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-4">
                                             <div class="form-group">
                                                <label for="">@lang('messages.Admin.Last Name')</label>
                                                <div class="position-relative has-icon-left">
                                                   <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="@lang('messages.Admin.Last Name')" value="{{old('last_name',$user->last_name)}}">
                                                   <div class="form-control-position">
                                                      <i class="feather icon-user"></i>
                                                   </div>
                                                   @error('last_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                             </div>
                                          </div>

                                          <div class="col-4">
                                             <div class="form-group">
                                                <label for="">@lang('messages.Admin.Email')</label>
                                                <div class="position-relative has-icon-left">
                                                   <input type="email" class="form-control "  placeholder="@lang('messages.Admin.Email')" value="{{$user->email}}" disabled="">
                                                   <div class="form-control-position">
                                                      <i class="feather icon-mail"></i>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                          <div class="col-4">
                                             <div class="form-group">
                                                <label for="">@lang('messages.Admin.Date of birth')</label>
                                                <div class="position-relative has-icon-left">
                                                  
                                                   <input type="text" name="dob" class="form-control pickadate @error('dob') is-invalid @enderror"  placeholder="@lang('messages.Admin.Date of birth')" value="{{old('dob',$user->dob)}}">

                                                   <div class="form-control-position">
                                                      <i class="feather icon-calendar"></i>
                                                   </div>
                                                   @error('dob')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                             </div>
                                          </div>

                                          <div class="col-4">
                                             <div class="form-group">
                                                <label classs="required">@lang('messages.Admin.Gender')</label> 
                                                <select class="select2 form-control @error('gender_id') is-invalid @enderror" name="gender_id">
                                                  <option value="">@lang('messages.Common.Select') @lang('messages.Admin.Gender')</option>
                                                        @foreach(getGender() as $key => $gender)
                                                            <option value="{{$key}}" {{SELECT($key,old('gender_id',$user->gender_id))}}>
                                                                {{$gender}}
                                                            </option>
                                                        @endforeach                                                        
                                                </select> 
                                                @error('gender_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror                                     
                                             </div>
                                          </div>

                                          <div class="col-4">
                                             <div class="form-group">
                                                <label class="contact_1">@lang('messages.Admin.Contact')</label>
                                                <div class="position-relative has-icon-left">
                                                   <input type="text" class="form-control @error('contact_1') is-invalid @enderror"  placeholder="@lang('messages.Admin.Contact')" name="contact_1" value="{{old('contact_1',$user->contact_1)}}">
                                                   <div class="form-control-position">
                                                      <i class="feather icon-smartphone"></i>
                                                   </div>
                                                   @error('contact_1')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                
                                             </div>
                                          </div>


                                          <div class="col-4">
                                             <div class="form-group">
                                                <label for="">@lang('messages.Admin.Country')</label> 
                                                <select class="select2 form-control @error('country_id') is-invalid @enderror" name="country_id">
                                                  <option value="">@lang('messages.Common.Select') @lang('messages.Admin.Country')</option>
                                                  @foreach($countryArray as $country)
                                                        <option value="{{$country->id}}" {{SELECT($country->id,old('country_id',$user->country_id))}}>{{$country->name}}</option>          
                                                  @endforeach
                                                </select>                                                
                                                @error('country_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                             </div>
                                          </div>


                                          <div class="col-4">
                                             <div class="form-group">
                                                <label for="">@lang('messages.Admin.State')</label> 
                                                <select class="select2 form-control @error('state_id') is-invalid @enderror" name="state_id">
                                                        <option value="">@lang('messages.Common.Select') @lang('messages.Admin.State')</option>
                                                        @foreach($stateArray as $state)
                                                        <option value="{{$state->id}}" {{SELECT($state->id,old('state_id',$user->state_id))}}>{{$state->name}}</option>          
                                                        @endforeach
                                                </select>            
                                                @error('state_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror                                    
                                             </div>
                                          </div>

                                          <div class="col-4">
                                             <div class="form-group">
                                                <label for="">@lang('messages.Admin.City')</label>
                                                <div class="position-relative has-icon-left">
                                                   <input type="text" class="form-control @error('city') is-invalid @enderror" placeholder="@lang('messages.Admin.City')" name="city" value="{{old('city',$user->city)}}">
                                                   <div class="form-control-position">
                                                      <i class="feather icon-map-pin"></i>
                                                   </div>
                                                   @error('city')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                             </div>
                                          </div>                                          

                                       </div>


                                       <div class="row">
                                          <div class="col-12">
                                             <h5 class="mb-2 lighten">
                                                @lang('messages.Admin.Change Password') 
                                                <small class="text-muted">
                                                    <i class="feather icon-info"></i>
                                                    @lang('messages.Admin.Leave blank if no need to change password')
                                                </small>
                                            </h5>                                             
                                          </div>

                                          <div class="col-4">
                                             <div class="form-group">
                                                <label for="password-vertical2">@lang('messages.Admin.New Password')</label>
                                                <input type="password" id="password-vertical2" class="form-control @error('new_password') is-invalid @enderror" name="new_password" placeholder="@lang('messages.Admin.New Password')">
                                                @error('new_password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                             </div>
                                          </div>

                                          <div class="col-4">
                                             <div class="form-group">
                                                <label for="password-vertical3">@lang('messages.Admin.Confirm New Password')</label>
                                                <input type="password" id="password-vertical3" class="form-control @error('confirm_new_password') is-invalid @enderror" name="confirm_new_password" placeholder="@lang('messages.Admin.Confirm New Password')">
                                                @error('confirm_new_password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                             </div>
                                          </div>
                                        </div>
                                          <div class="row">
                                          <div class="col-12">
                                            <h5 class="mb-2 lighten">
                                                @lang('messages.Admin.Profile') 
                                                <small class="text-muted">
                                                    <i class="feather icon-info"></i>
                                                    @lang('messages.Admin.Leave blank if no need to change profile image')
                                                </small>
                                            </h5>

                                          <div class="row">
                                          <div class="col-lg-4 col-md-12">
										 
                                                <fieldset class="form-group">
                                                   <label for="password-vertical2">@lang('messages.Admin.Profile Image')</label>
                                                    <div class="custom-file">
														 <input type="file" id="inputGroupFile01" class="form-control custom-file-input @error('image') is-invalid @enderror" name="image">
                                                @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
														
                                                        <label class="custom-file-label" for="inputGroupFile01">{{$user->profile->name ?? ''}}</label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            </div>
                                          </div>
                                        </div>

                                       
                                             <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                             <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                         
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
                   </section>
      </div>
   </div>
</div>
@endsection