<?php 
require "conn.php";
$sql = $conn->prepare("SELECT * FROM bestilling");
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["bestilling_id"];
        $overskrift= $row["overskrift"];
        $innhold = $row["innhold"];

        echo '  <div class="article">
                    <h2>';
                        echo $overskrift;
        echo '      </h2>
                    <p>';
                        echo $innhold;
        echo '      </p>
                </div>';
    }   
}
?>