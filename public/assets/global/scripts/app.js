// Funciones globales de la aplicacion

	var sss
	let csrftoken = document.getElementsByName("_token")[0].content

	$('#logout').click(function(event) {
		event.preventDefault()
		execAction('/logout' , {_token: csrftoken})
	});

	$('.omenuside').click(function(event) {
		event.preventDefault()
		execAction(this.href , {}, 'GET')
	});



	function execAction(url, data = {}, method = 'POST', type = 'html') {
		
		$.ajax({
			url: url,
			type: method,
			data: data,
			dataType: type,
		})
		.done(function(result) {
			
			$('.page-content').html(result)
			TableAdvanced.init();
		})
		.fail(function(result) {
			return result
		})
		.always(function(result) {
			return result
		});
	}
	
