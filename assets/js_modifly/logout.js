$(document).ready(function() {
$('#loginicon').hide();
});

$("#logout").click(function() {
	$('#loginicon').show();
	var datasrting = 'Logout';
	$.ajax({
		url: 'index.php/Welcome/Logout',
		type: 'POST',
		data: datasrting,
		cache: false,
		success: function (result) {
			setTimeout("window.location.href = '';", 1500);
		}
	});
});