<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
  session_start();

  if (!$_SESSION['user']) {
    header('Location: index1.php');
  }
?>
<?php require_once '../inc/function.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/all.css">
  <link rel="stylesheet" href="../main1.css">
  <link rel="stylesheet" href="../css/main.css">
  <title>Персональний кабінет</title>
  <link rel="icon" href="../Images/Galintel.png">
</head>
<body>
  <div class="container">
    <header class="logo">
      <div>
        <div>
          <div>
            <div>
              <img src="../Images/Galintel.png" alt="" style="float: right;" width="100px">
            </div>
          </div>
        </div>
      </div>
    </header>
    <br><hr style="color: darkgrey">
  
    <div class="row">
      <div style="width: 100%;" id="login_container">
          <div class="form_design" style="border: none">
          <div class="row">
            <div style="flex-grow: 2;">
              <div>
                <div id="show">Мої контактні дані</div>
                <div style="flex-grow: 1;">
                  <form action="../vendor/singin.php" method="post" id="login" class="login">
                    <div style="display: flex;">
                      <p style="flex-grow: 1;"><span style="margin-right: 20px">Ваш нікнейм: </span></p>
                      <p><?= $_SESSION['user']['full_name'] ?></p>
                    </div>
                    <div style="display: flex;">
                      <p style="flex-grow: 1;"><span style="margin-right: 20px">Пошта: </span></p>
                      <a href="mailto:<?= $_SESSION['user']['email'] ?>"><?= $_SESSION['user']['email'] ?></a>
                    </div>
                  </form>
                </div>
                <!-- <div class="row">
                  <p style="flex-grow: 1;">Оплата послуг</p>
                  <p id="buy-now"></p>
                </div> -->
                <div style="display: flex;">
                  <p style="flex-grow: 2;" class="show_ifr">Оплата послуг:</p>
                  <!-- <p id="buy-now"></p> -->
                </div>
                  <div class="resp_content rows" style="margin-right: -10px;">
                    <div class="rows">
                      <div class="wd_15 bg_pink ">
                        <a href="#" class="arrow_span buy" data-price="130" data-product="Швидкість 50"></a>
                      </div>
                      <div class="content_item pad_mar_item bg_blue" style="flex: 33%;">
                        Інтернет 50<br>до 50 Мбіт/с 130грн
                      </div>
                    </div>
                    <div class="rows">
                      <div class="m_left wd_15 bg_pink">
                        <a href="#" class="arrow_span buy" data-price="180" data-product="Швидкість 100"></a>
                      </div>
                      <div class="content_item pad_mar_item bg_blue" style="flex: 33%;">
                        Інтернет 100<br>до 100 Мбіт/с 180грн
                      </div>
                    </div>
                    <div class="rows">
                      <div class="m_left wd_15 bg_pink">
                        <a href="#" class="arrow_span buy" data-price="220" data-product="Швидкість 200"></a>
                      </div>
                      <div class="content_item pad_mar_item bg_blue" style="flex: 33%;">
                        Інтернет 200<br>до 200 Мбіт/с 220грн
                      </div>
                    </div>
                  </div>
                <form action="address.php" method="post">
                  <p>Адреса: </p>
                    <p>Місто: </p>
                    <input type="text" name="town" id="town" class="input_section" placeholder="Введіть місто проживання" style="width: 50%;">
                    <p>Вулиця:</p>
                    <input type="text" name="street" id="street" class="input_section" placeholder="Введіть вулицю" style="width: 50%;">
                    <p>Будинок:</p>
                    <input type="text" name="house" id="house" class="input_section" placeholder="Введіть будинок" style="width: 50%;">
                    <p>Квартира</p>
                    <input type="text" name="flat" id="flat" class="input_section" placeholder="Введіть квартиру" style="width: 50%;"><br><br>
                    <button type="submit" class="logout" style="border: none; color: white; cursor: pointer;">Підтвердити</button>
                </form><br>
                <div>
                  <a href="support.php">Поставити запитання</a>
                </div>
              </div>
            </div>
          </div>
            <?php
              if ($_SESSION['message']) {
                echo '<p style="border: 1px solid rgb(0, 174, 255); border-radius: 4px; padding: 10px; color: red; text-align: center;"> ' . $_SESSION['message'] . ' </p>';
              }
              unset($_SESSION['message']);
?>
        </div>
      </div>
    </div>
    <br>
    <hr style="margin-bottom: 25px;">
    <footer class="row">
      <div class="fl_grow">
        <h4 style="margin-top: 0;">Проблеми з використанням? Підтримка:
          <br>
          (093)028-96-18
          <br>
          (093)032-53-21
        </h4>
        <p style="font-size: 10px;">2010–2021 "ГАЛІНТЕЛ». Інтернет та телебачення.</p>
      </div>
      <div class="fl_grow">
        <ul class="list">
          <li><a href="../index.php">Перейти до сайту</a></li>
          <li><a href="">Підключись до мережі</a></li>
        </ul>
      </div>
      <div class="btn_group"  onclick="showList()">
        <button type="button" class="lang_btn">Українська</button>
        <ul class="dropdwn_list" id="show_list">
          <li><a href="../English_Office/indexeng.html" class="list_link">English</a></li>
          <li><a href="index1.php" class="list_link">Українська</a></li>
        </ul>
      </div><br>
    </footer>      
    <p class="logout">
      <a href="../vendor/logout.php" style="color: white;"><i class="fa-solid fa-right-from-bracket" style="margin-right: 10px;"></i>Вихід</a>
    </p>
  </div>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Оплата послуги</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="buy">
        <form class="row g-3" method="post">
          <div class="col-md-4">
            <label for="name" class="form-label">Ваше Ім'я</label>
            <input type="name" name="name" required placeholder="Ваше Ім'я" class="form-control" id="name" value="" required>
          </div>
          <div class="col-md-4 buy">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" required placeholder="Ваш E-mail" class="form-control" id="email" value="" required>
          </div>
          <div class="col-md-4">
            <label for="product" class="form-label">Тип послуги</label>
            <input type="text" name="product" readonly class="form-control" id="product">
          </div>
          <div class="col-md-4 buy">
            <label for="price" class="form-label">Ціна</label>
            <input type="text" name="price" readonly class="form-control" id="price">
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Замовити</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- <script>
  function showList() {
    let x = document.getElementById("show_list");
    if(x.style.display = "none") {
      x.style.display = "block";
    }
  }
</script> -->

<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
<!-- <script src="../js/shop.js"></script> -->
<!-- <script src="../js/index.js"></script> -->

<!-- <script async 
  src="https://pay.google.com/gp/p/js/pay.js"
  onload="onGooglePayLoaded()">
</script> -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../js/payment.js"></script>
</body>
</html>