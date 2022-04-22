<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $comment= $_POST['message'];

  $to = "yourEmail@gmail.com";
  $subject = "This is the subject line";

  $txt ="Name = ". $name . "\r\n  Email = "
  . $email . "\r\n Message =" . $message;

$headers = "From: ddasunch@gmail.com" . "\r\n" ."CC: ruwanmuthu92@gmail.com";

if($email != NULL) {
  mail($to, $subject, $txt, $headers);
}

header("Location:file:///E:/Dimuthu/3rd%20year/2nd%20sem/COSC%2032553/Project/Web%20Development%20Project/Home.html");
?>
