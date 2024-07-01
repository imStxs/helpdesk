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
                        <li><a href="archive.php" >Архив</a></li>
                        <li><a href="docx.php" class="active" >Отчеты</a></li>
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
          <!-- ***** Dashboard Start ***** -->
                  <?php 
                  $query = "SELECT count(`status`) FROM `active_ticket` WHERE `status`= 'В работе'";
                  $result = mysqli_query($connection, $query);
                  $ticket = mysqli_fetch_assoc($result);
                  $query1 = "SELECT count(`status`) FROM `active_ticket` WHERE `status`= 'В работе' and `kat`='Проблемы с ПО'";
                  $result1 = mysqli_query($connection, $query1);
                  $ticket1 = mysqli_fetch_assoc($result1);
                  $query2 = "SELECT count(`status`) FROM `active_ticket` WHERE `status`= 'В работе' and `kat`='Поломка'";
                  $result2 = mysqli_query($connection, $query2);
                  $ticket2 = mysqli_fetch_assoc($result2);
                  $query3 = "SELECT count(`status`) FROM `active_ticket` WHERE `status`= 'В работе' and `kat`='Мероприятие'";
                  $result3 = mysqli_query($connection, $query3);
                  $ticket3 = mysqli_fetch_assoc($result3);
                  $query4 = "SELECT count(`status`) FROM `active_ticket` WHERE `status`= 'В работе' and `kat`='Замена картриджа'";
                  $result4 = mysqli_query($connection, $query4);
                  $ticket4 = mysqli_fetch_assoc($result4);
                  ?>
          <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4>Заявки <em>в работе</em>: <?php echo $ticket['count(`status`)'];?></h4>

                      <div class="row">
                        <div class="col-lg-3">
                          <div class="item">
                            <h5><em>По категориям:</em></h5>
                            <h6>-Проблемы с ПО: <?php echo $ticket1['count(`status`)'];?></h6>
                            <h6>-Поломка: <em></em><?php echo $ticket2['count(`status`)'];?></h6>
                            <h6>-Мероприятие: <em></em><?php echo $ticket3['count(`status`)'];?></h6>
                            <h6>-Замена картриджа: <em></em><?php echo $ticket4['count(`status`)'];?></h6>
                         </div>
                        </div>
                      </div>
                      <?php 
                         $query5 = "SELECT count(`status`) FROM `active_ticket` WHERE `status`= 'Выполнена'";
                         $result5 = mysqli_query($connection, $query5);
                         $ticket5 = mysqli_fetch_assoc($result5);
                         $query6 = "SELECT count(`status`) FROM `active_ticket` WHERE `status`= 'Выполнена' and `kat`='Проблемы с ПО'";
                         $result6 = mysqli_query($connection, $query6);
                         $ticket6 = mysqli_fetch_assoc($result6);
                         $query7 = "SELECT count(`status`) FROM `active_ticket` WHERE `status`= 'Выполнена' and `kat`='Поломка'";
                         $result7 = mysqli_query($connection, $query7);
                         $ticket7 = mysqli_fetch_assoc($result7);
                         $query8 = "SELECT count(`status`) FROM `active_ticket` WHERE `status`= 'Выполнена' and `kat`='Мероприятие'";
                         $result8 = mysqli_query($connection, $query8);
                         $ticket8 = mysqli_fetch_assoc($result8);
                         $query9 = "SELECT count(`status`) FROM `active_ticket` WHERE `status`= 'Выполнена' and `kat`='Замена картриджа'";
                         $result9 = mysqli_query($connection, $query9);
                         $ticket9 = mysqli_fetch_assoc($result9);
                  ?>
              <div class="col-lg-6">
                <div class="item">
                <h4><em>Выполненые</em> заявки: <?php echo $ticket5['count(`status`)'];?></h4>
                <h5><em>По категориям:</em></h5>
                <h6>-Проблемы с ПО: <em></em><?php echo $ticket6['count(`status`)'];?></h6>
                <h6>-Поломка: <em></em><?php echo $ticket7['count(`status`)'];?></h6>
                <h6>-Мероприятие: <em></em><?php echo $ticket8['count(`status`)'];?></h6>
                <h6>-Замена картриджа: <em></em><?php echo $ticket9['count(`status`)'];?></h6>
                </div>
              </div>
            </div>
              
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
