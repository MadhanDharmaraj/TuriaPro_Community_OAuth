@extends('layouts.layout')
@section('title',pageTitle('messages.Navigation.Employees'))
@section('content')
<div class="content-wrapper">
   <div class="content-header row">
      <div class="content-header-left col-md-9 col-12 mb-2">
         <div class="row breadcrumbs-top">
            <div class="col-12">
               <h2 class="content-header-title float-left mb-0">@lang('messages.Navigation.Employees')</h2>
               <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{{route('/')}}">@lang('messages.Admin.Dashboard')</a>
                     </li>
                     <li class="breadcrumb-item">@lang('messages.Navigation.Employees')
                     </li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="content-body">
      <div class="table-responsive">
         <!-- Data list view starts -->
         <section id="data-list-view" class="data-list-view-header">
         <!-- DataTable starts -->
         <div class="table-responsive">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
               <div class="top">
                  <div class="actions action-btns">
                     <div class="btn-group dropdown actions-dropodown">
                        <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Actions
                        </button>
                        <div class="dropdown-menu">
                           @if(access('employee-read'))
                           <a class="dropdown-item" href="#">Export</a>
                           @endif
                           @if(access('employee-delete'))
                           <a class="dropdown-item" href="#">Delete</a>
                           @endif
                           <a class="dropdown-item" href="#">Archive</a>
                           <a class="dropdown-item" href="#">Print</a>
                        </div>
                     </div>
                  </div>
                  
                  <div class="action-filters">
                     <div class="add_to_popup">
                        <a href="{{route('invites.create',['inviteKey'=>encrypt(adminEmployeeUserTypeId())])}}" data-toggle="tooltip" data-placement="top" title="Inivite Employee" >
                            <i class="feather icon-mail"></i>
                        </a>
                    </div>

                     <div class="click_filter">
                        <a id="filter_table" data-toggle="tooltip" data-placement="top" title="@lang('messages.Common.Filter')">
                            <i class="feather icon-filter"></i>
                        </a>
                    </div>

                  </div>
               </div>

               <div class="" id="open_filters_section" >
                  <section id="multiple-column-form">
				  <div class="col-md-12">
                     <div class=" match-height">
                        <div class="card">                           
                           <div class="card-content">
                              <div class="card-body">
                                 <form class="form">
                                    <div class="form-body">
                                       {{-- commented Filter section --}}
                                       <div class="row">

                                          <div class="col-md-2 col-12">
                                             <div class="form-label-group">
                                                <select class="form-control" id="_pageLength">                              
                                                @foreach(getPageLenthArr() as $value => $pageLenth)
                                                <option value="{{$value}}" {{SELECT($value,request('pageLength'))}}>{{$pageLenth}}</option>
                                                @endforeach
                                                </select>
                                             </div>
                                          </div>

                                          <div class="col-md-6 col-12">
                                             <div class="form-label-group">
                                                <input type="text" class="form-control searchable" placeholder="Keyword" value="{{request('keyword')}}" name="keyword">
                                             </div>
                                          </div>

                                          <div class="col-md-2 col-12">
                                             <div class="form-label-group">
                                                <button id="_search" class="btn btn-primary mr-1 mb-1 waves-effect waves-light"><i class="fa fa-search"></i> @lang('messages.Common.Search')</button>
                                             </div>
                                          </div>

                                          <div class="col-md-2 col-12">
                                             <div class="form-label-group">
                                                <button class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light reset-btn"><i class="fa fa-eraser"></i>@lang('messages.Common.Reset')</button>
                                             </div>
                                          </div>

                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     </div>
                  </section>
               </div>

               <div id="list-results">
                  @include('users.employees.list-ajax')                  
               </div>
               
            </div>
         </div>
         <!-- Data list view end -->
      </div>
   </div>
</div>

@endsection