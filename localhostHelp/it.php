<?php
session_start();
$connection = mysqli_connect('127.0.0.1', 'root', '', 'helpdesk');
if ($connection == false) {
    echo 'Не удалось подключиться к базе данных!<br>';
    exit();
}
    // Add ticket form
    if (isset($_POST['submit'])) {
      $title = $_POST['title'];
      $description = $_POST['description'];
      $user = $_SESSION['fio'];
      $category = $_POST['category'];
      $mesto = $_POST['mesto'];
      $data =date("d.m.y");
      $status='В работе';
      // Insert ticket into database
      $sql = "INSERT INTO active_ticket (`userlogin`, `name`, `date/time`, `text`, `status`, `kat`, `mesto` ) VALUES ('$user','$title','$data', '$description','$status','$category','$mesto')";
      $result = $connection->query($sql);
  }
  if (isset($_POST['update'])) {
    $idshnik = $_POST['idshnik'];
    // Insert ticket into database
    $sql = "UPDATE `active_ticket` SET `status`='Выполнена' WHERE `id`=".$idshnik."";
    $result = $connection->query($sql);
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
                        <li><a href="it.php" class="active">Главная</a></li>
                        <li><a href="archive.php" >Архив</a></li>
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
          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Оставте</em> заявку</h4>
                </div>
                 <div class="row">
                 <div class="col-md-6 md-3">
                    <form action="" method="post">
                      <div class="form-group">
                        <h4>Категория:</h4>
                          <select id="category" name="category" class="form-control" required>
                              <option value="Мероприятие">Мероприятие</option>
                              <option value="Задача от Босса">Задачи от руководства</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <h4>Заголовок:</h4>
                            <input type="text" id="title" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <h4>Описание:</h4>
                            <textarea id="description" name="description" class="form-control" required></textarea>
                        </div>                       
                        <div class="form-group">
                          <h4>Кабинет:</h4>
                            <input type="text" id="mesto" name="mesto" class="form-control" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Создать заявку</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Add ticket End ***** -->

          <!-- ***** Dashboard Start ***** -->
          <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Ваши</em> заявки</h4>
              </div>
              <?php 
                  $query = "SELECT * FROM active_ticket WHERE status = 'В работе'";
                  $result = mysqli_query($connection, $query);
                  while ($ticket = mysqli_fetch_assoc($result)) 
                  {
                  echo' 
                  <div class="item">
                  <form action="" method="post">
                    <div class="form-group">

                            <input type="hidden" id="idshnik" name="idshnik" class="form-control" value='.$ticket['id'].'>
                        </div>                       
                  <ul>
                  <li><h4>Пользователь</h4><span>'.$ticket['userlogin'].'</span></li>
                  <li><h4>Категория</h4><span>'.$ticket['kat'].'</span></li>
                  <li><h4>Описание</h4><span>'.$ticket['text'].'</span></li>
                  <li><h4>Дата добавления</h4><span>'.$ticket['date/time'].'</span></li>
                  <li><h4>Кабинет</h4><span>'.$ticket['mesto'].'</span></li>
                  <li><div class="main-border-button border-active"><button type="submit" name="update" class="btn btn-primary">'.$ticket['status'].'</button></div></li>
                  </ul>
                  </form>
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
