<?php

declare(strict_types=1);

require_once './getHello.php';

function showHelloPage(string $message): void
{
  echo getPage('Аккаунт', getHello($message));
}
