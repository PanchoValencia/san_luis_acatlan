<?php
    session_start();

    include("conexion.php");

    $usuario    = $_POST['email'];
    $contrasena = $_POST['pass'];

    $admin = "admin@licencias.com";
    $password = "nefer123";

    if(($admin==$usuario) && ($password==$contrasena)){
        $_SESSION["usuario"] = $admin;
        header("location: administrar_licencias.php");
    }
    else{
        header("location: login.php");
    }
?>
