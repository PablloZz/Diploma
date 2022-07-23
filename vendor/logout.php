<?php
session_start();
unset($_SESSION['user']);
header('Location: ../static/index1.php');
?>