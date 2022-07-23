<?php
  session_start();
  require_once '../vendor/connect.php';

  $town = $_POST['town'];
  $street = $_POST['street'];
  $house = $_POST['house'];
  $flat = $_POST['flat'];

  mysqli_query($connect, "INSERT INTO `address` (`id`, `town`, `street`, `house`, `flat`) VALUES (NULL, '$town', '$street', '$house', '$flat')");

  $_SESSION['message'] = 'Успішно!';
  header('Location: profile.php');
?>


