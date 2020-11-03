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
		<h1>Create Account</h1>
    		<form method="post" action="create_account_handler.php">
     			<div class="login_field">Username: <input type="text" name="username"value = "<?php 
				if(!empty($_SESSION['username'])){
					echo $_SESSION['username'];
					unset($_SESSION['username']);
				}
				?>"	
			/>
			</div>
			<p class="p_error" id="username_error">
				<?php 
				if(!empty($_SESSION['username_error'])){
					echo $_SESSION['username_error'];
					unset($_SESSION['username_error']);
				}
				?>	
			</p>
   			<div class="login_field">Password:&nbsp <input type="password" name="password"/></div>
			<p class="p_error" id="invalid_password">
				<?php 
				if(!empty($_SESSION['password_error'])){
					echo $_SESSION['password_error'];
					unset($_SESSION['password_error']);
				}
				?>	
			</p>
    		 	<div class="login_button"><input type="submit" value="Create Account"></div>
			
   		</form>
		<p> Already have an account? <a href="Login.php"> Login! </a></p>
		<?php	
			require_once 'footer.php';
		?>
	</body>
</html>