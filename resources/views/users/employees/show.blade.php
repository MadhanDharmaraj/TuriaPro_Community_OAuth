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
                <!-- page users view start -->
                <section class="page-users-view">
                    <div class="row">
                        <!-- account start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Account</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="users-view-image">
                                            <img src="{{asset('packa/images/portrait/small/avatar-s-12.png')}}" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                                        </div>
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                               
                                                <tr>
                                                    <td class="font-weight-bold">Name</td>
                                                    <td>{{$result->name ?? ""}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Email</td>
                                                    <td>{{$result->email ?? ""}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-5">
                                            <table class="ml-0 ml-sm-0 ml-lg-0">
                                                <tr>
                                                    <td class="font-weight-bold">Status</td>
                                                    <td>{{findStatus($result->status)}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Role</td>
                                                    <td>
                                                         @if(isset($result->role_objects) && !empty($result->role_objects))
                                                          @foreach($result->role_objects as $count => $role)
                                                            <span>@if($count > 0) | @endif {{$role->name}}</span>
                                                          @endforeach
                                                        @endif
                                                    </td>
                                                </tr>
                                                
                                            </table>
                                        </div>
                                        <div class="col-12">
                                            @if(access('employee-write'))
                                            <a href="{{route('employees.edit',$result->id)}}" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> Edit</a>
                                            @endif
                                            @if(access('employee-delete'))
                                            <button class="btn btn-outline-danger"><i class="feather icon-trash-2"></i> Delete</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- account end -->
                        <!-- information start -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">Information</div>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td class="font-weight-bold">Birth Date </td>
                                            <td>{{showDate($result->dob) ?? ""}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Mobile</td>
                                            <td>{{$result->contact ?? ""}}</td>
                                        </tr>                                        
                                        <tr>
                                            <td class="font-weight-bold">Languages</td>
                                            <td>
                                                @if(isset($result->languages_known) && !empty($result->languages_known))
                                                    @foreach($result->languages_known as $count => $language)
                                                        @if($count > 0) , @endif {{$language}}
                                                    @endforeach
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Gender</td>
                                            <td>{{findGender($result->gender_id)}}</td>
                                        </tr>                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- information start -->
                        <!-- social links end -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">Social Links</div>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td class="font-weight-bold">Twitter</td>
                                            <td>https://twitter.com/adoptionism744
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Facebook</td>
                                            <td>https://www.facebook.com/adoptionism664
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Instagram</td>
                                            <td>https://www.instagram.com/adopt-ionism744/
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Github</td>
                                            <td>https://github.com/madop818
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">CodePen</td>
                                            <td>https://codepen.io/adoptism243
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Slack</td>
                                            <td>@adoptionism744
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- social links end -->
                        <!-- permissions start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom mx-2 px-0">
                                    <h6 class="border-bottom py-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>Permission
                                    </h6>
                                </div>
                                <div class="card-body px-75">
                                    @include('authorization.permissions-show',['collection'=>false])
                                </div>
                            </div>
                        </div>
                        <!-- permissions end -->
                    </div>
                </section>
                <!-- page users view end -->

   </div>
</div>
@endsection