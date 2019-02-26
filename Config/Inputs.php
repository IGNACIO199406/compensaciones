<?php
/*
------------------------------------------------
Construccion para los modales Insert
------------------------------------------------
*/
$Superior_Modal_Insert='<form id="Insert" name="Insert" >
<div id="Nuevo_Registro" class="w3-modal">
  <div class="w3-modal-content w3-white w3-round-xlarge w3-card-4" style="width: 400px;">
    <div class="w3-container w3-green">
      <div class="w3-col m12  w3-padding w3-center">
       Nuevo Registro
      </div>
    </div> 
<div class="w3-padding">';


$Inferior_Modal_Insert='<div id="foto" class="w3-col m12 w3-center w3-padding"></div>
          <input class="w3-input w3-border-blue" id="Insert_Registro" name="Insert_Registro" type="hidden" value="insert">
</div>
   <div class="w3-padding w3-center">
     <button  style="width: 150px;" id="insert_valida"  class=" w3-button w3-green w3-round w3-card" type="submit" >Enviar</button>
     <a style="width: 150px;" onclick="Forms_hide_General('."'Insert_Registro'".');"  class=" w3-button w3-red w3-round w3-card" >Cancelar</a>
   </div>

  </div>
</div>
</form>';


/*
------------------------------------------------
Construccion para los modales Update datos
------------------------------------------------
*/
$Superior_Modal_Update_Datos='<form id="Update_Datos" name="Update_Datos" >
<div id="actualiza_datos" class="w3-modal">
  <div class="w3-modal-content w3-white w3-round-xlarge w3-card-4" style="width: 400px;">
    <div class="w3-container w3-green">
      <div class="w3-col m12  w3-padding w3-center">
      Actualizacion de Datos
      </div>
    </div> 
<div class="w3-padding">
<input class="w3-input w3-border-blue " id="ID_Registro_Update_Datos" name="ID_Registro_Update_Datos" type="hidden"   >
<input class="w3-input w3-border-blue " id="actualizar_datos" name="actualizar_datos" type="hidden" value="update"  >
';

$Inferior_Modal_Update_Datos='
</div>
    <div class="w3-padding w3-center">
     <button  style="width: 150px;" id="update_datos_valida"  class=" w3-button w3-green w3-round w3-card" type="submit" >Enviar</button>
     <a style="width: 150px;" onclick="Forms_hide_General('."'Update_Datos'".');" class=" w3-button w3-red w3-round w3-card" >Cancelar</a>
   </div>

  </div>
</div>
</form>';

/*
------------------------------------------------
Construccion para los modales Uodate Imagen
------------------------------------------------
*/
$Superior_Modal_Update_Imagen='<form id="Update_Imagen" name="Update_Imagen" >
<div id="actualiza_imagen" class="w3-modal">
  <div class="w3-modal-content w3-white w3-round-xlarge w3-card-4" style="width: 400px;">
    <div class="w3-container w3-green">
      <div class="w3-col m12  w3-padding w3-center">
      Actualizacion de Imagen
      </div>
    </div> 
<div class="w3-padding">
<div class="w3-row w3-section">
<div class="w3-col" style="width:50px"><i class="w3-xxlarge w3-text-blue icon mdi mdi-collection-image-o"></i></div>
<div class="w3-rest">
<input class="w3-input w3-border-blue " id="ID_Registro_Update" name="ID_Registro_Update" type="hidden"   >
<input class="w3-input w3-border-blue " id="Imagen_Update" name="Imagen_Update" type="file"  >
<input class="w3-input w3-border-blue " id="actualizar_imagen" name="actualizar_imagen" type="hidden" value="update"   >
</div>
</div>
';

$Inferior_Modal_Update_Imagen='
</div>
   <div class="w3-padding w3-center">
     <button  style="width: 150px;" id="update_imagen_valida"   class=" w3-button w3-green w3-round w3-card" type="submit" >Enviar</button>
     <a style="width: 150px;" onclick="Forms_hide_General('."'Update_Imagen'".');" class=" w3-button w3-red w3-round w3-card" >Cancelar</a>
   </div>

  </div>
</div>
</form>';

/*
------------------------------------------------
Construccion para los modales Delete
------------------------------------------------
*/
$Superior_Modal_Delete='
<form id="Delete" name="Delete"  >
<div id="Elimina_Registro" class="w3-modal">
  <div class="w3-modal-content w3-white w3-round-xlarge w3-card-4" style="width: 400px;">
    <div class="w3-container w3-orange">
      <div class="w3-col m12  w3-padding w3-center">
       Eliminar Registro
      </div>
    </div> 

