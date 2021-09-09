<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - BENINISES</title>

    <?php 
      include "sections/stylesheets.php";
    ?>

</head>

<body>
    <?php 
      include "sections/navbar.php";
    ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url('assets/img/Benin2.jpeg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Bienvenue au <span
                                        class="text-muted bg-white">DAHOMEY</span></h2>
                                <p class="animate__animated animate__fadeInUp">Découvrez le Bénin, un pays francophone d'Afrique de l’Ouest, berceau de la religion vaudou, mais aussi le territoire de l'ancien Royaume de Dahomey.</p>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Voir plus</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url('assets/img/Benin3.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Habitations traditionnelles du Nord du Bénin</h2>
                                <p class="animate__animated animate__fadeInUp">Il comporte de nombreux éléments historiques protégés dont les Tatas Sombas, des constructions traditionnelles érigées à des fins de protection contre les prédateurs..</p>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Voir plus</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url('assets/img/Benin7.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Devenir trader professionnel</h2>
                                <p class="animate__animated animate__fadeInUp">Apprendre à trader pour un débutant
                                    implique obligatoirement une formation. Quoiqu'il arrive vous serez obligé de vous
                                    former que ce soit avec un professionnel ou seul devant votre écran de trading.</p>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Voir plus</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                    <span class="sr-only">Precedent</span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->


    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col-hover">
                    <div class="card shadow-sm">
                        <img src="assets/img/Benin11.jpg" alt="" class="cube">

                        <div class="card-body">
                            <h2>Parakou</h2>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">Nord</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-hover">
                    <div class="card shadow-sm">
                        <img src="assets/img/Benin3.jpg" alt="" class="cube">

                        <div class="card-body">
                            <h2>Natitingou</h2>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">Nord</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-hover">
                    <div class="card shadow-sm">
                        <img src="assets/img/Destination-Afrique-lieux-tourisme-au-Benin.jpg" alt="" class="cube">

                        <div class="card-body">
                            <h2>Pendjari</h2>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">Nord</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-hover">
                    <div class="card shadow-sm">
                        <img src="assets/img/culture.jpg" alt="" class="cube">

                        <div class="card-body">
                            <h2>Abomey</h2>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">Centre</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-hover">
                    <div class="card shadow-sm">
                        <img src="assets/img/Benin5.jpg" alt="" class="cube">

                        <div class="card-body">
                            <h2>Kétou</h2>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">Centre</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-hover">
                    <div class="card shadow-sm">
                        <img src="assets/img/.jpg" alt="" class="cube">

                        <div class="card-body">
                            <h2>Savè</h2>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">Centre</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-hover">
                    <div class="card shadow-sm">
                        <img src="assets/img/Benin2.jpeg" alt="" class="cube">

                        <div class="card-body">
                            <h2>Cotonou</h2>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">Sud</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-hover">
                    <div class="card shadow-sm">
                        <img src="assets/img/Benin8.jpg" alt="" class="cube">

                        <div class="card-body">
                            <h2>Ouidah</h2>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">Sud</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-hover">
                    <div class="card shadow-sm">
                        <img src="assets/img/thumb_63_default_blog.jpeg" alt="" class="cube">

                        <div class="card-body">
                            <h2>Porto-Novo</h2>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">Sud</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
      include "sections/footer.php";
      include "sections/script.php";
    ?>
</body>

</html>