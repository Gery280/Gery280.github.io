<?php

    include("conexion.php");

    // Iniciar sesión
    session_start();

    function validarCorreoYContraseña($email, $password) {

        $correo_regex = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    

        if (!preg_match($correo_regex, $email)) {
            return false;
        }

        if (strlen($password) < 8) {
            return false;
        }

        return true;
    }



    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];

        $validacion = validarCorreoYContraseña($email,$password);

        if($validacion){

            $sql = "SELECT * FROM usuarios WHERE u_email = '$email'";
            $result = $conexion->query($sql);

            if ($result->num_rows === 1) {

                $row = $result->fetch_assoc();

                if (password_verify($password, $row['u_password'])) {

                    $_SESSION['u_id'] = $row['u_id'];
                    $_SESSION['u_email'] = $row['u_email'];
                    $_SESSION['u_name'] = $row['u_name'];
                    $_SESSION['u_rolId'] = array($row['u_rolId']);

                    header("Location: home.php");
                    exit();

                } else {

                    header("Location: login.php?error_p=Contraseña Incorrecta");
                    exit();
                }
            } else {

                header("Location: login.php?error_c=Correo no encontrado");
                exit();
            }

        }else{
            header("Location: login.php?error_validacion=error");
            exit();
        }
        
    } else{
        header("Location: login.php");
        exit();
    }
?>
