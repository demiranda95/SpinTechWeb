<?php
// Establecer un tiempo de espera de 10 segundos (10000 milisegundos)
header("refresh:10;url=https://spintecnologies.cl");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sitio en Construcción</title>
	<!-- Agregar enlaces a los archivos CSS de Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			margin: 0;
			background-color: #f8f9fa;
		}

		.construction-container {
			text-align: center;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		.construction-image {
			max-width: 100%;
			height: auto;
			border-radius: 8px;
		}

		h1 {
			color: #343a40;
			margin-top: 20px;
		}

		p {
			color: #6c757d;
			margin-bottom: 20px;
		}

		a {
			color: #007bff;
			text-decoration: none;
			font-weight: bold;
		}

		a:hover {
			text-decoration: underline;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="construction-container">
					<img class="construction-image img-fluid" src="assets/img/logos/BMP Minerals.png"
						alt="Sitio en Construcción" />
					<h1 class="mt-4">Sitio en Construcción</h1>
					<p>Estamos trabajando en mejoras.</p>
					<p>Serás redirigido automáticamente a nuestro sitio <a href="http://spintecnologies.cl">actual</a>.
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Agregar enlaces a los archivos JavaScript de Bootstrap y jQuery (si no se han agregado anteriormente) -->
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"
		integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
		crossorigin="anonymous"></script>
</body>

</html>