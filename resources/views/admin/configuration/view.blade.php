@extends('layouts.layout')
@section('title',pageTitle('messages.Navigation.Site Configurations'))
@section('content')
<div class="content-wrapper configuration-settings">
  
   <div class="content-header row">
      <div class="content-header-left col-md-9 col-12 mb-2">
         <div class="row breadcrumbs-top">
            <div class="col-12">
               <h2 class="content-header-title float-left mb-0">@lang('messages.Navigation.Site Configurations')</h2>
               <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="{{route('/')}}">@lang('messages.Admin.Dashboard')</a>
                     </li>                   
                      <li class="breadcrumb-item"><a href="{{route('settings.index')}}">@lang('messages.Navigation.Settings')</a></li>
                     <li class="breadcrumb-item active">@lang('messages.Navigation.Site Configurations')
                     </li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="content-body">
      <div id="user-profile">
         <!-- Nav Justified Starts -->
         <section id="nav-justified">
            <div class="row">
               <div class="col-sm-12">
                  <div class="card overflow-hidden">
                     <div class="card-content">
                        <div class="card-body">
                           <div class="tab-content pt-1">
                              <div class="tab-pane active" id="configuration-just" role="tabpanel" aria-labelledby="configuration-tab-justified">
                                 <form method="POST" action="{{route('configuration.update',$configuration->id)}}" class="form form-vertical" autocomplete="off" enctype="multipart/form-data">
                                    @method('PUT')
                                    {{csrf_field()}}
                                    <div class="form-body">
                                       <div class="row">
                                          <div class="col-12">
                                             <h5 class="mb-2">@lang('messages.Admin.Site Configuration')</h5>
                                          </div>
                                          

                                          <div class="col-4">
                                             <div class="form-group">
                                                <label for="data-name" class="required">@lang('messages.Admin.Logo')</label>
                                                 <div class="custom-file">
                                                   <input type="file" id="inputGroupFile01" name="logo" value=""  maxlength="255" placeholder="@lang('messages.Admin.Logo')"  class="form-control mb-3 custom-file-input"  />                                    
                                                   @error('logo')
                                                   <span class="invalid-feedback" role="alert">
                                                   <strong></strong>
                                                   </span>
                                                   @enderror
												    <label class="custom-file-label" for="inputGroupFile01">{{$configuration->logoFile->original_filename ?? ''}}</label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-4">
                                             <div class="form-group">
                                                <label for="data-name" class="required">@lang('messages.Admin.Favicon')</label>
                                                <div class="custom-file">
                                                   <input type="file" id="inputGroupFile02" name="favicon" value=""  maxlength="255" placeholder="@lang('messages.Admin.Favicon')"  class="form-control custom-file-input mb-3"  />
                                                   @error('favicon')
                                                   <span class="invalid-feedback" role="alert">
                                                   <strong></strong>
                                                   </span>
                                                   @enderror
												     <label class="custom-file-label" for="inputGroupFile01">{{$configuration->faviconFile->original_filename ?? ''}}</label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-4">
                                             <div class="form-group">
                                                <label for="site_name" class="required">@lang('messages.Admin.Site Name')</label>
                                                <div class="position-relative has-icon-left">
                                                   <input type="text" class="form-control @error('site_name') is-invalid @enderror" name="site_name" placeholder="@lang('messages.Admin.Site Name')" value="{{$configuration->site_name}}" id="site_name">
                                                   <div class="form-control-position">
                                                      <i class="feather icon-user"></i>
                                                   </div>
                                                   @error('site_name')
                                                   <span class="invalid-feedback" role="alert">
                                                   <strong></strong>
                                                   </span>
                                                   @enderror
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="form-group">
                                                <label for="site_description" class="required">@lang('messages.Admin.Site Description')</label>
                                                <div class="position-relative has-icon-left">
                                                   <textarea rows="3" cols="50"  name="site_description" placeholder="@lang('messages.Admin.Site Description')"  class="form-control @error('site_description') is-invalid @enderror" >{!! $configuration->site_description !!}
                                                  </textarea>
                                                 
                                                   @error('site_description')
                                                   <span class="invalid-feedback" role="alert">
                                                   <strong></strong>
                                                   </span>
                                                   @enderror
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <h5 class="mb-2">@lang('messages.Admin.Default Configurations')</h5>
                                          </div>
                                          <div class="col-4">
                                             <div class="form-group">
                                                <label for="">@lang('messages.Admin.Country')</label> 
                                                <div class="position-relative">
                                                   <select class="select2 form-control @error('country_id') is-invalid @enderror" name="country_id">
                                                      <option value="">@lang('messages.Common.Select') @lang('messages.Admin.Country')</option>
                                                      @foreach($countryArray as $country)
                                                      <option value="{{$country->id}}" {{SELECT($country->id,$configuration->country_id)}}>{{$country->name}}</option>          
                                                      @endforeach
                                                   </select>
                                                   @error('country_id')
                                                   <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                                   </span>
                                                   @enderror                                   
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-4">
                                             <div class="form-group">
                                                <label for="">@lang('messages.Admin.State')</label> 
                                                <div class="position-relative has-icon-left">
                                                   <select class="select2 form-control @error('state_id') is-invalid @enderror" name="state_id">
                                                      <option value="">@lang('messages.Common.Select') @lang('messages.Admin.State')</option>
                                                      @foreach($stateArray as $state)
                                                      <option value="{{$state->id}}" {{SELECT($state->id,$configuration->state_id)}}>{{$state->name}}</option>          
                                                      @endforeach
                                                   </select>
                                                   @error('state_id')
                                                   <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                                   </span>
                                                   @enderror                                   
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <hr class="my-1">
                                          </div>
                                          <div class="col-12">
                                             <button type="submit" class="btn btn-primary mr-1 mb-1">@lang('messages.Common.Submit')</button>     
                                          </div>
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