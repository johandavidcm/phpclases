<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include("components/estilos") ?>
    <title>Ejercicios</title>
</head>

<body>
    <div class="mb-0 jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Practica en clase</h1>
            <p class="lead"><?php 
            date_default_timezone_set('America/Bogota');
            echo date("l jS \of F Y");
            ?></p>
        </div>
    </div>
    <?php include("components/Header") ?>
    <div class="container pt-4 pb-4">
        <?php
            const salario = 1150000;
            const auxtrans = 92350;
            const salud = 0.125;
            const pension = 0.16;
            $pension = pension * salario * 35;
            $salud = salud * salario * 35;
            $salario = salario * 35 - $salud - $pension;
            $salario = number_format($salario,0,".",",");
            $salud = number_format($salud,0,".",",");
            $pension = number_format($pension,0,".",",");
        ?>
        <div class="text-center">
            <table class="table table-borderless table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Salud</th>
                        <th scope="col">Pension</th>
                        <th scope="col">Salario</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php print $salud ?></td>
                        <td><?php print $pension ?></td>
                        <td><?php print $salario ?></td>
                    </tr>

                </tbody>
            </table>
            El salario que paga anual la empresa es: <?php print $pension?>
        </div>
        <h1 class="display-4">Números Aleatorios</h1>
        <div class="text-center">
            <table class="table table-borderless table-dark">
                <thead>
                    <tr>
                        <?php
                            for($i = 1; $i <= 9; $i++){
                                print "<th scope='col'>Col $i</th>" ;
                            }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($j=1; $j<=11; $j++){
                            print("<tr>");
                            for($k=1; $k<=9; $k++){
                                print("<td>". random_int(10,99)."</td>");
                            }
                            print("</tr>");
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <h1 class="display-4">Tablas de Multiplicar</h1>
        <div class="container d-flex">
            <?php   for ($i=5; $i <=10 ; $i++) { 
                    print("
                        <div class='card' style='width: 18rem; margin: 10px;'>
                            <div class='card-body'>
                                <h5 class='card-title'>Tabla del".$i."</h5>");
                                for ($j=1; $j <=10 ; $j++) { 
                                    print("<p class='card-text'> $i X $j = ".($i*$j)."</p>");
                                }
                                print("
                            </div>
                    </div>");
        } ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>