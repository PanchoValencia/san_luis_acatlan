<?php
    include("conexion.php");

    $numero            = $_POST['numero'];
    $tipo              = $_POST['tipo'];
    $foto              = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $nombre            = $_POST['nombre'];
    $domicilio         = $_POST['domicilio'];
    $fecha_alta        = $_POST['fecha_alta'];
    $fecha_vencimiento = $_POST['fecha_vencimiento'];
    $status            = 'Activo';

    $consulta = "INSERT INTO licencia(numero, tipo, foto, nombre, domicilio, fecha_alta, fecha_vencimiento, status) values('$numero', '$tipo', '$foto', '$nombre', '$domicilio', '$fecha_alta', '$fecha_vencimiento', '$status');";
    if(mysqli_query($enlazarBD, $consulta))
    {
        header("location: administrar_licencias.php");
    }
    else
    {
        echo 'error al insertar';
        header("location: administrar_licencias.php");
    }
?>
