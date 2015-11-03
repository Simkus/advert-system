	$(".mark").change(function()
	{
		var id = $('.mark').val();
		var dataString = 'id='+ id;

		$.ajax({
		    type: "POST",
		    url: 'http://127.0.0.1:8000/models',
		    data: {'id': $(".mark").val(),'isAjax':true},
		    dataType:'json',
		    success: function(data) {
		    	alert('wwoooorks');

		       var select = $(".model"), options = '';
		       select.empty();      

		       for(var i=0;i<data.length; i++)
		       {
		        options += "<option value='"+data[i].id+"'>"+ data[i].name +"</option>";              
		       }

		       select.append(options);
		    }
		});
	});
