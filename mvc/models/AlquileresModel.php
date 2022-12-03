<?php

class Alquileres_model
{
    private $db;
    private $alquileres;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->alquileres = array();
    }

    public function get_alquileres()
    {
        $sql = "SELECT * FROM alquileres";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->alquileres[] = $row;
        }
        return $this->alquileres;
    }

    public function insertar($id_auto, $nombre_cliente, $email_cliente, $nombre_prestador, $hora_inicio, $fecha_devolucion, $km_recorridos, $precio)
    {
        $resultado = $this->db->query("INSERT INTO alquileres (id_auto, nombre_cliente, email_cliente, nombre_prestador, hora_inicio, fecha_devolucion, km_recorridos,precio) 
        VALUES ('$id_auto', '$nombre_cliente', '$email_cliente','$nombre_prestador', '$hora_inicio', '$fecha_devolucion', '$km_recorridos', '$precio')");
    }

    public function modificar($id, $id_auto, $nombre_cliente, $email_cliente, $nombre_prestador, $hora_inicio, $fecha_devolucion, $km_recorridos, $precio)
    {

        $resultado = $this->db->query("UPDATE alquileres 
        SET id_auto = '$id_auto',
        nombre_cliente = '$nombre_cliente', 
        email_cliente='$email_cliente', 
        nombre_prestador='$nombre_prestador', 
        hora_inicio='$hora_inicio', 
        fecha_devolucion='$fecha_devolucion', 
        km_recorridos='$km_recorridos', 
        precio='$precio'
        WHERE id = '$id'");

    }

    public function eliminar($id)
    {
        $resultado = $this->db->query("DELETE FROM alquileres WHERE id = '$id'");
    }

    public function get_alquiler($id)
    {
        $sql = "SELECT * FROM alquileres WHERE id='$id' LIMIT 1";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();

        return $row;
    }

}
?>