<?php
  if (isset($_POST['send-message'])) {
    // Retrieve form data and send email
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'shionjee7@gmail.com';
    $subject = 'Message from ' . $fullname;
    $body = "Full Name: $fullname\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
      echo 'Your message was sent successfully!';
    } else {
      echo 'There was an error sending your message.';
    }
  }
?>
