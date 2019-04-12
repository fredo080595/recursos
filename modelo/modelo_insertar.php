<?php  


require_once "../bd/conexion.php";

class modeloInsertar{

	private function conexion(){

		$c = new conectar();
		return $c->conexion();
	}

	public function insertar($datos){

		$conexion = self::conexion();
		$sql= "INSERT INTO `admin`.`usuarios` (`nombre`, `aPaterno`, `aMaterno`, `edad`) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]')";
		$result = mysqli_query($conexion,$sql);
		if ($result) {
			return 1;
		}else{
			return 0;
		}
	}


}