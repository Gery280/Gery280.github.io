<?php

    $servername = 'localhost';
    $username = 'user123';
    $password = 'user123';
    $database = 'Project';

    $conexion = new mysqli($servername, $username, $password, $database);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

?>
