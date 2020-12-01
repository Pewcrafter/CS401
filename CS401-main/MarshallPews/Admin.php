<?php
session_start();

require_once "Dao.php";
?>

<html>
	<head>
		<title>The Marshall Company Admin Page</title>
		<link rel="stylesheet" type="text/CSS" href="src/CSS/style.css">
		<script src="src/JQuery/jquery-3.5.1.js"></script>
		<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	</head>
	<body>
		<?php
			if (array_key_exists('authenticated', $_SESSION)){
				if ($_SESSION['authenticated'] == true){
					require_once 'header.php';
					echo "<p> Admin page! </p>";
				}
			}
		?>


		<?php 
		if (array_key_exists('authenticated', $_SESSION)){
			if ($_SESSION['authenticated'] == true){
				$dao = new Dao();
				$users = $dao->getUsers();
				echo "<p>Username |"." Date_Created</p>";
				foreach ($users as $user){
				echo "<p>".htmlspecialchars($user['username'])." | ".$user['date_created']."</p>"; }
				require_once 'footer.php';
			} 
		} else {
			echo "<div id = 'hehe'> <p id = 'gothim' style='font-size: 50px;'> Welcome [#adminname], click anywhere to view user data </p> <video id = 'vid' width='100%' height='100%' style='display: none' loop><source src='src/lmao/jebaited.mp4' type = 'video/mp4'></video></div>";
			echo "<script>$( document ).click(function() {  $( '#vid' ).show(); $( '#gothim' ).hide(); $( '#vid' ).effect( 'shake' ); $( '#vid' ).get(0).play();});</script>";
			}
		?>
	</body>
</html>