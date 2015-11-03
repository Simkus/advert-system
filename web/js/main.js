
$(document).ready(function()
{
	$(".mark").change(function()
	{
		var id = $('.mark').val();
		var dataString = 'id='+ id;
		$.ajax({
		    type: "POST",
		    url: 'models?id='+id,
		    data: {'id': $(".mark").val(),'isAjax':true},
		    dataType:'json',
		
		    success: function(data) {

		       var select = $(".model"), options = '';
		       select.empty();
		       $('.model').html(data.options);
		    }
		});
	});
});


$(window).load(function() {
	var id = $('.mark').val();
	var dataString = 'id='+ id;
	$.ajax({
	    type: "POST",
	    url: 'models?id='+id,
	    data: {'id': $(".mark").val(),'isAjax':true},
	    dataType:'json',
	
	    success: function(data) {

	       var select = $(".model"), options = '';
	       select.empty();
	       $('.model').html(data.options);
	    }
	});
});