<?php
    $title="Contact";
    require_once('_header.php');
?>

<main>
    <!-- fil d'ariane -->
    <section class="mt-2 mb-5">
        <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" title="Accueil">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>  
        </div>
    </section>
    <!-- nous contacter -->
    <section class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 offset-md-4">
                    <h1 class="text-center mb-5">Nous Contacter</h1>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" placeholder="Votre nom ...">
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" placeholder="Votre prénom ...">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Votre adresse mail ...">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea name="message" id="message" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Envoyer</button>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    require_once('_footer.php');
?>