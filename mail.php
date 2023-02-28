<?php
//get data from form  

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];
$mobile= $_POST['phone'];
$message= $_POST['message'];
$to = "pkonalupes@gmail.com";
$subject = "Mail From website";
$txt ="FirstName = ". $firstname . \r\n "LastName = ". $lastname . \r\n  "Email = " . $email . \r\n "phone =" . $phone \r\n "Message =" . $message;
$headers = "From: noreply@KPportfolio.com" . "\r\n" .
// "CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>