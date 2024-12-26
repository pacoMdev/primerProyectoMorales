<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= style; ?>?v=<?= time(); ?>">

    <style>

        .login-container {
            max-width: 400px;
            padding: 2rem;

        }
    </style>
</head>
<body>
    <main>
        <div class="login-container mx-auto align-middle text-center w-100 bg-bs-color-white rounded shadow">
            <div class="w-100 justify-content-center mx-auto">
                <a href="?controller=home&action=index">
                    <img src="<?= logo."_07827ff2-68a6-4dd1-acd3-4a346812c659-Photoroom.png" ?>" alt=" logo de la empresa" height="150px" width="150px">
                </a>
                <h4 class="fw-normal">Bienvenido</h4>
                <p class="fw-light">Regístrate para sentir el gran sabor de Tres Tacos</p>
            </div>
            <!-- no encuentra el controlador loginController -->
            <form action="?controller=login&action=try_login" method="POST">
                <!-- Campo de Usuario -->
                <div class="mb-3">
                    <!-- <label for="username" class="form-label">Usuario</label> -->
                    <input type="email" class="form-control" id="username" name="username" placeholder="Correo electrónico*" required>
                </div>
                <!-- Campo de Contraseña -->
                <div class="mb-3">
                    <!-- <label for="password" class="form-label">Contraseña</label> -->
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña*" required>
                </div>
    
                <!-- Mensaje de error -->
                <?php
                    $mensaje = "";
                    if($_GET["err"]){
                        $codigoError=$_GET["err"];
                        if (strcmp($codigoError, "1")==0){
                            $errorIconSvg='<svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm-1.5-5.009c0-.867.659-1.491 1.491-1.491.85 0 1.509.624 1.509 1.491 0 .867-.659 1.509-1.509 1.509-.832 0-1.491-.642-1.491-1.509zM11.172 6a.5.5 0 0 0-.499.522l.306 7a.5.5 0 0 0 .5.478h1.043a.5.5 0 0 0 .5-.478l.305-7a.5.5 0 0 0-.5-.522h-1.655z" fill="black"/></svg>';
    
                            $mensaje .= "<div class='d-flex gap-2'><div class>$errorIconSvg</div><p>Correo electrónico o contraseña incorrecta</p></div>";
                            echo $mensaje;
                        }
                    }
                ?>
    
                <!-- Botón de Login -->
                <div class="d-grid">
                    <button type="submit" class="btn bg-bs-color-5 border-0 rounded tx-bs-color-white py-3 fw-light">Iniciar Sesión</button>
                </div>
            </form>
            <!-- Enlace para Registro -->
            <div class="text-center mt-3">
                <p>¿No tienes cuenta? <a href="?controller=home&action=register" class="text-decoration-none">Regístrese</a></p>
            </div>
            <div class="">
                <hr>
                <p>o</p>
                <hr>
            </div>
            <div class="d-flex flex-column gap-2">
                <!-- Botón de Login -->
                <div class="d-grid">
                    <button type="submit" class="btn border py-3 bg-bs-color-white tx-bs-color-black d-flex gap-2 ">
                        <svg width="25px" height="25px" viewBox="-0.5 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            
                            <title>Google-color</title>
                            <desc>Created with Sketch.</desc>
                            <defs>
    
                        </defs>
                            <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Color-" transform="translate(-401.000000, -860.000000)">
                                    <g id="Google" transform="translate(401.000000, 860.000000)">
                                        <path d="M9.82727273,24 C9.82727273,22.4757333 10.0804318,21.0144 10.5322727,19.6437333 L2.62345455,13.6042667 C1.08206818,16.7338667 0.213636364,20.2602667 0.213636364,24 C0.213636364,27.7365333 1.081,31.2608 2.62025,34.3882667 L10.5247955,28.3370667 C10.0772273,26.9728 9.82727273,25.5168 9.82727273,24" id="Fill-1" fill="#FBBC05">
    
                        </path>
                                        <path d="M23.7136364,10.1333333 C27.025,10.1333333 30.0159091,11.3066667 32.3659091,13.2266667 L39.2022727,6.4 C35.0363636,2.77333333 29.6954545,0.533333333 23.7136364,0.533333333 C14.4268636,0.533333333 6.44540909,5.84426667 2.62345455,13.6042667 L10.5322727,19.6437333 C12.3545909,14.112 17.5491591,10.1333333 23.7136364,10.1333333" id="Fill-2" fill="#EB4335">
    
                        </path>
                                        <path d="M23.7136364,37.8666667 C17.5491591,37.8666667 12.3545909,33.888 10.5322727,28.3562667 L2.62345455,34.3946667 C6.44540909,42.1557333 14.4268636,47.4666667 23.7136364,47.4666667 C29.4455,47.4666667 34.9177955,45.4314667 39.0249545,41.6181333 L31.5177727,35.8144 C29.3995682,37.1488 26.7323182,37.8666667 23.7136364,37.8666667" id="Fill-3" fill="#34A853">
    
                        </path>
                                        <path d="M46.1454545,24 C46.1454545,22.6133333 45.9318182,21.12 45.6113636,19.7333333 L23.7136364,19.7333333 L23.7136364,28.8 L36.3181818,28.8 C35.6879545,31.8912 33.9724545,34.2677333 31.5177727,35.8144 L39.0249545,41.6181333 C43.3393409,37.6138667 46.1454545,31.6490667 46.1454545,24" id="Fill-4" fill="#4285F4">
    
                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <p class="p-0 m-0">Continuar con Google</p>
                    </button>
                </div>
                <!-- Botón de Login -->
                <div class="d-grid">
                    <button type="submit" class="btn border py-3 bg-bs-color-white d-flex gap-2">
                        <svg width="25px" height="25px" viewBox="-1.5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>apple [#173]</title>
                            <desc>Created with Sketch.</desc>
                            <defs>
    
                        </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Dribbble-Light-Preview" transform="translate(-102.000000, -7439.000000)" fill="#000000">
                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                        <path d="M57.5708873,7282.19296 C58.2999598,7281.34797 58.7914012,7280.17098 58.6569121,7279 C57.6062792,7279.04 56.3352055,7279.67099 55.5818643,7280.51498 C54.905374,7281.26397 54.3148354,7282.46095 54.4735932,7283.60894 C55.6455696,7283.69593 56.8418148,7283.03894 57.5708873,7282.19296 M60.1989864,7289.62485 C60.2283111,7292.65181 62.9696641,7293.65879 63,7293.67179 C62.9777537,7293.74279 62.562152,7295.10677 61.5560117,7296.51675 C60.6853718,7297.73474 59.7823735,7298.94772 58.3596204,7298.97372 C56.9621472,7298.99872 56.5121648,7298.17973 54.9134635,7298.17973 C53.3157735,7298.17973 52.8162425,7298.94772 51.4935978,7298.99872 C50.1203933,7299.04772 49.0738052,7297.68074 48.197098,7296.46676 C46.4032359,7293.98379 45.0330649,7289.44985 46.8734421,7286.3899 C47.7875635,7284.87092 49.4206455,7283.90793 51.1942837,7283.88393 C52.5422083,7283.85893 53.8153044,7284.75292 54.6394294,7284.75292 C55.4635543,7284.75292 57.0106846,7283.67793 58.6366882,7283.83593 C59.3172232,7283.86293 61.2283842,7284.09893 62.4549652,7285.8199 C62.355868,7285.8789 60.1747177,7287.09489 60.1989864,7289.62485" id="apple-[#173]">
    
                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <p class="p-0 m-0">Continuar con Apple</p>
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
