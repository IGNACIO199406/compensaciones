<?php
require_once "Config/conexion_database.php";
	class Permiso{
		public function __construct($ID_Tabla){
			$conn = new System_Conexion();
			$this->conected=$conn->Conexion();
			$this->ID_Rol=$_SESSION['Usuario_ID_Rol'];
			$this->ID_Operador=$_SESSION['Usuario_ID'];
			$this->ID_Tabla=$ID_Tabla;
		}
		public function getPermiso(){
			if (is_array($this->conected)) {
			print_r($this->conected);
			}else{
				// where  a.ID=$id_tabla and c.ID=$Usuario_ID_Rol
				$result = array();
				$query=mysqli_query($this->conected,"SELECT 
													a.Nombre as Nombre_Tablas, b.ID as ID_Permisos,d.Nombre as Nombre_Acciones,b.Status as Status_Permisos
													from tabla as a 
													Inner join permiso as b on a.ID=b.ID_Tabla 
													inner join rol as c on b.ID_Rol=c.ID 
													inner join accion as d on d.ID=b.ID_Accion
													inner join operador as e on e.ID_Rol=c.ID
													where  a.ID=$this->ID_Tabla and e.ID=$this->ID_Operador and c.ID=$this->ID_Rol order by b.ID ");
				if ($query) {
					if ($query->num_rows>0) {
						while ($row=mysqli_fetch_assoc($query)) {
			            $result[] =["Nombre_Tablas"=>$row["Nombre_Tablas"],"ID_Permisos"=>$row["ID_Permisos"],"Nombre_Acciones"=>$row["Nombre_Acciones"],"Status_Permisos"=>$row["Status_Permisos"]];
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