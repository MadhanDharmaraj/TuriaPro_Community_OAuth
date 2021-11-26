@extends('layouts.layout')
@section('title',pageTitle('messages.Admin.Employees'))
@section('content')
<div class="content-wrapper">
   <div class="content-header row">
      <div class="content-header-left col-md-9 col-12 mb-2">
         <div class="row breadcrumbs-top">
            <div class="col-12">
               <h2 class="content-header-title float-left mb-0">@if(request('inviteKey')){{findUserType(decrypt(request('inviteKey')))}} @endif @lang('messages.Admin.Invites')</h2>
            </div>
         </div>
      </div>
   </div>


   <div class="content-body">
      <!-- users edit start -->
      <section class="users-edit">

         <div class="card">
            <div class="card-content">
               <div class="card-body pt-3">
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif


                  <!-- users edit account form start -->
                  <form method="POST" action="{{route('invites.store')}}" class="form form-vertical" autocomplete="off">
                        {{csrf_field()}}
                     <div class="row">
                        <div class="col-12 col-sm-6">


                           @if(!request()->has('inviteKey'))
                           <div class="form-group">
                              <div class="controls">
                                 <label>@lang('messages.Admin.Invite Under')</label>
                                 <select class="form-control @error('user_type_id') is-invalid @enderror" name="inviteKey">
                                 <option value="" >@lang('messages.Common.Select')</option>
                                 @foreach($userType as $inviteUnderId => $inviteUnderName)
                                    @if(isInviteAllowedUserType($inviteUnderId))
                                    <option value="{{encrypt($inviteUnderId)}}"    {{SELECT($inviteUnderId,old('inviteKey'))}}>{{strtoupper($inviteUnderName)}}</option>
                                    @endif
                                 @endforeach
                              </select>
                                 @error('user_type_id')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                              </div>
                           </div>
                           @else
                              <input name="inviteKey" type="hidden" value="{{request('inviteKey')}}"/>
                           @endif

                           <div class="form-group">
                              <div class="controls">
                                 <label>@lang('messages.Common.Name')</label>
                                 <input type="text" name="name" value="{!! old('name') !!}"  maxlength="255" placeholder="@lang('messages.Common.Name')"  class="form-control @error('name') is-invalid @enderror"  />
                                 @error('name')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                              </div>
                           </div>
                           
                           <div class="form-group">
                              <label class="required"> @lang('messages.Admin.Role')
                              </label>
                              <select class="form-control select2 select2-size-sm @error('roles') is-invalid @enderror" name="roles" id="roleDrop"  onchange="roleChange();">
                                 <option value="" >@lang('messages.Common.Select') @lang('messages.Admin.Role')</option>
                                 @foreach($roles as $key => $role)
                                 <option value="{{$role->id}}"    {{SELECT($role->id,old('roles'))}}>{{title_case($role->name)}}</option>
                                 @endforeach
                              </select>
                              @error('roles')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                        </div>
                        <div class="col-12 col-sm-6">
                           <div class="form-group">
                              <div class="controls">
                                 <label required>@lang('messages.Navigation.Email')</label>
                                 <input type="text" name="email" value="{!! old('email') !!}"  maxlength="255" placeholder="@lang('messages.Navigation.Email')"  class="form-control @error('email') is-invalid @enderror"  />
                                 @error('email')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                              </div>
                           </div>
                        </div>
                        <div class="col-12">
                        <table class="table table-borderless">
                                 <thead>
                                    <tr>
                                       <th>Module</th>
                                       <th>Read</th>
                                       <th>Write</th>
                                       <th>Delete</th>
                                       <th>Import</th>
                                       <th>Export</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($modules as $key=>$module)
                                    <tr>
                                       <td>
                                          <div class="">
                                             <label class="" >{{$module->name}}</label>
                                          </div>
                                       </td>
                                    
                                       @foreach($module->permissions as $k=>$permission)
                                       <td>
                                          <div class="custom-control custom-checkbox">
                                             <input type="checkbox" name="permissions[]" disabled id="users-checkbox_{{$key}}_{{$k}}" class="custom-control-input" value="{{$permission->slug}}">
                                             <label class="custom-control-label" for="users-checkbox_{{$key}}_{{$k}}"></label>
                                          </div>
                                       </td>
                                       @endforeach
                                    </tr>
                                    @endforeach
                                 </tbody>
                              </table>
                        </div>
                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                           <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Invite</button>
                           <button type="reset" class="btn btn-outline-warning">Reset</button>
                        </div>
                     </div>
                  </form>
                  <!-- users edit account form ends -->
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
            else{
               $(this).prop('checked', false);
            }
        });
    }
</script>
@endsection