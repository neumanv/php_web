<?php

echo $_SERVER["PHP_SELF"]."<br>"; 
echo $_SERVER["SERVER_SOFTWARE"]."<br>"; 
echo $_SERVER["SERVER_NAME"]."<br>";
echo $_SERVER["REQUEST_METHOD"]."<br>"; 
echo $_SERVER["REQUEST_URI"]."<br>";
echo $_SERVER["QUERY_STRING"]."<br>";

echo $_SERVER["HTTP_USER_AGENT"]."<br>";

$invalida = $_GET[""];

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$user = $_POST["user"];
$contrasena = $_POST["contrasena"];

//----- MOSTRAR -----------------------------

echo $nombre;
echo $apellidos;
echo $user;
echo $contrasena;
?>