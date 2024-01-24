<?php

$pageTitle = 'Contacto';

include '../include/head.php';

?>

<body>
	<?php include '../include/header.php'; ?>
	<main>
		<div class="section-banner">
			<img src="../assets/img/belt2.jpg" alt="Banner Principal" />
			<div class="banner-text">
				<h2>CONTACTO</h2>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-lg-7 p-5 addresses">
					<div class="row py-3">
						<div class="col d-flex flex-column justify-content-center align-items-center">
							<h2>CONTÁCTANOS</h2>
							<ul>
								<li>
									<i class="fa-solid fa-phone"></i>
									<a href="#">+56 2 2248 7396</a>
								</li>
								<li>
									<i class="fa-solid fa-phone"></i>
									<a href="#">+56 2 2248 7734</a>
								</li>
								<li>
									<i class="fa-solid fa-envelope"></i>
									<a href="#">info@spintecnologies.cl</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="address">
								<h3>Casa Matriz</h3>
								<div class="list">
									<i class="fa-solid fa-location-dot"></i>
									<a href="#">Av. Kennedy 5146, Vitacura</a>
								</div>
							</div>
							<div class="address">
								<h3>Bodega San Bernardo</h3>
								<div class="list">
									<i class="fa-solid fa-location-dot"></i>
									<a href="#">Las Acacias Parcela 20, San Bernardo</a>
								</div>
							</div>
							<div class="address">
								<h3>Bodega Quilicura</h3>
								<div class="list">
									<i class="fa-solid fa-location-dot"></i>
									<a href="#">Cerro Los Cóndores 9951, Quilicura</a>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="address">
								<h3>Argentina</h3>
								<div class="list">
									<i class="fa-solid fa-location-dot"></i>
									<a href="#">Av. Juramento 3170, Buenos Aires</a>
								</div>
							</div>
							<div class="address">
								<h3>Perú</h3>
								<div class="list">
									<i class="fa-solid fa-location-dot"></i>
									<a href="#">San Antonio 720, Lima</a>
								</div>
							</div>
							<div class="address">
								<h3>China</h3>
								<div class="list">
									<i class="fa-solid fa-location-dot"></i>
									<a href="#">Tiexi district, Shenyang, Liaoning</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="socials">
									<div class="circle">
										<a href="https://www.linkedin.com/in/spintechnologies/" class="icon-link">
											<i class="fa-brands fa-linkedin"></i>
										</a>
									</div>
									<div class="circle">
										<a href="https://www.instagram.com/bmpminerals/" class="icon-link">
											<i class="fa-brands fa-instagram"></i>
										</a>
									</div>
									<div class="circle">
										<a href="https://www.youtube.com/@spintechnologies" class="icon-link">
											<i class="fa-brands fa-youtube"></i>
										</a>
									</div>
									<div class="circle">
										<a href="catalog.html" class="icon-link">
											<i class="fa-solid fa-book-open"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-5 p-5 contact">
					<div class="row">
						<div class="col d-flex flex-column justify-content-center align-items-center">
							<h2>ENVÍANOS UN MENSAJE</h2>
						</div>
					</div>
					<div class="row">
						<div class="col d-flex flex-column justify-content-center align-items-center">
							<form>
								<div class="row mb-3">
									<div class="col">
										<label for="formName" class="form-label">Nombre</label>
										<input type="text" class="form-control" id="formName"
											aria-describedby="nameHelp" required />
									</div>
									<div class="col">
										<label for="formLastName" class="form-label">Apellido</label>
										<input type="text" class="form-control" id="formLastName"
											aria-describedby="lastNameHelp" required />
									</div>
								</div>
								<div class="row mb-3">
									<div class="col">
										<label for="formEmail" class="form-label">Email address</label>
										<input type="email" class="form-control" id="formEmail"
											aria-describedby="emailHelp" required />
									</div>
									<div class="col">
										<label for="formPhone" class="form-label">Celular</label>
										<input type="phone" class="form-control" id="formPhone"
											aria-describedby="phoneHelp" required />
									</div>
								</div>
								<div class="row mb-3">
									<div class="col">
										<label for="formSelect" class="form-label">¿En que te podemos ayudar?</label>
										<select class="form-select" id="formSelect" aria-describedby="selectHelp"
											required>
											<option selected disabled value="">Selecciona...</option>
											<option value="Minería Subterránea">Equipos de Minería Subterránea</option>
											<option value="Procesamiento de Minerales">Equipos de Procesamiento de
												Minerales</option>
											<option value="Repuestos">Repuestos</option>
											<option value="Otro">Otro</option>
										</select>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col">
										<label for="formTextarea" class="form-label">Detalles del requerimiento</label>
										<textarea class="form-control" id="formTextarea" rows="3"
											aria-describedby="textareaHelp"></textarea>
									</div>
								</div>
								<button class="g-recaptcha btn btn-primary"
									data-sitekey="6Lf7YnUlAAAAABA9v7JWFF76cCBa3RBv9RlILYKl" data-callback="onSubmit"
									data-action="submit">Enviar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer class="footer">
		<div class="grid-container">
			<div class="footer-column">
				<img src="../assets/img/logos/Grupo SpinTechnologies White.png" alt="Logo de la empresa" />
				<p>¡Gracias por visitarnos!</p>
				<div class="social-icons">
					<a href="https://www.linkedin.com/in/spintechnologies/"><i class="fab fa-linkedin"></i></a>
					<a href="https://www.instagram.com/bmpminerals/"><i class="fab fa-instagram"></i></a>
					<a href="https://www.youtube.com/@spintechnologies"><i class="fab fa-youtube"></i></a>
					<a href="catalog.html"><i class="fa-solid fa-book-open"></i></a>
				</div>
			</div>
			<div class="footer-column">
				<h3>Enlaces útiles</h3>
				<ul>
					<li><a href="../index.html">Inicio</a></li>
					<li><a href="catalog.html">Catalogo</a></li>
					<li><a href="contact.html">Contacto</a></li>
				</ul>
			</div>
			<div class="footer-column">
				<h3>Contacto</h3>
				<ul>
					<li><i class="fa-solid fa-phone"></i><a href="#">+56 2 2248 7396</a></li>
					<li><i class="fa-solid fa-phone"></i><a href="#">+56 2 2248 7734</a></li>
					<li><i class="fa-solid fa-envelope"></i><a href="#">info@spintecnologies.cl</a></li>
					<li><i class="fa-solid fa-envelope"></i><a href="#">contacto@spintecnologies.cl</a></li>
				</ul>
			</div>
			<div class="footer-column">
				<h3>Oficinas</h3>
				<ul>
					<li><i class="fa-solid fa-location-dot"></i><a href="#">Chile</a></li>
					<li><i class="fa-solid fa-location-dot"></i><a href="#">Argentina</a></li>
					<li><i class="fa-solid fa-location-dot"></i><a href="#">Perú</a></li>
					<li><i class="fa-solid fa-location-dot"></i><a href="#">China</a></li>
				</ul>
			</div>
		</div>
		<p class="copyright">&copy; 2023 Spin Technologies Ltda | Desarrollado por Diego Miranda</p>
	</footer>

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"
		integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
	<!-- Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
		crossorigin="anonymous"></script>
	<!-- FontAwesome -->
	<script src="https://kit.fontawesome.com/93b6d8b5a4.js" crossorigin="anonymous"></script>
	<!-- splide.js -->
	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-grid@0.4.1/dist/js/splide-extension-grid.min.js"></script>
	<!-- reCaptcha -->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<!-- Own Scripts -->
	<script src="../js/main.js"></script>
</body>

</html>