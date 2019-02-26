<?php
require_once "Config/conexion_database.php";
	class Tabla{
		public function __construct(){
			$conn = new System_Conexion();
			$this->conected=$conn->Conexion();
		}
		public function getTabla(){
			if (is_array($this->conected)) {
			print_r($this->conected);
			}else{
				$result = array();
				$query=mysqli_query($this->conected,"SELECT * FROM tabla order by Nombre asc ");
				if ($query) {
					if ($query->num_rows>0) {
						while ($row=mysqli_fetch_assoc($query)) {
			            $result[] =["ID"=>$row["ID"],"Nombre"=>$row["Nombre"],"Icono"=>$row["Icono"],"Status"=>$row["Status"],"Fecha_created"=>$row["Fecha_created"],"Fecha_update"=>$row["Fecha_update"]];
			            }
						return $result;
					}else{
			            $result = ["succes"=>'error',"msg"=>'No hay registros'];
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