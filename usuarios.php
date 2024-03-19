<?php
    // Iniciar sesión
    session_start();

    // Verificar si el usuario ha iniciado sesión
    if (!isset($_SESSION['u_id'])) {
        // Si no ha iniciado sesión, redireccionar a la página de inicio de sesión
        header("Location: login.php");
        exit();
    }

    if (!isset($_SESSION['u_rolId']) || !in_array(1, $_SESSION['u_rolId'])) {
        header("Location: acceso_denegado.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Web Builders</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/registro.css">

    <style>
        body, h1, h2, h3, h4, h5, h6 {
            font-family: "Raleway", sans-serif;
        }

        body, html {
            height: 100%;
            line-height: 1.8;
        }

        /* Full height image header */
        .bgimg-1 {
            background-position: center;
            background-size: cover;
            background-image: url("/images/banner.jpg");
            min-height: 100%;
        }

        .w3-bar .w3-button {
            padding: 16px;
        }
    </style>
</head>
<body>
<?php include 'nav.php'; ?>

<!-- Header with full-height image -->
<header class="w3-display-container w3-grayscale-min" id="home">
    <div class="w3-container" style="min-width:600px;">
        <BR></BR>
        <h1>USUARIOS</h1>
        <h3>Welcome!</h3>
    </div>
</header>
<section>

</section>
<footer>
  
</footer>
</body>
</html>
