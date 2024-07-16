<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "iqbaltsyn@gmail.com";
  $subject = "New Contact Form Submission";
  $body = "Full Name: $fullname\nEmail: $email\n\nMessage:\n$message";

  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Message successfully sent.";
  } else {
    echo "Message sending failed.";
  }
}
?>
