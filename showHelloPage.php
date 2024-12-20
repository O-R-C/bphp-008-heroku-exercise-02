<?php

declare(strict_types=1);

require_once './getAccount.php';

function showHelloPage(string $message): void
{
  echo getPage('Аккаунт', getAccount($message));
}