<div class="w3-padding w3-center">
<input class="w3-input w3-border-blue " id="ID_Registro_Elimina" name="ID_Registro_Elimina" type="hidden"   >
<input class="w3-input w3-border-blue " id="eliminar_registro" name="eliminar_registro" type="hidden" value="delete"   >
<img src="'.$img_sistema.'precaucion.png" style="width: 25%;" class="w3-center ">
<div id="Nombre_Elimina"></div>
<p>¿Estas seguro de eliminar El registro?</p>';



$Inferior_Modal_Delete='
</div>
   <div class="w3-padding w3-center">
     <button  style="width: 150px;" id="delete_valida"  class=" w3-button w3-green w3-round w3-card" type="submit" >Enviar</button>
     <a style="width: 150px;" onclick="Forms_hide_General('."'Delete'".');" class=" w3-button w3-red w3-round w3-card" >Cancelar</a>
   </div>

  </div>
</div>
</form>';
/*
------------------------------------------------
Niveles para Inputs
------------------------------------------------
*/
$Input_Nivel1="<div class='w3-row w3-section'>
<div class='w3-col' style='width:50px'>";
$Input_Nivel2="</div>
<div class='w3-rest'>";
$Input_Nivel3="</div>
</div>";

/*
------------------------------------------------
Creacion de clases para las propiedades I y para los Inputs
------------------------------------------------
*/
$ClassModalInputs="w3-input w3-border-blue";
$ClassModalI="w3-xxlarge w3-text-blue";

/*
------------------------------------------------
Iconos para los inputs dependiendo el nombre
------------------------------------------------
*/

$FaIcons_Nombre="icon mdi mdi-layers";
$FaIcons_App="icon mdi mdi-face";
$FaIcons_Apm="icon mdi mdi-face";
$FaIcons_Password="icon mdi mdi-lock";
$FaIcons_Correo="icon mdi mdi-email";
$FaIcons_Telefono="icon mdi mdi-phone-in-talk";
$FaIcons_Direccion="icon mdi mdi-home";
$FaIcons_RS="icon mdi mdi-home";
$FaIcons_CB="fas fa-barcode";
$FaIcons_PrecioC="icon mdi mdi-money";
$FaIcons_PrecioV="icon mdi mdi-money";
$FaIcons_Imagen="icon mdi mdi-collection-image-o";
$FaIcons_Stock="icon mdi mdi-playlist-plus";
$FaIcons_FechaA="icon mdi mdi-face";
$FaIcons_Descripcion="icon mdi mdi-face";
$FaIcons_Lista="fas fa-list-ol";

/*<i class="fas fa-cog"></i>
------------------------------------------------
Acciones de inputs para los modals
------------------------------------------------
*/
$ClassModalInsert="_Insert";
$ClassModalUpdate="_Update";
$ClassModalDelete="_Delete";

/*
------------------------------------------------
Nombres para los 'Id' y 'Name' de los inputs
------------------------------------------------
*/
$nombre="Nombre";
$app="App";
$apm="Apm";
$correo="Correo";
$telefono="Telefono";
$rs="Razon_Social";
$direccion="Domicilio";
$imagen="Imagen";
$precioc="Precio_C";
$preciov="Precio_V";
$stock="Stock";
$cb="CB";
$password="Password";
$fechaa="Fecha_Agendar";
$descripcion="Descripcion";

