<div class="addknapper"><button id="addAktuelt" class="add adminKnapp"><div class="inside"></div></button></div>
<?php 
require "conn.php";
$sql = $conn->prepare("SELECT * FROM aktuelt ORDER BY dato DESC");
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $id = $row["aktuelt_id"];
    $date_time = new DateTime($row['dato']);
    $mnd_number = date_format($date_time, "m");
    switch ($mnd_number) {
        case 1:
            $mnd = "januar";
            break;
        case 2:
            $mnd = "februar";
            break;
        case 3:
            $mnd = "mars";
            break;
        case 4:
            $mnd = "april";
            break;
        case 5:
            $mnd = "mai";
            break;
        case 6:
            $mnd = "juni";
            break;
        case 7:
            $mnd = "juli";
            break;
        case 8:
            $mnd = "august";
            break;
        case 9:
            $mnd = "september";
            break;
        case 10:
            $mnd = "oktober";
            break;
        case 11:
            $mnd = "november";
            break;
        case 12:
            $mnd = "desember";
            break;
    }
    $dato = date_format($date_time, "d").". ".$mnd." ".date_format($date_time, "Y");
    $overskrift = $row["overskrift"];
    $innhold = $row["innhold"];
    echo '<div class="article nyhet welcome">';
    echo '<div style="margin-bottom:10px;" id="aktuelt_innlegg_';
    echo $id;
    echo '">';
    echo '<h2><a style="cursor: pointer;" class="aktuelt">';
    echo $overskrift;
    echo '</a></h2>';
    echo '<p class="dato">';
    echo $dato;
    echo '</p><p>';
    echo $innhold;
    echo '</p>
    <div class="knapper">
                <button class="oppdaterAktuelt adminKnapp" name="';
                    echo $id; 
    echo '"><div class="inside"></div></button>
                <form method="post" action="assets/connection/slettAktuelt.php">
                <input type="hidden" name="id" value="';
                    echo $id;
                    echo '">
                <button class="slettAktuelt adminKnapp" name="'; 
                    echo $id; 
    echo '"><div class="inside"></div></button></form>
            </div>
    </div>';
    echo '  <div style="width: 100%;display: none" id="aktuelt_edit_';
                echo $id;
    echo '">    <form method="post" action="assets/connection/oppdaterAktuelt.php">
                    <p>Overskrift:</p>
                        <textarea id="overskrift" maxlength="500" name="overskrift" style="resize: vertical;padding: 5px;width: 100%;">';
                            echo $overskrift;
    echo '</textarea>
                    <p>
                    <p>Innhold:</p>
                        <textarea id="innhold" maxlength="2000" name="innhold" style="resize: vertical;padding: 5px;width: 100%;">';
                            echo $innhold;
    echo '</textarea>
                    <input type="hidden" name="id" value="';
                    echo $id;
                    echo '">
                    </p>
                    <div class="knapper">
                    <button type="submit" class="submitAktuelt" id="oppdater_aktuelt'; 
                        echo $id; 
    echo '"><div class="inside"></div></button>
                </form>
                <button type="button" class="avbrytAktuelt" name="';
                        echo $id; 
    echo '"><div class="inside"></div></button>
            </div></div></div>';
    }
}
?>