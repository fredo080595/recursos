<?php  

require_once "../bd/conexion.php";

class modeloTablaDatos{

	private function conexion(){
		$c = new conectar();
		return $c->conexion();
	}

	public function muetraDatos($datos){

		$conexion = self::conexion();
		$sql="UPDATE usuarios SET nombre = '$datos[1]',aPaterno = '$datos[2]', aMaterno = '$datos[3]',edad = '$datos[4]' where id='$datos[0]' ";
		$result = mysqli_query($conexion,$sql);
		if ($result) {
			return 1;
		}else{
			return 0;
		}
	}



}