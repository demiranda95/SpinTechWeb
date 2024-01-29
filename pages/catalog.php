<?php
$pageTitle = 'Equipos';
include '../include/head.php';
?>

<body>
	<?php include '../include/header.php'; ?>
	<main>
		<div class="section-banner">
			<img src="../assets/img/factory1.jpg" alt="Banner Principal" />
			<div class="banner-text">
				<h2>CATALOGO</h2>
			</div>
		</div>
		<div class="catalog">
			<!-- <a href="../actions/view.php">Catalogo</a> -->
			<iframe src="../actions/view.php" width="100%" height="100%" frameborder="0"></iframe>
		</div>
	</main>
	<?php include '../include/footer.php'; ?>
</body>

</html>