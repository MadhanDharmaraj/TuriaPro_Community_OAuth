@extends('layouts.layout')
@section('title',pageTitle('messages.Admin.Invites'))
@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">@lang('messages.Admin.Invites')</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('/')}}">@lang('messages.Admin.Dashboard')</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('invites.index')}}">@lang('messages.Admin.Invites')</a>
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
                                        <a class="dropdown-item" href="#">Export</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                        <a class="dropdown-item" href="#">Archive</a>
                                        <a class="dropdown-item" href="#">Print</a>
                                    </div>
                                </div>
                            </div>
                            <div class="action-filters">
                                <div class="add_to_popup">
                                    <a class="_addEdit" data-toggle="tooltip" data-placement="top" title="Invite" href="{{route('invites.create')}}">
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

                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <ul class="nav nav-tabs nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center {{(request('Tab') == 'reg')?'active':''}}" href="{{addQueryInCurrentUrl(['Tab'=>'reg'])}}">
                                                <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Registered Invites</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center {{(request('Tab') == 'unreg')?'active':''}}" href="{{addQueryInCurrentUrl(['Tab'=>'unreg'])}}">
                                                <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">Unregistered Invites</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">                                        
                                        <div class="tab-pane active" aria-labelledby="information-tab" role="tabpanel">
                                            <div id="list-results">
                                                @include('users.invites.list-ajax')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Data list view end -->
            </section>
        </div>
    </div>
</div>
@endsection