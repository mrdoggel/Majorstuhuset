<?php 

    require "conn.php";
    $innhold = $_POST['innhold'];
    $apningstider_id = 1;
    $sql = $conn->prepare("UPDATE apningstider SET innhold = ? WHERE apningstider_id = ?");
    $sql->bind_param("ss", $innhold, $apningstider_id);
    if ($sql->execute() === TRUE) {
      	header("location: ../../index.php?oppdatert");
    }

?>