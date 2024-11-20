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
<body class="d-flex flex-column">
    <?php 
        // session_start();
    ?>
    <?php include_once("../assets/components/header.php") ?>
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
                <img src="<?= image . "delicious-tacos.webp"; ?>" class="d-block w-100 object-fit-cover" alt="Plato de tacos"
                    height="650px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= image . "delicious-nachos.webp"; ?>" class="d-block w-100 object-fit-cover" alt="Plato de nachos"
                    height="650px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= image . "delicious-burritos.webp"; ?>" class="d-block w-100 object-fit-cover" alt="Plato de burritos"
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
            <a class="d-flex align-items-center justify-content-center nav-link w-auto border rounded-pill py-1 px-4 border-color-7 icon-medium-3 tx-bs-color-3 gap-2" href="?controller=home&action=menu">
                <p class="align-center m-0">ver todo</p>
                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
            </a>
        </div>
        <div class="row row-col-3 gap-4 p-4 justify-content-center">
            <?php include("../assets/components/cardProductDestacado.php")?>
            <?php include("../assets/components/cardProductDestacado.php")?>
            <?php include("../assets/components/cardProductDestacado.php")?>
            <?php include("../assets/components/cardProductDestacado.php")?>
        </div>
    </section>
    <section class="video-container w-100 h-100 overflow-hidden position-relative">
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
    </section>
    <section class="row row-col-3 w-100 m-0 text-center bg-bs-color-8 justify-content-center">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 w-50 px-10">
            <div class="collapsible-container" data-bs-toggle="collapse" data-bs-target="#textContent">
                <div class="d-flex w-100 justify-content-between">
                    <div class="container w-100 justify-content-between">
                        <p class="tx-bs-color- fs-6 m-0 w-auto d-inline-flex">TEXTO</p>
                        <p class="tb-bs-color-black fs-4 m-0 w-auto d-inline-flex">Dias</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" height="25px" width="25px" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                </div>
                <div class="collapse" id="textContent">
                    <p class="mb-0">Este es el segundo texto (aparece al hacer clic).</p>
                </div>
        </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 w-50 px-10 tx-left">
            <h1 class="tx-bs-color-5 fs-normal-56 fw-bold">Sabor intenso</h1>
            <p class="tx-bs-color-3 ts-1"> En Tres Tacos, nos enorgullece ofrecer una experiencia gastronómica única basada en la calidad y frescura de nuestros productos. Todos nuestros ingredientes son 100% naturales y cuidadosamente seleccionados, asegurando que cada plato esté lleno de sabor auténtico.</p>
        </div>
    </section>

    <?php include_once("../assets/components/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>

</html>