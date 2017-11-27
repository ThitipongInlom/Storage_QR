var id_alert = document.getElementById('id_alert').value;
  $.ajax({
    url: 'index.php/Gencode/alert_get',
    type: 'POST',
    data: {id_alert: id_alert},
    cache: false,
    success: function (result) {
      New_data = JSON.parse(result);
      $("#num_alert").text(New_data.num);
      $("#num_alert2").text(New_data.num);
      $.each(New_data.result,function(K,V){
        console.log(V.alert_item_id);
        $(".menu").append("<li class='lidata'><a href='raedItem/"+ V.alert_item_id +"'><i class='"+V.alert_icon+" "+V.alert_color+"'></i>"+V.alert_detail+"</a></li>");
      }); 
    }
  });
var ajax_call = function() {
	var id_alert = document.getElementById('id_alert').value;
  $.ajax({
    url: 'index.php/Gencode/alert_get',
  	type: 'POST',
  	data: {id_alert: id_alert},
  	cache: false,
  	success: function (result) {
  	  New_data = JSON.parse(result);
      $("#num_alert").text(New_data.num);
      $("#num_alert2").text(New_data.num);
      $(".menu").remove();
      $("#ceremenu").append('<ul class="menu"></ul>');
      $.each(New_data.result,function(K,V){
        $(".menu").append("<li class='lidata'><a href='raedItem/"+ V.alert_item_id +"'><i class='"+V.alert_icon+" "+V.alert_color+"'></i>"+V.alert_detail+"</a></li>");
      }); 
  	}
  });
};
var interval = 1000 * 60 * 1; 

	setInterval(ajax_call, interval);
