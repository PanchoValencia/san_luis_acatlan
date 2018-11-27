<?php
    include("conexion.php");

    $id = $_POST['id'];

    $consulta = "UPDATE licencia SET status='Activo' WHERE id=$id";
    mysqli_query($enlazarBD, $consulta);

    header("location: administrar_licencias.php");
?>
