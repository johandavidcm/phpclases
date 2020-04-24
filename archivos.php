<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include("components/estilos") ?>
    <title>Archivos</title>
</head>

<body>
    <div class="mb-0 jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Archivos</h1>
            <p class="lead"><?php 
            date_default_timezone_set('America/Bogota');
            echo date("l jS \of F Y");
            ?></p>
        </div>
    </div>
    <?php include("components/Header") ?>
    <div class="container">
        <h1 class="display-4 mt-5">Lectura de archivos</h1>
        <p>1. Informe de las ventas en una tabla que contenga todos
            los datos de la venta con el valor neto cobrado.</p>
        <div class="text-center">
            <table class="table table-borderless table-dark">
                <thead>
                    <tr>
                        <?php
                            $arreglo = leerArchivo();
                            print "<th scope='col'>Código</th>";
                            print "<th scope='col'>Cantidad del Producto</th>";
                            print "<th scope='col'>Valor</th>";
                            print "<th scope='col'>Impuesto</th>";
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($i = 0; $i<count($arreglo); $i++){
                            print("<tr>");
                            $datos = $arreglo[$i];
                            for($j = 0; $j<count($datos); $j++){
                                if($j!=3){
                                    print("<td>". $datos[$j]."</td>");
                                }
                                else{
                                    print("<td>". $datos[$j]."</td>");
                                }
                            }
                            print("</tr>");
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <?php
            function leerArchivo(){
                $archivo = fopen("resources/archivo.txt", "r");
                $i = 0;
                while(!feof($archivo)){
                    $linea = fgets($archivo);
                    $datos = explode("-",$linea);
                    $arreglo[$i] = $datos;
                    $i++;
                }
                fclose($archivo);
                return $arreglo;
            }
        ?>
        <p>2. Una lista de las ventas a las cuales se le agrego un impuesto mayor al 15%.</p>
        <?php
            function ventasMayores(){
                $archivo = fopen("resources/archivo.txt", "r");
                $i = 0;
                while(!feof($archivo)){
                    $linea = fgets($archivo);
                    $datos = explode("-",$linea);
                    if($datos[3]>=0.15){
                        $arreglo[$i] = $datos;
                        $i++;
                    }
                }
                fclose($archivo);
                return $arreglo;
            }
        ?>
        <div class="text-center">
            <table class="table table-borderless table-dark">
                <thead>
                    <tr>
                        <?php
                            $arreglo = ventasMayores();
                            print "<th scope='col'>Código</th>";
                            print "<th scope='col'>Cantidad del Producto</th>";
                            print "<th scope='col'>Valor</th>";
                            print "<th scope='col'>Impuesto</th>";
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($i = 0; $i<count($arreglo); $i++){
                            print("<tr>");
                            $datos = $arreglo[$i];
                            for($j = 0; $j<count($datos); $j++){
                                if($j!=3){
                                    print("<td>". $datos[$j]."</td>");
                                }
                                else{
                                    print("<td>". $datos[$j]."</td>");
                                }
                            }
                            print("</tr>");
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="">
            <h1 class="display-4 mt-5">Guardar en el archivo</h1>
            <?php
                function guardarDatos($arreglo){
                    $archivo = fopen("resources/archivo.txt", "w");
                    $i = 0;
                    while(!feof($archivo)){
                        $linea = fgets($archivo);
                        $datos = explode("-",$linea);
                        if($datos[3]>=0.15){
                            $arreglo[$i] = $datos;
                            $i++;
                        }
                    }
                    fclose($archivo);
                    return $arreglo;
                }
            ?>
            <form class="mb-5 pt-3" method="POST" action="validar.php">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="codigo">Código</label>
                        <input name="codigo" type="text" class="form-control" id="codigo">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cantidad">Cantidad:</label>
                        <input name="cantidad" type="number" class="form-control" id="cantidad">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="valor">Valor:</label>
                        <input name="valor" type="text" class="form-control" id="valor">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="impuesto">Impuesto:</label>
                        <input name="impuesto" type="number" class="form-control" id="impuesto">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-3">Guardar</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>