<?php 
require "conn.php";
$sql = $conn->prepare("SELECT * FROM aktuelt");
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $id = $row["aktuelt_id"];
    $dato = $row["dato"];
    $overskrift = $row["overskrift"];
    $innhold = $row["innhold"];
    echo '<div class="article nyhet welcome">';
    echo '<h2><a style="cursor: pointer;" class="aktuelt">';
    echo $overskrift;
    echo '</a></h2>';
    echo '<p class="dato">';
    echo $dato;
    echo '</p><p>';
    echo $innhold;
    echo '</p>
    <div class="knapper">
                <button class="oppdater" name="';
                    echo $id; 
    echo '"><div class="inside"></div></button>
                <button class="slett" name="'; 
                    echo $id; 
    echo '"><div class="inside"></div></button>
            </div>
    </div>';
    }
}
?>