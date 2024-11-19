<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="register-container mx-auto">
        <h2 class="text-center mb-4">Regístrate</h2>
        <form action="process_register.php" method="POST">
            <!-- Campo de Nombre -->
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre" required>
            </div>
            <!-- Campo de Apellido -->
            <div class="mb-3">
                <label for="surname" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="surname" name="surname" placeholder="Ingresa tu apellido" required>
            </div>
            <!-- Campo de Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo" required>
            </div>
            <!-- Campo de Contraseña -->
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Crea una contraseña" required>
            </div>
            <!-- Confirmar Contraseña -->
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirmar Contraseña</label>
                <input type="password" class="form-control" id="confirm-password" name="confirm_password" placeholder="Confirma tu contraseña" required>
            </div>
            <!-- Botón de Registro -->
            <div class="d-grid">
                <button type="submit" class="btn btn-success">Crear Cuenta</button>
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
