<div class="addknapper"><button id="addAnsatte" class="add adminKnapp"><div class="inside"></div></button></div>
<?php 
require "conn.php";
$sql = $conn->prepare("SELECT * FROM ansatt WHERE stilling LIKE 'Fastlege%' ORDER BY navn");
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["ansatt_id"];
        $navn= $row["navn"];
        $beskrivelse = $row["beskrivelse"];
        $stilling = $row["stilling"];
        $bilde = $row["bilde"];
        echo '  <div class="ansatt">';
        echo '<div style="margin-bottom:10px;" id="ansatte_innlegg_';
        echo $id;
        echo '">
                    <div style="text-align:center;" class="bilde";>
                        <img src="'; echo $bilde; echo '" alt="Person-ikon">
                        </img>
                        ';
                        if ($bilde != "assets/web/gfx/1.5/user.png") {
                            echo '<form method="post" action="assets/connection/slettAnsattBilde.php">
                            <input type="hidden" name="id" value="';
                            echo $id;
                            echo '">
                            <button class="slettAnsatteBilde adminKnapp" name="'; 
                            echo $id; 
                            echo '"><div class="inside"></div></button></form>';
                        }
        echo '      </div>';
        echo '      <div class="beskrivelse">
                        <h2>';
                            echo $navn;
        echo '          </h2>
                        <p class="stilling">';
                            echo $stilling;
        echo '          </p>
                        <p>';
                            echo $beskrivelse;
        echo '          </p>
                    </div>
                    <div style="clear: both; padding-bottom: 20px;">
                    </div>
                    <div class="knapper">
                <button class="oppdaterAnsatte adminKnapp" name="';
                    echo $id; 
        echo '"><div class="inside"></div></button>
                <form method="post" action="assets/connection/slettAnsatt.php">
                <input type="hidden" name="id" value="';
                    echo $id;
                    echo '">
                <button class="slettAnsatte adminKnapp" name="'; 
                    echo $id; 
        echo '"><div class="inside"></div></button></form>
            </div>
                </div>';
                echo '  <div style="width: 100%;display: none" id="ansatte_edit_';
                echo $id;
    echo '">    <form method="post" action="assets/connection/oppdaterAnsatte.php" enctype="multipart/form-data">
                    <label for="img">Bytt profilbilde</label><br>
                    <input type="file" id="img" name="bilde" accept="image/*"><br><br>
                        <p>Navn:</p>
                        <textarea id="navn" maxlength="500" name="navn" style="resize: vertical;padding: 5px;width: 100%;">';
                            echo $navn;
    echo '</textarea>
                    <p>
                    <p>Stilling:</p>
                        <textarea id="stilling" maxlength="2000" name="stilling" style="resize: vertical;padding: 5px;width: 100%;">';
                            echo $stilling;
    echo '</textarea>
                    </p>
                    <p>Beskrivelse:</p>
                    <textarea id="beskrivelse" maxlength="2000" name="beskrivelse" style="resize: vertical;padding: 5px;width: 100%;">';
                            echo $beskrivelse;
    echo '</textarea>
                    <input type="hidden" name="id" value="';
                    echo $id;
                    echo '">
                    <div class="knapper">
                    <button type="submit" class="submitAnsatte" id="oppdater_ansatte'; 
                        echo $id; 
    echo '"><div class="inside"></div></button>
                </form>
                <button type="button" class="avbrytAnsatte" name="';
                        echo $id; 
    echo '"><div class="inside"></div></button>
            </div></div></div>';
    }   
}
$sql = $conn->prepare("SELECT * FROM ansatt WHERE stilling LIKE 'LIS%' ORDER BY navn");
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["ansatt_id"];
        $navn= $row["navn"];
        $beskrivelse = $row["beskrivelse"];
        $stilling = $row["stilling"];
        $bilde = $row["bilde"];
        echo '  <div class="ansatt">';
        echo '<div style="margin-bottom:10px;" id="ansatte_innlegg_';
        echo $id;
        echo '">
                    <div style="text-align:center;" class="bilde";>
                        <img src="'; echo $bilde; echo '" alt="Person-ikon">
                        </img>
                        ';
                        if ($bilde != "assets/web/gfx/1.5/user.png") {
                            echo '<form method="post" action="assets/connection/slettAnsattBilde.php">
                            <input type="hidden" name="id" value="';
                            echo $id;
                            echo '">
                            <button class="slettAnsatteBilde adminKnapp" name="'; 
                            echo $id; 
                            echo '"><div class="inside"></div></button></form>';
                        }
        echo '      </div>';
        echo '      <div class="beskrivelse">
                        <h2>';
                            echo $navn;
        echo '          </h2>
                        <p class="stilling">';
                            echo $stilling;
        echo '          </p>
                        <p>';
                            echo $beskrivelse;
        echo '          </p>
                    </div>
                    <div style="clear: both; padding-bottom: 20px;">
                    </div>
                    <div class="knapper">
                <button class="oppdaterAnsatte adminKnapp" name="';
                    echo $id; 
        echo '"><div class="inside"></div></button>
                <form method="post" action="assets/connection/slettAnsatt.php">
                <input type="hidden" name="id" value="';
                    echo $id;
                    echo '">
                <button class="slettAnsatte adminKnapp" name="'; 
                    echo $id; 
        echo '"><div class="inside"></div></button></form>
            </div>
                </div>';
                echo '  <div style="width: 100%;display: none" id="ansatte_edit_';
                echo $id;
    echo '">    <form method="post" action="assets/connection/oppdaterAnsatte.php" enctype="multipart/form-data">
                    <label for="img">Bytt profilbilde</label><br>
                    <input type="file" id="img" name="bilde" accept="image/*"><br><br>
                        <p>Navn:</p>
                        <textarea id="navn" maxlength="500" name="navn" style="resize: vertical;padding: 5px;width: 100%;">';
                            echo $navn;
    echo '</textarea>
                    <p>
                    <p>Stilling:</p>
                        <textarea id="stilling" maxlength="2000" name="stilling" style="resize: vertical;padding: 5px;width: 100%;">';
                            echo $stilling;
    echo '</textarea>
                    </p>
                    <p>Beskrivelse:</p>
                    <textarea id="beskrivelse" maxlength="2000" name="beskrivelse" style="resize: vertical;padding: 5px;width: 100%;">';
                            echo $beskrivelse;
    echo '</textarea>
                    <input type="hidden" name="id" value="';
                    echo $id;
                    echo '">
                    <div class="knapper">
                    <button type="submit" class="submitAnsatte" id="oppdater_ansatte'; 
                        echo $id; 
    echo '"><div class="inside"></div></button>
                </form>
                <button type="button" class="avbrytAnsatte" name="';
                        echo $id; 
    echo '"><div class="inside"></div></button>
            </div></div></div>';
    }   
}
$sql = $conn->prepare("SELECT * FROM ansatt WHERE stilling LIKE 'Vikar%' ORDER BY navn");
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["ansatt_id"];
        $navn= $row["navn"];
        $beskrivelse = $row["beskrivelse"];
        $stilling = $row["stilling"];
        $bilde = $row["bilde"];
        echo '  <div class="ansatt">';
        echo '<div style="margin-bottom:10px;" id="ansatte_innlegg_';
        echo $id;
        echo '">
                    <div style="text-align:center;" class="bilde";>
                        <img src="'; echo $bilde; echo '" alt="Person-ikon">
                        </img>
                        ';
                        if ($bilde != "assets/web/gfx/1.5/user.png") {
                            echo '<form method="post" action="assets/connection/slettAnsattBilde.php">
                            <input type="hidden" name="id" value="';
                            echo $id;
                            echo '">
                            <button class="slettAnsatteBilde adminKnapp" name="'; 
                            echo $id; 
                            echo '"><div class="inside"></div></button></form>';
                        }
        echo '      </div>';
        echo '      <div class="beskrivelse">
                        <h2>';
                            echo $navn;
        echo '          </h2>
                        <p class="stilling">';
                            echo $stilling;
        echo '          </p>
                        <p>';
                            echo $beskrivelse;
        echo '          </p>
                    </div>
                    <div style="clear: both; padding-bottom: 20px;">
                    </div>
                    <div class="knapper">
                <button class="oppdaterAnsatte adminKnapp" name="';
                    echo $id; 
        echo '"><div class="inside"></div></button>
                <form method="post" action="assets/connection/slettAnsatt.php">
                <input type="hidden" name="id" value="';
                    echo $id;
                    echo '">
                <button class="slettAnsatte adminKnapp" name="'; 
                    echo $id; 
        echo '"><div class="inside"></div></button></form>
            </div>
                </div>';
                echo '  <div style="width: 100%;display: none" id="ansatte_edit_';
                echo $id;
    echo '">    <form method="post" action="assets/connection/oppdaterAnsatte.php" enctype="multipart/form-data">
                    <label for="img">Bytt profilbilde</label><br>
                    <input type="file" id="img" name="bilde" accept="image/*"><br><br>
                        <p>Navn:</p>
                        <textarea id="navn" maxlength="500" name="navn" style="resize: vertical;padding: 5px;width: 100%;">';
                            echo $navn;
    echo '</textarea>
                    <p>
                    <p>Stilling:</p>
                        <textarea id="stilling" maxlength="2000" name="stilling" style="resize: vertical;padding: 5px;width: 100%;">';
                            echo $stilling;
    echo '</textarea>
                    </p>
                    <p>Beskrivelse:</p>
                    <textarea id="beskrivelse" maxlength="2000" name="beskrivelse" style="resize: vertical;padding: 5px;width: 100%;">';
                            echo $beskrivelse;
    echo '</textarea>
                    <input type="hidden" name="id" value="';
                    echo $id;
                    echo '">
                    <div class="knapper">
                    <button type="submit" class="submitAnsatte" id="oppdater_ansatte'; 
                        echo $id; 
    echo '"><div class="inside"></div></button>
                </form>
                <button type="button" class="avbrytAnsatte" name="';
                        echo $id; 
    echo '"><div class="inside"></div></button>
            </div></div></div>';
    }   
}
?>
