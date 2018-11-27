<?php
    include("conexion.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Secretaria de movilidad San Luis Acatlán</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/datatables.min.css">
    <link rel="stylesheet" href="css/application.css">
</head>
<body>

    <div class="be-wrapper be-collapsible-sidebar">
        <nav class="navbar navbar-expand fixed-top be-top-header">
            <div class="container-fluid">
                <div class="be-navbar-header">
                    <a href="/" class="navbar-brand">
                        <img src="img/logo.jpeg" alt="logo infotek" style="height:50px;">
                    </a>
                    <a class="be-toggle-left-sidebar">
                        <span class="zmdi zmdi-menu"></span>
                    </a>
                </div>
                <div class="be-right-navbar">
                    <ul class="nav navbar-nav float-right be-user-nav">
                        <li class="nav-item dropdown show">
                            <a href="" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <img src="img/avatar.png" alt="avatar">
                                <?php
                                    if(isset($_SESSION['usuario'])){
                                        $name = $_SESSION['usuario'];

                                        echo '<span class="user-name">'.$name.'</span>';
                                    }
                                ?>
                            </a>
                            <div class="dropdown-menu" role="menu">
                                <div class="user-info">
                                    <div class="user-name">
                                        <?php echo $name ?>
                                    </div>
                                </div>
                                <?php
                                    if(isset($_SESSION['usuario'])){
                                        $name = $_SESSION['usuario'];

                                        echo '<a href="bd-cerrar_sesion.php" class="dropdown-item">Cerrar Sesión</a>';
                                    }
                                    else
                                    {
                                        echo '<a href="login.php" class="dropdown-item">Iniciar Sesión</a>';
                                    }
                                ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="be-left-sidebar">
            <div class="left-sidebar-wrapper">
                <a class="left-sidebar-toggle">Menu</a>
                <div class="left-sidebar-spacer">
                    <div class="left-sidebar-scroll">
                        <div class="left-sidebar-content">
                            <ul class="sidebar-elements">
                                <li class="divider">Menu</li>
                                <li>
                                    <a href="/">
                                        <i class="zmdi zmdi-search"></i>
                                        <span>Verificar Licencia</span>
                                    </a>
                                </li>
                                <?php
                                    if(isset($_SESSION['usuario'])){
                                        echo
                                        '<li>'.
                                            '<a href="administrar_licencias.php">'.
                                                '<i class="zmdi zmdi-face"></i>'.
                                                '<span>Panel de administrador</span>'.
                                            '</a>'.
                                        '</li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="be-content">
            <div class="main-content container-fluid">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/datatables.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>
