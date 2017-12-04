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
			$("#saveitem").hide();
			$("#loadoverlaytable").hide(); 
			$("#nameitem").val('');
			$("#macitem").val('');
		}
	});
});
setInterval( function () {
    table.ajax.reload( null, false ); 
}, 3000);

var showqrcode = function(btnid) {
	var id = $(btnid).attr("id");
	var qr = $(btnid).attr("itemqr");
	var hdataqr = '<div align="center"><b>QR Code</b></div>';
	var dataqr = '<div align="center"><img src="img_qr/'+qr+'" height="250" width="250"></div><div align="center">ใช้งานIDในการค้นหา <h4><b>ID:'+id+'</b></h4></div>';
	$("#Show-QR-Code-body").html(hdataqr+dataqr);
}




