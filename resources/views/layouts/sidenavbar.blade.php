<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
   <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
         <li class="nav-item mr-auto">
            <a class="navbar-brand" href="{{route('/')}}">
               <div class="brand-logo">
                  <img src="{{logo()}}" style="width: 30%;height: 20%;" />
                  <img src="{{logo_text()}}" style="width: 30%;height: 40%;" />
               </div>

               <h2 class="brand-text mb-0" style="display:none;">{{siteName()}}</h2>
            </a>
         </li>
         <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary" data-ticon="icon-disc"></i></a></li>
      </ul>
   </div>
   <div class="shadow-bottom"></div>
   <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
         <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}"><a href="{{route('/')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="">@lang('messages.Navigation.Dashboard')</span></a>
         </li>
         @if(access('client-read'))
         <li class="nav-item {{ request()->is('admin/clients') ? 'active' : '' }}"><a href="{{route('clients.index')}}"><i class="feather icon-user"></i><span class="menu-title" data-i18n="">@lang('messages.Navigation.Clients')</span></a>
         </li>         
         @endif

         @if(access('organization-read'))
         <li class="nav-item {{ request()->is('admin/organizations') ? 'active' : '' }}"><a href="{{route('organizations.index')}}"><i class="feather icon-user"></i><span class="menu-title" data-i18n="">@lang('messages.Navigation.Organizations')</span></a>
         </li>         
         @endif
         @if(access('books-read'))
         <li class="nav-item {{ request()->is('admin/books') ? 'active' : '' }}"><a href="{{route('settings.booksIndex')}}"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="">@lang('messages.Navigation.Books')</span></a>
         </li>         
         @endif
         @if(access('turia-pro-read'))
         <li class="nav-item {{ request()->is('admin/turia-pro') ? 'active' : '' }}"><a href="{{route('settings.turiaProIndex')}}"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="">@lang('messages.Navigation.Turia Pro')</span></a>
         </li>         
         @endif
         @if(access('compliance-read'))
         <li class=" nav-item">
            <a href="{{route('compliances-master.index')}}">
               <i class="feather icon-sliders"></i>
               <span class="menu-title" data-i18n="">Compliances</span>
            </a>
            <ul class="menu-content">
               <li class="{{ request()->is('admin/compliances/master') ? 'active' : '' }}">
                  <a href="{{route('compliances-master.index')}}">
                     <i class="feather icon-circle"></i>
                     <span class="menu-item" data-i18n="master">Master</span>
                  </a>
               </li> 

               <li class="{{ request()->is('admin/compliances/alerted') ? 'active' : '' }}">
                  <a href="{{route('compliances-alerted.index')}}">
                     <i class="feather icon-circle"></i>
                     <span class="menu-item" data-i18n="alerted">Alerted</span>
                  </a>
               </li> 
            </ul>
         </li>   
         @endif

         <!-- @if(access('plan-package-read'))
         <li class="nav-item {{ request()->is('admin/compliances') ? 'active' : '' }}"><a href="{{route('plan-packages.index')}}"><i class="feather icon-package"></i><span class="menu-title" data-i18n="">@lang('messages.Navigation.Plan Packages')</span></a>
         </li>
         @endif -->

         <!-- @if(access('chart-of-account-read'))
         <li class="nav-item {{ request()->is('admin/chart-of-account') ? 'active' : '' }}"><a href="{{route('chart-of-account.index')}}"><i class="feather icon-book"></i><span class="menu-title" data-i18n="">Charts Of Account</span></a>
         </li>    
         @endif -->

         @if(access('document-read'))
         <li class=" nav-item">
            <a href="#">
               <i class="feather icon-folder"></i>
               <span class="menu-title" data-i18n="">Documents</span>
            </a>
            <ul class="menu-content">
               <li class="{{ request()->is('admin/documents') ? 'active' : '' }}">
                  <a href="{{ url('admin/documents/list')}}">
                     <i class="feather icon-circle"></i>
                     <span class="menu-item" data-i18n="master">Legal Documents</span>
                  </a>
               </li> 
               <li class="{{ request()->is('admin/documents') ? 'active' : '' }}">
                  <a href="{{ url('admin/documents/trash')}}">
                     <i class="feather icon-circle"></i>
                     <span class="menu-item" data-i18n="master">Trash</span>
                  </a>
               </li> 
               
            </ul>
         </li>   
         @endif

         @if(access(['employee-read','invitation-read','role-read']))
         <li class=" nav-item">
            <a href="{{route('employees.index')}}">
               <i class="feather icon-users"></i>
               <span class="menu-title" data-i18n="">Users</span>
            </a>
            <ul class="menu-content">
               <!-- @if(access('employee-read'))
                  <li class="{{ request()->is('admin/employees') ? 'active' : '' }}">
                     <a href="{{route('employees.index')}}">
                        <i class="feather icon-circle"></i>
                        <span class="menu-item" data-i18n="Employees">Employees</span>
                     </a>
                  </li>
               @endif -->

               @if(access('invitation-read'))
               <li class="{{ request()->is('admin/invites') ? 'active' : '' }}"><a href="{{route('invites.index',['Tab'=>'reg'])}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Invites">User</span></a>
                        </li>
               @endif

               @if(access('role-read'))
               <li class="{{ request()->is('admin/roles') ? 'active' : '' }}"><a href="{{route('roles.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Roles">Roles</span></a>
                        </li>
               @endif
            </ul>
         </li> 
         @endif

         <li class="nav-item {{ request()->is('admin/reports') ? 'active' : '' }}"><a href="{{route('reports.index')}}"><i class="feather icon-bar-chart-2"></i><span class="menu-title" data-i18n="Reports">Reports</span></a>
         </li>    
         <li class="nav-item {{ request()->is('admin/settings') ? 'active' : '' }}"><a href="{{route('settings.index')}}"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="">Settings</span></a>
         </li>      
      </ul>
   </div>
</div>
<!-- END: Main Menu-->