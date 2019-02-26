<?php 
require_once "Config/variables_globales.php";
    if(isset($_SESSION['Usuario_Correo']) and $Acciones_View==1)
  {  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Roles</title>
  <?php require_once $librerias_head;  ?>
</head>
<body>
  <div class="be-wrapper be-offcanvas-menu be-fixed-sidebar ">
<?php   require_once $menu_arriba;  ?>
<?php   require_once $menu_derecha;  ?>

      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
        <div class="w3-col m2 ">

                  <div class="w3-card w3-white">
             <div class="w3-row ">
                 <button onclick="Accion_Modal('Elimina_Registro');" class="btn btn-primary btn-block"><i class="w3-large  fa fa-plus"></i> Roles</button>
                </div>
            </div>


              <div class="w3-card w3-white">
             <div class="w3-row w3-section w3-padding">
                  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-search"></i></div>
                    <div class="w3-rest">
                      <input  class="w3-input w3-padding " type="text"  id="q" placeholder="Buscar Roles..." onkeyup="load(1)" > 
                    </div>
                </div>
            </div>

             <div class="">
                <div class="w3-row w3-section w3-padding">
                  <img src="img/Sistema/pdf.png" style="width: 100%; height: 120px;">
                </div>
            </div>

            <div class="">
                <div class="w3-row w3-section w3-padding">
                  <img src="img/Sistema/csv.png" style="width: 100%; height: 120px;">
                </div>
            </div>


        </div>



        <div class="w3-col m10">
           <div id="loader"></div>
              <div class="outer_div w3-col m12" id="datos"></div>
        </div>
      </div>
          
        </div>
      </div>
   </div>

<?php   require_once $librerias_body;  ?>
 <script src="<?php echo  'js/roles_ajax';?>"></script> 
<script type="text/javascript" src="<?php echo  'js/roles_query';?>"></script>
<?php require 'Modal/roles_modals.php'; ?> 
</body>
</html>
<?php
}
else{
  echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=cerrar.php'>";
}
?>