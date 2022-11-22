<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 6</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/custom.js"></script>
</head>
<body>
    <div class="container mt-5">
        <a href="006contadorVisitas.php"><button name="cuenta" class="btn btn-primary btn-block">Ver visitas</button></a>
        <button name="reinicio" class="btn btn-primary btn-block">Reiniciar</button>
    </div>
</body>
</html>

<?php
if(isset($_COOKIE["visita"] ) ) {
    setcookie( "visita", $_COOKIE["visita"] + 1, time() + 3600 * 24 );
    $mensaje = 'Numero de visitas: '.$_COOKIE["visita"];
}
else {

    setcookie( "visita", 1, time() + 3600 * 24 );
    $mensaje = "Primera vez";
}
?>