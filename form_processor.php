<?php
  // Receive form Data
  $name = $_POST['name'];
  $email = $_POST['email'];

  // Process data (e.g., validation, sanitization)
  // ...

  // Write data to emailAddress
  $mail = new PHPMailer();
  $mail-
  >addAddress('fabulousdavid3@outlook.com');
  $mail->Body = 'Name: ' . $name . '\nEmail: ' . $email;
  $mail->send()

  // Write data to database or file (if needed)//....


 ?>
