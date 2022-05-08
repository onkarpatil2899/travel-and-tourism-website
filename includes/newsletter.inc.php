<?php 
use PHPMailer\PHPMailer\PHPMailer;
if (isset($_POST["submit"])){
	
	$Emails = $_POST["Emails"];
	
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php'; 
	require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

	$mail = new PHPMailer();
	
	//SMTP Settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "onkarpatil2899@gmail.com";  
    $mail->Password = 'majnal@2668';
    $mail->Port = 465; //587
    $mail->SMTPSecure = "ssl"; //tls
	
	
	// Email Settings
    $mail->isHTML(true);
    $mail->setFrom($Emails);
    $mail->addAddress("$Emails");    
    $mail->Subject = ("Subscription");
    $mail->Body = ("Thanks for subscribing.");
	
	if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
		
	json_encode(array("status" => $status, "response" => $response));
	
	
	
	if(invalidEmails($Emails)!== false)  {
	header("location: ../index1.php?error=invalidemail");
    exit();	
	}
	if(uidExistss($conn,$Emails)!== false)  {
	header("location: ../index1.php?error=usernametaken");
    exit();	
	} 
	createUserss($conn, $Emails); 

	
	}
else {
   header("location: ../index1.php");
   exit();
     }   
	