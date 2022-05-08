<?php 

if (isset($_POST["submit"])){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$username = $_POST["uid"];
	$pwd = $_POST["pwd"];
	
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php'; 
	
	
	if(emptyInputSign1($name, $email, $username, $pwd) == true)  {
	header("location: ../sign1.php?error=emptyinput");
    exit();	
	}
	if(invalidUid($username)!== false)  {
	header("location: ../sign1.php?error=invaliduid");
    exit();	
	}
	if(invalidEmail($email)!== false)  {
	header("location: ../sign1.php?error=invalidemail");
    exit();	
	}
	if(uidExists($conn,$username, $email)!== false)  {
	header("location: ../sign1.php?error=usernametaken");
    exit();	
	} 
	createUser($conn, $name, $email, $username, $pwd); 
	}
else {
   header("location: ../sign1.php");
   exit();
     }   
	