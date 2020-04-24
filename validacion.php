<?php 
    $nombres = $_POST['txtnombres'];
    $apellidos = $_POST['txtapellidos'];
    $correo = $_POST['txtcorreo'];
    $pais = $_POST['txtpais'];
    $ciudad = $_POST['txtciudad'];
    $estudios = $_POST['rbestudios'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exitosa validacion</title>
    <?php include("components/estilos") ?>
</head>

<body>
    <div class="mb-0 jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Validacion correcta</h1>
            <p class="lead"><?php 
            date_default_timezone_set('America/Bogota');
            echo date("l jS \of F Y");
            ?></p>
        </div>
    </div>
    <?php include("components/Header") ?>
    <div class="text-center mt-5 container">
            <table class="table table-borderless table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Pais</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Estudios</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php print $nombres ?></td>
                        <td><?php print $apellidos ?></td>
                        <td><?php print $correo ?></td>
                        <td><?php print $pais ?></td>
                        <td><?php print $ciudad ?></td>
                        <td><?php print $estudios ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php include("components/scripts") ?>
</body>

</html>