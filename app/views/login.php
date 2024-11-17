<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        } */
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
    <div class="login-container">
        <h2 class="text-center mb-4">Iniciar Sesión</h2>
        <form action="process_login.php" method="POST">
            <!-- Campo de Usuario -->
            <div class="mb-3">
                <label for="username" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Ingresa tu usuario" required>
            </div>
            <!-- Campo de Contraseña -->
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" required>
            </div>
            <!-- Botón de Login -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </div>
        </form>
        <!-- Enlace para Registro -->
        <div class="text-center mt-3">
            <a href="?controller=home&action=register" class="text-decoration-none">¿No tienes cuenta? Regístrate</a>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