/*
------------------------------------------------
Construccion de la propiedad de los I para los inputs
------------------------------------------------
*/
$Input_Logo_Nombre="<i class='".$ClassModalI." ".$FaIcons_Nombre."'></i>";
$Input_Logo_App="<i class='".$ClassModalI." ".$FaIcons_App."'></i>";
$Input_Logo_Apm="<i class='".$ClassModalI." ".$FaIcons_Apm."'></i>";
$Input_Logo_Correo="<i class='".$ClassModalI." ".$FaIcons_Correo."'></i>";
$Input_Logo_Telefono="<i class='".$ClassModalI." ".$FaIcons_Telefono."'></i>";
$Input_Logo_RS="<i class='".$ClassModalI." ".$FaIcons_RS."'></i>";
$Input_Logo_Direccion="<i class='".$ClassModalI." ".$FaIcons_Direccion."'></i>";
$Input_Logo_Imagen="<i class='".$ClassModalI." ".$FaIcons_Imagen."'></i>";
$Input_Logo_PrecioC="<i class='".$ClassModalI." ".$FaIcons_PrecioC."'></i>";
$Input_Logo_PrecioV="<i class='".$ClassModalI." ".$FaIcons_PrecioV."'></i>";
$Input_Logo_Stock="<i class='".$ClassModalI." ".$FaIcons_Stock."'></i>";
$Input_Logo_CB="<i class='".$ClassModalI." ".$FaIcons_CB."'></i>";
$Input_Logo_Password="<i class='".$ClassModalI." ".$FaIcons_Password."'></i>";
$Input_Logo_FechaA="<i class='".$ClassModalI." ".$FaIcons_FechaA."'></i>";
$Input_Logo_Descripcion="<i class='".$ClassModalI." ".$FaIcons_Descripcion."'></i>";

/*
------------------------------------------------
Construccion de los placeholder para los inputs
------------------------------------------------
*/
$Placeholder_Nombre="Nombre";
$Placeholder_App="Apellido Paterno";
$Placeholder_Apm="Apellido Materno";
$Placeholder_Correo="Correo";
$Placeholder_Telefono="Telefono";
$Placeholder_RS="Razon Social";
$Placeholder_Direccion="Domicilio";
$Placeholder_Imagen="Imagen";
$Placeholder_PrecioC="Precio Compra";
$Placeholder_PrecioV="Precio Venta";
$Placeholder_Stock="Stock";
$Placeholder_CB="Codigo Barras";
$Placeholder_Password="Password";
$Placeholder_FechaA="Fecha Agenda";
$Placeholder_Descripcion="Descripcion";
/*
------------------------------------------------
Creacion de inputs  update
------------------------------------------------
*/
$Input_TipoI_Nombre="<input class='".$ClassModalInputs."' id='".$nombre.$ClassModalInsert."' name='".$nombre.$ClassModalInsert."' type='text' placeholder='".$Placeholder_Nombre."'>";
$Input_TipoI_App="<input class='".$ClassModalInputs."' id='".$app.$ClassModalInsert."' name='".$app.$ClassModalInsert."' type='text' placeholder='".$Placeholder_App."'>";
$Input_TipoI_Apm="<input class='".$ClassModalInputs."' id='".$apm.$ClassModalInsert."' name='".$apm.$ClassModalInsert."' type='text' placeholder='".$Placeholder_Apm."'>";
$Input_TipoI_Correo="<input class='".$ClassModalInputs."' id='".$correo.$ClassModalInsert."' name='".$correo.$ClassModalInsert."' type='text' placeholder='".$Placeholder_Correo."'>";
$Input_TipoI_Telefono="<input class='".$ClassModalInputs."' id='".$telefono.$ClassModalInsert."' name='".$telefono.$ClassModalInsert."' type='text' placeholder='".$Placeholder_Telefono."'>";
$Input_TipoI_RS="<input class='".$ClassModalInputs."' id='".$rs.$ClassModalInsert."' name='".$rs.$ClassModalInsert."' type='text' placeholder='".$Placeholder_RS."'>";
$Input_TipoI_Direccion="<input class='".$ClassModalInputs."' id='".$direccion.$ClassModalInsert."' name='".$direccion.$ClassModalInsert."' type='text' placeholder='".$Placeholder_Direccion."'>";
$Input_TipoI_Imagen="<input class='".$ClassModalInputs."' id='".$imagen.$ClassModalInsert."' name='".$imagen.$ClassModalInsert."' type='file'>";
$Input_TipoI_PrecioC="<input class='".$ClassModalInputs."' id='".$precioc.$ClassModalInsert."' name='".$precioc.$ClassModalInsert."' type='text' placeholder='".$Placeholder_PrecioC."'>";
$Input_TipoI_PrecioV="<input class='".$ClassModalInputs."' id='".$preciov.$ClassModalInsert."' name='".$preciov.$ClassModalInsert."' type='text' placeholder='".$Placeholder_PrecioV."'>";
$Input_TipoI_Stock="<input class='".$ClassModalInputs."' id='".$stock.$ClassModalInsert."' name='".$stock.$ClassModalInsert."' type='text' placeholder='".$Placeholder_Stock."'>";
$Input_TipoI_CB="<input class='".$ClassModalInputs."' id='".$cb.$ClassModalInsert."' name='".$cb.$ClassModalInsert."' type='text' placeholder='".$Placeholder_CB."'>";
$Input_TipoI_Password="<input class='".$ClassModalInputs."' id='".$password.$ClassModalInsert."' name='".$password.$ClassModalInsert."' type='password' placeholder='".$Placeholder_Password."'>";
$Input_TipoI_FechaA="<input class='".$ClassModalInputs."' id='".$fechaa.$ClassModalInsert."' name='".$fechaa.$ClassModalInsert."' type='text' placeholder='".$Placeholder_FechaA."'>";
$Input_TipoI_Descripcion="<input class='".$ClassModalInputs."' id='".$descripcion.$ClassModalInsert."' name='".$descripcion.$ClassModalInsert."' type='text' placeholder='".$Placeholder_Descripcion."'>";


