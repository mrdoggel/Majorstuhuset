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
                <button class="slettHjem" name="'; 
                    echo $id; 
    echo '"><div class="inside"></div></button>
            </div></div>';

    echo '  <div style="width: 100%;display: none" id="hjem_edit_';
                echo $id;
    echo '">    <form method="post" action="">
                        <textarea id="overskrift_textarea" maxlength="500" name="overskrift" style="padding: 5px;width: 100%;">';
                            echo $overskrift;
    echo '</textarea>
                    <p>
                        <textarea id="innhold_textarea" maxlength="2000" name="innhold" style="padding: 5px;width: 100%;">';
                            echo $innhold;
    echo '</textarea>
                    </p>
                    <div class="knapper">
                    <button type="submit" class="submitHjem" id="oppdater_hjem'; 
                        echo $id; 
    echo '"><div class="inside"></div></button>
                </form>
                <button class="avbrytHjem" name="';
                        echo $id; 
    echo '"><div class="inside"></div></button>
            </div></div>';

    }
}
?>