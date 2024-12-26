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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integr="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</head>
<body>
    <?php include_once("../assets/components/header.php"); ?>
    <main>
        <section class="container d-flex flex-column">
            <div class="contain">
                <h1 class="fw-bold border-bottom border-danger border-5 d-inline-flex">MENU</h1>
            </div>
            <?= include_once("../assets/components/cardsProductsMenu.php"); ?>
            
        </section>
    </main>

    <?php include_once("../assets/components/footer.php"); ?>

    <script src="../assets/js/script.js?v=1.0"></script>
</body>
</html>