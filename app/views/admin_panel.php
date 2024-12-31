<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titleErrorTitle ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?= style; ?>?v=<?= time(); ?>">
    
    <title>Pagina de admin</title>
</head>

<body>
    <?php
    include_once("../assets/components/header.php");
    ?>
    <main>
        <section class="row w-100 h-100 p-0 m-0 d-flex">
            <div class="col-md-3 col-lg-2 sidebar border-end">
                <div class="profile-header gap-3 text-center d-flex flex-column gap-4 border-bottom p-3">
                    <div class="avatar3 mx-auto fs-1"><?= $iniciales ?></div>
                    <div>
                        <h5 class="fw-semibold fs-6"><?= $name . " " . $surname ?></h5>
                        <p class="fw-light tx-bs-color-3"><?= $email ?></p>
                    </div>
                </div>
                <div class="nav flex-column">
                    <button type="button" class="nav-link px-4 py-3 tx-bs-color-3" id="btnCreate">
                        Create
                    </button>
                    <button type="button" class="nav-link px-4 py-3 tx-bs-color-3 active" id="btnRead">
                        Read
                    </button>
                    <button type="button" class="nav-link px-4 py-3 tx-bs-color-3" id="btnLogHistory">
                        Log History
                    </button>
                </div>
            </div>
            <div class="col-md-9 col-lg-10 main-content">
                <h1 class="p-3 fw-semibold fs-3">Admin panel</h1>
                <div id="container_data_admin">
    
                </div>
            </div>
        </section>
    </main>

    <?php include_once("../assets/components/footer.php") ?>

    <script src="../assets/js/admin_panel.js?v=1.0.5"></script>
    <!-- <script src="../assets/js/app.js?v=1.0"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>
</html>