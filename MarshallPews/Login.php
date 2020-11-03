<?php
	session_start();
?>

<html>
	<head>
		<title>The Marshall Company Pews</title>
		<link rel="stylesheet" type="text/CSS" href="src/CSS/style.css">
	</head>
	<body>
		<?php
			require_once 'header.php';
		?>
		<h1>Login</h1>
    		<form method="post" action="login_handler.php">
     			<div class="login_field">Username: <input type="text" name="username"value = "<?php 
				if(!empty($_SESSION['username'])){
					echo $_SESSION['username'];
					unset($_SESSION['username']);
				}
				?>"	
			/>
			</div>
   			<div class="login_field">Password:&nbsp <input type="password" name="password"/></div>
			<p class="p_error" id="invalid_password">
				<?php 
				if(!empty($_SESSION['login_error'])){
					echo $_SESSION['login_error'];
					unset($_SESSION['login_error']);
				}
				?>	
			</p>
    		 	<div class="login_button"><input type="submit" value="Login"></div>
			
   		</form>
		<p> Don't have an account? <a href="Create_account.php"> Create One! </a></p>
		<?php	
			require_once 'footer.php';
		?>
	</body>
</html>