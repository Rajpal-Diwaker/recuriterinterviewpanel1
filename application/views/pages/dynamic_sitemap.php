<?php

$date = date('Y-m-d'); 
$time = date('H:i:s');
$current_date = $date.'T'.$time.'+00:00';
$url = 'https://www.techugo.com/';
header("Content-Type: application/xml; charset=utf-8");
$sitemap = '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL;
$sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;
 			$sitemap .= '<url>'. PHP_EOL;
            $sitemap .= '<loc>'.$url.'</loc>'. PHP_EOL;
            $sitemap .= '<lastmod>'.$current_date.'</lastmod>'. PHP_EOL;
            $sitemap .= '</url>'. PHP_EOL;

foreach($links as $item) { 
$sitemap .= '<url>'. PHP_EOL;
$sitemap .= '<loc>'.$item.'</loc>'. PHP_EOL;
$sitemap .= '<lastmod>'.$current_date.'</lastmod>'. PHP_EOL;
$sitemap .= '</url>'. PHP_EOL;
}

$sitemap .= '</urlset>'. PHP_EOL;
$myfile = fopen($_SERVER['DOCUMENT_ROOT']."/sitemap.xml", "w") or die("Unable to open file!");
fwrite($myfile, $sitemap);
fclose($myfile);
?>