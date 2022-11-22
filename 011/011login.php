<?php
$user = $_POST["user"];
$password = $_POST["password"];

//Nombre de usuario ----------------------------------

$user =  strtolower($user);

if(isset($user) && isset($password)) {
    if(strlen($user) < 7){
        echo "El nombre de usuario es demasiado pequeño(mínimo 7 cifras).";
    }else if(strlen($user) > 15){
        echo "El nombre de usuario es demasiado grande(máximo 15 cifras).";
    }else if(preg_match("/[\W]/", $user)){
        echo "El nombre sólo puede incluir números y letras.";
    }
    
    if(strlen($password) < 7){
        echo "La contraseña no es segura";
    }else if(strlen($password) > 30){
        echo "La contraseña es demasiado larga.";
    }    
}else{
    echo "Campos incompletos";
}

//Abrir sesión -----------------------------------------

header("Location: http://www.example.com/");
?>