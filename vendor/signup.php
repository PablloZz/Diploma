<?php
  session_start();
  require_once 'connect.php';

  $full_name = $_POST['full_name'];
  $login = $_POST['login'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_confirm = $_POST['password_confirm'];

  if ($password === $password_confirm) {

    $password = md5($password);

    $result = $connect->query("SELECT id FROM users WHERE email = '$email'");

    if($result->num_rows == 0) {
      mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`) VALUES (NULL, '$full_name', '$login', '$email', '$password')");
    } else {
      $_SESSION['message'] = 'Така пошта вже існує';
      header('Location: ../static/index1.php');
      $mysqli->close();
    }

    $_SESSION['message'] = 'Реєстрація успішна!';
    header('Location: ../static/index1.php');
  } else {
    $_SESSION['message'] = 'Паролі не збігаються';
  header('Location: ../static/register.php');
  }

?>