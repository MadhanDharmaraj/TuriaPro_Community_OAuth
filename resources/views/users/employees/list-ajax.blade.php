<table class="table data-list-view dataTable">
   <thead>
      <tr>
         
         <th># </th>
         <th>
            <a class='_sorting' data-col="AccountID" data-order="{{sortType()}}">
              @lang('messages.Admin.Account ID')
            <i class="fa fa-sort"></i>
            </a>
          </th>
         <th>
            <a class='_sorting' data-col="email" data-order="{{sortType()}}">
            @lang('messages.Admin.Email')            
            <i class="fa fa-sort"></i>
            </a>
        </th>

         <th>
            <a class='_sorting' data-col="Name" data-order="{{sortType()}}">
            @lang('messages.Admin.Name')            
            <i class="fa fa-sort"></i>
            </a>
         </th>
          
        
         <th>
            <a class='_sorting' data-col="JoinedAt" data-order="{{sortType()}}">
            @lang('messages.Common.Joined At')
            <i class="fa fa-sort"></i>
            </a>
         </th>

         <th>
            <a class='_sorting' data-col="updated_at" data-order="{{sortType()}}">
            @lang('messages.Common.Updated At')
            <i class="fa fa-sort"></i>
            </a>
         </th>

         <th >
            <a class='_sorting' data-col="status" data-order="{{sortType()}}">
            @lang('messages.Common.Status')
            <i class="fa fa-sort"></i>
            </a>
         </th>

         <th>
            @lang('messages.Common.Action')
         </th>
      </tr>
   </thead>

   <tbody>
@if(count($results)) 
        {{iteration($results)}} 

        @foreach($results as $result)
            <tr>

                 <td>{{SNO($loop)}}</td>

                <td class="product-name sorting_1">{{$result->unique_no ?? '--'}}</td>

                 <td class="product-name sorting_1">{{$result->email}}</td>
                 
                 <td class="product-name sorting_1">{{stringLength($result->name,50)}}</td>

                 
                 
                 <td class="product-category">{{showDate($result->created_at)}}</td>

                 <td>
                    {{showDate($result->updated_at)}}
                 </td>

                 <td>
                    {!! findStatus($result->status) !!}
                 </td>

                 <td class="product-price">
                    @if(access('employee-read'))
                    <a href="{{route('employees.show',$result->id)}}"  data-toggle="tooltip" title="@lang('messages.Common.View')">
                        <i class="feather icon-eye"></i>
                    </a>
                    @endif

                    @if(access('employee-write'))
                    <a href="{{route('employees.edit',$result->id)}}" data-toggle="tooltip" title="@lang('messages.Common.Edit')">
                        <i class="feather icon-edit-2"></i>
                    </a>
                    @endif

                 </td>
            </tr>
        @endforeach 
    @else
        <tr>
         <td class="empty-text" colspan="6">
            <div class="list-empty-text"> @lang('messages.Common.No Records Found !') </div>
         </td>
        </tr>
    @endif
   </tbody>
</table>
@include('common.table-footer')

<!-- DataTable ends -->


