$(document).ready(function () {
	$.get('http://www.meetingpointmco.nl/Roosters-AL/doc/dagroosters/35/c/c00019.htm',function (data) {
		$('calendar content').html(convertCalendar(data));	
	});
});

function convertCalendar (data) {
	return data;
}