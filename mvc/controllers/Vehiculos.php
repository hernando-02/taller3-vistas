<?php

class VehiculosController
{

	public function __construct()
	{
		require_once "models/VehiculosModel.php";
	}

	public function index()
	{
		$carros = new Carros_model();
		$data["titulo"] = "Carros";
		$data["carros"] = $carros->get_vehiculos();

		require_once "views/vehiculos/vehiculos.php";
	}

	public function nuevo()
	{
		$data["titulo"] = "Carro nuevo";
		require_once "views/vehiculos/vehiculos_nuevo.php";
	}

	public function guarda()
	{
		$marca = $_POST['marca'];
		$modelo = $_POST['modelo'];
		$placa = $_POST['placa'];

		$vehiculos = new Carros_model();
		$vehiculos->insertar($marca, $modelo, $placa, );
		$data["titulo"] = "Vehiculos";
		$this->index();
	}

	public function modificar($id)
	{
		$carros = new Carros_model();

		$data["id"] = $id;
		$data["carros"] = $carros->get_vehiculo($id);
		$data["titulo"] = "Actualizar carro";
		require_once "views/vehiculos/vehiculos_modifica.php";
	}

	public function actualizar()
	{
		$id = $_POST['id'];
		$marca = $_POST['marca'];
		$modelo = $_POST['modelo'];
		$placa = $_POST['placa'];

		$carros = new Carros_model();
		$carros->modificar($id, $marca, $modelo, $placa);
		$data["titulo"] = "Carros";
		$this->index();
	}

	public function eliminar($id)
	{

		$carros = new Carros_model();
		$carros->eliminar($id);
		$data["titulo"] = "Carros";
		$this->index();
	}
}
?>