<?php  


class controladorEditar{

	public function editar($datos){

		require_once "../modelo/modelo_editar.php";
		$editar = new modeloTablaDatos();
		echo $editar->muetraDatos($datos);

	}

}

$datos = array();
$datos[0] = $_POST['ide'];
$datos[1] = $_POST['nom1'];
$datos[2] = $_POST['aPa1'];
$datos[3] = $_POST['aMa1'];
$datos[4] = $_POST['edad1'];


controladorEditar::editar($datos);