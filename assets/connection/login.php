<?php
$errors = array();

require_once("conn.php");

if (isset($_POST['login_button'])) {
  $username = mysqli_real_escape_string($conn, $_POST['brukernavn']);
  $username = strtolower($username);
  $password = mysqli_real_escape_string($conn, $_POST['passord']);

  if (empty($username)) {
  	array_push($errors, "Epost kreves");
  }
  if (empty($password)) {
  	array_push($errors, "Passord kreves");
  }

  if (count($errors) == 0) {
    $sql = $conn->prepare("SELECT * FROM innlogging WHERE brukernavn = ?");
    $sql->bind_param("s", $username);
    $sql->execute();
    $result = $sql->get_result();
  	if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
         $hash = $row['passord'];
         if ($password == $hash) {
                session_start();
                $_SESSION['id'] = $row['inlogging_id'];
  	            header('location:../../index.php?logget_inn');
         }
      }
  	}else {
  		array_push($errors, "Feil brukernavn/passord kombinasjon");
  	}
  }
}

?>