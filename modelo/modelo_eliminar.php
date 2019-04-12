<?php 



require_once "../bd/conexion.php";

class modeloEliminar{

	private function conexion(){

		$c = new conectar();
		return $c->conexion();
	}

	public function eliminar($id){

		$conexion = self::conexion();
		$sql= "DELETE from usuarios where id ='$id';";
		$result = mysqli_query($conexion,$sql);
		if ($result) {
			return 1;
		}else{
			return 0;
		}
	}


}