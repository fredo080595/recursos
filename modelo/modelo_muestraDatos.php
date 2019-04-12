<?php 

require_once "../bd/conexion.php";

class modeloMustraDatos{

	private function conexion(){

		$c = new conectar();
		return $c->conexion();
	}

	public function muestra($id){

		$conexion = self::conexion();
		$sql= "SELECT id,nombre,aPaterno,aMaterno,edad FROM usuarios WHERE id = '$id'";
		$result = mysqli_query($conexion,$sql);
		$ver =  mysqli_fetch_array($result);
		$datos = array(
			'id'=>$ver['id'],
			'nombre'=>$ver['nombre'],
			'aPaterno'=>$ver['aPaterno'],
			'aMaterno'=>$ver['aMaterno'],
			'edad'=>$ver['edad']
		);

		return $datos;
	}


}