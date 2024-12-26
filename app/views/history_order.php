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
    <title>Pagina de Configuracion</title>
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
                    <a href="?controller=profile&action=show_history_order" class="nav-link px-4 py-3 tx-bs-color-3 active">
                        <span>
                            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" class="fll-bs-color-3"
                                    d="M10.5431 1.66549C11.4491 1.16212 12.5509 1.16212 13.4569 1.66549L21.4856 6.12589C21.8031 6.30225 22 6.63685 22 7C22 7.00002 22 6.99998 22 7V16.4116C22 17.1379 21.6062 17.8072 20.9713 18.1599L12.5015 22.8653C12.2067 23.0366 11.7933 23.0366 11.4985 22.8653L3.02871 18.1599C2.39378 17.8072 2 17.1379 2 16.4116V7.00005C2.00002 6.6369 2.19691 6.30225 2.51436 6.12589L10.5431 1.66549ZM12.4856 3.41381C12.1836 3.24602 11.8164 3.24602 11.5144 3.41381L9.55918 4.50002L16.5001 8.35606L18.9409 7.00005L12.4856 3.41381ZM5.05913 7.00005L7.50005 5.64397L14.4409 9.50002L12 10.8561L5.05913 7.00005ZM13 20.3005L20 16.4116V8.69956L13 12.5884V20.3005ZM4 8.69956L11 12.5884V20.3005L4 16.4116V8.69956Z"
                                    fill="#000000" />
                            </svg>
                        </span>
                        Mis pedidos
                    </a>
                    <a href="?controller=profile&action=contacta" class="nav-link px-4 py-3 tx-bs-color-3">
                        <span><svg width="25px" height="25px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="icon-md-3" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.5 3C7.8056 3 4.00002 6.80558 4.00002 11.5C4.00002 13.3106 4.56503 14.9863 5.52839 16.3642C5.65702 16.5482 5.72 16.7701 5.70721 16.9942C5.67939 17.4813 5.61054 18.0464 5.4806 18.6961C5.34675 19.3654 5.17843 19.9417 4.99863 20.4321L8.84213 19.4072C9.04566 19.3529 9.26113 19.3643 9.45781 19.4397C10.401 19.8013 11.4262 20 12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3ZM2.28337 21.3026C2.28497 21.3008 2.28815 21.2973 2.2928 21.292C2.30653 21.2764 2.3331 21.2451 2.36973 21.1972C2.44292 21.1015 2.55663 20.939 2.68837 20.7019C2.95112 20.2289 3.28993 19.4515 3.51944 18.3039C3.60229 17.8896 3.65453 17.5251 3.6852 17.2072C2.61921 15.5638 2.00002 13.6029 2.00002 11.5C2.00002 5.70101 6.70103 1 12.5 1C18.299 1 23 5.70101 23 11.5C23 17.299 18.299 22 12.5 22C11.2942 22 10.1339 21.7963 9.05302 21.4208L3.25769 22.9662C2.82058 23.0828 2.35966 22.8914 2.1337 22.4995C1.91001 22.1115 1.97175 21.6227 2.28337 21.3026Z" />
                            </svg></span>
                        Contacta
                    </a>
                    <a href="?controller=profile&action=show_profile" class="nav-link px-4 py-3 tx-bs-color-3">
                        <span>
                            <svg height="25px" width="25px" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve">
                                <path class="icon-md-3" d="M29,17.6c-1.2-0.4-2-1-2-1.6s0.8-1.3,2-1.6c0.5-0.2,0.8-0.7,0.7-1.2c-0.4-1.8-1-3.4-2.1-4.9c-0.3-0.4-0.8-0.6-1.3-0.3
        c-1.1,0.6-2.2,0.7-2.6,0.3c-0.4-0.4-0.3-1.5,0.3-2.6c0.2-0.5,0.1-1-0.3-1.3c-1.5-1-3.2-1.7-4.9-2.1c-0.5-0.1-1,0.2-1.2,0.7
        c-0.4,1.2-1,2-1.6,2s-1.3-0.8-1.6-2c-0.2-0.5-0.7-0.8-1.2-0.7c-1.8,0.4-3.4,1-4.9,2.1C7.8,4.6,7.7,5.2,7.9,5.6
        c0.6,1.1,0.7,2.2,0.3,2.6C7.8,8.6,6.8,8.5,5.6,7.9c-0.5-0.2-1-0.1-1.3,0.3c-1,1.5-1.7,3.2-2.1,4.9c-0.1,0.5,0.2,1,0.7,1.2
        c1.2,0.4,2,1,2,1.6s-0.8,1.3-2,1.6c-0.5,0.2-0.8,0.7-0.7,1.2c0.4,1.8,1,3.4,2.1,4.9c0.3,0.4,0.8,0.6,1.3,0.3
        c1.1-0.6,2.2-0.7,2.6-0.3c0.4,0.4,0.3,1.5-0.3,2.6c-0.2,0.5-0.1,1,0.3,1.3c1.5,1,3.2,1.7,4.9,2.1c0.5,0.1,1-0.2,1.2-0.7
        c0.4-1.2,1-2,1.6-2s1.3,0.8,1.6,2c0.1,0.4,0.5,0.7,1,0.7c0.1,0,0.1,0,0.2,0c1.8-0.4,3.4-1,4.9-2.1c0.4-0.3,0.6-0.8,0.3-1.3
        c-0.6-1.1-0.7-2.2-0.3-2.6c0.4-0.4,1.5-0.3,2.6,0.3c0.5,0.2,1,0.1,1.3-0.3c1-1.5,1.7-3.2,2.1-4.9C29.8,18.3,29.5,17.8,29,17.6z
         M16,23c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S19.9,23,16,23z" />
                            </svg>
                        </span>
                        Tu configuracion
                    </a>
                </div>
            </div>
            <div class="col-md-9 col-lg-10 main-content">
                <h1 class="p-3 fw-semibold fs-3">Historial</h1>
                <?= include_once("../assets/components/table_history_order.php") ?>
            </div>
        </section>
    </main>

    <?php include_once("../assets/components/footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>