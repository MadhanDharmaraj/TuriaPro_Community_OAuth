/*
	mention all editor appending ids,class here
*/



$(function(){

	$('.summernote').summernote({
		
		toolbar: [
			// [groupName, [list of button]]
			['style', ['bold', 'italic', 'underline', 'clear']],
			['font', ['strikethrough', 'superscript', 'subscript']],
			['fontsize', ['fontsize']],
			['color', ['color']],
			['para', ['ul', 'ol', 'paragraph']],
			['height', ['height']],
			['insert', ['picture','link']],
			
		],

	});

	// $('.summernote').summernote();

	$('#cmsEditor').summernote();	
	$('#blogEditor').summernote();
	$('#newsLetterEditor').summernote();
	$('#complaincesEditor').summernote();
});

