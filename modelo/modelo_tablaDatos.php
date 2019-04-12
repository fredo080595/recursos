<?php  

require_once "bd/conexion.php";

class modeloTablaDatos{

	private function conexion(){
		$c = new conectar();
		return $c->conexion();
	}

	public function muetraDatos(){

		$conexion = self::conexion();
		$sql="SELECT id,nombre,aPaterno,aMaterno,edad FROM usuarios";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_all($result,MYSQLI_ASSOC);

	}



}