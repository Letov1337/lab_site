<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Bastep's</title>
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
			<link href="css/sticky-footer-navbar.css" rel="stylesheet">
			<script src="js/ie-emulation-modes-warning.js"></script>
			<style>
			.rightimg  {
				float: right; /* Выравнивание по правому краю  */ 
				margin: 7px 0 7px 7px; /* Отступы вокруг картинки */
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
			<li><?php
				echo "Сегодня - ".date("d F Y")."<br>";
				echo "Текущее время - ".date("H:i:s");
			?></li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
		<div class="container">
			<h1>Лабораторная работа №3</h1>
			<div>		
			<div class="article">
					<h3>							
						<?=$article['title']?></a>
					</h3>
					<img width="400" height="300" class="rightimg" src="<?=$article['image']?>" alt="">
					<p align="justify"><?=$article['content']?></p>
					<em><strong>Опубликовано: <?=$article['date']?></strong></em>
					<!-- LikeBtn.com BEGIN -->
					<p><span class="likebtn-wrapper" data-theme="ugreen" data-lang="ru" data-i18n_like="Зашло" data-ef_voting="push" data-white_label="true" data-identifier="item_1"></span>
					<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script></p>
					<!-- LikeBtn.com END -->
				</div>	
				<br />
				<a href="https://tagashev-ist32.tk/page/lab3/index.php" class="btn btn-primary" role="button">Главная страница</a>		
			</div>
        <br>
             
			 <?php
          $comment = comments_get($link, $_GET['id']);
            $comments = comments_all($link, $_GET['id']);
          
           foreach ($comments as $comment): 
       ?>
       
       <div class = "comment">
           <h4><strong><?=$comment['name']?></strong></h4>
          <p><?=$comment['comment']?> </p>
        </div>
        
        <?php endforeach;?>
			 
			 <br />
		<h4>Оставьте комментарий</h4>

        <form method = "post">
			<label>Имя комментатора: </label>
				<input type = "text" name = "name"  value="" class = "form-control" autofocus required>
			<label>Комментарий: </label>
				<br>                
			<textarea class "form-control"   name = "comment" required></textarea>
				<br>
			<input type = "submit" value="Отправить" class = "btn btn-primary">
			<input type="hidden" name="id_article" value=<?= $_REQUEST['id'] ?> />
        </form>
         <br>

      
		<?php
			if($_SERVER['REQUEST_METHOD'] == "POST") {
            comments_new($link, $_POST['name'], $_POST['comment'], $_POST['id_article']);
        }
        ?>
   </div>
			 
         <br>
       
      <footer class="footer">
			  <div class="container">
				<p class="text-muted">Тагашев Иван | УлГТУ | 2О21 г.</p>
			  </div>
			</footer>
		</div>
	</body>
	
</html>
