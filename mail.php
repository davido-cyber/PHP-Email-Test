<?php
//get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$message = $_POST['message'];
$number = $_POST['mobile'];

$to = "qdawg115@gmail.com";

$subject = "Mail From Calendy";
$txt ="Name = ". $name . "\r\nEmail = " . $email . "\r\nMessage ="  . $message ." 
	\r\n Mobile number =". $number;

$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
	mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>