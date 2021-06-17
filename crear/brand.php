<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bateria</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once "C:/xampp/htdocs/phone_store/includes/class_brand.php";
    $marca = new Brand();
    if(empty($_POST['nombre'])){
        echo "<div class='alert alert-danger'>Diligencie el campo nombre</div>
                <a href='form_brand.php' class='btn btn-info'>Intentar nuevamente</a>";
        return;
    }else if(($_POST['tipo'] == 0)){
        echo "<div class='alert alert-danger'>Seleccione una categoría</div>
                <a href='form_brand.php' class='btn btn-info'>Intentar nuevamente</a>";
        return;
    }else{
        $marca->createBrand($_POST['nombre'], $_POST['tipo']);
        echo "<div class='alert alert-success'>Se guardó correctamente!</div>
                <a href='cruds.php' class='btn btn-info'>Home</a>";
    }
    
    ?>
</body>

</html>