<div class="addknapper"><button id="addHjem" class="add"><div class="inside"></div></button></div>
<?php 
require "conn.php";
$sql = $conn->prepare("SELECT * FROM hjem");
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $id = $row["hjem_id"];
    $overskrift = $row["overskrift"];
    $innhold = $row["innhold"];
    echo '  <div style="margin-bottom:10px;" id="hjem_innlegg_';
                echo $id;
    echo '">
                <h1>';
                    echo $overskrift;
    echo '      </h1>
                <p>';
                    echo $innhold;
    echo '      </p>
                <div class="knapper">
                <button class="oppdaterHjem" name="';
                    echo $id; 
    echo '"><div class="inside"></div></button>
                <form method="post" action="assets/connection/slettHjem.php">
                <input type="hidden" name="id" value="';
                    echo $id;
                    echo '">
                <button class="slettHjem" name="'; 
                    echo $id; 
    echo '"><div class="inside"></form></div></button>
            </div></div>';

    echo '  <div style="width: 100%;display: none" id="hjem_edit_';
                echo $id;
    echo '">    <form method="post" action="assets/connection/oppdaterHjem.php">
                        <p>Overskrift:</p>
                        <textarea id="overskrift_textarea" maxlength="500" name="overskrift" style="padding: 5px;width: 100%;">';
                            echo $overskrift;
    echo '</textarea>
                    <p>
                    <p>Innhold:</p>
                        <textarea id="innhold_textarea" maxlength="2000" name="innhold" style="padding: 5px;width: 100%;">';
                            echo $innhold;
    echo '</textarea>
                    <input type="hidden" name="id" value="';
                    echo $id;
                    echo '">
                    </p>
                    <div class="knapper">
                    <button type="submit" class="submitHjem" id="oppdater_hjem'; 
                        echo $id; 
    echo '"><div class="inside"></div></button>
                </form>
                <button type="button" class="avbrytHjem" name="';
                        echo $id; 
    echo '"><div class="inside"></div></button>
            </div></div>';

    }
}
?>