<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">WebBuilders</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="/home.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i> INICIO</a>
      <a href="/dashboard.php" class="w3-bar-item w3-button"><i class="fa fa-tachometer"> DASHBOARD</i></a>
      <a href="/perfil.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> PERFIL</a>
      <?php
        if (isset($_SESSION['u_rolId']) && in_array(1, $_SESSION['u_rolId'])) {
            echo '<a href="/usuarios.php" class="w3-bar-item w3-button"><i class="fa fa-users"></i> USUARIOS</a>';
        }
      ?>
      <a href="controller_cerrarsesion.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i> CERRAR SESIÓN</a>
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
