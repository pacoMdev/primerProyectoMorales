<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form action="?controller=profile&action=update_data" method="POST" class="p-4 form-user">
        <!-- Campo de Nombre -->
        <div class="mb-3">
            <label for="name" class="form-lavel">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Admin" class=" form-control">
        </div>
        <!-- Campo de Apellido -->
        <div class="mb-3">
            <label for="surname">Apellido:</label>
            <input type="text" class="form-control" id="surname" name="surname" placeholder="THOR">
        </div>
        <!-- Campo de Email -->
        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="admin@admin.com" disabled>
        </div>
        <!-- Campo de Contraseña -->
        <div class="mb-3">
            <label for="password">Introduce una contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="admin">
            <a href="#" class="text-decoration-none text-danger mt-2 d-block">Mi contraseña</a>

        </div>
        <!-- Confirmar Contraseña -->
        <div class="mb-3">
            <label for=" confirm-password">Introduce la misma contrsaseña:</label>
            <input type="password" class="form-control" id="confirm-password" name="confirm_password"
                placeholder="admin">
        </div>
        <!-- Confirmar Phone -->
        <div class="mb-3">
            <label for="phone">Telefono:</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="">
        </div>
        <!-- Confirmar Direccion -->
        <div class="mb-3">
            <label for="direccion">Direccion:</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="">
        </div>
        <!-- Confirmar Poblacion -->
        <div class="mb-3">
            <label for="poblacion">Poblacion:</label>
            <input type="text" class="form-control" id="poblacion" name="poblacion" placeholder="">
        </div>
        <!-- Confirmar Ciudad -->
        <div class="mb-3">
            <label for="ciudad">Ciudad:</label>
            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="">
        </div>
        <!-- Botón de Actualizar -->
        <div class="d-grid">
            <button type="submit" class="btn bg-bs-color-5 border-0 rounded tx-bs-color-white py-3 fw-light">Actualizar
                datos</button>
        </div>

        <!-- Mensaje de error -->
        <?php
        $mensaje = "";
        if ($_GET["err"]) {
            $codigoError = $_GET["err"];
            $errorIconSvg = '<svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm-1.5-5.009c0-.867.659-1.491 1.491-1.491.85 0 1.509.624 1.509 1.491 0 .867-.659 1.509-1.509 1.509-.832 0-1.491-.642-1.491-1.509zM11.172 6a.5.5 0 0 0-.499.522l.306 7a.5.5 0 0 0 .5.478h1.043a.5.5 0 0 0 .5-.478l.305-7a.5.5 0 0 0-.5-.522h-1.655z" fill="black"/></svg>';
            if (strcmp($codigoError, "2") == 0) {
                $mensaje .= "<div class='d-flex gap-2'><div class>$errorIconSvg</div><p>Las contraseñas no coinciden</p></div>";
            } else if (strcmp($codigoError, "3") == 0) {
                $mensaje .= "<div class='d-flex gap-2'><div class>$errorIconSvg</div><p>El usuario ya existe</p></div>";
            }
            echo $mensaje;
        }
        ?>
    </form>
</body>

</html>