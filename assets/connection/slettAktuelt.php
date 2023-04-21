<?php 

    require "conn.php";
    $aktuelt_id = $_POST['id'];

    $sql = $conn->prepare("DELETE FROM aktuelt WHERE aktuelt_id = ?");
    $sql->bind_param("s", $aktuelt_id);
    $sql->execute();
    if ($sql->execute() === TRUE) {
        header("location: ../../index.php?slettet");
    }

?>