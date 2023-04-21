<?php 

    require "conn.php";
    $ansatt_id = $_POST['id'];

    $sql = $conn->prepare("DELETE FROM ansatt WHERE ansatt_id = ?");
    $sql->bind_param("s", $ansatt_id);
    $sql->execute();
    if ($sql->execute() === TRUE) {
        header("location: ../../index.php?slettet");
    }

?>