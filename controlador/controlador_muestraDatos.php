<?php  


class controladorMuestraDatos{

	public function datos($id){
		require_once "../modelo/modelo_muestraDatos.php";

		$muestra = new modeloMustraDatos();
		echo json_encode($muestra->muestra($id));

	}

}

$id = $_POST['id'];
controladorMuestraDatos::datos($id);
