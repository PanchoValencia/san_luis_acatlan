<?php

    $licencia = addslashes(htmlspecialchars($_POST['licencia']));

    include 'conexion.php';
    $result = mysqli_query($enlazarBD, "SELECT * FROM licencia WHERE numero='$licencia'");
    if ( mysqli_num_rows($result) > 0 )
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo
            "<div class='card card-border-color card-border-color-primary'>".
                "<div class='card-header card-header-divider'>".
                    $row['nombre'].
                "</div>".
                "<div class='card-body'>".
                    "<div class='row'>".
                        "<div class='col-sm-12 col-md-6'>".
                            "<img style='float:left; max-width:100%;' src='data:image/jpg;base64,".base64_encode($row['foto'])."'>".
                        "</div>".
                        "<div class='col-sm-12 col-md-6'>".
                            "<label>Numero de Licencia:</label>".
                            "<br/>".
                            "<p>".$row['numero']."</p>".
                            "<label>Tipo de Licencia:</label>".
                            "<br/>".
                            "<p>".$row['tipo']."</p>".
                            "<label>Domicilio:</label>".
                            "<br/>".
                            "<p>".$row['domicilio']."</p>".
                            "<label>Fecha de registro:</label>".
                            "<br/>".
                            "<p>".$row['fecha_alta']."</p>".
                            "<label>Fecha de vencimiento:</label>".
                            "<br/>".
                            "<p>".$row['fecha_vencimiento']."</p>".
                            "<label>Estatus:</label>".
                            "<br/>".
                            "<p>".$row['status']."</p>".
                        "</div>".
                    "</div>".
                "</div>".
            "</div>";
        }
    }
    else
    {
        echo
        "<div class='alert alert-danger' role='alert'>".
            "<div class='icon'>".
                "<span class='zmdi zmdi-alert-triangle'></span>".
            "</div>".
            "<div class='message'>".
                "<strong>Aviso! </strong>".
                "Licencia no encontrada.".
            "</div>".
        "</div>";
    }

?>
