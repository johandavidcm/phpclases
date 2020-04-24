<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Bootstrap</title>
    <?php include("components/estilos") ?>
</head>

<body>
    <div class="mb-0 jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Formulario Bootstrap</h1>
            <p class="lead"><?php 
            date_default_timezone_set('America/Bogota');
            echo date("l jS \of F Y");
            ?></p>
        </div>
    </div>
    <?php include("components/Header") ?>

    <div class="mt-5 mb-5 container">
        <h3 class="display-4">Punto 1</h3>
        <form action="validacion.php" method="POST" class="pt-5 needs-validation" id="Formulario1" novalidate>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtnombres">Nombres:</label>
                    <input minlength="2" type="text" class="form-control" id="txtnombres" name="txtnombres" required>
                    <div class="valid-feedback">Nombre válido</div>
                    <div class="invalid-feedback">Digite un nombre</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="txtapellidos">Apellidos:</label>
                    <input minlength="2" type="text" class="form-control" id="txtapellidos" name="txtapellidos" required>
                    <div class="valid-feedback">Apellido válido</div>
                    <div class="invalid-feedback">Digite un apellido</div>
                </div>
            </div>
            <div class="form-group">
                <label for="txtcorreo">Correo electrónico:</label>
                <input type="email" class="form-control" id="txtcorreo" name="txtcorreo" required>
                <div class="valid-feedback">Correo válido</div>
                <div class="invalid-feedback">Digite un correo valido</div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtpais">Pais de residencia:</label>
                    <input minlength="2" type="text" class="form-control" id="txtpais" name="txtpais" required>
                    <div class="valid-feedback">Pais válido</div>
                    <div class="invalid-feedback">Digite un pais</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="txtciudad">ciudad:</label>
                    <input minlength="2" type="text" class="form-control" id="txtciudad" name="txtciudad" required>
                    <div class="valid-feedback">Ciudad válida</div>
                    <div class="invalid-feedback">Digite una ciudad</div>
                </div>
            </div>
            <div class="">
                <label class="mr-5">¿Tiene estudios?</label>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" value="Si" id="rbsi" name="rbestudios" class="custom-control-input" checked>
                    <label class="custom-control-label" for="rbsi">Si</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" value="No" id="rbno" name="rbestudios" class="custom-control-input">
                    <label class="custom-control-label" for="rbno">No</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <button submit="button" id="enviar" name="enviar" class="mt-3 ml-3 mr-3 btn-block btn btn-dark">Enviar
                        Datos</button>
                </div>
                <div class="col-md-6 ">
                    <button type="button" onclick="limpiar()" name="borrar" class="mt-3 ml-3 mr-3 btn-block btn btn-outline-dark">Borrar
                        Datos</button>
                </div>
            </div>
        </form>
    </div>
    <?php include("components/scripts") ?>
</body>

</html>