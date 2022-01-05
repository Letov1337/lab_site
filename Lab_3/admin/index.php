<?php
session_start();

if (empty($_SESSION['user'])) {
?>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive free template 404 for you website">
    <meta name="author" content="BootstrapTema">
    <link rel="icon" href="favicon.ico">
    <title>Ошибка 404</title>
    <!-- Bootstrap CDN CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
	<section id="wrapper" class="container-fluid">
		<div class="error-box">
			<div class="error-body text-center">
				<h1 class="text-danger">404</h1>
				<h3>У вас нет доступа!</h3>
				<p class="text-muted m-t-30 m-b-30">Пройдите процедуру авторизации.</p>
				<a href="https://tagashev-ist32.tk/page/lab3/index.php" class="btn btn-primary" role="button">Главная страница</a>
		</div>
	</section>

<?php
	die;
}

    require_once("../database.php");
    require_once("../models/articles.php"); 
    
    $link = db_connect();

    
		if(isset($_GET['action']))
			$action = $_GET['action'];
		else
			$action = "";


		if($action == "add"){
			if(!empty($_POST)){
				articles_new($link, $id, $_POST['title'], $_POST['date'], $_POST['image'], $_POST['content']);
				header("Location: index.php");
			}
			  include("../views/article_admin.php"); 
		}
		
		else if ($action == "edit"){
			if (!isset($_GET['id']))
				header("Location: index.php");
			$id = (int)$_GET['id'];

			if (!empty($_POST) && $id > 0) {
				articles_edit($link, $id, $_POST['title'], $_POST['date'], $_POST['image'], $_POST['content']);
				header("Location: index.php");
			}

			$article = articles_get($link, $id);
			include("../views/article_admin.php");
		}     
		
	    else if($action == "delete"){
			  $id = $_GET['id'];
			  $article = articles_delete($link, $id);
			  header("Location: index.php");
		   
	    }
		
		else{
			$articles = articles_all($link);
			include("../views/articles_admin.php"); 
		}	
	
?>


<!doctype html>
<html lang='es'>
<head>
	<meta charset="utf-8">
			<link href="../css/bootstrap.min.css" rel="stylesheet">
			<link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
			<link href="../css/sticky-footer-navbar.css" rel="stylesheet">
			<script src="../js/ie-emulation-modes-warning.js"></script>
	<title>Панель администратора</title>
</head>
<body>
<div class="container">
	<div class="row justify-content-start">
		<div class="col-4">
			<h2><?php echo 'Welcome, ' .$_SESSION['user']['name']; ?><br /></h2>
			<h3><a href="logout.php">Выход</a></h3>
		</div>
	</div>
</div>
</body>
</html>