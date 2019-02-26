<?php
session_start();
require_once "../Config/conexion_database.php";
class Login{
public function __construct($Email,$password){
	$this->Email=$Email;
	$this->password=md5($password);
$conn = new System_Conexion();
$this->conected=$conn->Conexion();
}


public function getLogin(){
if (is_array($this->conected)) {
print_r($this->conected);
}else{
	if ($this->Email=="" || $this->password=="") {
	        $result = ["succes"=>'error',"msg"=>'Tu usuario y contraseña deben de ingresarse'];
            return $result;
	}else{
	$result = array();
	$query=mysqli_query($this->conected,"SELECT 
											a.ID, a.Nombre, a.App, a.Apm, a.Correo, 
											a.Telefono, b.Nombre as Nombre_Rol, b.ID as ID_Rol, a.Archivo, a.Status, a.Password, a.Fecha_created, a.Fecha_update
											FROM  operador as a 
											INNER JOIN rol as b 
											on a.ID_Rol=b.ID
											where a.Correo='$this->Email' and a.Password='$this->password' ");
	if ($query) {
		if ($query->num_rows>0) {
			while ($row=mysqli_fetch_assoc($query)) {
			$Status=$row["Status"];
			$Nombre=$row["Nombre"];
			$_SESSION['Usuario_ID'] = $row['ID'];
			$_SESSION['Usuario_ID_Rol'] = $row['ID_Rol'];
			$_SESSION['Usuario_Correo'] = $row['Correo'];
			}
			if ($Status==1) {
			$result = ["succes"=>'ok',"msg"=>'Bienvenido '.$Nombre];
            return $result;
			}
			else{
            $result = ["succes"=>'warning',"msg"=>'El usuario esta dado de baja consulte a su Administrador'];
            return $result;
			}
		}else{
            $result = ["succes"=>'error',"msg"=>'Usuario o contraseña incorrectos'];
            return $result;
		}
	}else{
            $result = ["succes"=>'error',"msg"=>'No existe la tabla'];
            return $result;
	}
}
}
}
}

$Logins = new Login($_POST["Email"],$_POST["Password"]);
$getLogin=$Logins->getLogin();
 
echo utf8_encode(json_encode($getLogin));
?>