<?php 

    require "conn.php";
    $overskrift = $_POST['overskrift'];
    $innhold = $_POST['innhold'];
    $hjem_id = $_POST['id'];

    $sql = $conn->prepare("UPDATE hjem SET overskrift = ?, innhold = ? WHERE hjem_id = ?");
    $sql->bind_param("sss", $overskrift, $innhold, $hjem_id);
    $sql->execute();
    if ($sql->execute() === TRUE) {
        header("location: ../../index.php?oppdatert");
    }

?>