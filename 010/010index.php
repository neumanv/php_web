<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 10</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/custom.js"></script>
</head>
<body>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h3 class="card-title text-center">INICIO DE SESIÓN</h3>
                <div class="card-text">
                    <form action="../011/011login.php" method="post">
                        <label>Nombre de usuario: </label>
                        <input type="text" name="user" class="form-control form-control-sm">
                        <label>Contraseña: </label>
                        <input type="password" name="password" class="form-control form-control-sm"><br>
                        <button href="../011/011login.php" name="submit" class="btn btn-primary btn-block">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>