$(document).ready(function(){var o=$(".main-demo-image"),e=($(".download"),$(".main-demo-dataX")),r=$(".main-demo-dataY"),a=$(".main-demo-dataHeight"),t=$(".main-demo-dataWidth"),i=$(".main-demo-dataRotate"),c=$(".main-demo-dataScaleX"),n=$(".main-demo-dataScaleY"),p={viewMode:1,aspectRatio:16/9,preview:".img-preview",crop:function(o){e.val(Math.round(o.x)),r.val(Math.round(o.y)),a.val(Math.round(o.height)),t.val(Math.round(o.width)),i.val(o.rotate),c.val(o.scaleX),n.val(o.scaleY)}};o.cropper(p),$(".get-data-btn").on("click",function(){result=o.cropper("getData"),$(".get-data").val(JSON.stringify(result))}),$(".get-image-data-btn").on("click",function(){result=o.cropper("getImageData"),$(".get-image-data").val(JSON.stringify(result))}),$(".get-container-data-btn").on("click",function(){result=o.cropper("getContainerData"),$(".get-container-data").val(JSON.stringify(result))}),$(".get-canvas-data-btn").on("click",function(){result=o.cropper("getCanvasData"),$(".get-canvas-data").val(JSON.stringify(result))}),$(".get-cropbox-data-btn").on("click",function(){result=o.cropper("getCropBoxData"),$(".get-cropbox-data").val(JSON.stringify(result))}),$(".download-cropped-canvas-btn").on("click",function(){}),$(".rotate-m45-deg").on("click",function(){o.cropper("rotate",-45)}),$(".rotate-45-deg").on("click",function(){o.cropper("rotate",45)}),$(".rotate-180-deg").on("click",function(){o.cropper("rotate",180)}),$(".flip-horizontal").on("click",function(){var e=$(this).data("option");o.cropper("scaleX",-e),$(this).data("option",-e)}),$(".flip-vertical").on("click",function(){var e=$(this).data("option");o.cropper("scaleY",-e),$(this).data("option",-e)}),$(".zoom-in").on("click",function(){o.cropper("zoom",.1)}),$(".basic-cropper").cropper({viewMode:1,restore:!1,zoomOnWheel:!1}),$(".no-overlay").cropper({viewMode:1,modal:!1,restore:!1,zoomOnWheel:!1}),$(".aspect-ratio-16-9").cropper({viewMode:1,aspectRatio:16/9,autoCropArea:.65,restore:!1,zoomOnWheel:!1}),$(".aspect-ratio-4-3").cropper({viewMode:1,aspectRatio:4/3,autoCropArea:.65,restore:!1,zoomOnWheel:!1}),$(".fixed-crop-box").cropper({viewMode:1,dragMode:"none",autoCropArea:.65,restore:!1,cropBoxMovable:!1,zoomOnWheel:!1}),$(".fixed-size-crop-box").cropper({viewMode:1,dragMode:"none",autoCropArea:.65,restore:!1,cropBoxResizable:!1,zoomOnWheel:!1}),$(".disable-guides").cropper({viewMode:1,autoCropArea:.65,guides:!1,restore:!1,zoomOnWheel:!1}),$(".disable-center-indicator").cropper({viewMode:1,autoCropArea:.65,center:!1,restore:!1,zoomOnWheel:!1}),$(".disable-auto-crop").cropper({autoCrop:!1,viewMode:1,autoCropArea:.65,restore:!1,zoomOnWheel:!1}),$(".disable-new-crop-box").cropper({dragMode:"none",viewMode:1,autoCropArea:.65,restore:!1,zoomOnWheel:!1}),$(".movable-image").cropper({viewMode:1,dragMode:"move",autoCropArea:.65,restore:!1,cropBoxMovable:!1,cropBoxResizable:!1,zoomOnWheel:!1}),$(".zoomable-image").cropper({viewMode:1,dragMode:"crop",autoCropArea:.65,restore:!1,zoomable:!0,zoomOnTouch:!0,cropBoxMovable:!1,cropBoxResizable:!1}),$(".min-crop-area").cropper({minCropBoxWidth:100,minCropBoxHeight:100,viewMode:1,autoCropArea:.65,dragMode:"crop",restore:!1,zoomOnWheel:!1}),$(".disable-background").cropper({background:!1,viewMode:1,autoCropArea:.65,dragMode:"crop",restore:!1,zoomOnWheel:!1}),$(".rotate-image").cropper({viewMode:1,autoCropArea:.65,dragMode:"crop",restore:!1,zoomOnWheel:!1,built:function(){$(".rotate-image").cropper("rotate",45)}}),$(".scale-image").cropper({viewMode:1,autoCropArea:.65,dragMode:"crop",restore:!1,zoomOnWheel:!1,built:function(){$(".scale-image").cropper("scale",-1)}})});