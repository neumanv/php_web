<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 3</title>
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
                    <for method="post">
                        <label>Nombre: </label>
                            <input type="text" name="nombre" class="form-control form-control-sm" required>
                        <label>Apellidos: </label>
                            <input type="text" name="apellidos" class="form-control form-control-sm" required>
                        <label>Email: </label>
                            <input type="email" name="email" class="form-control form-control-sm" required>
                        <p>Sexo</p>
                        <p><input type="radio" name="sexo[]" id="hombre"> Hombre</input>
                            <input type="radio" name="sexo[]" id="mujer"> Mujer</input>
                        </p>
                        <p><label>Convivientes en el domicilio:</label></p>
                        <p><input type="number" name="mate" required/></p>
                        <p>Aficiones: </p>
                            <label><input type="checkbox" name="hobby[]" id="dinero"> Dinero</input></label>
                            <label><input type="checkbox" name="hobby[]" id="coche"> Coches</input></label>
                            <label><input type="checkbox" name="hobby[]" id="coca"> Cocaína</input></label>
                            <label><input type="checkbox" name="hobby[]" id="anfeta"> Anfetamina</input></label>
                        <p>Menú favorito: 
                            <select name="favorito">
                                <option>Jamón</option>
                                <option>Pollo</option>
                                <option>Agua</option>
                                <option>Lasaña</option>
                            </select>
                        </p>
                    </div>
                <buttonname="submit" class="btn btn-primary btn-block">Enviar</buttonname=>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
</html>

<?php
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$email = $_POST["email"];
$convivientes = $_POST["mate"];
$favorito = $_POST["favorito"];
?>