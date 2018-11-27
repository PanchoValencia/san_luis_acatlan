<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "root";
    $db         = "licencias";

    // Create connection
    $enlazarBD = mysqli_connect($servername,$username,$password,$db);

    // Check connection
    if (!$enlazarBD) {
        echo "Failed";
        die("Connection failed: " . mysqli_connect_error());
    }
?>
