<?php

    $servername = "mysql70.unoeuro.com";
    $dBusername = "reberg_no";
    $dBpassword = "Brynjar1";
    $dBname ="reberg_no_db";

    $conn = mysqli_connect($servername, $dBusername, $dBpassword, $dBname);

    if (!$conn) {
    die("connection failed: ".mysqli_connect_error());
    } 

?>