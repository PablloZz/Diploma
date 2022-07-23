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
      <div class="fl_grow cont_resp">
        <h1 style="margin-top: 0;">Персональний кабінет</h1>
        <div class="pd_top20 wd50">
          <a href="../index.php"><img src="../Images/Galintel.png" alt="ГАЛІНТЕЛ" width="150px"></a>
        </div>
      </div>
      <div class="wd50 " id="login_container">
        <div class="bg_white form_design resp_content">
          <form action="../vendor/singin.php" method="post" id="login" class="login">
            <div class="form_message form_message_error"></div>
            <div class="form_section">
              <label for="login" class="fw600">Логін</label>
              <input type="text" autocomplete="off" autofocus id="username" placeholder="Введіть логін" name="login" class="input_section">
              <div class="form_input_error_message"></div>
            </div>
            <div class="form_section">
              <label for="password" class="fw600">Пароль</label>
              <input type="password" autocomplete="off" name="password" id="password" placeholder="Введіть пароль" style="display: block;" class="input_section">
              <div class="form_input_error_message"></div>
            </div>
            <div>
              <p style="margin-top: -15px;">
                <a href="#" class="forgot_pass">Забули пароль?</a>
              </p>
              <button type="submit" class="autorisation_button" value="Submit Form"><b>Вхід</b></button>
            </div>
          </form>
          <hr>
            <p style="margin-top: -8px;">
              <a href="register.php" class="forgot_pass" id="linkCreateAccount">Немає акаунту?</a><br>
              <a href="../admin/textolite.php" class="forgot_pass">Admin panel</a>
            </p>
            <?php
              if ($_SESSION['message']) {
                echo '<p style="border: 1px solid rgb(0, 174, 255); border-radius: 4px; padding: 10px; color: red; text-align: center;"> ' . $_SESSION['message'] . ' </p>';
              }
              unset($_SESSION['message']);
            ?>
        </div>
      </div>
      <div class="wd50 form_hidden" id="create_container">
        <div class="bg_white form_design">
          <form method="POST" action="" id="createAcount" class="createAcount">
            <div class="form_message form_message_error"></div>
            <div class="form_section">
              <label for="signupLogin" class="fw600">Логін</label>
              <input type="text" autocomplete="off" autofocus id="signupLogin" placeholder="Введіть логін" name="signupLogin"
                class="input_section">
              <div class="form_input_error_message"></div>
            </div>
            <div class="form_section">
              <label for="signupPassword" class="fw600">Пароль</label>
              <input type="password" autocomplete="off" id="signupPassword" name="signupPassword" placeholder="Введіть пароль"
                style="display: block;" class="input_section">
              <div class="form_input_error_message"></div>
            </div>
            <div>
              <button type="submit" class="autorisation_button" value="Submit Form"><b>Реєстрація</b></button>
            </div>
          </form>
          <hr>
          <p style="margin-top: -8px;">
            <a href="#" class="forgot_pass" id="linkLogin">Вже є акаунт?</a>
          </p>
        </div>
      </div>
    </div>
    <br>
    <hr style="margin-bottom: 25px;">
    <footer class="row">
      <div class="resp_content">
        <div class="d_flex">
          <div class="fl_grow resp_mg wd_auto txt_center ">
            <h4 style="margin-top: 0;">Проблеми з використанням? Підтримка:
              <br>
              (093)028-96-18
              <br>
              (093)032-53-21
            </h4>
            <p style="font-size: 10px;">2010–2021 "ГАЛІНТЕЛ». Інтернет та телебачення.</p>
          </div>
          <div class="wd_auto fl_grow resp_mg">
            <ul class="txt_center list">
              <li><a href="../index.php">Перейти до сайту</a></li>
              <li><a href="">Підключись до мережі</a></li>
            </ul>
          </div>
          <div class="wd_auto btn_group resp_mg txt_center "  onclick="showList()">
            <button type="button" class="lang_btn">Українська</button>
            <ul class="dropdwn_list" id="show_list">
              <li><a href="../English_Office/indexeng.html" class="list_link">English</a></li>
              <li><a href="index1.php" class="list_link">Українська</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>

<script>
  const form = document.getElementById("createAcount");
  form.addEventListener('submit', registerUser);

  async function registerUser(event) {
    event.preventDefault();
    const username = document.getElementById("signupLogin").value;
    const password = document.getElementById("signupPassword").value;

    const result = await fetch('/api/register', {
      method: 'POST',
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        username,
        password
      })
    }).then((res) => res.json())

    if(result.status === 'ok') {
      alert('Success')
    } else {
      alert(result.error)
    }
  }
</script>
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