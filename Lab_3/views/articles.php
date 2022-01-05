<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Bastep's</title>
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
			<link href="css/sticky-footer-navbar.css" rel="stylesheet">
			<link href="css/navbar-fixed-top.css" rel="stylesheet">
			<script src="js/ie-emulation-modes-warning.js"></script>
			<style>
			.rightimg  {
				float: right; /* Выравнивание по правому краю  */ 
				margin: 2px 0 2px 2px; /* Отступы вокруг картинки */
			}
			</style>
	</head>
	<body>
	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bastep's labs</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="https://docs.google.com/document/d/11U-WNAOo7rrAGFUoGMFHG7ru7wg2RonAEESV6N2FXd8/edit">Задания на лабы</a></li>
            <li><a href="#about">О языке PHP</a></li>
            <li><a href="#contact">Обратная связь</a></li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
		<div class="container">
			<h1>Лабораторная работа №3</h1>
			<h3><script>document.write(Date());</script></h3><br />
			<a class="btn btn-primary" href="admin">Панель Администратора</a>
			<a class="btn btn-primary" href="https://tagashev-ist32.tk/page/lab3/admin/login.php">Вход</a>
			<div>
			<?php foreach($articles as $a): ?>
				<div class="article">
					<h3>
					<img width="250" height="150" class="rightimg" src="<?=$a['image']?>" alt="">
						<a href="article.php?id=<?=$a['id']?>">	
						<?=$a['title']?></a>
					</h3>
					<p align="justify"><?=articles_intro($a['content'])?></p>
					<em><strong>Опубликовано: <?=$a['date']?></strong></em>
				</div>
				<?php endforeach ?>		
  <ul class="pagination">
  <li><a href="#">&laquo;</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">&raquo;</a></li>
</ul>
	</div>
			<footer class="footer">
			  <div class="container">
				<p class="text-muted">Тагашев Иван | УлГТУ | 2О21 г.</p>
			  </div>
			</footer>
		</div>
	</body>
	
</html>
