<?php
session_start();
$connection = mysqli_connect('127.0.0.1', 'root', '', 'helpdesk');
if ($connection == false) {
    echo 'Не удалось подключиться к базе данных!<br>';
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>МГИМО-Helpdesk</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/create.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>
<body>
  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="it.php" class="logo">
                        <img src="assets/images/logo1.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="it.php">Главная</a></li>
                        <li><a href="archive.php" class="active">Архив</a></li>
                        <li><a href="docx.php" >Отчеты</a></li>
                        <li><a href="buffer_exit.php">Выйти<img src="assets/images/profile-header.jpg" alt=""></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Добро пожаловать в Helpdesk систему МГИМО</h6>
                  <h4>Оставляйте <em>заявки</em> в нашей системе и они будут выполнены в скорое время</h4>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->
          <!-- ***** Add ticket start ***** -->
          <!-- ***** Add ticket End ***** -->

          <!-- ***** Dashboard Start ***** -->
          <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Выполненые</em> заявки</h4>
              </div>
              <?php 
                  $query = "SELECT * FROM active_ticket WHERE status = 'Выполнена'";
                  $result = mysqli_query($connection, $query);
                  while ($ticket = mysqli_fetch_assoc($result)) 
                  {
                  echo' 
                  <div class="item">
                  <ul>
                  <li><h4>Пользователь</h4><span>'.$ticket['userlogin'].'</span></li>
                  <li><h4>Категория</h4><span>'.$ticket['kat'].'</span></li>
                  <li><h4>Описание</h4><span>'.$ticket['text'].'</span></li>
                  <li><h4>Дата добавления</h4><span>'.$ticket['date/time'].'</span></li>
                  <li><h4>Кабинет</h4><span>'.$ticket['mesto'].'</span></li>
                  
                  <li><div class="main-border-button border-active"><a href="#">'.$ticket['status'].'</a></div></li>
                  </ul>
                  </div>';
                  }
                  ?>
          <!-- ***** DashBoard End ***** -->
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p><a href="#">МГИМО Одинцово</a> 2024 
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
  </body>
</html>