/*
------------------------------------------------
Creacion de inputs insert y update
------------------------------------------------
*/
$Input_TipoU_Nombre="<input class='".$ClassModalInputs."' id='".$nombre.$ClassModalUpdate."' name='".$nombre.$ClassModalUpdate."' type='text' placeholder='".$Placeholder_Nombre."'>";
$Input_TipoU_App="<input class='".$ClassModalInputs."' id='".$app.$ClassModalUpdate."' name='".$app.$ClassModalUpdate."' type='text' placeholder='".$Placeholder_App."'>";
$Input_TipoU_Apm="<input class='".$ClassModalInputs."' id='".$apm.$ClassModalUpdate."' name='".$apm.$ClassModalUpdate."' type='text' placeholder='".$Placeholder_Apm."'>";
$Input_TipoU_Correo="<input class='".$ClassModalInputs."' id='".$correo.$ClassModalUpdate."' name='".$correo.$ClassModalUpdate."' type='text' placeholder='".$Placeholder_Correo."'>";
$Input_TipoU_Telefono="<input class='".$ClassModalInputs."' id='".$telefono.$ClassModalUpdate."' name='".$telefono.$ClassModalUpdate."' type='text' placeholder='".$Placeholder_Telefono."'>";
$Input_TipoU_RS="<input class='".$ClassModalInputs."' id='".$rs.$ClassModalUpdate."' name='".$rs.$ClassModalUpdate."' type='text' placeholder='".$Placeholder_RS."'>";
$Input_TipoU_Direccion="<input class='".$ClassModalInputs."' id='".$direccion.$ClassModalUpdate."' name='".$direccion.$ClassModalUpdate."' type='text' placeholder='".$Placeholder_Direccion."'>";
$Input_TipoU_Imagen="<input class='".$ClassModalInputs."' id='".$imagen.$ClassModalUpdate."' name='".$imagen.$ClassModalUpdate."' type='file'>";
$Input_TipoU_PrecioC="<input class='".$ClassModalInputs."' id='".$precioc.$ClassModalUpdate."' name='".$precioc.$ClassModalUpdate."' type='text' placeholder='".$Placeholder_PrecioC."'>";
$Input_TipoU_PrecioV="<input class='".$ClassModalInputs."' id='".$preciov.$ClassModalUpdate."' name='".$preciov.$ClassModalUpdate."' type='text' placeholder='".$Placeholder_PrecioV."'>";
$Input_TipoU_Stock="<input class='".$ClassModalInputs."' id='".$stock.$ClassModalUpdate."' name='".$stock.$ClassModalUpdate."' type='text' placeholder='".$Placeholder_Stock."'>";
$Input_TipoU_CB="<input class='".$ClassModalInputs."' id='".$cb.$ClassModalUpdate."' name='".$cb.$ClassModalUpdate."' type='text' placeholder='".$Placeholder_CB."'>";
$Input_TipoU_Password="<input class='".$ClassModalInputs."' id='".$password.$ClassModalUpdate."' name='".$password.$ClassModalUpdate."' type='password' placeholder='".$Placeholder_Password."'>";
$Input_TipoU_FechaA="<input class='".$ClassModalInputs."' id='".$fechaa.$ClassModalUpdate."' name='".$fechaa.$ClassModalUpdate."' type='text' placeholder='".$Placeholder_FechaA."'>";
$Input_TipoU_Descripcion="<input class='".$ClassModalInputs."' id='".$descripcion.$ClassModalUpdate."' name='".$descripcion.$ClassModalUpdate."' type='text' placeholder='".$Placeholder_Descripcion."'>";
/*
------------------------------------------------
arrays de las tablas para inserts
------------------------------------------------
*/
$Array_Usuarios_InputsI = array(
	                        $Input_Nivel1." ".$Input_Logo_Nombre." ".$Input_Nivel2." ".$Input_TipoI_Nombre." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_App." ".$Input_Nivel2." ".$Input_TipoI_App." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Apm." ".$Input_Nivel2." ".$Input_TipoI_Apm." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Correo." ".$Input_Nivel2." ".$Input_TipoI_Correo." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Telefono." ".$Input_Nivel2." ".$Input_TipoI_Telefono." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Password." ".$Input_Nivel2." ".$Input_TipoI_Password." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Imagen." ".$Input_Nivel2." ".$Input_TipoI_Imagen." ".$Input_Nivel3
							);

