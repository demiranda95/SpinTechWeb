<footer class="footer">
    <div class="grid-container">
        <div class="footer-column">
            <img src="<?php echo ($pageTitle !== 'Inicio') ? '../' : '' ?>assets/img/logos/Grupo SpinTechnologies White.png"
                alt="Logo de la empresa" />
            <p>¡Gracias por visitarnos!</p>
            <div class="social-icons">
                <a href="https://www.linkedin.com/in/spintechnologies/"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.instagram.com/bmpminerals/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/@spintechnologies"><i class="fab fa-youtube"></i></a>
                <a href="<?php echo ($pageTitle !== 'Inicio') ? '../' : '' ?>actions/view.php" target="_blank"><i
                        class="fa-solid fa-book-open"></i></a>
            </div>
        </div>
        <div class="footer-column">
            <h3>Enlaces útiles</h3>
            <ul>
                <li><a href="<?php echo ($pageTitle !== 'Inicio') ? '../' : '' ?>index.php">Inicio</a></li>
                <li><a href="<?php echo ($pageTitle !== 'Inicio') ? '../' : '' ?>actions/view.php">Catalogo</a></li>
                <li><a href="<?php echo ($pageTitle !== 'Inicio') ? '../' : '' ?>pages/contact.php"">Contacto</a></li>
            </ul>
        </div>
        <div class=" footer-column">
                        <h3>Contacto</h3>
                        <ul>
                            <li><i class="fa-solid fa-phone"></i><a href="tel:+56 2 2248 7396">+56 2 2248 7396</a></li>
                            <li><i class="fa-solid fa-phone"></i><a href="tel:+56 2 2248 7734">+56 2 2248 7734</a></li>
                            <li><i class="fa-solid fa-envelope"></i><a href="mailto:info@spintecnologies.cl">info@spintecnologies.cl</a></li>
                            <!-- <li><i class="fa-solid fa-envelope"></i><a href="mailto:contacto@spintecnologies.cl">contacto@spintecnologies.cl</a></li> -->
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
    <p class="copyright">&copy;
        <?php echo date('Y'); ?>
        Spin Technologies Ltda | Desarrollado por <a href="https://nalaw.cl">Nalaw</a>
    </p>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Own Scripts -->
<script src="<?php echo ($pageTitle !== 'Inicio') ? '../' : '' ?>js/counter.js"></script>
<script src="<?php echo ($pageTitle !== 'Inicio') ? '../' : '' ?>js/slides.js"></script>
<script src="<?php echo ($pageTitle !== 'Inicio') ? '../' : '' ?>js/main.js"></script>