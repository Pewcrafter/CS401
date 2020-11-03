<?php
session_start();

require_once "Dao.php";

$dao = new Dao();

$error = false;
$username = $dao->validate_input($_POST['username']);
$_SESSION['username'] = htmlspecialchars($_POST['username']);
$password = $dao->validate_input($_POST['password']);

//Validation
if ($username == "validation error"){
	$_SESSION['login_error'] = "Incorrect username or password";
	$error = true;
}
if ($password == "validation error"){
	$_SESSION['login_error'] = "Incorrect username or password";
	$error = true;
}

if(!$error){
	if ($dao->login($username, $password)) {
		$_SESSION['authenticated'] = true;
		header("Location: http://marshallpews.herokuapp.com/Admin.php");
		exit();
	} else {
		$_SESSION['authenticated'] = false;
		$_SESSION['login_error'] = "Incorrect username or password";
		header("Location: http://marshallpews.herokuapp.com/Login.php");
		exit();
	}
} else {
	$_SESSION['login_error'] = "Incorrect username or password";
	header("Location: http://marshallpews.herokuapp.com/Login.php");
}