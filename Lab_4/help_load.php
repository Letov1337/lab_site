<?php
 set_time_limit(60);
 require_once 'crawler.php';
    $results = $c->crawl_page($text);
    foreach ($results as $item) {
        $html =  htmlspecialchars($item['content'], ENT_QUOTES | ENT_SUBSTITUTE, 'Windows-1251'); //!!!
    echo PHP_EOL.'<br>'.$item['url'].' <textarea>'.$html.'</textarea>';
 }
?>