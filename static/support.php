<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/all.css">
  <link rel="stylesheet" href="../css/main.css">
  <title>ГАЛІНТЕЛ - Провайдер Інтернету</title>
  <link rel="icon" href="../Images/Galintel.png">
</head>

<body style="background-color: #ccc;">

<!--Support window-->
<div id="supportModal" class="support_modal" style="display: block;">
  <form class="support_card" id="mailForm">
    <header class="txt_center pd32" style="position: relative;">
      <span onclick="document.getElementById('supportModal').style.display='none'" 
        class="close_support">×</span>
      <h1><i class="fa-solid fa-circle-question"></i> Support</h1>
    </header>
    <div class="supp_input_container">
      <input class="supp_input _req" type="text" id="name" name="name" placeholder="Введіть Ім'я">
      <input class="supp_input _req _email" type="email" id="email" name="email" placeholder="Email">
      <input class="supp_input _req _email" type="phone" id="phone" name="phone" placeholder="Телефон">
      <textarea class="supp_input _req" id="message" name="message" rows="4" placeholder="Чим вам допомогти?"></textarea>
      <button type="button" class="supp_input" id="sendMail">Надіслати</button>
    </div>
  <div id="errorMess" style="color: red; text-align: center; margin-bottom: 10px"></div>
  </form>
  
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/formMail.js"></script>
</body>
</html>