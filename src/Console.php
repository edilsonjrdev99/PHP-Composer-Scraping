<?php

namespace App;

class Console {
  /**
   * Altera a cor do texto do terminal para verde
   */
  public static function green(string $text) {
    return "\033[32m{$text}\033[0m";
  }

  /**
   * Altera a cor do texto do terminal para vermelho
   */
  public static function red($text) {
    return "\033[31m{$text}\033[0m";
  }
}