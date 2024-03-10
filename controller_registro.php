<?php

    require_once 'conexion.php';

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];


    $contraseña = $_POST['contraseña'];
    $options = [
        'memory_cost' => 1<<17, // 128 MB de memoria (2^17)
        'time_cost'   => 4,      // 4 iteraciones
        'threads'     => 3,      // 3 hilos
    ];

    $contraseña_cifrada = password_hash($contraseña, PASSWORD_ARGON2I, $options);

    //INSERT//


    $sqlEmail = "SELECT * FROM usuarios WHERE u_email = '$correo';";

    $result_sqlEmail = $conexion->query($sqlEmail);

    if ($result_sqlEmail->num_rows === 0){

        $sql = "INSERT INTO usuarios(u_name,u_email,u_password,u_telefono) VALUES ('$nombre','$correo','$contraseña_cifrada','$telefono');";
        
        if ($conexion->query($sql) === TRUE){
            header("Location: registro.php?True=Usuario Registrado Correctamente");
            exit();
        } 
        else {
            header("Location: registro.php?False=Error al registrar usuario");
            exit();
        }    
    
    } 
    else {
        header("Location: registro.php?error=Ya hay un usuario registrado con este correo electronico");
        exit();
    }

    $conexion->close();

?>