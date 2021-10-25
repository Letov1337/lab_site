<link href="css/bootstrap.min.css" rel="stylesheet">
					<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
					<link href="css/sticky-footer-navbar.css" rel="stylesheet">
					<link href="css/navbar-fixed-top.css" rel="stylesheet">
					<script src="js/ie-emulation-modes-warning.js"></script>
					<script src="js/js.js"></script>
<style>
	td{max-width:67%;}
</style>
<div class="container">
<table id="table-id" class="table table-bordered">
  <thead>
    <tr>
		<th scope="col">Уровень</th>
		<th scope="col">Полученные URL</th>
		<th scope="col">Заголовок страницы</th>
    </tr>
  </thead>

<?php
function crawl_page($url, &$level)
{
    $OrigHost = parse_url($url, PHP_URL_HOST);
    
    $level -= 1;
    
    static $seen = array();
    if(isset($seen[$url])) {
        return false;
    } elseif ($level < 0) {
        return false;
    }
 
    $seen[$url] = true;
 
    $dom = new DOMDocument('1.0');
    if(@$dom->loadHTMLFile($url)) {
        $allTitle = $dom->getElementsByTagName("title");
        $CurrentTitle = $allTitle->length ? $allTitle->item(0)->nodeValue : '';
			$path = trim(parse_url($url, PHP_URL_PATH), '/');
?>
		<tbody>
				<tr>
				<td width="20"><?php echo '', count(explode('/', $path)),'', PHP_EOL;?></td>
				<td width="350"><?php echo '<strong>Загрузилась:</strong><a href="',$url, '">  ', $url,'</a>', PHP_EOL;?></td>
				<td width="400" align="justify"><?php echo '<strong >Заголовок: </strong>', $CurrentTitle, '', PHP_EOL;?></td>
				</tr>
		</tbody>
<?php
        foreach ($dom->getElementsByTagName('a') as $element) {
            if(($href = trim($element->getAttribute('href'))) && ($href <> '#') && ($href <> '/')) {
                if($href[0]=='/') {
                    $ParseURL = parse_url($url);
                    $scheme   = isset($ParseURL['scheme']) ? $ParseURL['scheme'] . '://' : '';
                    $host     = isset($ParseURL['host']) ? $ParseURL['host'] : '';
                    $href     = $scheme.$host.$href;
                }
                    
                
                if (false !== strpos($href, 'http')) {
                    if(!crawl_page($href, $level)) {
                        $level += 1;
                    }
                    if ($level < 0) {
                        return false;
                    }
 
                    
                }
            }
        }
        return true;
    }
    return false;
}
$level = 50;
$text = $_POST['text'];
crawl_page($text, $level);
?>
</table>
</div>
	
			
 