<?php
class System_Conexion{
	private $System_Driver, $System_Local, $System_User, $System_Password, $System_Database, $System_Meta;
    public function __construct(){
    	$Config_Conexion =["System_Driver"=>"Mysql","System_Local"=>"localhost","System_User"=>"root","System_Password"=>"","System_Database"=>"compensaciones","System_Meta"=>"utf8"];
		$this->System_Driver=$Config_Conexion["System_Driver"];
		$this->System_Local=$Config_Conexion["System_Local"];
		$this->System_User=$Config_Conexion["System_User"];
		$this->System_Password=$Config_Conexion["System_Password"];
		$this->System_Database=$Config_Conexion["System_Database"];
		$this->System_Meta=$Config_Conexion["System_Meta"];

    } 
	public function Conexion()
	{
		if ($this->System_Driver=="Mysql") {
			$conn = new mysqli($this->System_Local,$this->System_User,$this->System_Password,$this->System_Database);
		}else{
            $conn = ["succes"=>'error',"msg"=>'El gestor no es el correcto'];
		}
          
		return $conn;

	}
}
?>