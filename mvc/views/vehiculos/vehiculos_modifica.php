<?php

?>

<!DOCTYPE html>
<html>

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

		<form id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=actualizar" autocomplete="off">

			<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />

			<div class="form-group">
				<label for="marca">Marca</label>
				<input type="text" class="form-control" id="marca" name="marca"
					value="<?php echo $data["carros"]["marca"] ?>" />
			</div>

			<div class="form-group">
				<label for="modelo">Modelo</label>
				<input type="text" class="form-control" id="modelo" name="modelo"
					value="<?php echo $data["carros"]["modelo"] ?>" />
			</div>

			<div class="form-group">
				<label for="placa">Placa</label>
				<input type="text" class="form-control" id="placa" name="placa"
					value="<?php echo $data["carros"]["placa"] ?>" />
			</div>
			<br>
			<div style="display: flex; justify-content: center;">
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar cambios</button>
			</div>

		</form>
</body>

</html>