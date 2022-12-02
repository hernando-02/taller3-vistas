<?php

class Conectar
{

	public static function conexion()
	{

		$conexion = new mysqli("localhost", "eliot", "123eliot22*", "alquiler_carros");
		return $conexion;

	}
}
?>