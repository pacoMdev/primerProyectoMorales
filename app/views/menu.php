<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Tres Tacos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= style; ?>?v=<?= time(); ?>">
</head>
<body>
    <?php include_once("header.php"); ?>

    <section class="container">
        <h1 class="fw-bold border-bottom border-danger border-5 d-inline-flex">MENU</h1>
        <div class="container">

        </div>
        <div class="row row-col-3 gap-4">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 container-sm card border-0" style="width: 300px;">
                <img src="<?= image."0f963fc1-f4d5-4e06-9d52-34bfaf640fe7-Photoroom.webp"; ?>" height="90%" width="100%" class="card-img-top" alt="imagen del producto">
                <div class="card-body">
                    <h5 class="card-title fw-bold fs-4">Tres tacos</h5>
                    <p class="card-text fw-lighter fs-6">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="container d-flex justify-content-center">
                        <p class="fw-3 fs-2">8.75€</p>
                        <div class="container d-flex">
                            <svg class="icono-header-medium border border-circle border-2" type="button" width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12L18 12" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p>0</p>
                            <svg class="icono-header-medium border border-circle border-2" type="button" fill="#000000" width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 11h7a1 1 0 0 1 0 2h-7v7a1 1 0 0 1-2 0v-7H4a1 1 0 0 1 0-2h7V4a1 1 0 0 1 2 0v7z"/>
                            </svg>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
    </section>

    <?php //include_once("footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integr="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>
</html>