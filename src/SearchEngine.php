<?php

namespace App;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class SearchEngine {
  public function __construct(
    private ClientInterface $client,
    private Crawler $crawler
  ) {}

  /**
   * Responsável por pegar os elementos do HTML e retornar em um array
   */
  public function getHTMLItems($selector, $url = ''): array {
    $response = $this->client->request('GET', $url);
    $html     = $response->getBody();
    $items    = [];

    // Adiciona o HTML
    $this->crawler->addHtmlContent($html);
    $itemsFiltered = $this->crawler->filter($selector);

    foreach($itemsFiltered as $item) {
      $items[] = $item->textContent;
    }

    return $items;
  }
}