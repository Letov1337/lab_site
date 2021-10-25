<html>
 <head>
  <meta charset="utf-8">
  <title>Лабораторная работа №3</title>
  <link rel="stylesheet" href="button.css">
 </head>
	<form method="post" action="index.php" class="center">
        <a> Требуется вставить ссылку на нужный сайт </a>
        <br><br>
        <input type="text" name="text">  <br><br>
        <button type="submit">Старт</button>
    </form>		
</html>	
<?php
 //set_time_limit(60);
 //require_once 'cr_2.php';
 require_once 'crawler.php';
	$results = $c->crawl_page($text);
	foreach ($results as $item) {
		$html =  htmlspecialchars($item['content'], ENT_QUOTES | ENT_SUBSTITUTE, 'Windows-1251'); //!!!
	echo PHP_EOL.'<br>'.$item['url'].' <textarea>'.$html.'</textarea>';
 }
?>