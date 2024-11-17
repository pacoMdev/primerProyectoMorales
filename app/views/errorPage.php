<?php
    http_response_code(500);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titleErrorTitle ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= style; ?>?v=<?= time(); ?>">
</head>
<body>
    <?php include_once("../assets/components/header.php") ?>
    <main class="container py-5">
        <div class="error-container mx-auto m-5">
            <h1 class="error-title"><?= $errorCode ?></h1>
            <h2 class="error-title"><?= $titleErrorCode ?></h2>
            <p class="error-description">
                <?= $descriptionError ?>
            </p>
            <a href="?" class="btn btn-primary mt-3">Volver al Inicio</a>
        </div>

    </main>

    <?php include_once("../assets/components/footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>
</html>



