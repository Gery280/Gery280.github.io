<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/registro.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row vh-100 align-content-center">
            <div class="col-6 m-auto">
                <div class="container-form">
                    <h3>Registrar</h3>
                    <form action="controller_registro.php" method="post" id="formulario">
                        <div class="inputs-form">

                            <label for="nombre">Nombre completo:</label>
                            <input type="text" id="nombre" placeholder="Nombre completo" name="nombre">

                            <label for="correo">Correo:</label>
                            <input type="text" id="correo" placeholder="Example@gmail.com" name="correo">

                            <label for="telefono">Teléfono:</label>
                            <input type="text" id="telefono" placeholder="Teléfono" name="telefono">

                            <label for="contraseña">Contraseña:</label>
                            <input type="password" id="contraseña" placeholder="Minimo 8 caracteres" name="contraseña">

                            <input type="submit" value="Registrarse">

                            <?php 
                                if(isset($_GET["True"])){
                                    ?>
                                        <p class="php">
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
                        <a href="login.php">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/registro.js"></script>
</body>
</html>