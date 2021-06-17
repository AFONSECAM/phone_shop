<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memoria Rom</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <?php
        require_once "../includes/class_rom_memory.php";
        $ram = new rom_mem();
        if(empty($_POST['capacidad1'])){
            echo "<div class='alert alert-danger'>Diligencie el campo capacidad rom</div>
                    <a href='../formularios/form_rom_memory.php' class='btn btn-info'>Intentar nuevamente</a>";
            return;
        }else{
            $ram->crear_rom_mem($_POST['capacidad1']);
            echo "<div class='alert alert-success'>Se guardó correctamente!</div>
                    <a href='../formularios/form_rom_memory.php' class='btn btn-info'>Crear nueva ram+</a>";
        }
    ?>
</body>

</html>