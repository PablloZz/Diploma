<?php
  $email = $_POST['email'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $subject = "=?utf-8?B?".base64_encode("Сповіщення з сайту")."?=";
  $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

  $success = mail("kyrogane1@gmail.com", $subject, $message, $headers);
  echo $success;
?>