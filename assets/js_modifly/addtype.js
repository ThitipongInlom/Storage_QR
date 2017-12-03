$("#savetype").hide();
setTimeout(function(){
$("#loadoverlaytable").hide();  
}, 1500);   
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
      table.ajax.reload();
      $("#savetype").hide();
      $("#loadoverlaytable").hide(); 
      document.getElementById("typeitem_data").value = "";
      }
    });
});

setInterval( function () {
    table.ajax.reload( null, false ); 
}, 30000 );


