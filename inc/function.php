<?php
session_start();

$data = [
  'name' => '',
  'email' => '',
  'product' => '',
  'price' => ''
];

if(!empty($_POST)) {
  $data = load($data);
  debug($data);
}

function load($data) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $product = $_POST['product'];
  $price = $_POST['price'];

    if(array_key_exists('name', $data)) {
      require_once '../vendor/connect.php';
      $data['name'] = $name;
    }

    if(array_key_exists('email', $data)) {
      $data['email'] = $email;
    }

    if(array_key_exists('product', $data)) {
      $data['product'] = $product;
    }

    if(array_key_exists('price', $data)) {
      $data['price'] = $price;
      mysqli_query($connect, "INSERT INTO `payment` (`id`, `name`, `email`, `product`, `price`, `data_at`, `status`) VALUES (NULL, '$name', '$email', '$product', '$price', CURRENT_TIMESTAMP, '0')");
    }

  return $data;
}

function debug($data) {
  echo '<pre>' . print_r($data, true) . '</pre>';
}