$Array_Clientes_InputsI = array(
	                        $Input_Nivel1." ".$Input_Logo_Nombre." ".$Input_Nivel2." ".$Input_TipoI_Nombre." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_App." ".$Input_Nivel2." ".$Input_TipoI_App." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Apm." ".$Input_Nivel2." ".$Input_TipoI_Apm." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Correo." ".$Input_Nivel2." ".$Input_TipoI_Correo." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Telefono." ".$Input_Nivel2." ".$Input_TipoI_Telefono." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_RS." ".$Input_Nivel2." ".$Input_TipoI_RS." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Direccion." ".$Input_Nivel2." ".$Input_TipoI_Direccion." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Imagen." ".$Input_Nivel2." ".$Input_TipoI_Imagen." ".$Input_Nivel3
							);

$Array_Proveedores_InputsI = array(
	                        $Input_Nivel1." ".$Input_Logo_Nombre." ".$Input_Nivel2." ".$Input_TipoI_Nombre." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_App." ".$Input_Nivel2." ".$Input_TipoI_App." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Apm." ".$Input_Nivel2." ".$Input_TipoI_Apm." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Correo." ".$Input_Nivel2." ".$Input_TipoI_Correo." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Telefono." ".$Input_Nivel2." ".$Input_TipoI_Telefono." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Direccion." ".$Input_Nivel2." ".$Input_TipoI_Direccion." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Imagen." ".$Input_Nivel2." ".$Input_TipoI_Imagen." ".$Input_Nivel3
							);

$Array_Departamentos_InputsI = array(
	                        $Input_Nivel1." ".$Input_Logo_Nombre." ".$Input_Nivel2." ".$Input_TipoI_Nombre." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Imagen." ".$Input_Nivel2." ".$Input_TipoI_Imagen." ".$Input_Nivel3
							);

$Array_Marcas_InputsI = array(
	                        $Input_Nivel1." ".$Input_Logo_Nombre." ".$Input_Nivel2." ".$Input_TipoI_Nombre." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Imagen." ".$Input_Nivel2." ".$Input_TipoI_Imagen." ".$Input_Nivel3
							);

$Array_Roles_InputsI = array(
	                        $Input_Nivel1." ".$Input_Logo_Nombre." ".$Input_Nivel2." ".$Input_TipoI_Nombre." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Imagen." ".$Input_Nivel2." ".$Input_TipoI_Imagen." ".$Input_Nivel3
							);

$Array_Productos_InputsI = array(
	                        $Input_Nivel1." ".$Input_Logo_Nombre." ".$Input_Nivel2." ".$Input_TipoI_Nombre." ".$Input_Nivel3,
	                        $Input_Nivel1." ".$Input_Logo_PrecioC." ".$Input_Nivel2." ".$Input_TipoI_PrecioC." ".$Input_Nivel3,
	                        $Input_Nivel1." ".$Input_Logo_PrecioV." ".$Input_Nivel2." ".$Input_TipoI_PrecioV." ".$Input_Nivel3,
	                        $Input_Nivel1." ".$Input_Logo_Stock." ".$Input_Nivel2." ".$Input_TipoI_Stock." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Imagen." ".$Input_Nivel2." ".$Input_TipoI_Imagen." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_CB." ".$Input_Nivel2." ".$Input_TipoI_CB." ".$Input_Nivel3
							);

