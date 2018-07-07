$(document).on('change', '#filterUser', function() {
	var selected = $(this).find(":selected").val();
	var membernm = $(this).find(":selected").text();
	if(selected == 0)
	{
		$('#filteredLogs').hide();
		$('#allLogs').show();
	}
	else
	{
		$('#allLogs').hide();
		$('#filterTable tbody').html('<tr><td colspan="3"><center><i class="fa fa-refresh fa-spin"></i>        Loading...</center></td></tr>');
		
		$.ajax({
	        url: '/admin/activitylog/filter/'+selected,
	        type: 'get',
	        success: function(data) {
	        	$('#filterTable tbody').html('');
	        	if(data.length == 0) {
	        		$('#filterTable tbody').html('<tr><td colspan="3"><center>No Logs For This User</center></td></tr>');
	        	} else {
	        		$.each(data, function(i, item) {
	                $('#filterTable tbody').append('<tr><td>'+ membernm +'</td><td>'+ item.note +'</td><td>'+ item.created_at +'</td></tr>');
	            });
	        	}
	        },
	        error: function(data) {
	            console.log(data);
	        }
    	});

    	$('#filteredLogs').show();
	}
});