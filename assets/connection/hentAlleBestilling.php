<div class="addknapper"><button id="addBestilling" class="add adminKnapp"><div class="inside"></div></button></div>
<?php 
require "conn.php";
$sql = $conn->prepare("SELECT * FROM bestilling ORDER BY bestilling_id DESC");
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["bestilling_id"];
        $overskrift= $row["overskrift"];
        $innhold = $row["innhold"];
        echo '<div style="margin-bottom:10px;" id="bestilling_innlegg_';
        echo $id;
        echo '">';
        echo '  <div class="article">
                    <h2>';
                        echo $overskrift;
        echo '      </h2>
                    <p>';
                        echo $innhold;
        echo '      </p>
        <div class="knapper">
                <button class="oppdaterBestilling adminKnapp" name="';
                    echo $id; 
        echo '"><div class="inside"></div></button>
                <form method="post" action="assets/connection/slettBestilling.php">
                <input type="hidden" name="id" value="';
                    echo $id;
                    echo '">
                <button class="slettBestilling adminKnapp" name="'; 
                    echo $id; 
        echo '"><div class="inside"></div></button></form>
            </div>
                </div></div>';      
                echo '  <div style="width: 100%;display: none" id="bestilling_edit_';
                echo $id;
    echo '">    <form method="post" action="assets/connection/oppdaterBestilling.php">
                    <p>Overskrift:</p>
                        <textarea id="overskrift_textarea_bestilling" maxlength="500" name="overskrift" style="padding: 5px;width: 100%;">';
                            echo $overskrift;
    echo '</textarea>
                    <p>
                    <p>Innhold:</p>
                        <textarea id="innhold_textarea_bestilling" maxlength="2000" name="innhold" style="padding: 5px;width: 100%;">';
                            echo $innhold;
    echo '</textarea>
                    <input type="hidden" name="id" value="';
                    echo $id;
                    echo '">
                    </p>
                    <div class="knapper">
                    <button type="submit" class="submitBestilling" id="'; 
                        echo $id; 
    echo '"><div class="inside"></div></button>
                </form>
                <button type="button" class="avbrytBestilling" name="';
                        echo $id; 
    echo '"><div class="inside"></div></button>
            </div></div>';  
    }   
}
?>