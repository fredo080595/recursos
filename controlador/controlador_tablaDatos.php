<?php  

class controladorDatos{

	public function muestraDatos(){

		require_once "modelo/modelo_tablaDatos.php";

			$datos = new modeloTablaDatos();
			$muestra = $datos->muetraDatos();

		require_once "vista/vista_tablaDatos.php";

	}


}

$obj = new controladorDatos();
$obj->muestraDatos();