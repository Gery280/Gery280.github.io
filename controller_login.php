<?php

    include("conexion.php");

    // Iniciar sesión
    session_start();

    // Verificar si se enviaron los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validar y limpiar los datos del formulario
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];

        // Preparar la consulta SQL para obtener el usuario de la base de datos
        $sql = "SELECT * FROM usuarios WHERE u_email = '$email'";
        $result = $conexion->query($sql);

        if ($result->num_rows === 1) {
            // Usuario encontrado, verificar la contraseña
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['u_password'])) {
                // Autenticación exitosa, redireccionar al usuario o establecer sesión
                $_SESSION['u_id'] = $row['u_id'];
                $_SESSION['u_email'] = $row['u_email'];
                $_SESSION['u_name'] = $row['u_name'];
                $_SESSION['u_rolId'] = array($row['u_rolId']);

                header("Location: home.php");
                exit();

            } else {
                // Autenticación fallida, mostrar mensaje de error
                header("Location: login.php?error_p=Contraseña Incorrecta");
                exit();
            }
        } else {
            // Usuario no encontrado, mostrar mensaje de error
            header("Location: login.php?error_c=Correo no encontrado");
            exit();
        }
    } else{
        header("Location: login.php");
        exit();
    }
?>
