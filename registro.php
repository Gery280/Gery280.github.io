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
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

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

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">WebBuilders</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="/index.html#about" class="w3-bar-item w3-button"><i class="fa fa-paper-plane"> NOSOTROS</i></a>
      <a href="/login.php" class="w3-bar-item w3-button"><i class="fa fa-sign-in"></i> ACCEDER</a>
      <a href="/registro.php" class="w3-bar-item w3-button"><i class="fa fa-users"></i> REGISTRARSE</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">NOSOTROS</a>
  <a href="/login.php" onclick="w3_close()" class="w3-bar-item w3-button">ACCEDER</a>
  <a href="/registro.php" onclick="w3_close()" class="w3-bar-item w3-button">REGISTRARSE</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div class="w3-container w3-display-middle w3-white w3-padding-12" style="min-width:600px; max-height:650px; min-height:600px">
        <h3 class="w3-center"><a href="#home" class="w3-bar-item w3-button w3-wide">WebBuilders</a></h3>
        <h5 class="w3-center">Regístrate para Acceder</h5>
            <hr>

        <form action="controller_registro.php" method="post" id="formulario">
                <div class="w3-container">
                    <label for="nombre" class="w3-input">Nombre completo:</label>
                    <input type="text"  class="w3-input" id="nombre" placeholder="Nombre completo" name="nombre">
                </div>
                <div class="w3-container">
                    <label for="correo" class="w3-input">Correo:</label>
                    <input type="text" class="w3-input" id="correo" placeholder="Example@gmail.com" name="correo">
                </div>
                <div class="w3-container">
                    <label for="telefono" class="w3-input">Teléfono:</label>
                    <input type="text" class="w3-input" id="telefono" placeholder="Teléfono" name="telefono">
                </div>
                <div class="w3-container">
                    <label for="contraseña" class="w3-input">Contraseña:</label>
                    <input type="password" id="contraseña"  class="w3-input" placeholder="Minimo 8 caracteres" name="contraseña">
                </div>
                <br>
                    <input type="submit" value="Registrarse" class="">

                    <?php 
                        if(isset($_GET["True"])){
                            ?>
                                <p class="phpTrue">
                                    <?php
                                        echo $_GET["True"];
                                    ?>
                                </p>
                            <?php
                        }
                    ?>

                    <?php 
                        if(isset($_GET["False"])){
                            ?>
                                <p class="php">
                                    <?php
                                        echo $_GET["False"];
                                    ?>
                                </p>
                            <?php
                        }
                    ?>

                    <?php 
                        if(isset($_GET["error"])){
                            ?>
                                <p class="php">
                                    <?php
                                        echo $_GET["error"];
                                    ?>
                                </p>
                            <?php
                        }
                    ?>
            </form>
    </div>
    <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
</header>

<footer>
  
</footer>
<script src="js/registro.js"></script>
</body>

</html>
