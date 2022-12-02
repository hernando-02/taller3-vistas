<?php

class Carros_model
{

	private $db;
	private $carros;

	public function __construct()
	{
		$this->db = Conectar::conexion();
		$this->carros = array();
	}

	public function get_vehiculos()
	{
		$sql = "SELECT * FROM carros";
		$resultado = $this->db->query($sql);
		while ($row = $resultado->fetch_assoc()) {
			$this->carros[] = $row;
		}
		return $this->carros;
	}

	public function insertar($marca, $modelo, $placa)
	{
		$resultado = $this->db->query("INSERT INTO carros (marca, modelo, placa) VALUES ('$marca', '$modelo','$placa')");

	}

	public function modificar($id, $marca, $modelo, $placa)
	{

		$resultado = $this->db->query("UPDATE carros SET marca='$marca', modelo='$modelo', placa='$placa' WHERE id = '$id'");
	}

	public function eliminar($id)
	{
		$resultado = $this->db->query("DELETE FROM carros WHERE id = '$id'");
	}

	public function get_vehiculo($id)
	{
		$sql = "SELECT * FROM carros WHERE id='$id' LIMIT 1";
		$resultado = $this->db->query($sql);
		$row = $resultado->fetch_assoc();

		return $row;
	}
}
?>