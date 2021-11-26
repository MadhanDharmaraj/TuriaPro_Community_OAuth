<table class="table table-hover-animation">
   <thead>
      <tr>
         
         <th>
            <a class='_sorting' data-col="Email" data-order="{{sortType()}}">
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
            <a class='_sorting' data-col="InvitedAt" data-order="{{sortType()}}">
            @lang('messages.Common.Invited At')
            <i class="fa fa-sort"></i>
            </a>
         </th>

         <th>
            <a class='_sorting' data-col="Usertype" data-order="{{sortType()}}">
            @lang('messages.Common.User Type')
            <i class="fa fa-sort"></i>
            </a>
         </th>

         <th >
            <a class='_sorting' data-col="Status" data-order="{{sortType()}}">
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

        @foreach($results as $result)

            <tr>
                <td class="product-category">{{$result->email}}</td>

                 <td class="product-name sorting_1">{{stringLength($result->name,50)}}</td>

                 
                 
                 <td class="product-category">{{showHumanDate($result->created_at)}}</td>

                 <td>
                    {{findUserType($result->user_type_id)}}
                 </td>

                 <td>
                    {!! findStatus($result->status) !!}
                 </td>

                 <td class="product-price">

                    @if(access('invitation-read'))
                    <a data-url="{{route('invites.show',$result->id)}}" class="_addEdit" data-toggle="tooltip" title="@lang('messages.Common.View')">
                        <i class="feather icon-eye"></i>
                    </a>
                    @endif

                    @if(access('invitation-write'))
                    <a data-url="{{route('invites.edit',$result->id)}}" class="_addEdit"  data-toggle="tooltip" title="@lang('messages.Common.Edit')">
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


