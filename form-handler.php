<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$email_from = 'info@stridein.co';
$email_subject = 'New Form Submission';

$email_body = "First Name: $first_name\n".
              "Last Name: $last_name\n".
              "Phone Number: $phone\n".
              "Email Address: $email\n";

$to = 'ntokozomnyandu665@gmail.com';

$headers = "From: $email_from\r\n";
$headers .= "Reply-To: $email\r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
exit();
?>