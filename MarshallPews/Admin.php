<?php
session_start();

require_once "Dao.php";
?>

<html>
	<head>
		<title>The Marshall Company Admin Page</title>
		<link rel="stylesheet" type="text/CSS" href="src/CSS/style.css">
	</head>
	<body>
		<?php
			require_once 'header.php';
		?>

		<p> Admin page! </p>

		<?php 
			$dao = new Dao();
			$users = $dao->getUsers();
			echo "<p>Username |"." Date_Created</p>";
			foreach ($users as $user){
			echo "<p>".htmlspecialchars($user['username'])." | ".$user['date_created']."</p>"; }
			require_once 'footer.php';
		?>
	</body>
</html>