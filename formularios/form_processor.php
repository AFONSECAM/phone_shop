<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="alert-success text-center">Procesador</h1>
            </div>
            <div class="col-12">
                <form action="../crear/processor.php" method="POST">
                    <div class="form-group">
                        <label for="processor">Referencia del procesador</label>
                        <input type="text" name="processor" class="form-control" id="">                        
                    </div>
                    <div class="form-group">
                        <label for="description_pro">Description del procesador</label>
                        <input type="text" name="description_pro" class="form-control" id="">                        
                    </div>                     
                    <button type="submit" class="btn btn-primary">Crear</button>
                    
                </form>
            </div>
        </div>
        <br>
        <a href='cruds.php' class='btn btn-info'>Home</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>