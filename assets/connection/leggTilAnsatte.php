<?php 

    require "conn.php";
    $navn = $_POST['navn'];
    $beskrivelse = $_POST['beskrivelse'];
    $stilling = $_POST['stilling'];
    $ansatt_id = $_POST['id'];

    if ($_FILES['bilde']['size'] > 0) {
        $fil = $_FILES['bilde'];
        $filNavn = $_FILES['bilde']['name'];
        $filTmpNavn = $_FILES['bilde']['tmp_name'];
        $filStrl = $_FILES['bilde']['size'];
        $filType = $_FILES['bilde']['type'];
        $filError = $_FILES['bilde']['error'];
        $filExt = explode('.', $filNavn);
        $filFaktiskExt = strtolower(end($filExt));
        $lovlig = array('jpg', 'jpeg', 'png');
        
        if (in_array($filFaktiskExt, $lovlig)) {
            if ($filError === 0) {
                if ($filStrl < 1000000) {
                    
                    $filNavnNy = uniqid('', true).".".$filFaktiskExt;
                    $filDestinasjon = 'assets/web/gfx/1.5/'.$filNavnNy;
                    move_uploaded_file($filTmpNavn, "../../".$filDestinasjon);
                    
                    $sql = $conn->prepare("INSERT INTO ansatt (navn, beskrivelse, stilling, bilde) VALUES (?, ?, ?, ?)");
                    $sql->bind_param("ssss", $navn, $beskrivelse, $stilling, $filDestinasjon);
                    if ($sql->execute() === TRUE) {
                        header("location: ../../index.php?oppdatert");
                    } 
                    else {
                        header("location: ../../index.php?error=".$conn->error);
                    }
                    
                } else {
                    header("location: ../../index.php?error=Filen_din_er_for_stor");
                }
            } else {
                header("location: ../../index.php?error=Et_problem_oppstod");
            }
        } else {
            header("location: ../../index.php?error=Feil_filtype");
        }
    } else {
        $bilde = "assets/web/gfx/1.5/user.png";
        $sql = $conn->prepare("INSERT INTO ansatt (navn, beskrivelse, stilling, bilde) VALUES (?, ?, ?, ?)");
        $sql->bind_param("ssss", $navn, $beskrivelse, $stilling, $bilde);
        if ($sql->execute() === TRUE) {
            header("location: ../../index.php?ingen_bilde");
        } 
        else {
            header("location: ../../index.php?error=".$conn->error);
        }
    }
?>