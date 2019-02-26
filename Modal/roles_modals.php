<!-- 
---------------------------------------------------------------------------------------------
Inicia Insertar
---------------------------------------------------------------------------------------------
-->

 <?php   echo $Superior_Modal_Insert;   ?>
                   <?php  
                   foreach ($Array_Roles_InputsI as $key => $RArray_Roles_InputsI) {
                                          echo $RArray_Roles_InputsI;
                                        }
                              ?>
 <?php echo $Inferior_Modal_Insert;   ?>

<!-- 
---------------------------------------------------------------------------------------------
Finaliza Insertar
---------------------------------------------------------------------------------------------
-->

<!-- 
---------------------------------------------------------------------------------------------
Inicia Actualizar
---------------------------------------------------------------------------------------------
-->  

<?php  echo $Superior_Modal_Update_Imagen; ?>  
<?php  echo $Inferior_Modal_Update_Imagen; ?>

<!-- 
---------------------------------------------------------------------------------------------
Finaliza Actualizar
---------------------------------------------------------------------------------------------
-->  


<!-- 
---------------------------------------------------------------------------------------------
Inicia Eliminar
---------------------------------------------------------------------------------------------
-->  

<form id="Delete" name="form_delete" method="post" action="roles_abc.php" >
<div id="Elimina_Registro" class="w3-modal">
  <div class="w3-modal-content w3-white w3-round-xlarge w3-card-4" style="width: 400px;">
    <div class="w3-container w3-orange">
      <div class="w3-col m12  w3-padding w3-center">
       Eliminar Registro
      </div>
    </div> 

<div class="w3-padding w3-center">
<input class="w3-input w3-border-blue " id="ID_Registro_Elimina" name="ID_Registro_Elimina" type="hidden"   tabindex="1">
<input class="w3-input w3-border-blue " id="eliminar_registro" name="eliminar_registro" type="hidden" value="delete"   tabindex="1">
<img src="<?php echo $img_sistema;?>precaucion.png" style="width: 25%;" class="w3-center ">
<div id="Nombre_Elimina"></div>
<p>¿Estas seguro de eliminar El registro?</p>
</div>

   <div class="w3-padding w3-center">
     <button  style="width: 150px;" id=""  tabindex="20"  class=" w3-button w3-green w3-round w3-card" type="submit" >Enviar</button>
     <a style="width: 150px;" onclick="document.getElementById('Elimina_Registro').style.display='none';" class=" w3-button w3-red w3-round w3-card" >Cancelar</a>
   </div>

  </div>
</div>
</form>

<!-- 
---------------------------------------------------------------------------------------------
Finaliza Eliminar
---------------------------------------------------------------------------------------------
-->  



<form id="Update_Datos" name="form_update_datos"  >
<div id="actualiza_datos" class="w3-modal">
  <div class="w3-modal-content w3-white w3-round-xlarge w3-card-4" style="width: 400px;">
    <div class="w3-container w3-green">
      <div class="w3-col m12  w3-padding w3-center">
       Actualizacion de datos
      </div>
    </div> 

<div class="w3-padding">
<div class="w3-row w3-section">
<div class="w3-col" style="width:50px"><i class="w3-xxlarge w3-text-blue icon mdi mdi-layers"></i></div>
<div class="w3-rest">
<input class="w3-input w3-border-blue " id="Nombre_Update" name="Nombre_Update" type="text" placeholder="Nombre"  >
</div>
</div>

<input class="w3-input w3-border-blue " id="ID_Registro_Update_Datos" name="ID_Registro_Update_Datos" type="hidden"   >
<input class="w3-input w3-border-blue " id="actualizar_datos" name="actualizar_datos" type="hidden" value="update"   tabindex="1">
</div>
   <div class="w3-padding w3-center">
     <button  style="width: 150px;" id=""  tabindex="20"  class=" w3-button w3-green w3-round w3-card" type="submit" >Enviar</button>
     <a style="width: 150px;" onclick="document.getElementById('actualiza_datos').style.display='none';" class=" w3-button w3-red w3-round w3-card" >Cancelar</a>
   </div>
  </div>
</div>
</form>