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
                <img src="<?= image . "delicious-tacos.jpg"; ?>" class="d-block w-100" alt="Plato de tacos"
                    height="650px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= image . "delicious-nachos.jpg"; ?>" class="d-block w-100" alt="Plato de nachos"
                    height="650px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= image . "delicious-burritos.png"; ?>" class="d-block w-100" alt="Plato de burritos"
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
            <a class="d-flex align-items-center justify-content-center nav-link w-auto border rounded-pill py-1 px-4" href="#">
                <p class="align-center">ver todo</p>
                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
            </a>
        </div>
        <div class="row gx-0 justify-content-center gap-4 p-4">
            <a href="" class="card nav-link shadow border-0 w-25" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title fs-3 w-auto fw-bold">Quesadillas</h5>
                    <p class="card-text border-bottom border-2 border-danger w-auto fw-bold d-inline-flex">8.75€</p>
                </div>
                <img src="<?= image."0f963fc1-f4d5-4e06-9d52-34bfaf640fe7-Photoroom.png" ?>" class="card-img-top w-100 h-90" alt="imagen producto destacado">
            </a>
            <a href="" class="col-sm-6 card nav-link shadow border-0 w-25" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title fs-3 w-auto fw-bold">Quesadillas</h5>
                    <p class="card-text border-bottom border-2 border-danger w-auto fw-bold d-inline-flex">8.75€</p>
                </div>
                <img src="<?= image."41439faf-a2e2-4bb3-b28f-901fd8376e36-Photoroom.png" ?>" class="card-img-top w-100 h-90" alt="imagen producto destacado">
            </a>
            <a href="" class="col-sm-6 card nav-link shadow border-0 w-25" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title fs-3 w-auto fw-bold">Quesadillas</h5>
                    <p class="card-text border-bottom border-2 border-danger w-auto fw-bold d-inline-flex p-0">8.75€</p>
                </div>
                <img src="<?= image."tacos-png-fondo-transparente_484256-1076-Photoroom.png" ?>" class="card-img-top w-100 p-4" alt="imagen producto destacado">
            </a>
        </div>
    </section>
    <section class="w-100 bg-linear-gradient">
        <video src="<?= media."4970524-uhd_4096_2160_30fps.mp4";?>" width="100%" height="650px" class="z-n1">
            <div class="container-fluid">
                <p class="border-4 border-bottom border-danger">VALORES</p>
                <h1 class=" fs-1 fw-boold">Frescos y preparados en el momento</h1>
            </div>
        </video>
    </section>
    <section class="sm-2 bg-sb-color-8">

    </section>
    <section class="sm-2 bg-sb-color-8">

    </section>

    <?php include_once("footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <? include_once("footer.php") ?>
</body>

</html>