<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= style; ?>?v=<?= time(); ?>">

    <title>Tres tacos</title>
</head>

<body>
    <?php include_once("header.php") ?>

    <section id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= image . "delicious-tacos.jpg"; ?>" class="d-block w-100 object-fit-cover" alt="Plato de tacos"
                    height="650px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= image . "delicious-nachos.jpg"; ?>" class="d-block w-100 object-fit-cover" alt="Plato de nachos"
                    height="650px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= image . "delicious-burritos.png"; ?>" class="d-block w-100 object-fit-cover" alt="Plato de burritos"
                    height="650px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
    </section>



    <section class="container px-4 text-center p-4">
        <div class="row justify-content-between">
            <h2 class="border-bottom border-4 border-danger w-auto fw-bold">Productos destacados</h2>
            <a class="d-flex align-items-center justify-content-center nav-link w-auto border rounded-pill py-1 px-4 border-color-7 icon-medium-3 tx-bs-color-3 gap-2" href="#">
                <p class="align-center m-0">ver todo</p>
                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
            </a>
        </div>
        <div class="row row-col-3 gap-4 p-4 justify-content-center">
            <a href="" class="col-12 col-sm-6 col-md-4 col-lg-3 card nav-link shadow border-0" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title fs-3 w-auto fw-bold">Quesadillas</h5>
                    <p class="card-text border-bottom border-2 border-danger w-auto fw-bold d-inline-flex">8.75€</p>
                </div>
                <img src="<?= image."0f963fc1-f4d5-4e06-9d52-34bfaf640fe7-Photoroom.png" ?>" class="card-img-top w-100 h-90" alt="imagen producto destacado">
            </a>
            <a href="" class="col-12 col-sm-6 col-md-4 col-lg-3 card nav-link shadow border-0" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title fs-3 w-auto fw-bold">Quesadillas</h5>
                    <p class="card-text border-bottom border-2 border-danger w-auto fw-bold d-inline-flex">8.75€</p>
                </div>
                <img src="<?= image."0f963fc1-f4d5-4e06-9d52-34bfaf640fe7-Photoroom.png" ?>" class="card-img-top w-100 h-90" alt="imagen producto destacado">
            </a>
            <a href="" class="col-12 col-sm-6 col-md-4 col-lg-3 card nav-link shadow border-0" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title fs-3 w-auto fw-bold">Quesadillas</h5>
                    <p class="card-text border-bottom border-2 border-danger w-auto fw-bold d-inline-flex">8.75€</p>
                </div>
                <img src="<?= image."0f963fc1-f4d5-4e06-9d52-34bfaf640fe7-Photoroom.png" ?>" class="card-img-top w-100 h-90" alt="imagen producto destacado">
            </a>
            <a href="" class="col-12 col-sm-6 col-md-4 col-lg-3 card nav-link shadow border-0" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title fs-3 w-auto fw-bold">Quesadillas</h5>
                    <p class="card-text border-bottom border-2 border-danger w-auto fw-bold d-inline-flex">8.75€</p>
                </div>
                <img src="<?= image."0f963fc1-f4d5-4e06-9d52-34bfaf640fe7-Photoroom.png" ?>" class="card-img-top w-100 h-90" alt="imagen producto destacado">
            </a>
        </div>
    </section>
    <div class="video-container w-100 h-100 overflow-hidden position-relative">
        <video autoplay muted loop height="650px" width="100%" class="object-fit-cover">
            <source src="<?= media."4970524-uhd_4096_2160_30fps.mp4";?>" type="video/mp4">
            Tu navegador no soporta la reproducción de video.
        </video>
        
        <!-- Overlay con el degradado -->
        <div class="bg-linear-gradient position-absolute top-0 left-0 w-100 h-100"></div>
        
        <!-- Contenido encima del video -->
        <div class="position-absolute top-50 start-50 translate-middle text-white text-left">
            <p class="border-4 border-bottom border-danger w-auto d-inline-flex">VALORES</p>
            <h1 class=" fs-88 fw-bold">Frescos y preparados en el momento</h1>
        </div>
    </div>
    <section class="row row-col-3 w-100 m-0 text-center bg-bs-color-8">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-0">
            <div class="row">
                <h1 class="m-0 p-0 w-auto d-inline-flex">HORARIO</h1>
                <div class="row w-75">
                    <button class="d-flex w-100 justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#contenidoDias" aria-expanded="false" aria-controls="contenidoDias">
                        <div class="container w-100 justify-content-between">
                            <p class="tx-bs-color- fs-6 m-0 w-auto d-inline-flex">TEXTO</p>
                            <p class="tb-bs-color-black fs-4 m-0 w-auto d-inline-flex">Dias</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="25px" width="25px" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                    </button>
                    <p class="collapse" id="contenidoDias">
                        Abierto de Lunes a Domingo
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 w-50">
            <h1 class="tx-bs-color-5 fs-normal-56 fw-bold">Sabor intenso</h1>
            <p class="tx-bs-color-3 ts-1"> En Tres Tacos, nos enorgullece ofrecer una experiencia gastronómica única basada en la calidad y frescura de nuestros productos. Todos nuestros ingredientes son 100% naturales y cuidadosamente seleccionados, asegurando que cada plato esté lleno de sabor auténtico.</p>
        </div>
    </section>

    <?php //include_once("footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>

</html>