<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/all.css">
  <link rel="stylesheet" href="../css/payment.css">
  <title>Персональний кабінет</title>
  <link rel="icon" href="../Images/Galintel.png">
</head>
<body>
<!--Navbar-->
<header class="main_container bg_grey container_pad container_mar">
  <div class="navbar_content resp_content">
    <div class="col" style="display: flex; align-items: center;">
      <a href="javascript:void(0)" class="bar" onclick="showList()"><i class="fa-solid fa-bars"></i></a>
      <a href="../index.php"><img src="../Images/Galintel.png" alt="ГАЛІНТЕЛ" width="60px" title="ГАЛІНТЕЛ"></a>
    </div>
    <div class="content_around">
      <ul class="list list_resp">
        <li class="list_inline">
          <button class="dropdown_btn"><strong>Компанія <i class="fa-solid fa-caret-down"></i></strong></button> 
          <ul class="list dropdown_list">
            <li><a href="../Company/actions.html">Акції</a></li>
            <li><a href="../Company/news.html">Новини</a></li>
          </ul>
        </li>
        <li class="list_inline">
          <button class="dropdown_btn"><strong>Інтернет <i class="fa-solid fa-caret-down"></i></strong></button>
          <ul class="list dropdown_list">
            <li><a href="../Internet/traffic.html">Тарифи</a></li>
            <li><a href="../Internet/Acces Technology/acstech.html">Технології доступу</a></li>
            <li><a href="">Налаштування обладнання</a></li>
            <li><a href="">Завантаженість каналів</a></li>
          </ul>
        </li>
        <li class="list_inline">
          <button class="dropdown_btn"><strong>Абонентам <i class="fa-solid fa-caret-down"></i></strong></button>
          <ul class="list dropdown_list">
            <li><a href="../Consumer/payment.html">Способи оплати</a></li>
            <li><a href="../Frequently Questions/freqqes.html">Часті питання</a></li>
            <li><a href="">Посібник абонента</a></li>
          </ul>
        </li>
        <li class="list_inline" onclick="showFunction()" style="cursor: pointer;"><strong>Центр обслуговування</strong></li>
      </ul>
    </div>
    <div class="list_resp">
      <a href=""><i class="fab fa-facebook fa-2x"></i></a>
    </div>
    <!--Response-->
    <div class="content_around w100 hide_list" id="navHidden">
      <ul class="list resp_list">
        <li class="list_block">
          <button class="dropdown_btn"><strong>Компанія <i class="fa-solid fa-caret-down"></i></strong></button>
          <ul class="list dropdown_list show">
            <li><a href="../Company/actions.html">Акції</a></li>
            <li><a href="../Company/news.html">Новини</a></li>
          </ul>
        </li>
        <li class="list_block">
          <button class="dropdown_btn"><strong>Інтернет <i class="fa-solid fa-caret-down"></i></strong></button>
          <ul class="list dropdown_list show">
            <li><a href="../Internet/traffic.html">Тарифи</a></li>
            <li><a href="../Acces Technology/acstech.html">Технології доступу</a></li>
            <li><a href="">Налаштування обладнання</a></li>
            <li><a href="">Завантаженість каналів</a></li>
          </ul>
        </li>
        <li class="list_block">
          <button class="dropdown_btn"><strong>Абонентам <i class="fa-solid fa-caret-down"></i></strong></button>
          <ul class="list dropdown_list show">
            <li><a href="../Consumer/payment.html">Способи оплати</a></li>
            <li><a href="../Frequently Questions/freqqes.html">Часті питання</a></li>
            <li><a href="">Посібник абонента</a></li>
          </ul>
        </li>
        <li class="list_block"><button><strong>Центр обслуговування</strong></button></li>
      </ul>
    </div>
    <div class="profile_resp" style="float: right;">
      <a href=""><i class="fab fa-facebook fa-2x"></i></a>
      <a href="../static/index1.php"><i class="fa-solid fa-user" style="font-size: 30px; margin-left: 15px;"></i></a>
    </div>
    <!--End response-->
  </div>
</header>

<section class="services">
  <div class="services_container">
    <div class="row">
      <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="" class="card_img_top" alt="Card">
      </div>
      <div class="card_body">
        <h4 class="card_title"></h4>
        <p class="card_text"></p>
        <a href="#" class="btn btn_primary buy"></a>
      </div>
    </div>
  </div>
</section>
<script>
const year = new Date();
document.getElementById("current_year").innerHTML = "©" + " " + year.getFullYear() + " ГАЛІНТЕЛ";
</script>
<script>
let dropdown = document.getElementsByClassName("dropdown_btn");

for (let i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function () {
    var dropdownContent = this.nextElementSibling;
    if (!dropdownContent.classList.contains("show")) {
      dropdownContent.classList.add("show");
    } else {
      dropdownContent.classList.remove("show");
    }
    
  });
}
</script>

<script>
  function showList() {
    let x = document.getElementById("navHidden");
    if (x.className.indexOf("hide_list") == -1) {
      x.className += "hide_list";
    } else {
      x.className = x.className.replace("hide_list", "");
    }
  }
</script>
</body>
</html>