<?php header('Content-Type: text/html; charset=utf-8'); session_start();?>
<!DOCTYPE html>
<html lang="no">
	<head>
		<title>Majorstuhuset Legegruppe</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<meta name="viewport" content="width=device-width, initial-scale=1">	
      	<meta charset="UTF-8">
		<link rel="stylesheet" href="assets/css/common.css" type="text/css" />
		<link rel="stylesheet" href="assets/css/1.5/stil.css" type="text/css" />
		<link rel="stylesheet" href="assets/css/appointment-booking.css" type="text/css" />
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/1.5/ie8-and-down.css" type="text/css" />
		<![endif]-->
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/1.5/ie7.css" type="text/css" />
		<![endif]-->
	</head>
	<body class="employees">
		<script src="assets/js/jquery.min.js" type="text/javascript"></script>
		<a class="show-on-focus skip-to-start-of-content" href="/ansatte/#start-of-content">Hopp til hovedinnhold</a>
		<?php 
			require "assets/gjenbruk/header/headerwrapper.php";
			require "assets/gjenbruk/body/bodywrapper.php";
			require "assets/gjenbruk/footer/footerwrapper.php";
		?>
	</body>
</html>
<script src="assets/js/skifte.js" type="text/javascript"></script>
<script src="assets/js/skifte2.js" type="text/javascript"></script>
<script src="assets/js/general.js" type="text/javascript"></script>
<script src="assets/js/iframe-resizer.js"></script>
<script src="assets/js/remember.js" type="text/javascript"></script>
<?php
if (isset($_SESSION['id'])) {
	echo '<script>adminkeys = document.getElementsByClassName("adminKnapp");for (let i = 0; i < adminkeys.length; i++) {adminkeys[i].style.display = "inline";}</script>';
}
?>