<?php
    include("conexion.php");

    $id                = $_GET['id'];
    $numero            = $_GET['numero'];
    $tipo              = $_GET['tipo'];
    $nombre            = $_GET['nombre'];
    $domicilio         = $_GET['domicilio'];
    $fecha_alta        = $_GET['fecha_alta'];
    $fecha_vencimiento = $_GET['fecha_vencimiento'];

    $consulta = "UPDATE licencia SET numero='$numero', tipo='$tipo', nombre='$nombre', domicilio='$domicilio', fecha_alta='$fecha_alta', fecha_vencimiento='$fecha_vencimiento' WHERE id=$id";
    mysqli_query($enlazarBD, $consulta);

    header("location: administrar_licencias.php");
?>
