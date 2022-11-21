<?php

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$email = $_POST["email"];
$convivientes = $_POST["mate"];
$favorito = $_POST["favorito"];

$sexos = $_POST["sexo"];
foreach($sexos as $sexo){
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 2</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/fav_icon.png">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/custom.js"></script>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Email</th>
                <th scope="col">Sexo</th>
                <th scope="col">Convivientes en el domicilio</th>
                <th scope="col">Aficiones</th>
                <th scope="col">Menú favorito</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $nombre ?></td>
                <td><?= $apellidos ?></td>
                <td><?= $email ?></td>
                <td><?= $sexo ?></td>
                <td><?= $convivientes ?></td>
                <td>@mdo</td>
                <td><?= $favorito ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
