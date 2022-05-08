<?php


function emptyInputSign1($name, $email, $username, $pwd){
	$result;
	if (empty($name)|| empty($email)|| empty($username)|| empty($pwd)){
		$result=true;
	}
    else{
     $result=false;
	}
	return $result;
}

function invalidUid($username){
	$result;
	if (!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		$result=true;
	}
    else{
     $result=false;
	}
	return $result;
}
function invalidEmail($email){
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$result= true;
	}
    else{
     $result= false;
	}
	return $result;
}
function uidExists($conn, $username, $email) {
	$sql = "SELECT * FROM users WHERE userUid= ? OR userEmail = ?;"; 
    $stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../sign1.php?error=stmtfailed1");
    exit();
	}
	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if ($row = mysqli_fetch_assoc($resultData)){
		return $row;
		
	}
    else {
     $result = false;
     return $result;	 
	}	
	
	mysqli_stmt_close($stmt);
	
}


function createUser($conn, $name, $email, $username, $pwd){
	$sql = "INSERT INTO users (userName, userEmail, userUid, userPwd) VALUES(?,?,?,? )";
    $stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../sign1.php?error=stmtfailed2");
    exit();
	}
	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
	
	
	mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
	mysqli_stmt_execute($stmt);	
	
	mysqli_stmt_close($stmt);	
	header("location: ../sign1.php?error=none");
    exit();
	
}
function emptyInputLogin( $username, $pwd){
	$result;
	if ( empty($username)|| empty($pwd)){
		$result=true;
	}
    else{
     $result=false;
	}
	return $result;
}

function loginUser($conn, $username, $pwd){
	$uidExists =  uidExists($conn, $username,  $username);
	
	if($uidExists === false) {
		header("location: ../sign1.php?error=Invalid Credentials");
        exit();	
	}
	$pwdHashed = $uidExists["userPwd"];
	$checkPwd = password_verify($pwd, $pwdHashed);
	
	if($checkPwd === false){
		header("location: ../sign1.php?error=Invalid Credentials2");
        exit();
		
	}
	 else if($checkPwd === true) {
		 session_start();
		 $_SESSION["userid"] = $uidExists["userId"];
		 $_SESSION["useruid"] = $uidExists["userUid"];
		 header("location: ../index1.php");
         exit();
		 
	 }
	
}





function invalidEmails($Emails){
	$result;
	if (!filter_var($Emails, FILTER_VALIDATE_EMAIL)){
		$result= true;
	}
    else{
     $result= false;
	}
	return $result;
}
function uidExistss($conn,$Emails) {
	$sql = "SELECT * FROM newsletter WHERE  userEmails = ?;"; 
    $stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../index1.php?error=stmtfailed11");
    exit();
	}
	mysqli_stmt_bind_param($stmt, "s", $Emails);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if ($row = mysqli_fetch_assoc($resultData)){
		return $row;
		
	}
    else {
     $result = false;
     return $result;	 
	}	
	
	mysqli_stmt_close($stmt);
	
}

function createUserss($conn, $Emails){
	$sql = "INSERT INTO newsletter ( userEmails) VALUES(?)";
    $stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../sign1.php?error=stmtfailed22");
    exit();
	}
	mysqli_stmt_bind_param($stmt, "s", $Emails);
	mysqli_stmt_execute($stmt);	
	
	mysqli_stmt_close($stmt);	
	header("location: ../index1.php?error=none");
    exit();
	
}

					  
						  








 
                       
	 
		
		