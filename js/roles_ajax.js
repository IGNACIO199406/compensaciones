
/*-- 
---------------------------------------------------------------------------------------------
Validar la accion a realizar
---------------------------------------------------------------------------------------------
 --*/
  function Accion_Modal(Accion_Modal){
    if (Accion_Modal=="Nuevo_Registro") {
      var ID_Form="#Insert";
      var ID_Modal="#Nuevo_Registro";
    }

    else if (Accion_Modal=="actualiza_datos") {
      var ID_Form="#Update_Datos";
      var ID_Modal="#actualiza_datos";
    }

    else if (Accion_Modal=="actualiza_imagen") {
      var ID_Form="#Update_Imagen";
      var ID_Modal="#actualiza_imagen";
    }

     else if (Accion_Modal=="Elimina_Registro") {
      var ID_Form="#Delete";
      var ID_Modal="#Elimina_Registro";
    }
//mostar el modal dependiendo de la condicion
$(ID_Modal).show(); 

$(document).ready(function (e) {
  $(ID_Form).on('submit',(function(e) {
    e.preventDefault();
    $.ajax({
          url: "roles_abc.php",
      type: "POST",
      data:  new FormData(this),
      contentType: false,
          cache: false,
      processData:false,
      success: function(data)
        {

          if (data==0) {
                     $("#Insert")[0].reset();  
                     $('#Nuevo_Registro').hide();   
                     $('#Exito').show();  
                     $('#datos').load('roles_buscar.php');   
                             
                    }
        else if(data==2){
                     $("#Insert")[0].reset();  
                     $('#Nuevo_Registro').hide();    
                     $('#Precaucion').show();  
                     $('#datos').load('roles_buscar.php');   
               }

               else if(data==1){
                  $("#Insert")[0].reset();  
                  $('#Nuevo_Registro').hide();  
                  $('#Error').show(); 
                  
               }
      
        },
        error: function(){}           
     });
  }));  
});
}

// $(document).ready(function (update) {
//  $("#Update_Imagen").on('submit',(function(update) {
//     update.preventDefault();
//     $.ajax({
//           url: "roles_abc.php",
//       type: "POST",
//       data:  new FormData(this),
//       contentType: false,
//           cache: false,
//       processData:false,
//       success: function(data)
//         {

//           if (data==1) {
//             $("#Update_Imagen")[0].reset();  
//             $("#actualiza_imagen").hide();
//             $("#Exito").show();
//             $("#Imagen").load(" #Imagen");
//           }
//           else if(data==0){
//             $("#Update_Imagen")[0].reset();  
//           $("#actualiza_imagen").hide();
//           $("#Error_Imagen").show();
//           }
      
//         },
//         error: function(){}           
//      });
//   }));  
// });


// -- 
// ---------------------------------------------------------------------------------------------
// Acciones de Actualizar Marcas
// ---------------------------------------------------------------------------------------------
//  --
// $(document).ready(function (extra_datos) {
//  $("#Update_Datos").on('submit',(function(extra_datos) {
//     extra_datos.preventDefault();
//     $.ajax({
//              url: "roles_abc.php",
//       type: "POST",
//       data:  new FormData(this),
//       contentType: false,
//           cache: false,
//       processData:false,
//       success: function(data)
//         {

//           if (data==1) {
//             $("#actualiza_datos").hide();
//             $("#Exito").show();
//             $("#Imagen").load(" #Imagen");
//           }
//           else if(data==0){ 
//           $("#actualiza_datos").hide();
//           $('#Error_Datos').show(); 
//           }
      
//         },
//         error: function(){}           
//      });
//   }));  
// });

//   function Insert_Intentar_Datos(){
// $('#actualiza_datos').show(); 
// $('#Error_Datos').hide();
// }