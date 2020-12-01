<?php
session_start();
?>
<html>
	<head>
		<title>The Marshall Company Homepage</title>
		<link rel="stylesheet" type="text/CSS" href="src/CSS/style.css">
		<link rel="shortcut icon" href="src/img/favicon.ico" type="image/x-icon"/>
	</head>
	<body>
		<?php
			require_once 'header.php';
		?>

		<div class="about_us_text_box"> The long about us section goes here . . . 
			<br> and here . . .
			<br> and here . . .
			<br> and here . . .
			<br> and here . . .
			<br> and here . . .
			<br> and here . . .
		</div>	
		<div class ="our_projects_grid">
			<img src="src/img/placeholder.png">
			<img src="src/img/placeholder.png">
			<img src="src/img/placeholder.png">
			<img src="src/img/placeholder.png">
			<img src="src/img/placeholder.png">
			<img src="src/img/placeholder.png">
			<img src="src/img/placeholder.png">
			<img src="src/img/placeholder.png">
			<img src="src/img/placeholder.png">
		</div>

		<?php	
			require_once 'footer.php';
		?>

	</body>
</html>