<?php
session_start();
$users = require_once 'users.php';
	$errors = [];
	if (!empty($_POST['login']) && !empty($_POST['password'])) 
	{
		foreach ($users as $user)
		{
			if ($user['login'] == $_POST['login'] && $_POST['password'] == $user['password']) 
			{
				$_SESSION['user'] = $user;
				header('Location: index.php');
				die;
			}
		}
		$errors[] = 'Неверный логин или пароль';
	}
?>

<!doctype html>
<html lang='es'>
<head>
	<meta charset="UTF-8">
	<title>Вход</title>
	<meta charset="utf-8">
			<link href="../css/bootstrap.min.css" rel="stylesheet">
			<link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
			<link href="../css/sticky-footer-navbar.css" rel="stylesheet">
			<script src="../js/ie-emulation-modes-warning.js"></script>
</head>
<body>
<ul>
<?php foreach ($errors as $error): ?>
	<li><?= $error ?></li>
<?php endforeach; ?>
</ul>
<center>
<h2>Авторизация</h2>
<h3>Стучите громко, код сырой!</h3>
<div class="container">
  <div class="row">
    <div class=".col-6 .col-md-4">
      <form method="POST">
	  <div class="form-group">
		<label for="login">Логин</label>
		<input type="text" class="form-control" id="login" aria-describedby="emailHelp" name=" login" placeholder="Enter login">
	  </div>
	  <div class="form-group">
		<label for="password">Пароль</label>
		<input type="password" class="form-control" id="password" name="password" placeholder="Password">
	  </div>
	  <div class="form-check">
		<input type="checkbox" class="form-check-input" id="exampleCheck1">
		<label class="form-check-label" for="exampleCheck1">Сохранить пароль</label>
	  </div>
	  <button type="submit" class="btn btn-primary">Войти</button>
	</form><br />
	<a href="https://tagashev-ist32.tk/page/lab3/" class="btn btn-primary" role="button">Главная страница</a>
    </div>
	</center>
  </div>
</div>
</body>
</html>