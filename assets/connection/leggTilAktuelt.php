<?php 

    require "conn.php";
    $overskrift = $_POST['overskrift'];
    $innhold = $_POST['innhold'];
    $datetime = new DateTime("now",new DateTimeZone('UTC'));
    $datetime->modify('+2 hour');
    $date = date_format($datetime,'Y-m-d H:i:s');

    $sql = $conn->prepare("INSERT INTO aktuelt (overskrift, dato, innhold) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $overskrift, $date, $innhold);
    if ($sql->execute() === TRUE) {
        header("location: ../../index.php?oppdatert");
    }
?>