  $.ajax({
    url: '',
    type: 'POST',
    data: {Getdata: 'No'},
    cache: false,
    success: function (result) {
     
    }
  });
var ajax_call = function() {
  $.ajax({
    url: '',
  	type: 'POST',
  	data: {Getdata: 'No'},
  	cache: false,
  	success: function (result) {
  	 
  	}
  });
};
var interval = 1000 * 60 * 1; 

	setInterval(ajax_call, interval);
