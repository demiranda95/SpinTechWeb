<?php

$pageTitle = 'Equipos';

include '../include/head.php';

?>

<body>
	<?php include '../include/header.php';?>
	<main>
		<div class="section-banner">
			<img src="../assets/img/ballmill.jpg" alt="Banner Principal" />
			<div class="banner-text">
				<h2>PROCESAMIENTO</h2>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row py-3">
				<div class="row">
					<div class="col-12">
						<form class="d-flex my-2" role="search">
							<input id="search" class="form-control" type="search" placeholder="Buscar productos..."
								aria-label="Buscar productos..." />
						</form>
					</div>
				</div>
				<div class="col-3">
						<div class="row">
							<div class="col-12">
								<ul id="displayEquipmentTab" class="list-group list-group-flush"></ul>
							</div>
						</div>
					</div>
					<div class="col-9">
						<div id="displayEquipment" class="row"></div>
						<div id="displaySearchedEquipment" class="row"></div>
					</div>
			</div>
		</div>
	</main>
	<?php include '../include/footer.php'; ?>
</body>

</html>