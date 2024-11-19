<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= style; ?>?v=<?= time(); ?>">

    <style>

        .register-container {
            width: 100%;
            max-width: 500px;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="register-container mx-auto align-middle text-center w-100 bg-bs-color-white rounded shadow">
        <h2 class="text-center mb-4">Regístrate</h2>
        <div class="w-100 justify-content-center mx-auto">
            <a href="?controller=home&action=index">
                <img src="<?= logo."_07827ff2-68a6-4dd1-acd3-4a346812c659-Photoroom.png" ?>" alt=" logo de la empresa" height="150px" width="150px">
            </a>
            <h4 class="fw-normal">Bienvenido</h4>
            <p class="fw-light">Create una cuenta para sentir el verdadero sabor de Tres Tacos</p>
        </div>
        <form action="?controller=user&action=try_register" method="POST">
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
        </form>
        <!-- Enlace para Iniciar Sesión -->
        <div class="text-center mt-3">
            <p>¿Ya tienes una cuenta? <a href="?controller=home&action=login" class="text-decoration-none">Inicia sesión</a></p>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
