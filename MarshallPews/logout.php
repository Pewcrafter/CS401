<?php
session_start();
session_destroy();
header("Location: http://localhost/MarshallPews/Login.php");
exit();
?>
