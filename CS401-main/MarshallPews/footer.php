	<div class ="footer">
		<p> This is the footer | I'll fill this with relevent info and a hyperlink or two </p>
		<a href="logout.php" id="logout"> Logout </a>
	</div>

	<?php if(!empty($_SESSION['authenticated'])){ if($_SESSION['authenticated']){ ?>
	<script type="text/javascript">document.getElementById('logout').style.display = 'inline';</script>
	<?php } } ?>

