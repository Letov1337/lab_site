<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
			<title>Bastep's</title>
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
			<link href="css/sticky-footer-navbar.css" rel="stylesheet">
			<script src="js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<div class="container">
		<h1>Лабораторная работа №3</h1>
		<div>
		<form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
		<table class="table">
		  <thead>
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">Название</th>
			  <th scope="col">Дата</th>
			  <th scope="col">URL картинки</th>
			  <th scope="col">Содержание</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <th scope="row">1</th>
                <td><input type = "text" name = "title"  value="<?=$article['title']?>" class = "form-control" autofocus required></td>
                <td><input type = "date" name = "date"  value="<?=$article['date']?>" class = "form-control" required></td>
                <td><input type = "text" name = "image"  value="<?=$article['image']?>" class = "form-control" required></td>
                <td><textarea class "form-control"  name = "content" required><?=$article['content']?></textarea></td>
            </tr>
		  </tbody>
		</table>
			<input type="submit" value="Сохранить" class="btn">
		</form>	
		</div>
		<footer class="footer">
		  <div class="container">
			<p class="text-muted">Тагашев Иван | УлГТУ | 2О21 г.</p>
		  </div>
		</footer>	
	</div>	
</body>
</html>
