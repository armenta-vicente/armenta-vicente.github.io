<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Vicente Armenta, Samsung SDS Mexico">
    <link rel="shortcut icon" href="/images/favicon.ico">
    <title>Contaduria DLD</title>
    <link rel="stylesheet" href="public/mdbootstrap-6.3.0/css/mdb.min.css"/>
    <link rel="stylesheet" href="public/fontawesome-6.4.0-web/css/all.css"/>
</head>
<body>
<!--Main Navigation-->
<header>
    <style>
        /* Carousel styling */
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
            height: 100vh;
        }

        .carousel-item:nth-child(1) {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(2) {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(3) {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #introCarousel {
                margin-top: -58.59px;
            }
        }

        .navbar .nav-link {
            color: #fff !important;
        }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000">
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand nav-link" target="_blank" href="https://mdbootstrap.com/docs/standard/">
                <strong>Contaduría DLD</strong>
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
                    aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>

                <ul class="navbar-nav list-inline">
                    <!-- Icons -->
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/contaduria.dld" rel="nofollow" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://twitter.com/" rel="nofollow" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://wa.me/message/7BJLCCXJ2GAHM1" rel="nofollow" target="_blank">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Carousel wrapper -->
    <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
            <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
            <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
        </ol>

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <video style="min-width: 100%; min-height: 100%" playsinline autoplay muted loop>
                    <source class="h-100" src="/videos/accounting02.mp4" type="video/mp4"/>
                </video>
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.3)">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white text-center">
                            <h1 class="mb-3">Contaduría DLD</h1>
                            <h5 class="mb-4">Soluciones contables y financieras para tu empresa.</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <video style="min-width: 100%; min-height: 100%" playsinline autoplay muted loop>
                    <source class="h-100" src="/videos/accounting01.mp4" type="video/mp4"/>
                </video>
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.3)">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white text-center">
                            <h2>Profesionales contables a tu alcance.</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <video style="min-width: 100%; min-height: 100%" playsinline autoplay muted loop>
                    <source class="h-100" src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
                </video>
                <div class="mask" style="background: rgba(0, 0, 0, 0.3)">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white text-center">
                            <h2>y aqui puedo poner algo mas</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Carousel wrapper -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main class="mt-5">
    <div class="container">
        <!--Section: Content-->
        <section>
            <div class="row">
                <div class="col-md-6 gx-5 mb-4">
                    <div class="bg-image hover-zoom ripple shadow-2-strong" data-mdb-ripple-color="light">
                        <img src="/images/image03.webp" class="img-fluid" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 gx-5 mb-4">
                    <h4><strong>Facilis consequatur eligendi</strong></h4>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                        consequatur eligendi quisquam doloremque vero ex debitis
                        veritatis placeat unde animi laborum sapiente illo possimus,
                        commodi dignissimos obcaecati illum maiores corporis.
                    </p>
                    <p><strong>Doloremque vero ex debitis veritatis?</strong></p>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
                        itaque voluptate nesciunt laborum incidunt. Officia, quam
                        consectetur. Earum eligendi aliquam illum alias, unde optio
                        accusantium soluta, iusto molestiae adipisci et?
                    </p>
                </div>
            </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5"/>

        <!--Section: Pricing-->
        <section class="text-center">
            <h4 class="mb-4"><strong>Pricing</strong></h4>

            <div class="btn-group mb-4" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary active">Monthly billing</button>
                <button type="button" class="btn btn-primary">
                    Annual billign <small>(2 months FREE)</small>
                </button>
            </div>

            <div class="row gx-lg-5">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">
                    <!-- Card -->
                    <div class="card">

                        <div class="card-header bg-white py-3">
                            <p class="text-uppercase small mb-2"><strong>Free</strong></p>
                            <h5 class="mb-0">Free</h5>
                        </div>

                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Feature</li>
                                <li class="list-group-item">Feature</li>
                                <li class="list-group-item">Feature</li>
                            </ul>
                        </div>

                        <div class="card-footer bg-white py-3">
                            <button type="button" class="btn btn-success btn-sm">Get it</button>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">
                    <!-- Card -->
                    <div class="card border border-primary">

                        <div class="card-header bg-white py-3">
                            <p class="text-uppercase small mb-2"><strong>Essential</strong></p>
                            <h5 class="mb-0">$19/month</h5>
                        </div>

                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Feature</li>
                                <li class="list-group-item">Feature</li>
                                <li class="list-group-item">Feature</li>
                                <li class="list-group-item">Feature</li>
                            </ul>
                        </div>

                        <div class="card-footer bg-white py-3">
                            <button type="button" class="btn btn-primary btn-sm">Buy now</button>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-header bg-white py-3">
                            <p class="text-uppercase small mb-2"><strong>Advanced</strong></p>
                            <h5 class="mb-0">$49/month</h5>
                        </div>

                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Feature</li>
                                <li class="list-group-item">Feature</li>
                                <li class="list-group-item">Feature</li>
                                <li class="list-group-item">Feature</li>
                                <li class="list-group-item">Feature</li>
                            </ul>
                        </div>

                        <div class="card-footer bg-white py-3">
                            <button type="button" class="btn btn-info btn-sm">Buy now</button>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">
                    <!-- Card -->
                    <div class="card">

                        <div class="card-header bg-white py-3">
                            <p class="text-uppercase small mb-2"><strong>Enterprise</strong></p>
                            <h5 class="mb-0">$189/month</h5>
                        </div>

                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Feature</li>
                                <li class="list-group-item">Feature</li>
                                <li class="list-group-item">Feature</li>
                                <li class="list-group-item">Feature</li>
                                <li class="list-group-item">Feature</li>
                                <li class="list-group-item">Feature</li>
                            </ul>
                        </div>

                        <div class="card-footer bg-white py-3">
                            <button type="button" class="btn btn-info btn-sm">Buy now</button>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!--Grid column-->

            </div>
        </section>
        <!--Section: Pricing-->

        <hr class="my-5"/>

        <!--Section: Content-->
        <section class="text-center">
            <h4 class="mb-5"><strong>Facilis consequatur eligendi</strong></h4>
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                            <img src="/images/image01.jpg" class="img-fluid"/>
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make
                                up the bulk of the card's content.
                            </p>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                            <img src="/images/image02.jpg" class="img-fluid"/>
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make
                                up the bulk of the card's content.
                            </p>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                            <img src="/images/image04.jpg" class="img-fluid"/>
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make
                                up the bulk of the card's content.
                            </p>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Section: Content-->
    </div>
</main>
<!--Main layout-->

<!--Footer-->
<footer class="bg-light text-lg-start">

    <hr class="m-0"/>

    <div class="text-center py-4 align-items-center">
        <p>Siguenos en redes sociales</p>
        <a href="https://www.facebook.com/contaduria.dld" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com/" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://wa.me/message/7BJLCCXJ2GAHM1" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2023 Copyright:
        <a class="text-dark" href="https://vicentearmenta.com/">Servicios Digitales e Innovación</a>
    </div>
</footer>
<!--Footer-->
<script src="public/mdbootstrap-6.3.0/js/mdb.min.js" type="text/javascript"></script>
<script src="public/jquery-3.7.0.min.js" type="text/javascript"></script>
<script>
    $( document ).ready(function() {
        new WOW().init();
    });
</script>
</body>
</html>
