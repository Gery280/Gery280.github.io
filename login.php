<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Iniciar Sesión
                    </div>
                    <div class="card-body">
                        <form id="form" action="controller_login.php" method="post">
                            <div class="form-group">
                                <label for="email">Correo:</label>
                                <input type="email" class="form-control mt-1" id="email" placeholder="Ingrese su correo" name="email">
                            </div>
                            <div class="form-group mt-2">
                                <label for="password">Contraseña:</label>
                                <input type="password" class="form-control mt-1" id="password" placeholder="Ingrese su contraseña" name="password">
                            </div>
                            <hr>

                            <?php
                                if(isset($_GET['error_c'])){
                                    ?>
                                    <p class="error">
                                        <?php
                                        echo $_GET['error_c'];
                                        ?>
                                    </p>
                                    <?php
                                }
                            ?>

                            <?php
                                if(isset($_GET['error_p'])){
                                    ?>
                                    <p class="error">
                                        <?php
                                        echo $_GET['error_p'];
                                        ?>
                                    </p>
                                    <?php
                                }
                            ?>

                            <button type="submit" class="btn btn-primary btn-block mt-3 mx-auto">Iniciar Sesión</button>
                            <div class="container d-flex justify-content-end">
                                <a class="" href="recuperar_contraseña.php"><span>¿Olvidaste tu contraseña? Recupérala</span></a>
                                <a class="" href="registro.php"><span>¿No tienes Cuenta? Crea una Ahora!</span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/login.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
