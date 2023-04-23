<?php 

    require "conn.php";
    $hjem_id = $_POST['id'];

    $sql = $conn->prepare("DELETE FROM hjem WHERE hjem_id = ?");
    $sql->bind_param("s", $hjem_id);
    $sql->execute();
    if ($sql->execute() === TRUE) {
        header("location: ../../index.php?slettet");
    }

?>