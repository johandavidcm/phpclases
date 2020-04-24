<?php
    $codigo = $_POST['codigo'];
    $cantidad = $_POST['cantidad'];
    $valor = $_POST['valor'];
    $impuesto = $_POST['impuesto'];
    if(empty($codigo) || empty($cantidad) || empty($valor) || empty($impuesto)){
        header('Location: archivos.php');
    }
    else{
        guardarDatos($codigo,$cantidad,$valor,$impuesto);
        header('Location: Guardado_Exitoso.php');
    }
    function guardarDatos($cod, $cant, $val, $impu){
        $archivo = fopen("resources/archivo.txt","a");
        $linea = $cod."-".$cant."-".$val."-".$impu."\n";
        fputs($archivo,$linea);
    }
?>