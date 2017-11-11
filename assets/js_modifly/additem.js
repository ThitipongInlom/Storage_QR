$("#saveitem").hide();
$("#saveiteamadd").click(function() {
	$("#saveitem").show();
	var nameitem = $("#nameitem").val();
	var macitem  = $("#macitem").val();
	var datasrting = 'name='+ nameitem + '&mac='+ macitem;
	$.ajax({
		url: 'index.php/Generate/print_qr',
		type: 'POST',
		data: datasrting,
		cache: false,
		success: function (result) {
			$("#dis").click();
			setTimeout("window.location.href = 'GenItem';", 500);
		}
	});
	 
});