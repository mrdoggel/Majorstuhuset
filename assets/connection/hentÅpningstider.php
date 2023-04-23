<?php
require "conn.php";
$sql = $conn->prepare("SELECT * FROM apningstider WHERE apningstider_id = 1");
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      	$id = $row['apningstider_id'];
      	echo '	<div style="margin-bottom:10px;" id="apningstider_innlegg_';
      	echo 		$id;
    	echo '">';
      	echo '<div class="text1">';
		echo '<p>';
		echo $row['innhold'];
        echo '</p>';
      	echo '</div>';
      	echo '<div class="sidebarKnapp">';
		echo '<button id="oppdaterApningstider" class="oppdaterApningstider adminKnapp" name="1"><div class="inside"></div></button></div>';
      	echo '</div><div style="width: 100%;display: none" id="apningstider_edit_';
      	echo $id;
      	echo '"><form method="post" action="assets/connection/oppdaterApningstider.php">
        				<p>Innhold:</p>
                        <textarea id="overskrift" maxlength="500" name="innhold" style="resize: vertical;padding: 5px;width: 100%;">';
                            echo $row['innhold'];
    	echo '</textarea><input type="hidden" name="id" value="';
                    echo $id;
                    echo '">
                    </p>
                    <div class="knapper">
                    <button type="submit" class="submitAktuelt" id="oppdater_apningstider'; 
                        echo $id; 
    	echo '"><div class="inside"></div></button>
                </form>
                <button type="button" id="avbrytApningstider" class="avbrytApningstider" name="';
      	echo $id; 
    	echo '"><div class="inside"></div></button></div></div>';
	}
}
?>