<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?php echo $data["titulo"]; ?>
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container">
        <br />
        <br />
        <h1>
            <?php echo $data["titulo"]; ?>
        </h1>

        <a href="index.php?c=vehiculos&a=index" class="btn btn-primary">Mostrar Carros</a>
        <br />
        <br />

        <div class="table-responsive">
            <table width="80%" class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Alquiler</th>
                        <th>Id Auto</th>
                        <th>Cliente</th>
                        <th>Correo Cliente</th>
                        <th>Empleado</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Devolucion</th>
                        <th>Kilometraje</th>
                        <th>Precio</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($data["alquileres"] as $dato) {
                        echo "<tr>";
                        echo "<td>" . $dato["id"] . "</td>";
                        echo "<td>" . $dato["id_auto"] . "</td>";
                        echo "<td>" . $dato["nombre_cliente"] . "</td>";
                        echo "<td>" . $dato["email_cliente"] . "</td>";
                        echo "<td>" . $dato["nombre_prestador"] . "</td>";
                        echo "<td>" . $dato["hora_inicio"] . "</td>";
                        echo "<td>" . $dato["fecha_devolucion"] . "</td>";
                        echo "<td>" . $dato["km_recorridos"] . "</td>";
                        echo "<td>" . $dato["precio"] . "</td>";
                        echo "<td><a href='index.php?c=alquileres&a=modificar&id=" . $dato["id"] . "' class='btn btn-warning'>Editar</a></td>";
                        echo "<td><a href='index.php?c=alquileres&a=eliminar&id=" . $dato["id"] . "' class='btn btn-danger'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>
</body>

</html>