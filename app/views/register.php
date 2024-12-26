<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= style; ?>?v=<?= time(); ?>">
</head>
<body>
    <main>
        <div class="register-container mx-auto align-middle text-center w-100 bg-bs-color-white rounded shadow">
            <div class="w-100 justify-content-center mx-auto">
                <a href="?controller=home&action=index">
                    <img src="<?= logo."_07827ff2-68a6-4dd1-acd3-4a346812c659-Photoroom.png" ?>" alt=" logo de la empresa" height="150px" width="150px">
                </a>
                <h4 class="fw-normal">Bienvenido</h4>
                <p class="fw-light">Create una cuenta para sentir el verdadero sabor de Tres Tacos</p>
            </div>
            <form action="?controller=login&action=try_register" method="POST">
                <!-- Campo de Nombre -->
                <div class="mb-3">
    
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre*" required>
                </div>
                <!-- Campo de Apellido -->
                <div class="mb-3">
    
                    <input type="text" class="form-control" id="surname" name="surname" placeholder="Ingresa tu apellido*" required>
                </div>
                <!-- Campo de Email -->
                <div class="mb-3">
    
                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo*" required>
                </div>
                <!-- Campo de Contraseña -->
                <div class="mb-3">
    
                    <input type="password" class="form-control" id="password" name="password" placeholder="Crea una contraseña*" required>
                </div>
                <!-- Confirmar Contraseña -->
                <div class="mb-3">
    
                    <input type="password" class="form-control" id="confirm-password" name="confirm_password" placeholder="Confirma tu contraseña*" required>
                </div>
                <!-- Botón de Registro -->
                <div class="d-grid">
                    <button type="submit" class="btn bg-bs-color-5 border-0 rounded tx-bs-color-white py-3 fw-light">Crear Cuenta</button>
                </div>
    
                <!-- Mensaje de error -->
                <?php
                    $mensaje = "";
                    if($_GET["err"]){
                        $codigoError=$_GET["err"];
                        $errorIconSvg='<svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm-1.5-5.009c0-.867.659-1.491 1.491-1.491.85 0 1.509.624 1.509 1.491 0 .867-.659 1.509-1.509 1.509-.832 0-1.491-.642-1.491-1.509zM11.172 6a.5.5 0 0 0-.499.522l.306 7a.5.5 0 0 0 .5.478h1.043a.5.5 0 0 0 .5-.478l.305-7a.5.5 0 0 0-.5-.522h-1.655z" fill="black"/></svg>';
                        if (strcmp($codigoError, "2")==0){
                            $mensaje .= "<div class='d-flex gap-2'><div class>$errorIconSvg</div><p>Las contraseñas no coinciden</p></div>";
                        }else if(strcmp($codigoError, "3")==0){
                            $mensaje .= "<div class='d-flex gap-2'><div class>$errorIconSvg</div><p>El usuario ya existe</p></div>";
                        }
                        echo $mensaje;
                    }
                ?>
            </form>
            <!-- Enlace para Iniciar Sesión -->
            <div class="text-center mt-3">
                <p>¿Ya tienes una cuenta? <a href="?controller=home&action=login" class="text-decoration-none">Inicia sesión</a></p>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
