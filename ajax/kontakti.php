<?php
  $to = "kyrogane1@gmail.com";
  $email = $_POST['email'];

  $err = "";
  if(trim($_POST['name']) == "" && trim($_POST['email']) == "" && trim($_POST['message']) == "") {
    $err = "Заповніть усі поля";
  } else if (trim($_POST['name']) == "") {
    $err = "Ім'я не вказано";
  } else if (!((strpos($email, ".") > 0) && (strpos($email, "@") > 0))) {
    $err = "Невірний E-mail";
  }

  if($err != "") {
    echo $err;
    exit;
  }

  $msg = "Сповіщення надіслав(ла) <b>".$_POST['name']."</b>.<br><b>Текст
  сповіщення: </b><br>".$_POST['message']."<br><br>Питання з сайту galinel.com";

  $subject = "=?utf-8?B?".base64_encode("Сповіщення від провайдера Інтернету ГАЛІНТЕЛ")."?=";

  $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

  $success = mail ($to, $subject, $msg, $headers);
  echo $success;
?>