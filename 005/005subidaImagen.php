<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 5</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/custom.js"></script>
</head>
<body>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h3 class="card-title text-center">FORMULARIO DE IMAGEN</h3>
                <div class="card-text">
                    <form enctype = "multipart/form-data" method="post">
                        <label>Subir archivo: </label>
                            <input type="file" name="image" class="form-control form-control-sm">
                        <label>Altura: </label>
                            <input type="number" name="alto" class="form-control form-control-sm">
                        <label>Anchura: </label>
                            <input type="number" name="ancho" class="form-control form-control-sm">
                    </div>
                <button name="submit" class="btn btn-primary btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
</html>

<?php
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
        echo "La imagen se ha guardado correctamente";
    } else {
        print_r($errors);
    }
}
?>