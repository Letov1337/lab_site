<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Bastep's</title>
			<link href="../css/bootstrap.min.css" rel="stylesheet">
			<link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
			<link href="../css/sticky-footer-navbar.css" rel="stylesheet">
			<script src="../js/ie-emulation-modes-warning.js"></script>
			<link href="/navbar-fixed-top.css" rel="stylesheet">
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
			<div>				
				<a class="btn btn-primary" href="index.php?action=add" >Добавить статью</a>
				<span style="float: right"><a class="btn btn-primary" href="https://tagashev-ist32.tk/page/lab3/index.php">Вернуться на главную</a></span>
					<table class="table">
						<thead>
						<tr>
							  <th scope="col">Дата</th>
							  <th scope="col">Название</th>
							  <th scope="col">Действия</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
       <?php foreach($articles as $a): ?>
								<td><?=$a['date']?></td>
								<td><?=$a['title']?></td>
								<td><a class="btn btn-primary" href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a></td>
								<td><a class="btn btn-primary" href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a></td>
							</tr>
						<?php endforeach ?>
     </tbody>
					</table>		
				</table>								
			</div>
			<footer class="footer">
			  <div class="container">
				<p class="text-muted">Тагашев Иван | УлГТУ | 2О21 г.</p>
			  </div>
			</footer>
		</div>
	</body>
	
</html>
