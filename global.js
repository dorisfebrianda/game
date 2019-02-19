$('#add).on('submit', function() {
	var that = $(this),
	contents = that.serialize();
});

	$.ajax({
		url: 'register.php',
		datatype: 'json',
		type: 'post',
		data: contens,
		success: function(data){
			
		}
	});
	
	return false;
});
	
