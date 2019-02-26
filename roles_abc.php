<?php
require_once "Config/conexion_database.php";
$conn = new System_Conexion();
$conexion=$conn->Conexion();
    if(isset($_SESSION['Usuario_Correo']))
  {  


/* 
---------------------------------------------------------------------------------------------
Acciones de Insertar agenda
---------------------------------------------------------------------------------------------
*/

if (isset($_POST["Insert_Registro"])=="insert") {
    $Nombre_Insert=$_POST["Nombre_Insert"];

    $query = $Gestor_query($conexion,"SELECT * FROM  roles  where Nombre='$Nombre_Insert' ");
if (($query->num_rows > 0)) {
    echo 1;
}
else{
if(is_uploaded_file($_FILES['Imagen_Insert']['tmp_name'])!="") {
$direccion = $_FILES['Imagen_Insert']['tmp_name'];
$Imagen_Insert = $_FILES['Imagen_Insert']['name'];
$Gestor_query($conexion,"INSERT INTO roles values(null,'$Nombre_Insert','$Imagen_Insert',1,$Gestor_date,$Gestor_date) ");

$Imagen_Insert = "img/roles/".$_FILES['Imagen_Insert']['name'];
if(move_uploaded_file($direccion,$Imagen_Insert)) {
}
    echo 0;
}
else{
    echo 2;
    $Imagen_Insert="roles.png";
$Gestor_query($conexion,"INSERT INTO roles values(null,'$Nombre_Insert','$Imagen_Insert',1,$Gestor_date,$Gestor_date) ");

}
 $query_sel_rol = $Gestor_query($conexion,"SELECT max(ID) AS ID_Rol FROM  roles");
while( $row_sel_rol = $Gestor_fetch($query_sel_rol)) {
$Registro_ID_rol=$row_sel_rol['ID_Rol'];
}
  $query_tabla = $Gestor_query($conexion,"SELECT ID FROM  tablas ");
while( $row = $Gestor_fetch($query_tabla)) {
$Registro_ID_Tabla=$row['ID'];

  $query_in_acciones = $Gestor_query($conexion,"SELECT ID AS ID_Acciones  FROM  acciones");
while( $row_in_acciones = $Gestor_fetch($query_in_acciones)) {
$Registro_ID_Accion=$row_in_acciones['ID_Acciones'];
$Gestor_query($conexion,"INSERT INTO permisos values(null, $Registro_ID_rol,$Registro_ID_Accion,$Registro_ID_Tabla,0,$Gestor_date,$Gestor_date)");
}

}


$Gestor_query($conexion,"INSERT INTO bitacora values(null,$Usuario_ID_Usuario,$ID_Registro_Tabla,1,$Gestor_date,$Gestor_date) ");

}



            }
 

/* 
---------------------------------------------------------------------------------------------
Acciones de Actualizar
---------------------------------------------------------------------------------------------
*/

/* --------------Inicia Actualizar Imagen---------------- */
if (isset($_POST["actualizar_imagen"])=="update") {
       $ID_Registro_Update = $_POST['ID_Registro_Update'];
        if(is_uploaded_file($_FILES['Imagen_Update']['tmp_name'])!="") {
            $direccion = $_FILES['Imagen_Update']['tmp_name'];
            $Imagen_Update = $_FILES['Imagen_Update']['name'];
            $Gestor_query($conexion,"UPDATE roles SET  Archivo = '$Imagen_Update' WHERE ID = $ID_Registro_Update"); 
            $Imagen_Update = "img/roles/".$_FILES['Imagen_Update']['name'];
if(move_uploaded_file($direccion,$Imagen_Update)) {
}
echo 1;
$Gestor_query($conexion,"INSERT INTO bitacora values(null,$Usuario_ID_Usuario,$ID_Registro_Tabla,3,$Gestor_date,$Gestor_date) ");

}

else{
    echo 0;
}
    


}




 if (isset($_POST["actualizar_datos"])=="update") {

$ID_Registro_Update_Datos=$_POST["ID_Registro_Update_Datos"];
$Nombre_Update=$_POST["Nombre_Update"];

    $query = $Gestor_query($conexion,"SELECT * FROM  roles  where Nombre='$Nombre_Update' ");
if (($query->num_rows > 0)) {
    echo 0;
}
else{
$Gestor_query($conexion,"UPDATE roles SET 
Nombre='$Nombre_Update' WHERE ID = $ID_Registro_Update_Datos"); 
echo 1;
}
}

/* 
---------------------------------------------------------------------------------------------
Acciones de Eliminar
---------------------------------------------------------------------------------------------
*/

if (isset($_POST["eliminar_registro"])=="delete") {
      $ID = $_POST['ID_Registro_Elimina'];
$Gestor_query($conexion,"UPDATE roles SET Status = 0 WHERE ID = $ID"); 
echo 0;

}
/* 
---------------------------------------------------------------------------------------------
Acciones de Seleccionar
---------------------------------------------------------------------------------------------
*/
if(isset($_POST['Select_ID']) && isset($_POST['Select_ID']) != "")
{

    $Select_ID = $_POST['Select_ID'];
    $query = "SELECT * FROM roles WHERE ID = $Select_ID ";
    if (!$result = mysqli_query($conexion,$query)) {
        exit(mysqli_error());
    }
    $response = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }

    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}





}
else{
  echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=index.php'>";
}
?>