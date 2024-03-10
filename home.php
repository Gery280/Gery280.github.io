<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>

    <?php
        // Iniciar sesión
        session_start();

        // Verificar si el usuario ha iniciado sesión
        if (!isset($_SESSION['u_id'])) {
            // Si no ha iniciado sesión, redireccionar a la página de inicio de sesión
            header("Location: login.php");
            exit();
        }
    ?>
    <h1>Home</h1>
    <h3>Welcome!</h3>
    <a href="controller_cerrarsesion.php">cerrar sesion</a>
    
</body>
</html>