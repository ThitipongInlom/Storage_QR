$("#saveitem").hide();
setTimeout(function(){
$("#loadoverlaytable").hide();  
}, 1500);  
$("#saveiteamadd").click(function() {
	$("#saveitem").show();
	$("#loadoverlaytable").show(); 
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
			table.ajax.reload();
			ajax_call();
			$("#savetype").hide();
			$("#loadoverlaytable").hide(); 
		}
	});
});
setInterval( function () {
    table.ajax.reload( null, false ); 
}, 30000 );



