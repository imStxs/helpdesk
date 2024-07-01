<?php
session_start();
$connection = mysqli_connect('127.0.0.1', 'root', '','helpdesk');
if( $connection == false )
{
echo 'Не удалось подключиться к базе данных!<br>';
exit();
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>МГИМО Helpdesk</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <link rel='stylesheet prefetch' href='css/bootstrap.min.css'>
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
	<header>
		<h1>
			<a href="#">
				<img src="img/logo-1.png" alt="Логотип МГИМО">
			</a>
		</h1>
	</header>
	<h2 class="text-center">МГИМО Helpdesk</h2>
	<h3 class="text-center">Вход</h3>
	<form class="registration-form" action='/buffer.php' method="GEt" required>
		<label>
			<span class="label-text">Логин/email</span>
			<input type="text" name="loginname"  id="loginname" required >
		</label>
		<label class="password">
			<span class="label-text">Пароль</span>
			<button class="toggle-visibility" title="toggle password visibility" tabindex="-1" >
			</button>
			<input type="password" name="password" require id="password" required>
		</label>
			<div class="text-center">
			<button class="submit">Войти</button>
		</div>
	</form>
</div>
</body>
</html>
