<?php
function crawl_page($url, &$level)
{
    $level -= 1;
    $OrigHost = parse_url($url, PHP_URL_HOST);
    static $seen = array();
    if(isset($seen[$url])) {
        return false;
    } elseif ($level < 0) {
        return false;
    }
    $charset = "windows-1251";
    $seen[$url] = true;
 
    $dom = new DOMDocument('1.0');
    if(@$dom->loadHTMLFile($url)) {
        //
        $allTitle = $dom->getElementsByTagName("title");
        $CurrentTitle = $allTitle->length ? $allTitle->item(0)->nodeValue : '';
        $path = trim(parse_url($url, PHP_URL_PATH), '/');
        $OrigHost = parse_url($url, PHP_URL_HOST);
        //
        echo '<br>', PHP_EOL;
        echo '=======================================================', PHP_EOL;
        echo '<br>', PHP_EOL;
        echo 'Site: ', $url, '<br>', PHP_EOL;
        echo 'Title: ', $CurrentTitle, '<br>', PHP_EOL;
        echo 'Level: ', count(explode('/', $path)),'', PHP_EOL;
        echo '<br>', PHP_EOL;
        echo '=======================================================', PHP_EOL;
        //echo 'Level: ', $level '<br>', PHP_EOL;
        foreach ($dom->getElementsByTagName('a') as $element) {
            if(($href = trim($element->getAttribute('href'))) && ($href <> '#') && ($href <> '/')) {
                if($href[0]=='/') {
                    $ParseURL = parse_url($url);
                    $scheme   = isset($ParseURL['scheme']) ? $ParseURL['scheme'] . '://' : '';
                    $host     = isset($ParseURL['host']) ? $ParseURL['host'] : '';
                    $href     = $scheme.$host.$href;
                }
                if($OrigHost <> parse_url($href, PHP_URL_HOST))
                    continue;

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