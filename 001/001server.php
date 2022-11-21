<?php

echo $_SERVER["PHP_SELF"]."<br>"; //El nombre del archivo de script ejecutándose actualmente
echo $_SERVER["SERVER_SOFTWARE"]."<br>"; //Cadena de identificación del servidor dada en las cabeceras de respuesta a las peticiones.
echo $_SERVER["SERVER_NAME"]."<br>"; //El nombre del host del servidor donde se está ejecutando actualmente el script
echo $_SERVER["REQUEST_METHOD"]."<br>"; //Método de petición empleado para acceder a la página
echo $_SERVER["REQUEST_URI"]."<br>"; //La URI que se empleó para acceder a la página
echo $_SERVER["QUERY_STRING"]."<br>"; //Si existe, la cadena de la consulta de la petición de la página.
echo $_SERVER["HTTP_USER_AGENT"]."<br>"; //Consiste en una cadena que indica el agente de usuario empleado para acceder a la pagina

$invalida = $_GET[""]; //Da error porque el formulario no recibe parametros con get

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$user = $_POST["user"];
$contrasena = $_POST["contrasena"];

//----- MOSTRAR -----------------------------

echo "<br>";
echo "Nombre: ".$nombre."<br>";
echo "Apellidos: ".$apellidos."<br>";
echo "Nombre usuario: ".$user."<br>";
echo "Contraseña: ".$contrasena;
?>