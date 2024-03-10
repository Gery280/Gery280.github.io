<?php

    $servername = 'localhost';
    $username = 'user';
    $password = 'user123';
    $database = 'login2';

    $conexion = new mysqli($servername, $username, $password, $database);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

?>
