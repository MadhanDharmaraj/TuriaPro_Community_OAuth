@if(count($results))

<div class="bottom page_nave">
	<label>
		@lang('messages.Common.Showing :first - :last of :total records',['first'=>$results->firstItem(),'last' => $results->lastItem(), 'total'=> $results->total()])
	</label>
      {{$results->links()}}  
</div>
@endif
@include('common.popup-modal')

