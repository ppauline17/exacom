<?php
    $title="Accueil";
    require_once('_header.php');
?>

<main class="accueil">
    <!-- Carousel -->
    <section class="mb-5">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/slider-1.jpg" class="d-block w-100" alt="image ordinateur">
                </div>
                <div class="carousel-item">
                <img src="img/slider-2.jpg" class="d-block w-100" alt="femme qui écrit">
                </div>
                <div class="carousel-item">
                <img src="img/slider-3.jpg" class="d-block w-100" alt="quelqu'un qui travaille sur un ordinateur">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- titre -->
    <section class="mb-5">
        <div class="container">
            <h1 class="text-center">L'Agence Digitale</h1>
            <h1 class="text-center">au plus près de vos besoins</h1>
        </div>
    </section>
    <!-- cards -->
    <section class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="galerie.php" title="Galerie">
                        <div class="card mb-3">
                            <img src="img/slider-1.jpg" class="card-img-top" alt="image ordinateur">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="galerie.php" title="Galerie">
                        <div class="card mb-3">
                            <img src="img/slider-2.jpg" class="card-img-top" alt="femme qui écrit">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="galerie.php" title="Galerie">
                        <div class="card mb-3">
                            <img src="img/slider-3.jpg" class="card-img-top" alt="quelqu'un qui travaille sur un ordinateur">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    require_once('_footer.php');
?>