    var pathname = window.location.pathname;
var tablas = ['agendas','almacen','bitacora',
              'chat','clientes','graficas',
              'marcas','menu','productos',
              'proveedores','usuarios','ventas',
              'pruebas','roles','permisos','nomina',
              'horarios','departamentos','sucursales','unidades'];

for (var i = 0; i < tablas.length; i+=1) {
var value = pathname.search(tablas[i]);
if(value >= 0) {
  
var detalle=tablas[i]+".php";
var abc=tablas[i]+"_abc.php";
var buscar=tablas[i]+"_buscar.php";
var detalle=tablas[i]+"_detalle.php";
}
}

/*-- 
---------------------------------------------------------------------------------------------
Buscador
---------------------------------------------------------------------------------------------
 --*/
    $(document).ready(function(){
      load(1);  
    });

    function load(page){
      var q= $("#q").val();
      $("#loader").fadeIn('slow');
      $.ajax({
        url:buscar+'?action=ajax&page='+page+'&q='+q,
         beforeSend: function(objeto){
         // $('#loader').html('<img src="../../imagenes/img/ajax-loader.gif"> Cargando...');
        },
        success:function(data){
          $(".outer_div").html(data).fadeIn('slow');
          $('#loader').html('');
           $(".total_usuarios_encontradas").fadeOut(2500);
        }
      })
    }


function Insert_Intentar(){
$('#Nuevo_Registro').show(); 
$('#Error').hide();
}
  function Insert_Intentar_Datos(){
$('#Update_Datos').show(); 
$('#Error_Datos').hide();
}


function Forms_hide_General(Tipo) {
  if (Tipo=="Insert_Registro") {
    $('#Nuevo_Registro').hide();
  }
    else if (Tipo=="Update_Datos") {
      $('#actualiza_datos').hide();
    }
      else if (Tipo=="Update_Imagen") {
        $('#actualiza_imagen').hide();
      }
        else  {
          $('#Elimina_Registro').hide();
        }
}