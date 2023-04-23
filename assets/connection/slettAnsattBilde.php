<?php 

    require "conn.php";
    $ansatt_id = $_POST['id'];
    $bilde = 'assets/web/gfx/1.5/user.png';
    $sql = $conn->prepare("UPDATE ansatt SET bilde = ? WHERE ansatt_id = ?");
    $sql->bind_param("ss", $bilde, $ansatt_id);
    $sql->execute();
    if ($sql->execute() === TRUE) {
        header("location: ../../index.php?slettet");
    }

?>