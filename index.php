<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include("components/estilos") ?>
    <title>Inicio</title>
</head>

<body>
<div class="mb-0 jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Inicio</h1>
            <p class="lead"><?php 
            date_default_timezone_set('America/Bogota');
            echo date("l jS \of F Y");
            ?></p>
        </div>
    </div>
    <?php include("components/Header")?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>