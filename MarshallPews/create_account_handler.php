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
	$_SESSION['username_error'] = "Username must be between 8-64 characters and cant contain any whitespace or special characters.";
	$error = true;
}
if ($password == "validation error"){
	$_SESSION['password_error'] = "Password must be between 8-64 characters and cant contain any whitespace or special characters.";
	$error = true;
}

if(!$error){
	if ($dao->usernameExists($username)) {
		$_SESSION['username_error'] = "Sorry, that username is already in use. Please try another.";
		header("Location: http://marshallpews.herokuapp.com/Create_account.php");
		exit();
	} else if ($dao->addUser($username, $password)) {
		header("Location: http://marshallpews.herokuapp.com/Login.php");
		exit();
	}
} else {
	header("Location: http://marshallpews.herokuapp.com/Create_account.php");
}