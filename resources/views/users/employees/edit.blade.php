@extends('layouts.layout')
@section('title',pageTitle('messages.Admin.Employees'))
@section('content')
<div class="content-wrapper">
   <div class="content-header row">
      <div class="content-header-left col-md-9 col-12 mb-2">
         <div class="row breadcrumbs-top">
            <div class="col-12">
               <h2 class="content-header-title float-left mb-0">@lang('messages.Admin.Employees')</h2>
               <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="{{route('/')}}">@lang('messages.Admin.Dashboard')</a>
                     </li>
                     <li class="breadcrumb-item">
                        <a href="{{route('employees.index')}}">@lang('messages.Admin.Employees')</a>
                     </li>
                     <li class="breadcrumb-item active">@lang('messages.Common.View')
                     </li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="content-body">
      <!-- users edit start -->
      <section class="users-edit">
         <div class="card">
            <div class="card-content">
               @if ($errors->any())
               <div class="alert alert-danger">
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               @endif
               <div class="card-body">
                  <ul class="nav nav-tabs mb-3" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                        <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Account</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information" aria-controls="information" role="tab" aria-selected="false">
                        <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">Information</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab" href="#social" aria-controls="social" role="tab" aria-selected="false">
                        <i class="feather icon-share-2 mr-25"></i><span class="d-none d-sm-block">Social</span>
                        </a>
                     </li>
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                        <!-- users edit media object start -->
                        <div class="media mb-2">
                           <a class="mr-2 my-25" href="#">
                           <img src="{{asset('packa/images/portrait/small/avatar-s-12.png')}}" alt="users avatar" class="users-avatar-shadow rounded" height="90" width="90">
                           </a>
                           <div class="media-body mt-50">
                              <h4 class="media-heading">{{$result->name}}</h4>
                              @if(isset($result->role_objects) && !empty($result->role_objects))
                              @foreach($result->role_objects as $count => $role)
                              <span>@if($count > 0) | @endif {{$role->name}}</span>
                              @endforeach
                              @endif
                              <div class="col-12 d-flex mt-1 px-0">
                                 <a href="#" class="btn btn-primary d-none d-sm-block mr-75">Change</a>
                                 <a href="#" class="btn btn-primary d-block d-sm-none mr-75"><i class="feather icon-edit-1"></i></a>
                                 <a href="#" class="btn btn-outline-danger d-none d-sm-block">Remove</a>
                                 <a href="#" class="btn btn-outline-danger d-block d-sm-none"><i class="feather icon-trash-2"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- users edit media object ends -->
                        <!-- users edit account form start -->
                        <form action="{{route('employees.update',$result->id)}}" method="POST">
                           @method('PUT')        
                           {{csrf_field()}}
                           <input type="hidden" name="formKey" value="1"/>
                           <div class="row">
                              <div class="col-12 col-sm-6">
                                 <div class="form-group">
                                    <div class="controls">
                                       <label>Name</label>
                                       <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{old('name',$result->name)}}" required data-validation-required-message="This name field is required">
                                    </div>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>
                                 <div class="form-group">
                                    <div class="controls">
                                       <label>E-mail</label>
                                       <input type="email" class="form-control" placeholder="Email" disabled="true" value="{{$result->email}}" required data-validation-required-message="This email field is required">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                 <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control form-control @error('status') is-invalid @enderror" name="status">
                                       @foreach(employeeAccountStatus() as $key => $value)
                                       <option value="{{$key}}" {{SELECT($key,old('status',$result->status))}}>{{$value}}</option>
                                       @endforeach
                                    </select>
                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>
                                 <div class="form-group">
                                    <label>Employment Type</label>
                                    <select class="form-control form-control @error('employment_type_id') is-invalid @enderror" name="employment_type_id">
                                       <option value=""> -- Select Employment Type -- </option>
                                       @foreach($employmentTypeArr as $key => $value)
                                       <option value="{{$value->id}}"
                                       {{SELECT($value->id,old('employment_type_id',$result->employment_type_id))}}>{{$value->name}}</option>
                                       @endforeach
                                    </select>
                                    @error('employment_type_id')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>
                                 <div class="form-group">
                                    <label>Designation</label>
                                    <select class="form-control form-control @error('designation_id') is-invalid @enderror" name="designation_id">
                                       <option value=""> -- Select Designation -- </option>
                                       @foreach($designationArr as $key => $value)
                                       <option value="{{$value->id}}" {{SELECT($value->id,old('designation_id',$result->designation_id))}}>{{$value->name}}</option>
                                       @endforeach
                                    </select>
                                    @error('designation_id')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>
                                 <div class="form-group">
                                    <label>Role</label>                                    
                                    <select class="form-control select2 select2-size-sm @error('roles') is-invalid @enderror" name="roles[]" id="roleDrop" multiple placeholer="Select Role" onchange="roleChange();">                    
                                    @foreach($roles as $key => $role)
                                    <option value="{{$role->id}}" {{MULTISELECT($role->id,old('roles',$result->roles))}}>{{title_case($role->name)}}</option>
                                    @endforeach
                                    </select>
                                    @error('roles')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>
                              </div>
                              @error('permissions')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                              <div class="col-12">        
                                 @include('authorization.permissions',['collection'=>false])
                              </div>
                              <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                 <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                 Changes</button>
                                 <button type="reset" class="btn btn-outline-warning">Reset</button>
                              </div>
                           </div>
                        </form>
                        <!-- users edit account form ends -->
                     </div>
                     <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                        <!-- users edit Info form start -->
                        <form action="{{route('employees.update',$result->id)}}" method="POST">
                           @method('PUT')        
                           {{csrf_field()}}
                           <input type="hidden" name="formKey" value="2"/>
                           <div class="row mt-1">
                              <div class="col-12 col-sm-6">
                                 <h5 class="mb-1"><i class="feather icon-user mr-25"></i>Personal Information</h5>
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="form-group">
                                          <div class="controls">
                                             <label>Birth date</label>
                                             <input type="text" class="form-control pickadate" required placeholder="Birth date" name="dob" data-validation-required-message="This birthdate field is required" value="{{old('dob',$result->dob)}}">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="controls">
                                       <label>Mobile</label>
                                       <input type="text" class="form-control numeric" name="contact" placeholder="Mobile number here..." data-validation-required-message="This mobile number is required" value="{{old('contact',$result->contact)}}">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="controls">
                                       <label>Website</label>
                                       <input type="text" class="form-control" name="website" required placeholder="Website here..." value="{{old('website',$result->website)}}" data-validation-required-message="This Website field is required">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label>Languages</label>
                                    <select class="form-control select2" name="languages_known[]" id="users-language-select2" multiple="multiple">
                                        <option value=""> -- Select Languages -- </option>
                                        @foreach(getLanguagesKnown() as $language)
                                       <option value="{{$language}}" {{MULTISELECT($language,old('languages_knowns',$result->languages_known))}}>{{$language}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label>Gender</label>
                                    <ul class="list-unstyled mb-0">
                                        @foreach(getGender() as $gender_id => $gender_name)
                                       <li class="d-inline-block mr-2">
                                          <fieldset>
                                             <div class="vs-radio-con">
                                                <input type="radio" name="gender_id" {{RADIO('gender_id',$gender_id,$gender_id)}} value="{{$gender_id}}">
                                                <span class="vs-radio">
                                                <span class="vs-radio--border"></span>
                                                <span class="vs-radio--circle"></span>
                                                </span>
                                                {{title_case($gender_name)}}
                                             </div>
                                          </fieldset>
                                       </li>
                                       @endforeach                                       
                                    </ul>
                                 </div>
                                
                              </div>
                              <div class="col-12 col-sm-6">
                                 <h5 class="mb-1 mt-2 mt-sm-0"><i class="feather icon-map-pin mr-25"></i>Address</h5>
                                 <div class="form-group">
                                    <div class="controls">
                                       <label>Address Line 1</label>
                                       <input type="text" class="form-control" name="address_line_1" value="{{old('address_line_1',$result->address_line_1)}}" required placeholder="Address Line 1" data-validation-required-message="This Address field is required">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="controls">
                                       <label>Address Line 2</label>
                                       <input type="text" class="form-control" name="address_line_2" required placeholder="Address Line 2" value="{{old('address_line_2',$result->address_line_2)}}" data-validation-required-message="This Address field is required">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="controls">
                                       <label>Postcode</label>
                                       <input type="text" class="form-control" name="pin_or_zip_code"  value="{{old('pin_or_zip_code',$result->pin_or_zip_code)}}" required placeholder="Pin / Zip Code" data-validation-required-message="This Pin / Zip Code field is required">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="controls">
                                       <label>@lang('messages.Common.Select') @lang('messages.Admin.Country')</label>
                                       <select class="form-control select2 @error('country_id') is-invalid @enderror country" name="country_id">
                                          <option value="">@lang('messages.Common.Select') @lang('messages.Admin.Country')</option>
                                          @foreach($countryArray as $country)
                                          <option value="{{old('country_id',$country->id)}}" {{SELECT($country->id,old('country_id',$result->country_id))}}>
                                          {{title_case($country->name)}}
                                          </option>
                                          @endforeach
                                       </select>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="controls">
                                       <label>State</label>
                                       <select class="form-control select2 @error('state_id') is-invalid @enderror" name="state_id" id="stateDrop">
                                          <option value="">@lang('messages.Common.Select') @lang('messages.Admin.State')</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="controls">
                                       <label>City</label>
                                       <input type="text" name="city" class="form-control" required value="{{old('city',$result->city)}}" data-validation-required-message="This City field is required">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                 <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                 Changes</button>
                                 <button type="reset" class="btn btn-outline-warning">Reset</button>
                              </div>
                           </div>
                        </form>
                        <!-- users edit Info form ends -->
                     </div>
                     <div class="tab-pane" id="social" aria-labelledby="social-tab" role="tabpanel">
                        <!-- users edit socail form start -->
                        <form action="{{route('employees.update',$result->id)}}" method="POST">
                           @method('PUT')        
                           {{csrf_field()}}
                           <input type="hidden" name="formKey" value="3"/>
                           <div class="row">
                              <div class="col-12 col-sm-6">
                                 <fieldset>
                                    <label>Twitter</label>
                                    <div class="input-group mb-75">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text feather icon-twitter" id="basic-addon3"></span>
                                       </div>
                                       <input type="text" class="form-control" value="https://www.twitter.com/adoptionism744" placeholder="https://www.twitter.com/" aria-describedby="basic-addon3">
                                    </div>
                                    <label>Facebook</label>
                                    <div class="input-group mb-75">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text feather icon-facebook" id="basic-addon4"></span>
                                       </div>
                                       <input type="text" class="form-control" value="https://www.facebook.com/adoptionism664" placeholder="https://www.facebook.com/" aria-describedby="basic-addon4">
                                    </div>
                                    <label>Instagram</label>
                                    <div class="input-group mb-75">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text feather icon-instagram" id="basic-addon5"></span>
                                       </div>
                                       <input type="text" class="form-control" value="https://www.instagram.com/adopt-ionism744" placeholder="https://www.instagram.com/" aria-describedby="basic-addon5">
                                    </div>
                                 </fieldset>
                              </div>
                              <div class="col-12 col-sm-6">
                                 <label>Github</label>
                                 <div class="input-group mb-75">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text feather icon-github" id="basic-addon9"></span>
                                    </div>
                                    <input type="text" class="form-control" value="https://www.github.com/madop818" placeholder="https://www.github.com/" aria-describedby="basic-addon9">
                                 </div>
                                 <label>Codepen</label>
                                 <div class="input-group mb-75">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text feather icon-codepen" id="basic-addon12"></span>
                                    </div>
                                    <input type="text" class="form-control" value="https://www.codepen.com/adoptism243" placeholder="https://www.codepen.com/" aria-describedby="basic-addon12">
                                 </div>
                                 <label>Slack</label>
                                 <div class="input-group mb-75">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text feather icon-slack" id="basic-addon11"></span>
                                    </div>
                                    <input type="text" class="form-control" value="@adoptionism744" placeholder="https://www.slack.com/" aria-describedby="basic-addon11">
                                 </div>
                              </div>
                              <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                 <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                 Changes</button>
                                 <button type="reset" class="btn btn-outline-warning">Reset</button>
                              </div>
                           </div>
                        </form>
                        <!-- users edit socail form ends -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- users edit ends -->
   </div>
</div>
<script>
   function roleChange() {        
       var roleIds = [];
       
       roleIds = $('#roleDrop').val();        
       if(roleIds.length > 0) {
           $.ajax({
             url: feedBaseUrl('/admin/fetch-role-permissions'),
             type: "POST",
             data: {idArr : roleIds},
             
           }).done(function(data) {  
              
              if(typeof data.length != 'undefined' && data.length > 0) {
                 checkPermissions(data);
              }            
           }).fail(function(jqXHR, textStatus) {
             console.log('Permission not collected....');
           });
       }
   }
    
   function checkPermissions(data) {      
       $("input[name='permissions[]']").each(function () {
           var iteratePermissionId = $(this).val();
           if($.inArray( iteratePermissionId, data ) !== -1) {                
               $(this).prop('checked', true);
           }
       });
   }
   
</script>
<script>
   $(document).ready(function(){
       $("select.country").change(function(){
           setState();        
       });
       setState();
   });
   
   function setState() {
       var selectedCountry = $(".country option:selected").val();
       var state_id = '{{$result->state_id ?? ""}}';
   
       if(!selectedCountry){return;}
       
       $.ajax({
           type: "POST",
           url: feedBaseUrl("/admin/states/"+selectedCountry),        
           data:{_token:feedToken()},
       }).done(function(response){
           var tag = '';
           tag+='<option value="">Select State</option>';     
           if(response.data && response.data != "undefined") {            
               $.each(response.data, function( index, option ) {
                 var selectThis = (option._id == state_id)?'selected':'';  
                 tag+='<option value="'+option._id+'" '+selectThis+'>'+option.name+'</option>';          
               });
           }
           $("#stateDrop").empty().append(tag);
       });
   }
</script>
@endsection