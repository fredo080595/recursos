<?php  


class controladorEliminar{

	public function eliminar($id){

		require_once "../modelo/modelo_eliminar.php";

		$obj = new modeloEliminar();
		echo $obj->eliminar($id);

	}


}

$id = $_POST['id'];

controladorEliminar::eliminar($id);