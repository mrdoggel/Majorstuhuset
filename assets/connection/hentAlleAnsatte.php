<?php 
require "conn.php";
$sql = $conn->prepare("SELECT * FROM ansatt");
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["ansatt_id"];
        $navn= $row["navn"];
        $beskrivelse = $row["beskrivelse"];
        $stilling = $row["stilling"];
        $bilde = $row["bilde"];

        echo '  <div class="ansatt">
                    <div class="bilde">
                        <img src="'; echo $bilde; echo '" alt="Person-ikon">
                        </img>
                    </div>';
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
                </div>';
    }   
}
?>
