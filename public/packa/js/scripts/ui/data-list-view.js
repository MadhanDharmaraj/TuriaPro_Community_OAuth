
$(function(){
  "use strict";

  /*select all checkoxes*/
  $(document).on("click",'.dt-checkboxes-select-all input',function(){  
      if($(this).prop('checked')) {
        $('.dt-checkboxes').prop('checked',true);        
      } else {
        $('.dt-checkboxes').prop('checked',false);        
      }      
  });

  /*single checkboxes*/  
  $(document).on("click",'.dt-checkboxes',function(){
      $(".dt-checkboxes-select-all input").prop('checked',true);      
      $('.dt-checkboxes').each(function(){
          if(!$(this).prop('checked')) {
              $(".dt-checkboxes-select-all input").prop('checked',false);
              return false;
          }
      });
  });


  // Scrollbar
  $(function(){        
    if ($(".data-items").length > 0) {
      new PerfectScrollbar(".data-items", { wheelPropagation: false });
    }
  });
  


  // dropzone init
  Dropzone.options.dataListUpload = {
    complete: function (files) {
      var _this = this;
      // checks files in class dropzone and remove that files
      $(".hide-data-sidebar, .cancel-data-btn, .actions .dt-buttons").on("click", function () {
        $('.dropzone')[0].dropzone.files.forEach(function (file) {
          file.previewElement.remove();
        });
        $('.dropzone').removeClass('dz-started');
      })
    }
  };
  Dropzone.options.dataListUpload.complete();

  // mac chrome checkbox fix
  if (navigator.userAgent.indexOf('Mac OS X') != -1) {
    $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox");
  }

})
