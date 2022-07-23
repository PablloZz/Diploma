<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
  session_start();

  if ($_SESSION['user']) {
    header('Location: profile.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/all.css">
  <link rel="stylesheet" href="../main1.css">
  <title>Персональний кабінет</title>
  <link rel="icon" href="../Images/Galintel.png">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="fl_grow">
        <h1 style="margin-top: 0;">Персональний кабінет</h1>
        <div class="pd_top20 wd50">
          <a href="../index.php"><img src="../Images/Galintel.png" alt="ГАЛІНТЕЛ" width="150px"></a>
        </div>
      </div>
      <div class="wd50" id="login_container">
        <div class="bg_white form_design">
          <form action="../vendor/signup.php" method="POST" id="login" class="login">
            <div class="form_message form_message_error"></div>
            <div class="form_section">
              <label for="full_name" class="fw600">Введіть Ваше Ім'я</label>
              <input type="text" autocomplete="off" autofocus id="name" placeholder="Введіть Ім'я" name="full_name" class="input_section">
              <div class="form_input_error_message"></div>
            </div>
            <div class="form_section">
              <label for="login" class="fw600">Логін</label>
              <input type="text" autocomplete="off" autofocus id="username" placeholder="Введіть логін" name="login" class="input_section">
              <div class="form_input_error_message"></div>
            </div>
            <div class="form_section">
              <label for="email" class="fw600">Пошта</label>
              <input type="text" autocomplete="off" autofocus id="email" placeholder="Введіть email" name="email" class="input_section">
              <div class="form_input_error_message"></div>
            </div>
            <div class="form_section">
              <label for="password" class="fw600">Пароль</label>
              <input type="password" autocomplete="off" name="password" id="password" placeholder="Пароль" style="display: block;" class="input_section">
              <div class="form_input_error_message"></div>
            </div>
            <div class="form_section">
              <label for="password_confirm" class="fw600">Підтвердіть пароль</label>
              <input type="password" autocomplete="off" name="password_confirm" id="confirmPassword" placeholder="Підтвердіть пароль" style="display: block;" class="input_section">
              <div class="form_input_error_message"></div>
            </div>
            <div>
              <button type="submit" class="autorisation_button" value="Submit Form"><b>Вхід</b></button>
            </div>
          </form>
          <hr>
            <p style="margin-top: -8px;">
              <a href="index1.php" class="forgot_pass" id="linkCreateAccount">Вже є акаунт?</a>
            </p>
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
      </div>
    </footer>
  </div>

<script>
  function showList() {
    let x = document.getElementById("show_list");
    if(x.style.display = "none") {
      x.style.display = "block";
    }
  }
</script>

<script>

</script>

<!-- <script src="../src/main.js"></script> -->
</body>
</html>