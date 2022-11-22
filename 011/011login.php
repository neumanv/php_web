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
        echo "El nombre sólo puede incluir números, letras y guiones bajos.";
    }elseif(strlen($password) < 7){
        echo "La contraseña no es segura";
    }else if(strlen($password) > 30){
        echo "La contraseña es demasiado larga.";
    }else{
        //Abrir sesión 
        header('Location: ../012/012peliculas.php');
    }
?>