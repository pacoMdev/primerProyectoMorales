<?php
    http_response_code(500);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 500</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <?php include_once("../assets/components/header.php") ?>

    <h1>Oops, algo salió mal</h1>
    <p>No podemos conectar a la base de datos en este momento. Por favor, intenta más tarde.</p>

    <?php include_once("../assets/components/footer.php") ?>
</body>
</html>
