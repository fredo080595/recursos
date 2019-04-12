<?php  

class controladorInsertar{

	public function inseratarDatos($datos){
		require_once "../modelo/modelo_insertar.php";

			$inserta = new modeloInsertar();

			echo $inserta->insertar($datos);


	}

}

$datos = array();

$datos[0] = $_POST['nom'];
$datos[1] = $_POST['aPa'];
$datos[2] = $_POST['aMa'];
$datos[3] = $_POST['edad'];


$obj = new controladorInsertar();
$obj->inseratarDatos($datos);


