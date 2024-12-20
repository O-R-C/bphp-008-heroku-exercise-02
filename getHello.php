<?php

declare(strict_types=1);

function getHello(string $message): string
{
  return <<<HTML
  <p class="hello">Привет, <span class="name">{$message}!</span></p>
  HTML;
}
