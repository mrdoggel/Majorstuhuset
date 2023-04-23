<?php 

    require "conn.php";
    $overskrift = $_POST['overskrift'];
    $innhold = $_POST['innhold'];
    $aktuelt_id = $_POST['id'];
    
    $sql = $conn->prepare("UPDATE aktuelt SET overskrift = ?, innhold = ? WHERE aktuelt_id = ?");
    $sql->bind_param("sss", $overskrift, $innhold, $aktuelt_id);
    $sql->execute();
    if ($sql->execute() === TRUE) {
        header("location: ../../index.php?oppdatert");
    }

?>