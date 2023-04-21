<?php 

    require "conn.php";
    $bestilling_id = $_POST['id'];

    $sql = $conn->prepare("DELETE FROM bestilling WHERE bestilling_id = ?");
    $sql->bind_param("s", $bestilling_id);
    $sql->execute();
    if ($sql->execute() === TRUE) {
        header("location: ../../index.php?slettet");
    }

?>