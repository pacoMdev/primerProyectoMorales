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
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="login-container mx-auto align-middle text-center">
        <div class="w-100 justify-content-center mx-auto">
            <a href="?controller=home&action=index">
                <img src="<?= logo."_07827ff2-68a6-4dd1-acd3-4a346812c659-Photoroom.png" ?>" alt=" logo de la empresa" height="150px" width="150px">
            </a>

            <h4 class="fw-normal">Bienvenido</h4>

            <p class="fw-light">Regístrate para sentir el sabor de Tres Tacos</p>
        </div>
        <h2 class="text-center mb-4">Iniciar Sesión</h2>
        <form action="process_login.php" method="POST">
            <!-- Campo de Usuario -->
            <div class="mb-3">
                <!-- <label for="username" class="form-label">Usuario</label> -->
                <input type="text" class="form-control" id="username" name="username" placeholder="Correo electrónico*" required>
            </div>
            <!-- Campo de Contraseña -->
            < class="mb-3">
                <!-- <label for="password" class="form-label">Contraseña</label> -->
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña*" required>
            </div>
            <!-- Botón de Login -->
            <div class="d-grid">
                <button type="submit" class="btn bg-bs-color-5 border-0 rounded tx-bs-color-white py-3 fw-light">Iniciar Sesión</button>
            </div>
        </form>
        <!-- Enlace para Registro -->
        <div class="text-center mt-3">
            <p>¿No tienes cuenta? <a href="?controller=home&action=register" class="text-decoration-none">Regístrese</a></p>
        </div>
        <p>o</p>
        <div class="d-flex flex-column gap-2">
            <!-- Botón de Login -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary py-2">Iniciar Sesión</button>
            </div>
            <!-- Botón de Login -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary py-2">Iniciar Sesión</button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