$Array_Agendas_InputsI = array(
	                        $Input_Nivel1." ".$Input_Logo_Nombre." ".$Input_Nivel2." ".$Input_TipoI_Nombre." ".$Input_Nivel3,
	                        $Input_Nivel1." ".$Input_Logo_Telefono." ".$Input_Nivel2." ".$Input_TipoI_Telefono." ".$Input_Nivel3,
	                        $Input_Nivel1." ".$Input_Logo_FechaA." ".$Input_Nivel2." ".$Input_TipoI_FechaA." ".$Input_Nivel3,
	                        $Input_Nivel1." ".$Input_Logo_Descripcion." ".$Input_Nivel2." ".$Input_TipoI_Descripcion." ".$Input_Nivel3,
							);
/*
------------------------------------------------
arrays de las tablas para update
------------------------------------------------
*/

$Array_Usuarios_InputsU = array(
	                        $Input_Nivel1." ".$Input_Logo_Nombre." ".$Input_Nivel2." ".$Input_TipoU_Nombre." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_App." ".$Input_Nivel2." ".$Input_TipoU_App." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Apm." ".$Input_Nivel2." ".$Input_TipoU_Apm." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Correo." ".$Input_Nivel2." ".$Input_TipoU_Correo." ".$Input_Nivel3,
							$Input_Nivel1." ".$Input_Logo_Telefono." ".$Input_Nivel2." ".$Input_TipoU_Telefono." ".$Input_Nivel3
							);

$Array_Proveedores_InputsU = array(
                          $Input_Nivel1." ".$Input_Logo_Nombre." ".$Input_Nivel2." ".$Input_TipoU_Nombre." ".$Input_Nivel3,
              $Input_Nivel1." ".$Input_Logo_App." ".$Input_Nivel2." ".$Input_TipoU_App." ".$Input_Nivel3,
              $Input_Nivel1." ".$Input_Logo_Apm." ".$Input_Nivel2." ".$Input_TipoU_Apm." ".$Input_Nivel3,
              $Input_Nivel1." ".$Input_Logo_Correo." ".$Input_Nivel2." ".$Input_TipoU_Correo." ".$Input_Nivel3,
              $Input_Nivel1." ".$Input_Logo_Telefono." ".$Input_Nivel2." ".$Input_TipoU_Telefono." ".$Input_Nivel3,
              $Input_Nivel1." ".$Input_Logo_Direccion." ".$Input_Nivel2." ".$Input_TipoU_Direccion." ".$Input_Nivel3
              );

$Array_Clientes_InputsU = array(
                          $Input_Nivel1." ".$Input_Logo_Nombre." ".$Input_Nivel2." ".$Input_TipoU_Nombre." ".$Input_Nivel3,
              $Input_Nivel1." ".$Input_Logo_App." ".$Input_Nivel2." ".$Input_TipoU_App." ".$Input_Nivel3,
              $Input_Nivel1." ".$Input_Logo_Apm." ".$Input_Nivel2." ".$Input_TipoU_Apm." ".$Input_Nivel3,
              $Input_Nivel1." ".$Input_Logo_Correo." ".$Input_Nivel2." ".$Input_TipoU_Correo." ".$Input_Nivel3,
              $Input_Nivel1." ".$Input_Logo_Telefono." ".$Input_Nivel2." ".$Input_TipoU_Telefono." ".$Input_Nivel3,
              $Input_Nivel1." ".$Input_Logo_RS." ".$Input_Nivel2." ".$Input_TipoU_RS." ".$Input_Nivel3,
              $Input_Nivel1." ".$Input_Logo_Direccion." ".$Input_Nivel2." ".$Input_TipoU_Direccion." ".$Input_Nivel3
              );

$Array_Productos_InputsU = array(
              $Input_Nivel1." ".$Input_Logo_Nombre." ".$Input_Nivel2." ".$Input_TipoU_Nombre." ".$Input_Nivel3,
              $Input_Nivel1." ".$Input_Logo_PrecioC." ".$Input_Nivel2." ".$Input_TipoU_PrecioC." ".$Input_Nivel3,
              $Input_Nivel1." ".$Input_Logo_PrecioV." ".$Input_Nivel2." ".$Input_TipoU_PrecioV." ".$Input_Nivel3,
              $Input_Nivel1." ".$Input_Logo_CB." ".$Input_Nivel2." ".$Input_TipoU_CB." ".$Input_Nivel3
              );
/*
------------------------------------------------
arrays de las tablas para delete
------------------------------------------------
*/

?>