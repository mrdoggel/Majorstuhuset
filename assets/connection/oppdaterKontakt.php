<?php 

    require "conn.php";
    $kontakt = $_POST['kontakt'];
    $besok = $_POST['besok'];
    $kontakt_id = 1;
    $sql = $conn->prepare("UPDATE kontakt SET kontakt_innhold = ?, besok_innhold = ? WHERE kontakt_id = ?");
    $sql->bind_param("sss", $kontakt, $besok, $kontakt_id);
    if ($sql->execute() === TRUE) {
      	header("location: ../../index.php?oppdatert");
    }

?>