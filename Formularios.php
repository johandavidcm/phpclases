<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios con AJAX</title>
    <?php include("components/estilos") ?>
</head>

<body>
    <div class="mb-0 jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Formularios con AJAX</h1>
            <p class="lead"><?php 
            date_default_timezone_set('America/Bogota');
            echo date("l jS \of F Y");
            ?></p>
        </div>
    </div>
    <?php include("components/Header") ?>

    <div class="mt-5 mb-5 container">
        <h3 class="display-4">Punto 1</h3>
        <form class="pt-5" id="Formulario1">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtnombres">Nombres:</label>
                    <input type="text" class="form-control txtnombres" id="txtnombres" name="txtnombres">
                </div>
                <div class="form-group col-md-6">
                    <label for="txtapellidos">Apellidos:</label>
                    <input type="text" class="form-control" id="txtapellidos" name="txtapellidos">
                </div>
            </div>
            <div class="form-group">
                <label for="txtcorreo">Correo electrónico:</label>
                <input type="email" class="form-control" id="txtcorreo" name="txtcorreo">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtpais">Pais de residencia:</label>
                    <input type="text" class="form-control" id="txtpais" name="txtpais">
                </div>
                <div class="form-group col-md-6">
                    <label for="txtciudad">ciudad:</label>
                    <input type="text" class="form-control" id="txtciudad" name="txtciudad">
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
            <i class="fa fa-refresh fa-spin"></i>
            <p id="respuesta" class="text-danger"></p>
            <div class="row">
                <div class="col-md-6 ">
                    <button submit="button" id="enviar" name="enviar" class="mt-3 ml-3 mr-3 btn-block btn btn-dark">Enviar
                        Datos</button>
                </div>
                <div class="col-md-6 ">
                    <button type="button" onclick="document.getElementById('Formulario1').reset();" name="borrar" class="mt-3 ml-3 mr-3 btn-block btn btn-outline-dark">Borrar
                        Datos</button>
                </div>
            </div>
        </form>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/validar.js"></script>
</body>

</html>