<?php
session_start();
require_once "Model/Tabla.php";
require_once "Model/Permiso.php";
$Tablas = new Tabla();
$getTabla=$Tablas->getTabla();
$librerias_head="librerias/head.php";
$librerias_body="librerias/body.php";
$menu_derecha="menu_derecha.php";
$menu_arriba="menu_arriba.php";
$logo_icon="img/Sistema/logoseidor.PNG";
$sistem_color="w3-black";
$img_sistema="img/Sistema/";
$url= $_SERVER["REQUEST_URI"];

    if(isset($_SESSION['Usuario_Correo']))
  {  
foreach($getTabla as $valor_tabla) {
 $minusculas=lcfirst($valor_tabla['Nombre'].".php");
 $busqueda = strpos($url,$minusculas);
 $encontrar  = $busqueda === false ? 0 : 1;  
          if ($encontrar==1){ 
          $ID_Tabla=$valor_tabla['ID'];
     }
}

$Permisos = new Permiso($ID_Tabla);
$getPermiso=$Permisos->getPermiso();


foreach($getPermiso as $permisos_valor) {
              if ($permisos_valor["Nombre_Acciones"]=="Insert") {
                   $Acciones_Insert=$permisos_valor["Status_Permisos"];
                }
                  if ($permisos_valor["Nombre_Acciones"]=="Update") {
                   $Acciones_Update=$permisos_valor["Status_Permisos"];
                }
                  if ($permisos_valor["Nombre_Acciones"]=="Search") {
                   $Acciones_Search=$permisos_valor["Status_Permisos"];
                }
                  if ($permisos_valor["Nombre_Acciones"]=="Details") {
                   $Acciones_Details=$permisos_valor["Status_Permisos"];
                }
                  if ($permisos_valor["Nombre_Acciones"]=="Delete") {
                   $Acciones_Delete=$permisos_valor["Status_Permisos"];
                }
                  if ($permisos_valor["Nombre_Acciones"]=="Select") {
                   $Acciones_Select=$permisos_valor["Status_Permisos"];
                }
                 if ($permisos_valor["Nombre_Acciones"]=="Reports") {
                   $Acciones_Reports=$permisos_valor["Status_Permisos"];
                }
                if ($permisos_valor["Nombre_Acciones"]=="View") {
                   $Acciones_View=$permisos_valor["Status_Permisos"];
                }

}

}

require_once "Config/Inputs.php";
?>