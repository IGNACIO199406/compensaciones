/*-- 
---------------------------------------------------------------------------------------------
Busqueda de Login
---------------------------------------------------------------------------------------------
 --*/

$(document).ready(function (login) {
  $("#Login").on('submit',(function(login) {
    login.preventDefault();
    $.ajax({
      url: "Model/Login.php",
      type: "POST",
      data:  new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success: function(data, status)
        {
            var registro = JSON.parse(data);
          if (registro.succes=="ok") {
                  $("#Login")[0].reset();
                  $('#msg_ok').html(registro.msg);
                  $("#myModal_ok").modal(); 
                  location.href ="panel.php";
          }else if(registro.succes=="error"){
                  $("#Login")[0].reset();  
                  $('#msg_usuario').html('campo obligatorio');
                  $('#msg_password').html('campo obligatorio');
                  $('#msg_error').html(registro.msg);
                  $("#myModal_error").modal(); 
            } else if(registro.succes=="warning"){
                  $("#Login")[0].reset();
                  $('#msg_warning').html(registro.msg);
                  $("#myModal_warning").modal(); 
            }      
        },
        error: function(){}           
     });
  }));  
});
