<?php

declare(strict_types=1);

require_once './getPage.php';
require_once './getFormUserName.php';

function showLoginPage(?string $errorMessage = null): void
{
  echo getPage("Вход", getFormUserName($errorMessage));
}
