<?php

require __DIR__ . "/vendor/autoload.php";

use App\SearchEngine;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client       = new Client(['base_uri' => 'https://books.toscrape.com/']);
$crawler      = new Crawler();
$searchEngine = new SearchEngine($client, $crawler);
$items        = $searchEngine->getHTMLItems('.product_pod h3 a');

// EXIBE OS ITEMS QUE VEIO DO HTML
foreach($items as $key => $item) {
  echo $item . PHP_EOL;
}