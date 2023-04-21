<?php 

    require "conn.php";
    $overskrift = $_POST['overskrift'];
    $innhold = $_POST['innhold'];
    $bestilling_id = $_POST['id'];

    $sql = $conn->prepare("UPDATE bestilling SET overskrift = ?, innhold = ? WHERE bestilling_id = ?");
    $sql->bind_param("sss", $overskrift, $innhold, $bestilling_id);
    $sql->execute();
    if ($sql->execute() === TRUE) {
        header("location: ../../index.php?oppdatert");
    }

?>