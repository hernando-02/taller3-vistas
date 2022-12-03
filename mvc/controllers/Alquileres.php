<?php

class AlquileresController
{

    public function __construct()
    {
        require_once "models/AlquileresModel.php";
    }

    public function index()
    {
        $alquileres = new Alquileres_model();
        $data["titulo"] = "Alquileres";
        $data["alquileres"] = $alquileres->get_alquileres();

        require_once "views/alquileres/alquileres.php";
    }

    public function nuevo($id)
    {
        $data["titulo"] = "Nuevo alquiler";
        $data["id_carro"] = $id;
        require_once "views/alquileres/alquileres_nuevo.php";
    }

    public function guarda()
    {

        $id_auto = $_POST['id_auto'];
        $nombre_cliente = $_POST['nombre_cliente'];
        $email_cliente = $_POST['email_cliente'];
        $nombre_prestador = $_POST['nombre_prestador'];
        $hora_inicio = $_POST['hora_inicio'];
        $fecha_devolucion = $_POST['fecha_devolucion'];
        $km_recorridos = $_POST['km_recorridos'];
        $precio = $_POST['precio'];


        $vehiculos = new Alquileres_model();
        $vehiculos->insertar($id_auto, $nombre_cliente, $email_cliente, $nombre_prestador, $hora_inicio, $fecha_devolucion, $km_recorridos, $precio);
        $data["titulo"] = "Alquileres";
        $this->index();
    }

    public function modificar($id)
    {
        $alquiler = new Alquileres_model();

        $data["id"] = $id;
        $data["alquileres"] = $alquiler->get_alquiler($id);
        $data["titulo"] = "Actualizar alquiler";
        require_once "views/alquileres/alquileres_modifica.php";
    }

    public function actualizar()
    {
        $id = $_POST['id'];
        $id_auto = $_POST['id_auto'];
        $nombre_cliente = $_POST['nombre_cliente'];
        $email_cliente = $_POST['email_cliente'];
        $nombre_prestador = $_POST['nombre_prestador'];
        $hora_inicio = $_POST['hora_inicio'];
        $fecha_devolucion = $_POST['fecha_devolucion'];
        $km_recorridos = $_POST['km_recorridos'];
        $precio = $_POST['precio'];

        $alquileres = new Alquileres_model();
        $alquileres->modificar($id, $id_auto, $nombre_cliente, $email_cliente, $nombre_prestador, $hora_inicio, $fecha_devolucion, $km_recorridos, $precio);
        $data["titulo"] = "Alquileres";
        $this->index();
    }

    public function eliminar($id)
    {

        $alquileres = new Alquileres_model();
        $alquileres->eliminar($id);
        $data["titulo"] = "Alquileres";
        $this->index();
    }

}

?>