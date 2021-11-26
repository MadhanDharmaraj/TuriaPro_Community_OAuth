//Defining array
var __listData = {};

//Set current page to 0
function resetPagination(){
  __listData['page'] = 0;
}


// Actions when clicked on _sorting class of <th> tag
$(document).on('click','._sorting',function(){    

    __listData['sortfield'] = $(this).data('col');
    __listData['sorttype'] = $(this).data('order');

    resetPagination();
    onFilteration();
});

// Actions when changed the select option on _pageLength id 
// to display 'pageLength' number of results in table 
$(document).on('change','#_pageLength',function(){
    __listData['pageLength'] = $("#_pageLength").val(); 
    resetPagination();
    onFilteration();
});

// Actions when clicked search button 
$(document).on('click','#_search',function(e){
    e.preventDefault();
    $('.searchable').each(function(){
      var name = $(this).attr('name');
      if(name && name!='undefined' && ($(this).val() || $(this).val()==''))  {
        __listData[name] =  $(this).val();
      }      
    });
    resetPagination();
    onFilteration();
});

$(function() {
    // Actions when clicked on pagination
    $('body').on('click', '.pagination a', function(e) {
        e.preventDefault();
        __listData['page'] = $(this).attr('href').split('page=')[1];
        //
        onFilteration();
    });

    // Actions when clicked on reset button for custom search
    $(".reset-btn").click(function(e){
       e.preventDefault();
       $(this).closest('form').find(".searchable").val("");    
       clearAppendedQueryString();
       $("#_search").click();
    });

});

// Function to create url for search, pagination, sort, pageLength
function appendUrlParameters() {

  var url = feedCurrentUrl('?');

  if(__listData) {
    $.each(__listData,function(key,value){
        url+='&'+key+'='+value;
    });
  }
  // Push the created url to the current pageURL
  window.history.pushState("", "", url);
  return url;

}

function clearAppendedQueryString() {
 
 var url = feedCurrentUrl();
 window.history.pushState("", "", url);

}

// Initialize tooltip
function callTooltip() {
  $('[data-toggle="tooltip"]').tooltip(); 
}

// Function to call blade function
function onFilteration() {
      callAjax();      //calling blade function
}

$(function(){
      callTooltip();
      // Toggle fuction for search button
  $("#filter_table").click(function(){
    $("#open_filters_section").slideToggle();
  });
});

  


  $(document).ready(function () {


        $('._delete').on('click', function(e) {

            var idsArr = [];  
            var delete_url = $(this).data('url');

            $(".dt-checkboxes:checked").each(function() {  
                idsArr.push($(this).val());
            });  


            if(idsArr.length <=0)  
            {  
                alert("Please select atleast one record to delete.");  

            }  else {  

                if(confirm("Are you sure, you want to delete the selected categories?")){  

                    var strIds = idsArr.join(","); 

                    $.ajax({

                        url: delete_url,

                        type: 'DELETE',                        

                        data: 'ids='+strIds,

                        success: function (res) {

                            if (res['data']['status']==true) {

                                $(".dt-checkboxes:checked").each(function() {  
                                    $(this).parents("tr").remove();
                                });
                                alert(res['data']['message']);

                            } else {

                                alert('Whoops Something went wrong!!');

                            }

                        },

                        error: function (error) {

                              console.log(error);

                        }

                    });



                }  

            }  

        });



        // $('[data-toggle=confirmation]').confirmation({

        //     rootSelector: '[data-toggle=confirmation]',

        //     onConfirm: function (event, element) {

        //         element.closest('form').submit();

        //     }

        // });   

    

    });  