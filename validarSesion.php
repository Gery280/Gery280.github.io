<?php
session_start();

include 'conexion.php';

function validarSesion($conn) {

    if(isset($_SESSION['u_id'])) {

        $id_usuario = $_SESSION['u_id'];

        $sql = "SELECT u_id FROM usuarios WHERE u_id = $id_usuario";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows == 0) {

            header("Location: login.php");
            exit(); 
        }
    } else {
        header("Location: login.php");
        exit(); 
    }
}
?>
