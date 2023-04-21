<?php 

    require "conn.php";
    $overskrift = $_POST['overskrift'];
    $innhold = $_POST['innhold'];
    setLocale(LC_TIME, "no_NB");
    $monthNum = date("m");
    $dateObj   = DateTime::createFromFormat('!m', $monthNum);
    $monthName = strtolower($dateObj->format('F'));
    $date = date("d").". ".$monthName." ".date("Y");

    $sql = $conn->prepare("INSERT INTO aktuelt (overskrift, dato, innhold) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $overskrift, $date, $innhold);
    if ($sql->execute() === TRUE) {
        header("location: ../../index.php?oppdatert");
    }
?>