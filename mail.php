<?php
 
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];



$to="neethamariam05@gmail.com";
$subject='Enquiry from DevOps Website';
$formcontent=" From: $name \n Phone : $phone \n Email : $email  \n Message : $message ";
$headers = "From: noreplay@enquiry.com\r\n";
$headers .= "Reply-To: noreplay@enquiry.com\r\n";


if ( mail($to,$subject,$formcontent,$headers) ) {
   
$message = "Successfully";
  echo "<script type='text/javascript'>alert('$message');window.location='index.html';</script>";
   } 
else 
{
    $message2 = "Failed";
 
}
   ?>
