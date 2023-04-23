<?php
require "conn.php";
$sql = $conn->prepare("SELECT * FROM kontakt WHERE kontakt_id = 1");
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      	$id = $row['kontakt_id'];
      	echo '	<div style="margin-bottom:10px;" id="sidebar_innlegg_';
    	echo 		$id;
    	echo '">';
      	echo '<h3>Kontakt</h3>';
      	echo '<div class="text1">';
      	echo $row['kontakt_innhold'];
      	echo '</div>';
      	echo '<br/><h3>Besøk</h3>';
      	echo '<div class="text2">';
		echo $row['besok_innhold'];
      	echo '</div><br>';
      	echo '<div class="sidebarKnapp">';
        echo '<button id="oppdaterKontakt" class="oppdaterKontakt adminKnapp" name="1"><div class="inside"></div></button></div><br><br>';
      	echo '</div><div style="width: 100%;display: none" id="sidebar_edit_';
      	echo $id;
      	echo '"><form method="post" action="assets/connection/oppdaterKontakt.php">
        				<p>Kontakt:</p>
                        <textarea id="overskrift" maxlength="500" name="kontakt" style="resize: vertical;padding: 5px;width: 100%;">';
                            echo $row['kontakt_innhold'];
    	echo '</textarea>
                    <p><p>Besøk:</p>
                        <textarea id="innhold" maxlength="2000" name="besok" style="resize: vertical;padding: 5px;width: 100%;">';
                            echo $row['besok_innhold'];
    	echo '</textarea>
                    <input type="hidden" name="id" value="';
                    echo $id;
                    echo '">
                    </p>
                    <div class="knapper">
                    <button type="submit" class="submitAktuelt" id="oppdater_sidebar'; 
                        echo $id; 
    	echo '"><div class="inside"></div></button>
                </form>
                <button type="button" id="avbrytSidebar" class="avbrytSidebar" name="';
      	echo $id; 
    	echo '"><div class="inside"></div></button></div></div>';
	}
}
?>