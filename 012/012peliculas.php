<?php
session_start();
if(!isset($_SESSION['guillermo'])) {
    $_SESSION['guillermo'] = 0;
}else{
    $_SESSION['guillermo']++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 12</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/custom.js"></script>
</head>
<body>
    <h3 class="card-title text-center">LISTADO DE PELÍCULAS</h3>
    <ul>
        <li>Titanic</li>
        <li>Spiderman</li>
        <li>Batman</li>
    </ul>
    <a href="../013/013logout.php"><button type="submit" class="btn btn-primary btn-block">Cerrar sesión</button></a>
</body>
</html>