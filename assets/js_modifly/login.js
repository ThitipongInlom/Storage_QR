$('#loginicon').hide();
$(document).ready(function() {
    $('#username').focus();
});
function login(e) {
	var username = $("#username").val();
	var password = $("#password").val();
	var datasrting = 'username='+ username + '&password='+ password;
	$('#loginicon').show();
	$.ajax({
		type: "POST",
		url: "Welcome/login_controller",
		data: datasrting,
		cache: false,
		success: function(result){
		if (result == 1) {
			setTimeout("window.location.href = 'Home';", 1500);
		}
		if (result == 0) {
			setTimeout(function(){
			document.getElementById("formlogin").reset();
			$('#username').focus();
			$('#loginicon').hide();	
		    }, 1500);
		}
	}
	});	
}

$('#login').click(function(e) {
	if (document.formlogin.username.value =='') {
		alert('กรุณากรอก Username');
		document.formlogin.username.focus();
		return false;
	}
	else if (document.formlogin.password.value =='') {
		alert('กรุณากรอก Password');
		document.formlogin.password.focus();
		return false;
	}else{
	login(e);
	}
});
$(document).keypress(function(e) { 
    if (e.keyCode == 13) { 
    	if (document.formlogin.username.value =='') {
		alert('กรุณากรอก Username');
		document.formlogin.username.focus();
		return false;
	}
	else if (document.formlogin.password.value =='') {
		alert('กรุณากรอก Password');
		document.formlogin.password.focus();
		return false;
	}
	else{
    	login(e);
	}
    }
});