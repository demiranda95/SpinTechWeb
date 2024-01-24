<header>
    <div class="navContainer">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.html">
                    <img src="<?php echo ($pageTitle !== 'Inicio') ? '../' : '' ?>assets/img/logos/Grupo SpinTechnologies White.png"
                        alt="Logo" width="30" height="24" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav txt-white">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($pageTitle === 'Inicio') ? 'active' : '' ?>"
                                href="<?php echo ($pageTitle !== 'Inicio') ? '../' : '' ?>index.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo ($pageTitle === 'Acerca') ? 'active' : '' ?>"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Acerca</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href="<?php echo ($pageTitle !== 'Inicio') ? '../' : '' ?>pages/about.php">¿Quienes
                                        somos?</a></li>
                                <li><a class="dropdown-item"
                                        href="<?php echo ($pageTitle !== 'Inicio') ? '../' : '' ?>pages/experience.php">Experiencia</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo ($pageTitle === 'Equipos') ? 'active' : '' ?>"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Equipos</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href="<?php echo ($pageTitle !== 'Inicio') ? '../' : '' ?>pages/underground.php">Minería
                                        Subterránea</a></li>
                                <li><a class="dropdown-item"
                                        href="<?php echo ($pageTitle !== 'Inicio') ? '../' : '' ?>pages/processing.php">Procesamiento
                                        Mineral</a>
                                </li>
                                <hr class="dropdown-divider" />
                                <li><a class="dropdown-item"
                                        href="<?php echo ($pageTitle !== 'Inicio') ? '../' : '' ?>pages/catalog.php">Catalogo</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($pageTitle === 'Contacto') ? 'active' : '' ?>"
                                href="<?php echo ($pageTitle !== 'Inicio') ? '../' : '' ?>pages/contact.php">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>