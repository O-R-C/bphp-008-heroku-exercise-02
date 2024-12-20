<?php

declare(strict_types=1);

require_once './getHello.php';
require_once './getLogoutForm.php';

function getAccount(string $message): string
{
  $fnGetHello = 'getHello';
  $fnGetLogoutForm = 'getLogoutForm';


  return <<<HTML
  <div class="account">
    {$fnGetHello($message)}
    {$fnGetLogoutForm()}
  </div>
HTML;
}
