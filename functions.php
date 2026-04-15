<?php

/**
 * Responsável por exibir a mensagem na cor de sucesso no console
 */
function printMessageSuccess(string $text): string {
  return "\033[32m{$text}\033[0m" . PHP_EOL;
}

/**
 * Responsável por exibir a mensagem na cor de erro no console
 */
function printMessageError(string $text): string {
  return "\033[31m{$text}\033[0m" . PHP_EOL;
}