

//Get the csrf token of the current page, from the meta tags from <head> section
function feedToken() {
  return $('meta[name="csrf_token"]').attr('content');
}

//Get the url of the current page, from the meta tags from <head> section
function feedCurrentUrl(urlPath='') {
  var current_url = $('meta[name="current_url"]').attr('content'); //{{url('/')}}
  
  if(urlPath) {
    current_url = current_url+urlPath;
  }
  return current_url;
}


//Get the url of the current page, from the meta tags from <head> section
function feedBaseUrl(urlPath='') {
  var base_url = $('meta[name="base_url"]').attr('content'); //{{url('/')}}
  if(urlPath) {
    base_url = base_url+urlPath;
  }
  return base_url;
}

$(function(){
        $.ajaxSetup({
       headers: {
       'X-CSRF-TOKEN': feedToken()
       }
    });
});


$(document).on("keypress",'.numeric',function(e){

    var keyCode = e.which ? e.which : e.keyCode
           
      if (!(keyCode >= 48 && keyCode <= 57)) {        
        return false;
      }else{
        
      }
});


$(document).on("keypress blur change",'.percentage',function(e){
    if($(this).val() > 100) {
      $(this).val(100);
    } else if($(this).val() < 0) {
      $(this).val(0);
    }
});



$(document).on("click",'._addEdit',function(){

    var _url = $(this).data('url');        

    if(_url && _url!='undefined') {
      callPopup(_url);      
    }        
});


/*use this class only for cancel button with submit page*/
$(document).on("click",'.cancel-btn',function(){
    window.location.reload();
});


function callPopup(url,method='GET') {  

      $.ajax({
            method:method,
            url:url,
            success:function(res) {
                openPopup(res.data._view);                
            },
            error:function(res) {
                console.log('error');
            }
      });
}  

function openPopup(view) {

  if(view) {
    $("#popupForm").empty().append(view);  
  }
  $('.custom-modal').removeClass('hide').addClass('show');
}

function closePopup() {
  $("#popupForm").empty();  
  $('.custom-modal').removeClass('show').addClass('hide');
}


function disableFormBtn() {
    $("button[type='submit']").prop("disabled",true);
    $("button[type='reset']").prop("disabled",true);
    $("button[type='submit']").addClass('border-spinners text-left').text('Processing..');               
}    

function enableFormBtn() {
    $("button[type='submit']").prop("disabled",false);
    $("button[type='reset']").prop("disabled",false);
    $("button[type='submit']").removeClass('border-spinners text-left').text('Submit');               
}
     
$(document).on("submit",'#ajaxForm',function(e) {
  e.preventDefault();  
  $.ajax({
      type: $(this).attr('method'),
      url: $(this).attr('action'),
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function(){
          disableFormBtn();
      },
      success: function(response){ //console.log(response);

          if(response.data._error_view) {
              enableFormBtn();
              $("#_showError").empty().append(response.data._error_view);
          } else if(response.code == 201){                    
              _success(response.message);                    
              callAjax();
              closePopup();
              
          }
      },
      error:function(xhr) {
        _error(xhr.responseText);
      }
  });
});

function callAjax() {
    $.ajax({
        method:'GET',
        url:appendUrlParameters(),
        success:function(res) {
            $("#list-results").empty().html(res.data._view);
            callTooltip();
        },
        error:function(res) {
            console.log('error');
        }
    });
}




