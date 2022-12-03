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
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<img src="https://files.lafm.com.co/assets/public/styles/i_a_750x375/public/2019-07/renta-de-carros_0.jpg.webp?MF9.1FQtlDwLSDcwkUvEd4Bf3e4ZRC5t&itok=o0o0Ce-N"
				height="100" alt="Logo" loading="lazy" style="margin-top: -1px;" />
			</a>

			<button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
				data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false"
				aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarButtonsExample">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<span class="navbar-brand mb-0 h1">GESTION DE CARROS</span>
					</li>
				</ul>
				<div class="d-flex align-items-center">
					<button type="button" class="btn btn-primary me-3">
						Login
					</button>
					<button type="button" class="btn btn-primary me-3">
						Sign up for free
					</button>
				</div>
			</div>
		</div>
	</nav>
	<div class="container">
		<br />
		<h1>
			<?php echo $data["titulo"]; ?>
		</h1>

		<a href="index.php?c=vehiculos&a=nuevo" class="btn btn-primary">Agregar nuevo</a>
		<a href="index.php?c=alquileres&a=index" class="btn btn-primary">Listar alquileres</a>
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
						<th>Alquilar</th>
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
	                    echo "<td><a href='index.php?c=alquileres&a=nuevo&id=" . $dato["id"] . "' class='btn btn-success'>Alquilar</a></td>";
	                    echo "<td><a href='index.php?c=vehiculos&a=modificar&id=" . $dato["id"] . "' class='btn btn-warning'>Editar</a></td>";
	                    echo "<td><a href='index.php?c=vehiculos&a=eliminar&id=" . $dato["id"] . "' class='btn btn-danger'>Eliminar</a></td>";
	                    echo "</tr>";
                    }
                    ?>
				</tbody>

			</table>
		</div>
	</div>
	<br>
	<br>
	<br>

	<!-- footer -->
	<footer class="bg-dark text-center text-white">
		<div class="container p-4">
			<section class="">
				<form action="">
					<div class="row d-flex justify-content-center">
						<div class="col-auto">
							<p class="pt-2">
								<strong>Suscríbase para más información</strong>
							</p>
						</div>
						<div class="col-md-5 col-12">
							<div class="form-outline form-white mb-4">
								<input type="email" id="form5Example21" class="form-control" />
								<label class="form-label" for="form5Example21">Dirección de correo eletrónico</label>
							</div>
						</div>
						<div class="col-auto">
							<button type="submit" class="btn btn-outline-light mb-4">
								Suscribirse
							</button>
						</div>
					</div>
				</form>
			</section>
			<section class="mb-4">
				<p>
					Nuestra empresa se dedica al desarrollo de páginas web para cualquier necesidad, escribanos para
					tener el gusto de atenderte...! <br />
				<h3> Softsolutions </h3>
				</p>
			</section>

			<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
				© 2022 Copyright <br />
				Daniela Alvarez y Hernando Julio
			</div>

	</footer>
</body>

</html>