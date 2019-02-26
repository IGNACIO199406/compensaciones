<?php
require_once "Config/conexion_database.php";
class Usuario{
public function __construct(){
$conn = new System_Conexion();
$this->conected=$conn->Conexion();
}

public function getUsuario(){
if (is_array($this->conected)) {
print_r($this->conected);
}else{
	$result = array();
	$query=mysqli_query($this->conected,"SELECT * FROM usuarios");
	if ($query) {
		if ($query->num_rows>0) {
			while ($row=mysqli_fetch_assoc($query)) {
			$result[] = ["ID"=>$row["ID"],"Nombre"=>$row["Nombre"],"App"=>$row["App"]];
			return $result;
			}
		}else{
            $result = ["succes"=>'error',"msg"=>'La tabla esta vacia'];
            return $result;
		}
	}else{
            $result = ["succes"=>'error',"msg"=>'No existe la tabla'];
            return $result;
	}
}
}

public function setUsuario($ID){
if (is_array($this->conected)) {
print_r($this->conected);
}else{
	$result = array();
	$query=mysqli_query($this->conected,"SELECT * FROM usuarios where ID=$ID");
	if ($query) {
		if ($query->num_rows>0) {
			while ($row=mysqli_fetch_assoc($query)) {
			$result[] = ["ID"=>$row["ID"],"Nombre"=>$row["Nombre"],"App"=>$row["App"]];
			return $result;
			}
		}else{
            $result = ["succes"=>'error',"msg"=>'El usuario no existe'];
            return $result;
		}
	}else{
            $result = ["succes"=>'error',"msg"=>'No existe la tabla'];
            return $result;
	}
}
}
}
?>