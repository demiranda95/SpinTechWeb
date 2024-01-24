<?php

$pageTitle = 'Inicio';

include 'include/head.php';

?>

<body>
	<?php include 'include/header.php'; ?>
	<main>
		<div class="splide">
			<div class="splide__track">
				<ul class="splide__list">
					<li class="splide__slide">
						<img src="assets/img/ballmill.jpg" alt="Slide 01" class="slide-image" />
					</li>
					<li class="splide__slide">
						<img src="assets/img/plant2.jpg" alt="Slide 02" class="slide-image" />
					</li>
					<li class="splide__slide">
						<img src="assets/img/belt2.jpg" alt="Slide 02" class="slide-image" />
					</li>
					<li class="splide__slide">
						<img src="assets/img/jumbo4.jpg" alt="Slide 02" class="slide-image" />
					</li>
				</ul>
			</div>
		</div>
		<!-- Add the progress bar element -->
		<div class="my-slider-progress">
			<div class="my-slider-progress-bar"></div>
		</div>
		<div class="container-fluid clientSection">
			<h2>Nuestros Clientes</h2>
			<div class="slider">
				<div class="slide-track">
					<div class="slide">
						<img src="assets/img/clients/ag.png" height="100" width="250" alt="" />
					</div>
					<div class="slide">
						<img src="assets/img/clients/cc.png" height="100" width="250" alt="" />
					</div>
					<div class="slide">
						<img src="assets/img/clients/clco.png" height="100" width="250" alt="" />
					</div>
					<div class="slide">
						<img src="assets/img/clients/cmsg.png" height="100" width="250" alt="" />
					</div>
					<div class="slide">
						<img src="assets/img/clients/colla.png" height="100" width="250" alt="" />
					</div>
					<div class="slide">
						<img src="assets/img/clients/ena.png" height="100" width="250" alt="" />
					</div>
					<div class="slide">
						<img src="assets/img/clients/hcm.png" height="100" width="250" alt="" />
					</div>
					<div class="slide">
						<img src="assets/img/clients/sg.png" height="100" width="250" alt="" />
					</div>
					<div class="slide">
						<img src="assets/img/clients/tambi.png" height="100" width="250" alt="" />
					</div>
					<div class="slide">
						<img src="assets/img/clients/yama.png" height="100" width="250" alt="" />
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid presentation">
			<div class="container card">
				<div class="row">
					<div class="col logo">
						<img src="assets/img/logos/BMP Minerals.png" alt="" />
					</div>
					<div class="col text">
						<h2>BMP Minerals</h2>
						<p>Nuestra marca <b>BMP Minerals</b> suministra equipos y repuestos para la industria de la
							minería, lo que nos permite brindar a nuestros clientes calidad, innovación y eficiencia.
						</p>
						<p>Nuestros equipos son fabricados según los requerimientos de nuestros clientes y cumpliendo
							con altos estándares y normas de calidad en ingeniería, materiales y fabricación, ofreciendo
							precios competitivos.</p>
						<p>En base a esto, hemos desarrollado equipos y soluciones para Procesamiento de Minerales y
							para Minería Subterránea.</p>
						<div class="row">
							<div class="col"></div>
							<div class="col"></div>
							<div class="col"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="counter-fluid counter">
			<div class="container">
				<div class="row">
					<div class="col">
						<p id="c-01" class="counter-number">4</p>
						<p class="counter-title">EPC</p>
					</div>
					<div class="col">
						<p id="c-02" class="counter-number">58</p>
						<p class="counter-title">Equipos</p>
					</div>
					<div class="col">
						<p id="c-03" class="counter-number">3496</p>
						<p class="counter-title">Repuestos</p>
					</div>
					<div class="col">
						<p id="c-04" class="counter-number">35</p>
						<p class="counter-title">Clientes</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid map-index">
			<div class="map-image">
				<h2>Presencia Global</h2>
				<image src="assets/img/worldmap.png" alt="WorldMap" />
			</div>
		</div>
	</main>
	<?php include 'include/footer.php'; ?>
</body>

</html>