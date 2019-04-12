<?php 


class conectar{

	private $server = "localhost";
	private $user = "root";
	private $pass = "";
	private $db = "admin";

	public function conexion(){
		$conexion = mysqli_connect($this->server,$this->user,$this->pass,$this->db);
		return $conexion;
	}


}


