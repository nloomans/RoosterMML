// $(document).ready(function () {
// 	$.ajax({
// 		url: '/RoosterMML/load.php',
// 		data: {
// 			url: $('#url').val()
// 		},
// 		dataType: 'xml'
// 	})
// 	.done(function( data ) {
// 		convertCalendar(data);
// 	})
// 	.fail(function(jqXHR, textStatus, errorThrown) {
// 		console.log(jqXHR);
// 		console.log(textStatus);
// 		console.log(errorThrown);
//   	});
// });

// function convertCalendar (data) {
// 	return data;
// }

$(document).ready(function () {
	$('#getEmail_button').click(function () {
		var $form = $('.formContainer');
		if ($form.css('display') == 'block') {
			$form.css('display','none');
		}
		else {
			$form.css('display','block');
		}
	});
});