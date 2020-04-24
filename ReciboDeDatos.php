<?php
    if(isset($_COOKIE['tag'])){
        $objCookie = [
            "nombres"   => $_COOKIE['txtnombres'],
            "apellidos" => $_COOKIE['txtapellidos'],
            "correo"    => $_COOKIE['txtcorreo'],
            "estudios"  => $_COOKIE['rbestudios'],
            "pais"      => $_COOKIE['txtpais'],
            "ciudad"    => $_COOKIE['txtciudad'],
        ];
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibo de datos</title>
    <?php include("components/estilos") ?>
</head>

<body>
    <div class="mb-0 jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Bienvenido <?php echo $objCookie['nombres'] ?></h1>
            <p class="lead"><?php 
            date_default_timezone_set('America/Bogota');
            echo date("l jS \of F Y");
            ?></p>
        </div>
    </div>
    <?php include("components/Header") ?>
    <div class="container mt-5 mb-5">
        <table class="table table-borderless table-dark">
            <thead>
                <tr>
                    <th class="text-center">Nombres</th>
                    <th class="text-center">Apellidos</th>
                    <th class="text-center">Correo</th>
                    <th class="text-center">Estudios</th>
                    <th class="text-center">Pais</th>
                    <th class="text-center">Ciudad</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($objCookie as $valor) {
                        echo "<th class='text-center'>$valor</th>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <?php require('components/scripts') ?>
</body>

</html>
<?php
    }else{
        echo "Hi";
        header('Location: Formularios.php');
    }
?>