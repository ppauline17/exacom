<?php
    require_once('_head.php');
?>

<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <!-- logo -->
            <a href="index.php" title="Accueil">
                <img class="logo" src="img/exacom.png" alt="Logo exacom">
            </a>
            <!--  -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if($title=="Accueil"){ echo "active";}?>" href="index.php" title="Accueil">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($title=="Présentation"){ echo "active";}?>" href="presentation.php" title="Présentation">Présentation</a>
                    </li>
                        <li class="nav-item">
                    <a class="nav-link <?php if($title=="Galerie"){ echo "active";}?>" href="galerie.php" title="Galerie">Galerie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($title=="Contact"){ echo "active";}?>" href="contact.php"  title="Contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>