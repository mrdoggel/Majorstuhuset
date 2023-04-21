<?php 

    require "conn.php";
    $overskrift = $_POST['overskrift'];
    $innhold = $_POST['innhold'];

    $sql = $conn->prepare("INSERT INTO hjem (overskrift, innhold) VALUES (?, ?)");
    $sql->bind_param("ss", $overskrift, $innhold);
    if ($sql->execute() === TRUE) {
        header("location: ../../index.php?oppdatert");
    }
?>