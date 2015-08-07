$( ".prd-img" ).click(function() {
	var path = $(this).attr('src');
	var id =$(this).attr('me');
	var description = $(this).attr('desc');
	var title = $(this).attr('title');
	console.log(description);
	$('#prdmodaldescr').html(description);
	$('#modalimage').attr('src', path);
});