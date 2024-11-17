<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="<?= style; ?>?v=<?= time(); ?>">

        <title>Cart - Tres Tacos</title>
    </head>
    <body>
        <?php include_once("../assets/components/header.php") ?>

        <section class="container">
            <div class="row row-col-3 gap-3">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                </div>
            </div>
        </section>


        <?php include_once("../assets/components/footer.php") ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous">
        </script>
    </body>
</html>