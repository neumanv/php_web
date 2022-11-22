<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 9</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/custom.js"></script>
</head>
<body>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h3 class="card-title text-center">FORMULARIO</h3>
                <div class="card-text">
                    <form action="009formulario2.php" method="post">
                        <label>Nombre: </label>
                        <input type="text" name="nombre" class="form-control form-control-sm">
                        <label>Apellidos: </label>
                        <input type="text" name="apellidos" class="form-control form-control-sm">
                        <label>Email: </label>
                        <input type="email" name="email" class="form-control form-control-sm">
                        <p>Sexo</p>
                        <p><input type="radio" name="sexo" value="hombre" id="hombre"> Hombre</input>
                            <input type="radio" name="sexo" value="mujer" id="mujer"> Mujer</input>
                        </p>
                        <label>URL: </label>
                        <input type="url" name="enlace" class="form-control form-control-sm"><br>
                <button href="009formulario2.php" name="submit" class="btn btn-primary btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
</html>