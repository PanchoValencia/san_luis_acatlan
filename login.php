<?php
    include 'layout.php';
?>

<div class="splash-container">
    <div class="card card-border-color card-border-color-primary">
        <div class="card-header" style="flex-direction:column;">
            <img src="img/logo.jpeg" alt="logo" class="logo-img">
            <span class="splash-description">Inicio de Sesión</span>
        </div>
        <div class="card-body">
            <form action="bd-login.php" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control form-control-sm" required autocomplete="off" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-sm" required autocomplete="off" placeholder="Contraseña" name="pass">
                </div>
                <div class="form-group login-submit">
                    <input type="submit" class="btn btn-primary" value="Iniciar sesion">
                </div>
            </form>
        </div>
    </div>
</div>
