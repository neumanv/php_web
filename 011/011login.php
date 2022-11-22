<?php
$user = $_POST["user"];
$password = $_POST["password"];

//Nombre de usuario ----------------------------------

$user =  strtolower($user);

if(strlen($user) < 7){
    echo "El nombre de usuario es demasiado pequeño(mínimo 7 cifras).";
}else if(strlen($user) > 15){
    echo "El nombre de usuario es demasiado grande(máximo 15 cifras).";
}else if(preg_match("/[\W]/", $user)){
    echo "El nombre sólo puede incluir números y letras.";
}else{
    
}

//Contraseña -----------------------------------------


?>