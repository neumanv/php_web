<?php
//array asociativo de elementos
if (isset($_FILES['image'])) {
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $extensions = array("jpeg", "jpg", "png");
    if (in_array($file_ext, $extensions) == false) {
        $errors[] = "Estensión no permitida. Prueba con imágenes jpeg,jpng o png.";
    }
    if ($file_size > 2097152) {
        $errors[] = 'El archivo no puede pesar más de 2MB';
    }
    if (empty($errors) == true) {
        echo "El archivo se ha guardado correctamente";
    } else {
        print_r($errors);
    }
}
?>