  $("#savetype").hide();
  $.ajax({
    url: 'index.php/Addtype/Get_itemtype',
    type: 'POST',
    data: {Getdata: 'No'},
    cache: false,
    success: function (result) {
    New_data = JSON.parse(result);
    $.each(New_data,function(K,V){
    $("#table_table").append("<tr><td>"+V.typeitem_id+"</td><td>"+V.typeitem_data+"</td></tr>");  
    }); 
    setTimeout(function(){
    $("#loadoverlaytable").hide();  
    }, 1500);  
    }
  });
var ajax_call = function() {
  $.ajax({
    url: 'index.php/Addtype/Get_itemtype',
  	type: 'POST',
  	data: {Getdata: 'No'},
  	cache: false,
  	success: function (result) {
    New_data = JSON.parse(result);
    $("#table_table").remove();
    $("#table_loadoverlay").append("<table class='table table-hover' id='table_table'><tr><th>ID</th><th>ชื่อประเภทสินค้า</th></tr></table>");
  	$.each(New_data,function(K,V) {
    $("#table_table").append("<tr><td>"+V.typeitem_id+"</td><td>"+V.typeitem_data+"</td></tr>");
    }); 
  	}
  });
};
var interval = 1000 * 60 * 1; 

setInterval(ajax_call, interval);

$("#savetypeadd").click(function() {
    $("#savetype").show();
    $("#loadoverlaytable").show(); 
    var typeitem = $("#typeitem_data").val();
    $.ajax({
      url: 'index.php/Addtype/Save_Addtype',
      type: 'POST',
      data: {Type: typeitem},
      success: function (result) {
      $("#dis").click();  
      ajax_call();
      $("#typeitem_data").val("");
      $("#savetype").hide();
      $("#loadoverlaytable").hide(); 
      }
    });
});


