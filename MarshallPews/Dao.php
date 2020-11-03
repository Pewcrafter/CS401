<?php
require_once 'KLogger.php';

class Dao {

  private $host = "localhost";
  private $db = "marshallpews";
  private $user = "root";
  private $pass = "admin1234";
  private $logger;

  public function __construct () {
    $this->logger = new KLogger ("log.txt" , KLogger::DEBUG);
  }


  public function getConnection () {
    $this->logger->LogDebug("Making connection");
    try {
      $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
      return $conn;
    } catch (Exception $e) {
      //echo print_r($e,1);
      $this->logger->LogFatal("Whoospie, database didnt load: " . print_r($e, 1));
      exit;
    }
  }

  public function getUsers () {
	$conn = $this->getConnection();
	return $conn->query("select username, date_created from USERS order by date_created desc", PDO::FETCH_ASSOC);
  }

  public function addUser ($username, $password) {
    $this->logger->LogInfo("adding user: [{$username}]");
    $conn = $this->getConnection();
    $saveQuery = "insert into users (username, password) values (:username, :password)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":username", $username);
    $q->bindParam(":password", $password);
    return $q->execute();
  }

  public function deleteUser ($id) {
    $this->logger->LogInfo("deleting user: [{$id}]");
    $conn = $this->getConnection();
    $deleteQuery = "delete from users where ID = :id";
    $q = $conn->prepare($deleteQuery);
    $q->bindParam(":id", $id);
    return $q->execute();
  }

  public function login ($username, $password){
	$conn = $this->getConnection();
	$this->logger->LogInfo("logging in user: [{$username}]");
	$loginQuery="SELECT ID FROM USERS where username = :username and password = :password";
	$q = $conn->prepare($loginQuery);
	$q->bindParam(":username", $username);
	$q->bindParam(":password", $password);
	$q->execute();
	$result = $q->fetch();
	if ((array_values($result)[0][0]) > 0){
		return true;
	} else { 
		return false; 
	}
  }

  public function usernameExists ($username){
	$conn = $this->getConnection();
	$this->logger->LogInfo("seeing if [{$username}] exists.");
	$saveQuery="SELECT ID FROM USERS where username = :username";
	$q = $conn->prepare($saveQuery);
	$q->bindParam(":username", $username);
	$q->execute();
	$result = $q->fetch();
	if ((array_values($result)[0][0]) > 0){
		return true;
	} else { 
		return false; 
	}
	
  }
	
  public function validate_input($toVal){
	if (preg_match("/^[a-zA-Z0-9]{8,64}$/", $toVal)){
		return $toVal;
	} else {
		return "validation error";
	}
  }
}


