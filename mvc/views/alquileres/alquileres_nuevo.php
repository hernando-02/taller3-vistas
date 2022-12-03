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
        <br>
        <br>
        <h2>
            <?php echo $data["titulo"]; ?>
        </h2>

        <form id="nuevo" name="nuevo" method="POST" action="index.php?c=alquileres&a=guarda" autocomplete="off">

            <div class="form-group">
                <label for="id_auto">id_auto</label>
                <input type="text" class="form-control" id="id_auto" name="id_auto"
                    value="<?php echo $data["id_carro"] ?>" />
            </div>

            <div class="form-group">
                <label for="nombre_cliente">nombre_cliente</label>
                <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" />
            </div>

            <div class="form-group">
                <label for="email_cliente">email_clientes</label>
                <input type="text" class="form-control" id="email_cliente" name="email_cliente" />
            </div>

            <div class="form-group">
                <label for="nombre_prestador">nombre_prestador</label>
                <input type="text" class="form-control" id="nombre_prestador" name="nombre_prestador" />
            </div>

            <div class="form-group">
                <label for="hora_inicio">hora_inicio</label>
                <input type="text" class="form-control" id="hora_inicio" name="hora_inicio" />
            </div>

            <div class="form-group">
                <label for="fecha_devolucion">fecha_devolucion</label>
                <input type="text" class="form-control" id="fecha_devolucion" name="fecha_devolucion" />
            </div>

            <div class="form-group">
                <label for="km_recorridos">km_recorridos</label>
                <input type="text" class="form-control" id="km_recorridos" name="km_recorridos" />
            </div>

            <div class="form-group">
                <label for="precio">precio</label>
                <input type="text" class="form-control" id="precio" name="precio" />
            </div>

            <br>
            <div style="display: flex; justify-content: center;">
                <button id="guardar" name="guardar" type="submit" class="btn btn-primary">Confirmar Alquiler</button>
            </div>



        </form>
    </div>
</body>

</html>