<?php
    $title="Galerie";
    require_once('_header.php');
?>

<main class="galerie">
    <!-- fil d'ariane -->
    <section class="mt-2 mb-5">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" title="Accueil">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Galerie</li>
                </ol>
            </nav>  
        </div>
    </section>
    <!-- galerie -->
    <section class="mb-5">
        <div class="container">
            <h1 class="text-center mb-5">Galerie</h1>
            <div class="row">
                <div class="col-lg-3">
                    <a data-fancybox="gallery" href="img/slider-1.jpg">
                        <img src="img/slider-1.jpg" class="img-fluid rounded mb-3" alt="image ordinateur">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a data-fancybox="gallery" href="img/slider-2.jpg">
                        <img src="img/slider-2.jpg" class="img-fluid rounded mb-3" alt="femme qui écrit">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a data-fancybox="gallery" href="img/slider-3.jpg">
                        <img src="img/slider-3.jpg" class="img-fluid rounded mb-3" alt="quelqu'un qui travaille sur un ordinateur">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a data-fancybox="gallery" href="img/slider-1.jpg">
                        <img src="img/slider-1.jpg" class="img-fluid rounded mb-3" alt="image ordinateur">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <a data-fancybox="gallery" href="img/slider-2.jpg">
                        <img src="img/slider-2.jpg" class="img-fluid rounded mb-3" alt="femme qui écrit">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a data-fancybox="gallery" href="img/slider-3.jpg">
                        <img src="img/slider-3.jpg" class="img-fluid rounded mb-3" alt="quelqu'un qui travaille sur un ordinateur">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a data-fancybox="gallery" href="img/slider-1.jpg">
                        <img src="img/slider-1.jpg" class="img-fluid rounded mb-3" alt="image ordinateur">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a data-fancybox="gallery" href="img/slider-2.jpg">
                        <img src="img/slider-2.jpg" class="img-fluid rounded mb-3" alt="femme qui écrit">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <a data-fancybox="gallery" href="img/slider-3.jpg">
                        <img src="img/slider-3.jpg" class="img-fluid rounded mb-3" alt="quelqu'un qui travaille sur un ordinateur">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a data-fancybox="gallery" href="img/slider-1.jpg">
                        <img src="img/slider-1.jpg" class="img-fluid rounded mb-3" alt="image ordinateur">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a data-fancybox="gallery" href="img/slider-2.jpg">
                        <img src="img/slider-2.jpg" class="img-fluid rounded mb-3" alt="femme qui écrit">
                    </a>
                </div>
                <div class="col-lg-3">
                    <a data-fancybox="gallery" href="img/slider-3.jpg">
                        <img src="img/slider-3.jpg" class="img-fluid rounded mb-3" alt="quelqu'un qui travaille sur un ordinateur">
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    require_once('_footer.php');
?>