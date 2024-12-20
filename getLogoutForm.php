<?php

declare(strict_types=1);

function getLogoutForm(): string
{
  return <<<HTML
  <form action="exit.php" method="post" class="form-logout">
    <button type="submit">Выйти</button>
  </form>
  HTML;
}
