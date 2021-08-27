<?php
$name = $_POST['name'];
$visitor_email=$_POST['email'];
$subject = $_POST['subject'];
$message = $-POST['message'];

$email_form='sprakash6233@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name:$name.\n".
              "user Email:$visitor_email.\n".
              "Subject:$subject.\n".
              "User Message:$message.\n";

$to = 'sprakash6233@gmail.com';

$header = "From: $email_from\r\n";

$header .="Reply-To:$visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);

header("Location: contact.html");
?>