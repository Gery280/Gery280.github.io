<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Recuperar Contraseña</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Recuperar Contraseña
                    </div>
                    <div class="card-body">
                        <form id="form" action="controller_recuperarcontraseña.php" method="post">
                            <span><i> Por favor, introduce tu dirección de correo electrónico a continuación para recuperar tu contraseña.</i></span>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="email">Correo electrónico:</label>
                                <input type="email" class="form-control mt-1" id="email" placeholder="Ingrese su correo electrónico" name="email">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary btn-block mt-3 mx-auto">Enviar solicitud</button>
 
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