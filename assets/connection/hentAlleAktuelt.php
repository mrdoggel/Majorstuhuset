<div class="addknapper"><button id="addAktuelt" class="add"><div class="inside"></div></button></div>
<?php 
require "conn.php";
$sql = $conn->prepare("SELECT * FROM aktuelt ORDER BY aktuelt_id DESC");
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $id = $row["aktuelt_id"];
    $dato = $row["dato"];
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
                <button class="oppdaterAktuelt" name="';
                    echo $id; 
    echo '"><div class="inside"></div></button>
                <form method="post" action="assets/connection/slettAktuelt.php">
                <input type="hidden" name="id" value="';
                    echo $id;
                    echo '">
                <button class="slettAktuelt" name="'; 
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