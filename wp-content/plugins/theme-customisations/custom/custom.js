jQuery(document).ready(function($, log){
	// Custom jQuery goes here
	$('button#show_ip').click(function(){
		$.ajax({
			type: 'GET',
			dataType: 'json',
			url: 'https://api.ipify.org?format=json',
			crosDomain: true,
			success: function(data) {
				var ip = data['ip'];
				$('p#ip').html('Mon adresse IP : ' + ip);
			},
			error: function(request, status, error) {
				$('p#ip').html(error);
			}
		});
	});
});
