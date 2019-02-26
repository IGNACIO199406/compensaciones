      <div class="be-left-sidebar <?php echo $sistem_color;?> w3-card 4">
        <div class="left-sidebar-wrapper">
         <!--  <div class="divider w3-center">Desarrolladores</div>
                <div class="divider w3-center"><img src="img/Sistema/csv.png" style="width: 40%; height: 80px;"></div>
                   -->
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider w3-center">Desarrolladores</li>
                   <?php
foreach($getTabla as $valor) {
 $minusculas=lcfirst($valor['Nombre'].".php");
 $Nombre=ucwords($valor['Nombre']);
 $busqueda = strpos($url,$minusculas);
 $encontrar  = $busqueda === false ? 0 : 1;  
 $ID=$valor['ID'];
 $Nombre_php=$Nombre.".php";
 $Icono=$valor['Icono'];
 $Status=$valor['Status'];

 if ($Status!=-1) {
  ?>
<li class="<?php if ($encontrar==1) { echo "active";} ?>" style='cursor: pointer;'><a  href="<?php echo $minusculas; ?>"><i class='<?php echo $Icono;?>'></i><span><?php echo $Nombre;?></span></a></li>
<?php
 }
}
?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>