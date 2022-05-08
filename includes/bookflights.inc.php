<?php 
session_start();
use PHPMailer\PHPMailer\PHPMailer;
if (isset($_POST["submit"])){
    $location = $_POST["location"];
	$checkin = $_POST["checkin"];
	$checkout = $_POST["checkout"];
	
	
	
    require_once 'dbh.inc.php';
	require_once 'functions.inc.php'; 
	require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
	   
				
	$Name = ( isset($_SESSION["useruid"]) ? $_SESSION["useruid"] : '' );
    if ( empty( $Name ) ){
           header("location: ../sign1.php");
           exit();
         }

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "onkar.patil@sakec.ac.in";  
    $mail->Password = '';
    $mail->Port = 465; //587
    $mail->SMTPSecure = "ssl"; 
	
	

    $mail->isHTML(true);
    $mail->setFrom("onkar.patil@sakec.ac.in");
    $mail->addAddress("onkarpatil2899@gmail.com");    
    $mail->Subject = (" Flight Details");
    $mail->Body = ("Location :-$location  <br>    Check-In Date:-$checkin  <br>   Check-Out Date:-$checkout  ");
	
	if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
		
	json_encode(array("status" => $status, "response" => $response));
    header("location: ../index1.php");
        exit();	
}
