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

		<a href="index.php?c=vehiculos&a=nuevo" class="btn btn-primary">Agregar nuevo</a>
		<br />
		<br />

		<div class="table-responsive">
			<table width="80%" class="table table-striped">
				<thead class="table-dark">
					<tr>
						<th>Id</th>
						<th>Marca</th>
						<th>Modelo</th>
						<th>Placa</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($data["carros"] as $dato) {
	                    echo "<tr>";
	                    echo "<td>" . $dato["id"] . "</td>";
	                    echo "<td>" . $dato["marca"] . "</td>";
	                    echo "<td>" . $dato["modelo"] . "</td>";
	                    echo "<td>" . $dato["placa"] . "</td>";
	                    echo "<td><a href='index.php?c=vehiculos&a=modificar&id=" . $dato["id"] . "' class='btn btn-warning'>Modificar</a></td>";
	                    echo "<td><a href='index.php?c=vehiculos&a=eliminar&id=" . $dato["id"] . "' class='btn btn-danger'>Eliminar</a></td>";
	                    echo "</tr>";
                    }
                    ?>
				</tbody>

			</table>
		</div>
	</div>
</body>

</html>