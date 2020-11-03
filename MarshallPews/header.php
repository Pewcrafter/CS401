
	<a href="index.php"> <img src="src/img/header-logo.png"> </a>
	<div class="hotbar">
		<a href="Pews.php" class="hotbar_button" id="pews_button">Pews</a>
		<a href="Pew_ends.php" class="hotbar_button" id="pew_ends_button">Pew Ends</a>
		<a href="Chancel.php" class="hotbar_button" id="chancel_button">Chancels</a>
		<a href="Chairs.php" class="hotbar_button" id="chair_button">Chairs</a>
		<a href="Accessories.php" class="hotbar_button" id="accessories_button">Accessories</a>
		<a href="Contact_us.php" class="hotbar_button" id="contact_button">Contact Us</a>
		<a href="Login.php" class="hotbar_button" id="login_button">Login</a>
		<a href="Admin.php" class="hotbar_button" id="admin">Admin</a>
	</div>

	<?php if(!empty($_SESSION['authenticated'])){ if($_SESSION['authenticated']){ ?>
	<script type="text/javascript">document.getElementById('admin').style.display = 'inline';</script>
	<?php } } ?>


	
