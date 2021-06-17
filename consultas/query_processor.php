<?php

require_once "includes/class_processor.php";
$consulta = new processor();
$consulta_2 =$consulta->query_processor();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <?php
    for($query=0; $query<sizeof($consulta);$query++){
        ?>
        <tr>
        <td><?php echo $consulta [$query]["processor"]?></td>
        <td><?php echo $consulta [$query]["description_pro"]?></td>
        
        <td><a href=""></a></td>
        </tr>      
        
        <?php
    }
    ?>


</body>
</html>