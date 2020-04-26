<?php
    $tag = $_POST['tag'];
    $error = "";
    if(isset($tag)){
        if($tag == 'formulario1'){
            $nombres = $_POST['txtnombres'];
            $apellidos = $_POST['txtapellidos'];
            $correo = $_POST['txtcorreo'];
            $pais = $_POST['txtpais'];
            $ciudad = $_POST['txtciudad'];
            $estudios = $_POST['rbestudios'];
            if(empty($nombres)){
                $error = $error."El Nombre esta vacio,";
            }
            else if(strlen($nombres)<2 || strlen($nombres)>25){
                $error = $error."El tamaño del nombre no es valido,";
            }
            if(empty($apellidos)){
                $error = $error."El Apellido esta vacio,";
            }
            else if(strlen($nombres)<2 || strlen($nombres)>25){
                $error = $error."El tamaño del apellido no es valido,";
            }
            if(empty($correo)){
                $error = $error."El correo esta vacio,";
            }
            else if(!preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/',$correo)){
                $error = $error."Correo invalido,";
            }
            if(empty($pais)){
                $error = $error."El país de residencia esta vacio,";
            }
            if(empty($ciudad)){
                $error = $error."La ciudad de residencia esta vacio";
            }
        }
    }
    echo $error;
?>