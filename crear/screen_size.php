<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamaño Pantalla</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <?php
        require_once "../includes/class_screen_size.php";
        $screen = new Screen();
        if(empty($_POST['screen'])){
            echo "<div class='alert alert-danger'>Diligencie el campo capacidad</div>
                    <a href='form_screen_size.php' class='btn btn-info'>Intentar nuevamente</a>";
            return;
        }else{
            $screen->create_screen($_POST['screen']);
            echo "<div class='alert alert-success'>Se guardó correctamente!</div>
                    <a href='form_screen_size.php' class='btn btn-info'>Crear nueva +</a>";
        }
    ?>
</body>

</html>