<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check out - Tres Tacos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= style; ?>?v=<?= time(); ?>">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</head>

<body>
    <?= include_once("../assets/components/header.php"); ?>
    <main>
        <section class="bg-bs-color-8 w-100 py-5">
            <div class="container">
                <div class="row gx-3">
                    <div class="col-12 col-lg-5 py-1">
                    <?= include_once("../assets/components/formCheckout.php") ?>
    
                    </div>
                    <div class="col-12 col-lg-7 py-1">
                        <?php include_once("../assets/components/tableCheckOut.php"); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?= include_once("../assets/components/footer.php"); ?>

    <script src="http://localhost/primerProyectoMorales/assets/js/script.js"></script>


</body>

</html>